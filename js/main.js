//Прелоадер
  window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }





$(document).ready(function($) {
	var gl_product_owner,
		gl_product_type,
		gl_product_size,
		gl_product_sex,
		gl_product_color,
		gl_product_print_size,
		gl_product_price;

	//Открытие модалки с быстрым заказом
	$('.fast_order').click(function(event) {
		event.preventDefault();
		$('.fast_order_wrapper').fadeIn('fast');
	});

	//Закрытие модалок
	$('.close_modal').click(function(event) {
		event.preventDefault();
		$(this).parent('.modal').parent('.modal_wrapper').fadeOut('fast');
	});

	$('.modal_wrapper').click(function(event) {
		event.preventDefault();
		if (event.target == this) {
			$(this).fadeOut('fast');
		}
	});

	//Плавный скролл
	$('.flowing_scroll').on( 'click', function(){ 
	    var el = $(this);
	    var dest = el.attr('href'); // получаем направление
	    if(dest !== undefined && dest !== '') { // проверяем существование
	        $('html').animate({ 
	            scrollTop: $(dest).offset().top // прокручиваем страницу к требуемому элементу
	        }, 800 // скорость прокрутки
	        );
	    }
	    return false;
	});

	$('.uniqcode_block').click(function(event) {
		window.open('https://uniqcode.ru/', '_blank');
	});

	//Переключение вкладок
	$('.s_handmade_value__content .headers h2').click(function(event) {
		if ($(this).hasClass('active')) {
			return;
		}else{
			let old_show = $('.s_handmade_value__content .headers .active').data('show');
			let new_show = $(this).data('show');
			$('.s_handmade_value__content .headers .active').removeClass('active');
			$('.s_handmade_value__content .' + old_show).fadeOut('fast');
			$(this).addClass('active');
			$('.s_handmade_value__content .' + new_show).fadeIn('fast');
		}
	});


	//Показ кастомных ошибок
	function showErrors(par_class, err_text){
		$('.' + par_class).children('.custom_error').text(err_text);
		$('.' + par_class).children('.custom_error').fadeIn('fast');
		setTimeout(function(){
			$('.' + par_class).children('.custom_error').fadeOut('fast');
		},3000)
	}


	//Воспроизведение видео по клику на заглушку
	$('.process__video').click(function(event) {
		$('.process__video').removeClass('yt_play');
		$('.process__video').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/AT6oSIDbGkw?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
	});

	if(!$("div").is(".uniqcode_block")){
		$('.s_footer__content').append('<p style="text-align: center; flex-basis: 100%; margin-top: 15px; font-family: Montserrat; font-style: normal; font-weight: normal; font-size: 16px; line-height: 32px; color: #978787;"><a style="text-decoration: none; color: #F4543E" target="_blank" href="http://uniqcode.ru/">UNIQCODE</a></p>')
	}
	



	//Слайдер на первой секции
	const images_src =	[
							'img/w_slider/1.png',
							'img/w_slider/2.png',
							'img/w_slider/3.png',
							'img/w_slider/4.png',
							'img/w_slider/5.png',
							'img/w_slider/6.png',
							'img/w_slider/7.png'
						];
	const text_src =	[
							'Ручная роспись <span>рубашек</span> влагостойкими красками: любой рисунок и идея за 2 дня',
							'Ручная роспись <span>джинсовок</span> влагостойкими красками: любой рисунок и идея за 2 дня',
							'Ручная роспись <span>футболок</span> влагостойкими красками: любой рисунок и идея за 2 дня',
							'Ручная роспись <span>толстовок</span> влагостойкими красками: любой рисунок и идея за 2 дня',
							'Ручная роспись <span>джинс</span> влагостойкими красками: любой рисунок и идея за 2 дня',
							'Ручная роспись <span>брюк</span> влагостойкими красками: любой рисунок и идея за 2 дня',
							'Ручная роспись <span>худи</span> влагостойкими красками: любой рисунок и идея за 2 дня'
						];
	let slide_counter = 0;
	let arr_lenght = images_src.length;
	function nextSlide() {
		if (slide_counter >= arr_lenght - 1) {
			slide_counter = 0;
		}else{
			slide_counter++;
		}
		//
		$('.s_welcome_slide').removeClass('animate__fadeInUpBig');
		$('.s_welcome_slide').addClass('animate__fadeOutDownBig');
		//
		$('.content_left .slide_header').removeClass('animate__fadeInRightBig');
		$('.content_left .slide_header').addClass('animate__fadeOutLeftBig');
		//
		$('.gift_block').removeClass('animate__headShake');
		setTimeout(function(){
			$('.s_welcome_slide').attr('src', images_src[slide_counter]);
			$('.content_left .slide_header').html(text_src[slide_counter]);
			//
			$('.s_welcome_slide').removeClass('animate__fadeOutDownBig');
			$('.s_welcome_slide').addClass('animate__fadeInUpBig');
			//
			$('.content_left .slide_header').removeClass('animate__fadeOutLeftBig');
			$('.content_left .slide_header').addClass('animate__fadeInRightBig');
			//
			$('.gift_block').addClass('animate__headShake');
		},1000)
	    setTimeout(nextSlide, 6000);
	}
	setTimeout(nextSlide, 6000);

	




	//Смена картинок в 3 секции по нажатию
	$('.clothes_switch a').click(function(event) {
		let new_clothes_type = $(this).data('type');
		$('.clothes_switch .active').removeClass('active');
		$(this).addClass('active');

		//Без задержки
		$(".clothes_photo img").each(function( index ) {
			let num = index + 1;
			let src = 'img/sec3/clothes/' + new_clothes_type + '/' + num + '.jpg';
			$(this).fadeOut('slow', function() {
				$(this).attr("src", src);
			});
 			$(this).fadeIn('slow');

		});
	});





	//Сбрасывает выбранные параметры в шаге 2/5
	function resetSelectedTypes(){
		$('.step_two .select_wrapper ').each(function(index, el) {
			$(this).children('.select').text($(this).children('.select_options').children('.select_options_default').text());
		});
	}
	//Обработка выбора ассортимента
	$('.from_our_assortment').click(function(event) {
		$('.disabled_wrapper').removeClass('disabled_wrapper');
		resetSelectedTypes();
	});
	$('.from_your_assortment').click(function(event) {
		$('.select_size_wrapper').addClass('disabled_wrapper');
		$('.select_sex_wrapper').addClass('disabled_wrapper');
		$('.select_color_wrapper').addClass('disabled_wrapper');
		resetSelectedTypes();
	});

	//Выбор опции в кастомном селекторе
	$('.select_options').on('click', 'p', function(e){
		
		if ($(this).parent('.select_options').siblings('.select').parent('.select_wrapper').hasClass('select_type_wrapper')) {
			
			//Скрываем мужской пол при выборе джинсовки
			if ($(this).data('type') == 'jeans') {
				$('.hide_man').hide('fast');
			}else{
				$('.hide_man').show('fast');
			}

			$('.select_color_wrapper').removeData('type');
			$('.select_color_wrapper .select').text('Цвет');
			let clothes_type = $(this).data('type');
			switch(clothes_type) {

				case 't_shirt':
					$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p> <p data-type='white'>Белый</p> <p data-type='gray'>Серый</p> <p data-type='black'>Черный</p> <p data-type='brown'>Коричневый</p> <p data-type='red'>Красный</p> <p data-type='yellow'>Желтый</p> <p data-type='orange'>Оранжевый</p> <p data-type='blue'>Синий</p>");
			 	break;

				case 't_shirt_long':
					$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p> <p data-type='white'>Белый</p> <p data-type='gray'>Серый</p> <p data-type='black'>Черный</p> <p data-type='yellow'>Желтый</p> <p data-type='light_green'>Зелёный</p>");
			 	break;

			 	case 'shirt':
			 		$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p><p data-type='white'>Белый</p>");
			 	break;

			 	case 'sweatshirt':
			 		$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p> <p data-type='white'>Белый</p> <p data-type='gray'>Серый</p> <p data-type='black'>Черный</p> <p data-type='green'>Зелёный</p> <p data-type='red'>Красный</p> <p data-type='purple'>Фиолетовый</p> <p data-type='orange'>Оранжевый</p> <p data-type='blue'>Синий</p> <p data-type='dark_blue'>Темно-синий</p> <p data-type='yellow'>Желтый</p>");
			 	break;

			 	case 'hoodie':
			 		$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p> <p data-type='gray_melange'>Серый меланж</p> <p data-type='blue_melange'>Синий меланж</p> <p data-type='blue'>Синий</p> <p data-type='black'>Черный</p>");
			 	break;

			 	case 'jeans':
			 		$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p><p data-type='blue'>Синий</p>");
			 	break;

			 	case 'jeans_pant':
			 		$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p><p data-type='blue'>Синий</p>");
			 	break;

			 	case 'pant':
			 		$('.select_color_wrapper .select_options').html("<p class='select_options_default'>Цвет</p><p data-type='black'>Черный</p>");
			 	break;

				default:
				console.log('default');
			}
		}
		$(this).parent('.select_options').siblings('.select').html($(this).text());
		$(this).parent('.select_options').siblings('.select').parent('.select_wrapper').data('type', $(this).data('type'));

	});

	//Закрытие кастомного селектора по клику вне его области
	$(document).mouseup(function (e){ 
		var div = $(".select_wrapper"); 
		if (!div.is(e.target) && div.has(e.target).length === 0) { 
			$('.select_wrapper.selected').children(".select_options").slideUp('fast');
			$('.select_wrapper.selected').removeClass('selected');
		}
	});

	//Изменение шагов заказа
	$('.change_step').click(function(event) {
		event.preventDefault();
		$('.' + $(this).data('old')).slideUp('fast');
		$('.' + $(this).data('new')).slideDown('fast');
	});

	//Проврека выбран ли цвет в 2/5
	$('.select_wrapper').click(function(event) {
		if ($(this).hasClass('disabled_wrapper')) {
			showErrors($(this)[0].classList[1],'Мы рисуем на вашей одежде');
			return;
		}

		if ($(this).hasClass('select_color_wrapper')) {
			if (!$('.select_type_wrapper').data('type')) {
				showErrors('select_type_wrapper','Ошибка, сначала выберете тип');
				return;
			}
		}

		if ($(this).hasClass('selected')) {
			$(this).removeClass('selected');
			$(this).children(".select_options").slideUp('fast')
		}else{
			$(this).addClass('selected');
			$(this).children(".select_options").slideDown('fast');
		}
		
	});


	//Проверка выбранных полей в 2/5
	$('.change_step_two').click(function(event) {
		let err_count = 0
		event.preventDefault();
		$('.step_two .select_wrapper').each(function(index, el) {
			if ($(this).hasClass('disabled_wrapper')) {
			}else if (!$('.'+ $(this)[0].classList[1]).data('type')) {
				showErrors($(this)[0].classList[1],'Обязательное для выбора поле');
				err_count++;
			}
		});
		if (err_count > 0) {
			err_count = 0;
			return;
		}else{
			$('.step_two').slideUp('fast');
			$('.step_three').slideDown('fast');
			err_count = 0;
		}
	});

	//Константа всех типов одежды и их наименований
	const all_cloterhs_type = {
		t_shirt : 'Футболка',
		t_shirt_long : 'Футболка с рукавом',
		shirt : 'Рубашка',
		sweatshirt : 'Толстовка',
		hoodie : 'Худи',
		jeans : 'Джинсовка',
		jeans_pant : 'Джинсы',
		pant : 'Брюки'
	};

	const all_cloterhs_price = {
		t_shirt_m : 900,
		t_shirt_w : 900,
		t_shirt_long_m : 1100,
		t_shirt_long_w : 1100,
		shirt_m : 0,
		shirt_w : 0,
		sweatshirt_m : 2400,
		sweatshirt_w : 1800,
		hoodie_m : 4500,
		hoodie_w : 4500,
		jeans_m : 0,
		jeans_w : 4500,
		jeans_pant_m : 2700,
		jeans_pant_w : 2700,
		pant_m : 2000,
		pant_w : 2000
	};

	const all_colors_code = {
		white : '#fff',
		gray : '#e3e2e4',
		black : '#000000',
		brown : '#a87741',
		red : '#ea2109',
		yellow : '#fbf700',
		orange : '#f8aa00',
		blue : '#2b73ff',
		green : '#4fb62e',
		light_green : '#4eba86',
		purple : '#9d4ff1',
		dark_blue : '#3f4a66',
		gray_melange : '#e4e3e5',
		blue_melange : '#3e4965'
	}
	const all_colors_name = {
		white : 'Белый',
		gray : 'Серный',
		black : 'Черный',
		brown : 'Коричневый',
		red : 'Красный',
		yellow : 'Желтый',
		orange : 'Оранжевый',
		blue : 'Синий',
		green : 'Зеленый',
		light_green : 'Зеленый',
		purple : 'Фиолетовый',
		dark_blue : 'Темно-синий',
		gray_melange : 'Серый меланж',
		blue_melange : 'Синий меланж'
	}

	const sex_types = {
		m : 'Мужской',
		w  :'Женский'
	}


	//Проверка выбранных полей в 3/5
	$('.change_step_three').click(function(event) {
		event.preventDefault();
		var clothes_type = $('.select_type_wrapper').data('type');
		var clothes_color = $('.select_color_wrapper').data('type');
		var paint_size = $('.step_three input:checked').val();
		//Переменная отвечающая за рисунок на вашей или нашей
		gl_product_owner		= 	$('.step_one input:checked').val();

		//Проверяем на чьей одежде рисуем
		if (gl_product_owner == 'false') {
			$('.cl_size span').text('Ваш');
			$('.cl_size b').text('');
			$('.cl_color span').css({
				background: '#fff'
			});
			$('.cl_color i').text('Ваш');
		}else{
			$('.cl_size span').text(sex_types[$('.select_sex_wrapper').data('type')]);
			$('.cl_size b').text($('.select_size_wrapper').data('type'));
			//Проверяем, если цвет белы, добавляем бордер что б было видно
			if (clothes_color == 'white') {
				$('.cl_color span').css({
					background: all_colors_code[clothes_color],
					border: '1px solid'
				});
			}else{
				$('.cl_color span').css({
					background: all_colors_code[clothes_color],
					border: 'none'
				});
			}
			
			$('.cl_color i').text(all_colors_name[clothes_color]);
		}

		//Переменные не зависящие от того, на чьей рисуем
		$('.cl_img').attr({
			src: 'img/sec9/cl_type/' + $('.select_type_wrapper').data('type') + '.png'
		});
		$('.cl_type').text(all_cloterhs_type[clothes_type]);
		$('.cl_paint_size b').text(paint_size);
		


		//Создание цены
		var total_price = 0;

		if ($('.step_one input:checked').val() == 'true') {
			let clothes_type_sex = clothes_type + '_' + $('.select_sex_wrapper').data('type');
			total_price += all_cloterhs_price[clothes_type_sex];
		}

		if (clothes_type == 'jeans' || clothes_type == 'jeans_pant') {
			switch(paint_size){
				case 'Small':
			 		total_price += 1400;
			 	break;

			 	case 'Medium':
			 		total_price += 3000;
			 	break;

			 	case 'Large':
			 		total_price += 4000;
			 	break;

				default:
				console.log('default');

			}
		}else{
			switch(paint_size){
				case 'Small':
			 		total_price += 700;
			 	break;

			 	case 'Medium':
			 		total_price += 1500;
			 	break;

			 	case 'Large':
			 		total_price += 2000;
			 	break;

				default:
				console.log('default');

			}
		}

		$('.old_price span').text(total_price);
		$('.new_price span').text(total_price - (total_price / 100 * 10));

		//Добавление значений в глоабльные переменные
		gl_product_type			=	all_cloterhs_type[clothes_type];
		gl_product_size			=	$('.select_size_wrapper').data('type');
		gl_product_sex			=	sex_types[$('.select_sex_wrapper').data('type')];
		gl_product_color		=	clothes_color;
		gl_product_print_size	=	paint_size;
		gl_product_price		=	total_price - (total_price / 100 * 10);

		$('.step_three').slideUp('fast');
		$('.step_four').slideDown('fast');
	});



	//Сброс рамки в инпуте при фокусе, если там была ошибка
	$('input').focus(function(event) {
		$(this).css({
			border: 'none'
		});
	});


	//Запрет ввода букв в номер
	/*$('.member_number').on('input', function() {
	    $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''))
	});*/


	//Новая функция показа кастомных ошибок
	function showErrorsNew(element, err_text){
		element.siblings('.custom_error').text(err_text).fadeIn('fast');
		setTimeout(function(){
			element.siblings('.custom_error').fadeOut('fast');
		},3000)
	}

	//Функция показа оповещений
	function showAlert(type, err_text){
		let alert_color;
		if (type == 'true') {
			alert_color = '#6ab04c';
		}else if(type == 'false'){
			alert_color = '#eb4d4b';
		}else{
			alert_color = '#7ed6df';
		}
		$('.custom_alert').css({background:alert_color}).text(err_text).slideDown('fast');
		setTimeout(function(){
			$('.custom_alert').slideUp('fast');
		},3000)
	}
	
	//Функция проверки поля для имени юзера
	function checkMemberName(element){
		if (element.val().length < 3) {
			element.css({
				border: '1px solid #F4543E'
			});
			showErrorsNew(element,'Обязательно для заполнения');
			return false;
		}else{
			return true;
		}
	}

	//Функция проверки поля для телефона юзера
	function checkMemberNumber(element){
		if(element.val().length < 17){
			element.css({
				border: '1px solid #F4543E'
			});
			showErrorsNew(element,'Введите корректный номер телефона');
			return false;
		}else{
			return true;
		}
	}

	//Смена названия при прикреплении файла

	var	file_label = $('.inputfile_label');
	var file_labelVal = file_label.innerHTML;

	$('.inputfile').change(function(e) {
		let fileName = $(this)[0].files[0].name;
		if (fileName.length > 0) {
			file_label.html(fileName);
		}else{
			file_label.html(file_labelVal);
		}

	});


	//Проверка выбранных полей в 4/5
	$('.change_step_four').click(function(event) {
		event.preventDefault();
		const memberNameInput = $(this).siblings('.form').find('.member_name');
		const memberNumberInput = $(this).siblings('.form').find('.member_number');
		let checkedMemberName = checkMemberName(memberNameInput);
		let checkedMemberNumber = checkMemberNumber(memberNumberInput);

		if (checkedMemberName === true && checkedMemberNumber === true) {
			var fd = new FormData;
			fd.append('name', memberNameInput.val());
			fd.append('number', memberNumberInput.val());
			fd.append('antispam', '3eA65ui');
			fd.append('main_order', 'true');
			fd.append('product_type', gl_product_type);
			fd.append('product_size', gl_product_size);
			fd.append('product_color', gl_product_color);
			fd.append('product_sex', gl_product_sex);
			fd.append('product_print_size', gl_product_print_size);
			fd.append('product_price', gl_product_price);
			fd.append('comment', $('.step_three').find('textarea').val());
			fd.append('product_owner', gl_product_owner);

			//Проверяем наличие прикрепленного файла
			if ($('.inputfile').prop('files')) {
				fd.append('img', $('.inputfile').prop('files')[0]);
			}
			//let data = 'name='+memberNameInput.val()+'&number='+memberNumberInput.val()+'&antispam=3eA65ui&main_order=true&'+'product_type='+gl_product_type+'&product_size='+gl_product_size+'&product_color='+gl_product_color+'&product_sex='+gl_product_sex+'&product_print_size='+gl_product_print_size+'&product_price='+gl_product_price+'&comment='+$('.step_three').find('textarea').val()+'&product_owner='+gl_product_owner;
			senAjaxData(fd);
		}

	});



	//Проверка полей юзера при быстром заказе звонка
	$('.fast_order_button').click(function(event) {
		event.preventDefault();
		let memberNameInput = $(this).siblings('.contacts').children('.contacts_name').children('.member_name');
		let memberNumberInput = $(this).siblings('.contacts').children('.contacts_number').children('.member_number');
		let checkedMemberName = checkMemberName(memberNameInput);
		let checkedMemberNumber = checkMemberNumber(memberNumberInput);

		if (checkedMemberName === true && checkedMemberNumber === true) {
			let data = 'name='+memberNameInput.val()+'&number='+memberNumberInput.val()+'&antispam=kukold&fast_order=true';
			let modal = $('.fast_order_wrapper');
			senAjaxData(data,modal);
		}else{
			return;
		}
	});


	//Отправка Ajax
	function senAjaxData(get_data, modal){

		$.ajax({
	        url:     	'ajax.php',
	        type:     	"POST", 
	        processData: false,
	        contentType: false,
	        data: 		get_data,  
	        success: function(response) { 
	        	console.log(response);
	        	let responeArray = JSON.parse(response);
	            if (responeArray[0] == 'true') {
	            	if (responeArray[1] == 'false') {
	            		if (modal) {
		            		modal.fadeOut('fast');
		            		modal.find('input').val('');
		            	}
		            	showAlert('true','Спасибо, мы скоро свяжемся!');
	            	}else{

	            		window.location.href = responeArray[1];
	            	}

	            }else{
	            	showAlert('false','Произошла ошибка, попробуйте еще раз');
	            }
	        },
	        error: function(response) { 
	        	console.log(response);
	            showAlert('false','Произошла ошибка, попробуйте еще раз');
	        }
	    });

	}
	



});