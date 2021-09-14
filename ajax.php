<?php
require __DIR__ . '/lib/autoload.php';
use YandexCheckout\Client;
//Функция для отправки файла в телеграмм
function SendTelFile($file_url,$token,$chatID,$orderNumber) {
    $ch = curl_init($file_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $html = curl_exec($ch);
    curl_close($ch);
    file_put_contents(basename($file_url), $html);
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL =>  'https://api.telegram.org/bot'.$token.'/sendDocument?caption=Вложение к заказу №' . $orderNumber . '&chat_id='.$chatID,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: multipart/form-data'
        ],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => [
            'document' => curl_file_create(basename($file_url), mime_content_type(basename($file_url)), basename($file_url))
        ]
    ]);
    $data = curl_exec($curl);
    curl_close($curl);
}

//Принятие и обработка быстрого заказа
if (isset($_POST['name']) && isset($_POST['number']) && isset($_POST['antispam']) && isset($_POST['fast_order'])) {

	if ($_POST['antispam'] == 'kukold') {
		echo '["true","false"]';

		//Отправка заявки на звонок в телегу
		$botApiToken = ''; //Тут IP токен

		$message_bot = "Быстрый заказ менеджеру.\nИмя: " . $_POST['name'] . "\nКонтактный номер: " . $_POST['number'];

		$data = [
		    'chat_id' => '', //Тут ID вашего канала
		    'text' => $message_bot
		];

		$resp = file_get_contents("https://api.telegram.org/bot{$botApiToken}/sendMessage?" . http_build_query($data) );


	}else{
		echo '["false","false"]';
	}

}else if (isset($_POST['name']) && isset($_POST['number']) && isset($_POST['antispam']) && isset($_POST['main_order'])) {

	if ($_POST['antispam'] == '3eA65ui') {

		//Итоговая цена
		$total_sum = $_POST['product_price'];

		//Подключение Яндекс касса API
	    $client = new Client();
	    $client->setAuth();

	  //Формирование нового номера заказа
		$file 				= 'order_number.json';
		$lines 				= file($file);
		$lastLineContent 	= json_decode($lines[count($lines)-1]);
		$newOrderNumber		= intval($lastLineContent[0]) + 1;

	  //Попытка умного платежа
	    $response = $client->createPayment(
	        array(
	            'amount' => array(
	                'value' => $total_sum,
	                'currency' => 'RUB',
	            ),
	            'confirmation' => array(
	                'type' => 'redirect',
	                'return_url' => 'https://hand-print.ru/return.php',
	            ),
	            'capture' => true,
	            'description' => 'Заказ №'.$newOrderNumber,
	        ),
	        uniqid('', true)
	    );

		//Полученеи URL редиректа
		$confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
		//Получаем ID заказа
		$order_id =  $response->getId();
		//Формируем JSON ответ для AJAX
		$answer_array = ['true',$confirmationUrl];
		$answer_json = json_encode($answer_array);
		echo $answer_json;


		//Отправка данных в телеграм
		$botApiToken = '';

		$message_bot = "Новый заказ №" . $newOrderNumber . "\nИмя: " . $_POST['name'] . "\nКонтактный номер: " . $_POST['number'] . "\nТип одежды: " . $_POST['product_type'];
		//Проверяем на чьей одежде рисуем
		if ($_POST['product_owner'] == 'false') {
			$message_bot .="\nРисуем на одежде заказчика";

			//Формирование строки для записи в файл, если рисуем на его одежде
			$newLastLineContent = '["' . $newOrderNumber . '","' . $order_id . '","' . $_POST['name'] . '","' . $_POST['number'] . '","' . $total_sum . '", "' . $_POST['product_type'] . '","Рисуем на одежде заказчика"]';
		}else{
			$message_bot .="\nРисуем на нашей одежде" . "\nПол: " . $_POST['product_sex'] . "\nРазмер одежды: " . $_POST['product_size'] . "\nЦвет одежды: ". $_POST['product_color'];

			//Формирование строки для записи в файл, если рисуем на нашей одежде
			$newLastLineContent = '["' . $newOrderNumber . '","' . $order_id . '","' . $_POST['name'] . '","' . $_POST['number'] . '","' . $total_sum . '", "' . $_POST['product_type'] . '","Рисуем на нашей одежде","' . $_POST['product_sex'] . '", "' . $_POST['product_size'] . '", "' . $_POST['product_color'] . '"]';
		}


		//Запись данных о новом заказе в order_number.json
		$currentContent 	= file_get_contents($file);
		$currentContent	   .= "\r\n".$newLastLineContent;
		file_put_contents($file, $currentContent);


		//Добавляем оставшиеся данные
		$message_bot .="\nРазмер рисунка: ". $_POST['product_print_size'] . "\nИтоговая цена: " . $_POST['product_price'];

		//Проверяем был ли оставлен комментарий
		if (strlen($_POST['comment']) > 3) {
			$message_bot .="\nКомментарий: ". $_POST['comment'];
		}else{
			$message_bot .="\nКомментарий: Заказчик не оставил комментарий";
		}

		$data = [
		    'chat_id' => '',
		    'text' => $message_bot
		];

		$resp = file_get_contents("https://api.telegram.org/bot{$botApiToken}/sendMessage?" . http_build_query($data) );


		//Проверка наличие прикрепленного файла, его загрузка, отправка и удаление
		if (!empty($_FILES['img']['tmp_name'])){

		    $path = $_FILES['img']['name']; 
		    if (copy($_FILES['img']['tmp_name'], $path)){
		    	$file_url = 'https://hand-print.ru/' . $path;
		    	SendTelFile($file_url,'BOT FATHER TOKEN','ID ЧАТА',$newOrderNumber);
		    	unlink($path);
		    }

	  	}
	}

}else{
	
	echo '["false","false"]';
}

