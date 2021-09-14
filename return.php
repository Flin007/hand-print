<?php
require __DIR__ . '/lib/autoload.php';
use YandexCheckout\Client;
$arr = get_defined_vars();

//Проверяем наличие оплаченного заказа
if (isset($_SERVER["HTTP_REFERER"])) {

	//Получаем уникальный номер оплаченного заказа
	$url = $_SERVER["HTTP_REFERER"];
	$parts = parse_url($url); 
	parse_str($parts['query'], $query); 
	$order_id = $query['orderId'];

	//Ищем наличие номера заказа
	$file = 'order_number.json';
	$lines = file($file);
	$key = in_array($order_id,$lines);

	//Переменная для номера заказа
	$order_number;

	//Переменная для вывода информации пользователю
	$user_answer;

	//Получаем статус платежа
	$client = new Client();
	$client->setAuth('', '-');
	$payment = $client->getPaymentInfo($order_id);

	foreach ($lines as $key => $value) {
		$json = json_decode($value);

		if ($json[1] == $order_id) {
			$order_number = $json[0];

			//Отправляем информацию об успешной оплате заказа
			$botApiToken = ':';
			
			if ($payment->getPaid() == false) {
				$message_bot = "Клиент не оплатил Заказ №" . $order_number;
				$user_answer = "<h1>Ваш Заказ №" . $order_number . " не был оплачен</h1><p>Вернитесь на <a href='" . $url . "'>страницу оплаты для продолжения</a></p>";
			}else{
				$message_bot = "Заказ №" . $order_number . " Успешно оплачен.";
				$user_answer = "<h1>Ваш заказ №" . $order_number . " успешно оплачен</h1><p>В скором времени мы свяжемся с вами, или напишите нашему <a href='https://api.whatsapp.com/send?phone=79257906374'>менеджеру</a></p>";
			}
			$data = [
			    'chat_id' => '-405357990',
			    'text' => $message_bot
			];
			$resp = file_get_contents("https://api.telegram.org/bot{$botApiToken}/sendMessage?" . http_build_query($data) );

			//Выходим из цикла поиска заказов
			break;
		}
	}
}else{
	header('Location: https://hand-print.ru/');
	exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HAND-PRINT Политика Конфиденциальности</title>
	<!-- Normalize.css -->
	<link rel="stylesheet" href="css/reset.css">
	<!-- Шрифт для политики -->
	<link rel="stylesheet" href="css/fonts/montserrat/stylesheet.css" type = "text/css" />
	<!-- favicons-->
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Запрет на обновление страницы дабы избежать спама -->
	<script type="text/javascript">
	    $(window).bind({
	        beforeunload: function(ev) {
	            ev.preventDefault();
	        },
	        unload: function(ev) {
	            ev.preventDefault();
	        }
	    });
	</script>

	<!-- Немного стилей -->
	<style>
		body{
			font-family: Montserrat;
		    font-style: normal;
		    font-weight: normal;
		    background: #ffe9e5;
		}
		.wrapper{
			max-width: 800px;
			margin: 0 auto;
			padding: 30px;
			text-align: center;
		}
		.flex_between{
			display: flex;
			justify-content: space-between;
		}

		h1{
			margin-top: 20px;
			margin-bottom: 20px;
		    font-size: calc(1em + 1vmin);
		    line-height: 26px;
		}
		h3{
			margin: 10px;
			font-weight: bold;
			font-size: calc(0.5em + 1vmin);
		}
		h1,h2,h3{
			text-align: center;
		}
		ol{
			padding-left: 15px;
		}
		li{
			text-align: left;
			margin: 15px;
		}
		b{
			font-weight: bold;
		}
		a{
			text-decoration: none;
		    color: #ff8a71;
		    font-weight: bold;
		    margin-top: 15px;
		    display: inline-block;
		}
		p{
			margin: 10px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<img src="img/logo.png" alt="Hand-Print Ручная роспись одежды">
		<?php echo $user_answer ?>
		<p><a href="https://hand-print.ru/">Вернуться на главную</a></p>
	</div>
</body>
</html>