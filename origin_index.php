<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HAND-PRINT</title>
	<!-- Normalize.css -->
	<link rel="stylesheet" href="css/reset.css">
	<!-- Main style css -->
	<link rel="stylesheet" href="css/style.css?<php echo time() ?>">
	<!-- Fonts -->
	<link rel="stylesheet" href="css/fonts/berlingske-serif/stylesheet.css" type = "text/css" />
	<link rel="stylesheet" href="css/fonts/montserrat/stylesheet.css" type = "text/css" />
	<!-- Animate.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
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
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(66972550, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/66972550" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<!-- Jquery from CDN-->
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="preloader">
	  <div class="preloader__row">
	    <div class="preloader__item"></div>
	    <div class="preloader__item"></div>
	  </div>
	</div>
	<div class="wrapper">

		<!-- Первая, вступительная секция -->
		<div class="s_welcome">
			<div class="left_flower"></div>
			<div class="right_flower"></div>
			<div class="container">
				<div class="navigation">
					<img src="img/logo.png" alt="Hand-Print Ручная роспись одежды">
					<div class="navigation_right">
						<a onclick="ym(66972550,'reachGoal','contacts');" href="" class="contact number">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.88 5.05001C16.06 5.45001 18.55 7.94001 18.95 11.12C19.01 11.63 19.44 12 19.94 12C19.98 12 20.02 12 20.06 11.99C20.61 11.92 21 11.42 20.93 10.87C20.6842 8.88422 19.7824 7.03737 18.3675 5.62249C16.9526 4.20762 15.1058 3.30576 13.12 3.06001C12.57 3.00001 12.07 3.39001 12.01 3.94001C11.94 4.49001 12.33 4.99001 12.88 5.05001ZM13.26 7.16001C12.73 7.02001 12.18 7.34001 12.04 7.88001C11.9 8.42001 12.22 8.96001 12.76 9.10001C13.2774 9.23432 13.7495 9.50445 14.1275 9.88245C14.5055 10.2605 14.7757 10.7326 14.91 11.25C14.9766 11.5071 15.1424 11.7272 15.3711 11.8622C15.5998 11.9972 15.8727 12.036 16.13 11.97C16.66 11.83 16.98 11.28 16.85 10.75C16.6249 9.88644 16.1735 9.09853 15.5425 8.46749C14.9115 7.83645 14.1235 7.38512 13.26 7.16001ZM19.23 15.26L16.69 14.97C16.3913 14.9349 16.0886 14.968 15.8045 15.0667C15.5205 15.1654 15.2625 15.3273 15.05 15.54L13.21 17.38C10.3712 15.9362 8.06376 13.6288 6.61998 10.79L8.46998 8.94001C8.89998 8.51001 9.10998 7.91001 9.03998 7.30001L8.74998 4.78001C8.69329 4.29219 8.45917 3.84225 8.09222 3.51586C7.72526 3.18947 7.25109 3.00943 6.75998 3.01001H5.02998C3.89998 3.01001 2.95998 3.95001 3.02998 5.08001C3.55998 13.62 10.39 20.44 18.92 20.97C20.05 21.04 20.99 20.1 20.99 18.97V17.24C21 16.23 20.24 15.38 19.23 15.26Z" fill="#978787"/>
							</svg>
						</a>
						<a onclick="ym(66972550,'reachGoal','contacts');" target="_blank" href="https://instagram.com/hand__print" class="contact inst">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18.2049 8.96518C18.851 8.96518 19.3749 8.44136 19.3749 7.79518C19.3749 7.14901 18.851 6.62518 18.2049 6.62518C17.5587 6.62518 17.0349 7.14901 17.0349 7.79518C17.0349 8.44136 17.5587 8.96518 18.2049 8.96518Z" fill="#978787"/>
							<path d="M13 7.99341C12.0098 7.99341 11.0418 8.28704 10.2185 8.83718C9.39517 9.38731 8.75346 10.1692 8.37452 11.0841C7.99558 11.9989 7.89643 13.0056 8.08961 13.9768C8.28279 14.948 8.75963 15.8401 9.45982 16.5403C10.16 17.2404 11.0521 17.7173 12.0233 17.9105C12.9945 18.1036 14.0011 18.0045 14.916 17.6256C15.8308 17.2466 16.6128 16.6049 17.1629 15.7816C17.713 14.9582 18.0067 13.9903 18.0067 13C18.0067 11.6722 17.4792 10.3987 16.5403 9.45981C15.6013 8.52089 14.3279 7.99341 13 7.99341ZM13 16.25C12.3572 16.25 11.7289 16.0594 11.1944 15.7023C10.66 15.3452 10.2434 14.8376 9.99743 14.2438C9.75144 13.6499 9.68708 12.9964 9.81248 12.366C9.93789 11.7356 10.2474 11.1565 10.7019 10.7019C11.1565 10.2474 11.7356 9.93788 12.366 9.81248C12.9964 9.68708 13.6499 9.75144 14.2438 9.99742C14.8376 10.2434 15.3452 10.66 15.7023 11.1944C16.0594 11.7289 16.25 12.3572 16.25 13C16.25 13.862 15.9076 14.6886 15.2981 15.2981C14.6886 15.9076 13.862 16.25 13 16.25Z" fill="#978787"/>
							<path d="M13 5.00663C15.6032 5.00663 15.912 5.01637 16.9398 5.0635C17.558 5.07084 18.1703 5.18434 18.7501 5.39906C19.1707 5.56131 19.5526 5.80982 19.8714 6.12859C20.1902 6.44736 20.4387 6.82934 20.6009 7.24994C20.8157 7.82968 20.9292 8.442 20.9365 9.06019C20.9836 10.088 20.9934 10.3967 20.9934 13.0008C20.9934 15.6049 20.9836 15.912 20.9365 16.9398C20.9292 17.558 20.8157 18.1703 20.6009 18.7501C20.4387 19.1707 20.1902 19.5526 19.8714 19.8714C19.5526 20.1902 19.1707 20.4387 18.7501 20.6009C18.1703 20.8157 17.558 20.9292 16.9398 20.9365C15.912 20.9836 15.6032 20.9934 13 20.9934C10.3967 20.9934 10.088 20.9836 9.06019 20.9365C8.442 20.9292 7.82968 20.8157 7.24994 20.6009C6.82934 20.4387 6.44736 20.1902 6.12859 19.8714C5.80982 19.5526 5.56131 19.1707 5.39906 18.7501C5.18434 18.1703 5.07084 17.558 5.0635 16.9398C5.01637 15.912 5.00663 15.6032 5.00663 13C5.00663 10.3967 5.01637 10.088 5.0635 9.06019C5.07084 8.442 5.18434 7.82968 5.39906 7.24994C5.56131 6.82934 5.80982 6.44736 6.12859 6.12859C6.44736 5.80982 6.82934 5.56131 7.24994 5.39906C7.82968 5.18434 8.442 5.07084 9.06019 5.0635C10.088 5.01637 10.3967 5.00663 13 5.00663ZM13 3.25C10.3521 3.25 10.0198 3.26138 8.97975 3.3085C8.17113 3.32483 7.37113 3.47813 6.61375 3.76188C5.96596 4.01237 5.37766 4.39544 4.88655 4.88655C4.39544 5.37766 4.01237 5.96596 3.76188 6.61375C3.47803 7.37138 3.32474 8.17167 3.3085 8.98056C3.26138 10.0206 3.25 10.3513 3.25 13C3.25 15.6488 3.26138 15.9803 3.3085 17.0203C3.32483 17.8289 3.47813 18.6289 3.76188 19.3862C4.01237 20.034 4.39544 20.6223 4.88655 21.1134C5.37766 21.6046 5.96596 21.9876 6.61375 22.2381C7.37138 22.522 8.17167 22.6753 8.98056 22.6915C10.0206 22.7386 10.3521 22.75 13 22.75C15.6479 22.75 15.9803 22.7386 17.0203 22.6915C17.8291 22.6753 18.6294 22.522 19.3871 22.2381C20.0348 21.9876 20.6232 21.6046 21.1143 21.1134C21.6054 20.6223 21.9884 20.034 22.2389 19.3862C22.5225 18.6286 22.6755 17.8283 22.6915 17.0194C22.7386 15.9794 22.75 15.6488 22.75 13C22.75 10.3513 22.7386 10.0198 22.6915 8.97975C22.6752 8.17113 22.5219 7.37113 22.2381 6.61375C21.9876 5.96596 21.6046 5.37766 21.1134 4.88655C20.6223 4.39544 20.034 4.01237 19.3862 3.76188C18.6286 3.47831 17.8283 3.32529 17.0194 3.30931C15.9794 3.26056 15.6488 3.25 13 3.25Z" fill="#978787"/>
							</svg>
						</a>
						<a class="nav_order montserrat flowing_scroll" href="#order">Заказать</a>
					</div>
				</div>
				<div class="s_welcome__content">
					<div class="content_left">
						<h1 class="slide_header animate__animated animate__fadeInLeftBig">Ручная роспись <span>рубашек</span> влагостойкими красками: любой рисунок и идея за 2 дня</h1>
						<p>Закажите готовую одежду со своим индивидуальным рисунком любого уровня сложности или отправьте свою одежду на роспись</p>
						<div class="animate__animated animate__headShake gift_block">
							<div class="gift">
								<img src="img/w_slider/gift.png" alt="Ручная роспись рубашек влагостойкими красками: любой рисунок и идея за 2 дня">
							</div>
							<p>И получите подарок <br> c 30 идеями для рисунков</p>
						</div>
						<a class="orange_button montserrat animate__animated animate__headShake flowing_scroll" href="#all_models">Посмотреть модели с росписью</a>
					</div>
					<img class="animate__animated animate__fadeInUpBig s_welcome_slide" src="img/w_slider/1.png" alt="Ручная роспись рубашек влагостойкими красками: любой рисунок и идея за 2 дня">
				</div>
			</div>
		</div>

	
		<!-- Вторая секция, что мы можем нарисовать -->
		<div class="s_what_can">
			<div class="container">
				<div class="header">
					<h1>Что можно нарисовать на одежде</h1>
					<p class="montserrat">Отобразим любую вашу идею и задумку в ярком рисунке</p>
				</div>
				<div class="s_what_can__content">
					<div class="flex_elem">
						<div class="img"></div>
						<p>Надписи и фразы</p>
					</div>
					<div class="flex_elem">
						<div class="img"></div>
						<p>Портреты кумиров</p>
					</div>
					<div class="flex_elem">
						<div class="img"></div>
						<p>Герои из кино</p>
					</div>
					<div class="flex_elem">
						<div class="img"></div>
						<p>Логотипы <br>компаний и брендов</p>
					</div>
					<div class="flex_elem">
						<div class="img"></div>
						<p>Любые задумки <br>и объекты</p>
					</div>
					<div class="flex_elem">
						<div class="img"></div>
						<p>Знаменитые <br>картины</p>
					</div>
				</div>
				<a class="orange_button flowing_scroll" href="#all_models">Посмотреть 30 идей для рисунков</a>
			</div>
		</div>

		
		<!-- Третья секция, на чьей одежде рисуем -->
		<div class="s_clothes">
			<div class="flower_left"></div>
			<div class="t_shirt"></div>
			<div class="tassel"></div>
			<div class="container">
				<h1 id="all_models">Ваша одежда после ручной росписи:</h1>
				<p>Как будет выглядеть в результате?</p>

				<div class="scroll_x">
					<div class="clothes_switch">
						<a data-type='t_shirts' class="active"><span>Футболки</span></a>
						<a data-type='sweatshirts'><span>Толстовки</span></a>
						<a data-type='hoodies'><span>Худи</span></a>
						<a data-type='shirts'><span>Рубашки</span></a>
						<a data-type='jeans'><span>Джинсовки</span></a>
						<a data-type='pants'><span>Брюки</span></a>
					</div>
				</div>
				<div class="clothes_photo">
					<img src="img/sec3/clothes/t_shirts/1.jpg" alt="">
					<img src="img/sec3/clothes/t_shirts/2.jpg" alt="">
					<img src="img/sec3/clothes/t_shirts/3.jpg" alt="">
					<img src="img/sec3/clothes/t_shirts/4.jpg" alt="">
					<img src="img/sec3/clothes/t_shirts/5.jpg" alt="">
					<img src="img/sec3/clothes/t_shirts/6.jpg" alt="">
					<img src="img/sec3/clothes/t_shirts/7.jpg" alt="">
					<img src="img/sec3/clothes/t_shirts/8.jpg" alt="">
				</div>
				<a class="orange_button flowing_scroll" href="#order">Оформить первый заказ</a>
			</div>
		</div>

		<!-- четвертая секция, после стирок -->
		<div class="s_damp_proof">
			<div class="container">
				<h1>Влагостойкий рисунок из импортной <br> краски, устойчивой к <span>многократным стиркам</span></h1>
				<p>Роспись любой одежды, состоящей из хлопка, трикотажа >40%</p>
				<div class="after_washing">
					<div class="elem">
						<span class="counter">0 стирок</span>
						<img src="img/sec4/t_shirt.png" alt="Вид после нанесения">
					</div>
					<div class="elem">
						<span class="counter">5 стирок</span>
						<img src="img/sec4/t_shirt.png" alt="Вид после 5 стирок">
					</div>
					<div class="elem">
						<span class="counter">20 стирок</span>
						<img src="img/sec4/t_shirt.png" alt="Вид после 20 стирок">
					</div>
				</div>
				<div class="paint">
					<img src="img/sec4/paint.png" alt="Для ручной росписи используем влагостойкую импортную краску Pébéo из Франции">
					<p>Для ручной росписи используем влагостойкую <span>импортную краску <br> Pébéo</span> из Франции</p>
				</div>
			</div>
		</div>


		<!-- пятая секция, кому подойдет -->
		<div class="s_who_suits">
			<div class="container">
				<h1>Кому подойдет роспись на одежде и зачем она вам?</h1>
				<div class="s_who_suits__content">
					<div class="elem">
						<img src="img/sec5/1.png" alt="Детям">
						<h3>Детям</h3>
						<p>Подарит яркие эмоции любимых персонажей и будет отличным источником хорошего настроения вашего ребенка</p>
					</div>
					<div class="elem">
						<img src="img/sec5/2.png" alt="Спортсменам">
						<h3>Спортсменам</h3>
						<p>Мощный стимул и мотивация к тренировкам, когда изображены легенды спорта и ваши кумиры</p>
					</div>
					<div class="elem">
						<img src="img/sec5/3.png" alt="Творческим людям">
						<h3>Творческим людям</h3>
						<p>Отличный способ самовыражения в одежде, который поможет выделиться и привлечь внимание</p>
					</div>
					<div class="elem">
						<img src="img/sec5/4.png" alt="Идея для подарка">
						<h3>Идея для подарка</h3>
						<p>Идеально для оригинального подарка, который надолго запомнится детям, девушкам и мужчинам</p>
					</div>
				</div>
				<a class="orange_button flowing_scroll" href="#order">Заказать одежду с рисунком</a>
			</div>
		</div>



		<!-- шестая секция, ценность ручной работы -->
		<div class="s_handmade_value">
			<div class="container">
				<h1>Ценность ручной работы и отличия от массовой печати</h1>
				<div class="s_handmade_value__content">
					<div class="headers">
						<h2 data-show='left' class="active">Вручную</h2>
						<h2 data-show='right'>Массовые принты</h2>
					</div>
					<div class="left">
						<h2>Вручную</h2>

						<ul>
							<li class="plus">Ручная работа с душой, что отражается в «живом рисунке»</li>
							<li class="plus">Любая ваша идея и задумка будет реализована</li>
							<li class="plus">Ваша уникальная одежда в единичном экземпляре</li>
							<li class="plus">Мастер поможет придумать рисунок, нужна лишь первая идея</li>
							<li class="plus">Ваш рисунок полностью отражает вас как личность и люди видят ваш характер</li>
						</ul>
					</div>
					<div class="right">
						<h2>Массовые принты</h2>
						<ul>
							<li class="plus">Массовое производство по минимально доступной цене</li>
							<li class="minus">Сложно найти дизайн, который подойдет именно вам</li>
							<li class="minus">Вся одежда с хорошими принтами быстро заканчивается</li>
							<li class="minus">Большие производства имеют много ограничений на печать ваших идей</li>
							<li class="minus">В печати рисунка на принтере нет души и «живости» рисунка</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



		<!-- Седьмая секция, варианты заказа -->
		<div class="s_order_options">
			<div class="container">
				<h1>2 варианта для заказа одежды <br> с ручной росписью</h1>
				<span class="flower_left"></span>
				<span class="flower_right"></span>
				<div class="s_order_options__content">
					<div class="elem">
						<span class="clothes"></span>
						<h3>Рисуем на нашем ассортименте</h3>
						<p>Оплата: одежда + роспись</p>
						<span class="separator"></span>
						<ol>
							<li>1. Выбираете модель, размер и цвет одежды</li>
							<li>2. Описываете идею рисунка и пожелания</li>
							<li>3. Оплачиваете стоимость одежды и ручной росписи</li>
							<li>4. Получаете доставкой вашу одежду с рисунком через 3-5 дней</li>
						</ol>
					</div>
					<div class="elem">
						<span class="palette"></span>
						<h3>Рисуем на вашей одежде</h3>
						<p>Оплата: только роспись</p>
						<span class="separator"></span>
						<ol>
							<li>1. Выбираете вид вашей одежды</li>
							<li>2. Описываете идею рисунка и пожелания</li>
							<li>3. Оплачиваете стоимость ручной росписи</li>
							<li>4. Отдаете вашу одежду нашему курьеру</li>
							<li>5. Через 2 дня отправляем одежду с рисунком обратно к вам</li>
						</ol>
					</div>
				</div>
			</div>
		</div>



		<!-- Восьмая секция, гарантия -->
		<div class="s_guarantee">
			<div class="container">
				<div class="three_days_guarantee">
					<img src="img/sec8/t-shirt.png" alt="100% гарантия возврата в течение 3 дней">
					<div class="three_days_guarantee__content">
						<h3>100% гарантия возврата в течение 3 дней</h3>
						<p>Мы уверены в качестве наших рисунков, поэтому в течение 72 часов после получения заказа вы можете сделать полный возврат средств</p>
						<a href="" onclick="ym(66972550,'reachGoal','fast_order'); return true;" class="pink_button fast_order">Быстрый заказ менеджеру</a>
					</div>
				</div>
				<div class="process">
					<div class="process__text">
						<h2>Процесс ручной росписи <br>и создания рисунка</h2>
						<div class="scroll_x">
							<div class="steps">
								<div class="step">
									<span>1</span>
									<p><b>Эскиз</b> рисунка и его утверждение</p>
								</div>
								<div class="step">
									<span>2</span>
									<p><b>Нанесение</b> краски и ручная роспись</p>
								</div>
								<div class="step">
									<span>3</span>
									<p><b>Просушка</b> в течение 20 часов</p>
								</div>
								<div class="step">
									<span>4</span>
									<p><b>Упаковка</b> одежды для доставки</p>
								</div>
								<div class="step">
									<span>5</span>
									<p><b>Доставка</b> изделия до дома</p>
								</div>
							</div>
						</div>
					</div>
					<div class="process__video yt_play">
						<img src="img/sec8/yt_img.png" alt="">
					</div>
				</div>
			</div>
		</div>



		<!-- Девятая секция, заказ -->
		<div class="s_order">
			<div class="container">
				<div id="order" class="s_order__content">
					<div class="elem text">
						<h1>Оформите заказ сейчас <br> и получите скидку 10% <br> на первую покупку</h1>
					</div>
					<div class="elem order_block">

						<!-- ПЕРВЫЙ ШАГ -->
						<div class="step_one">
							<p class="step">1/5</p>
							<h3>Где берем одежду?</h3>
							<div class="form">
								<div class="form_radio">
									<input id="radio_1" type="radio" name="radio" value="true" checked>
									<label class="from_our_assortment" for="radio_1">Из нашего ассортимента</label>
									<br>
									<input id="radio_2" type="radio" name="radio" value="false">
									<label class="from_your_assortment" for="radio_2">Рисуем на вашей одежде</label>
								</div>
							</div>
							<a data-old='step_one' onclick="ym(66972550,'reachGoal','order_1'); return true;" data-new='step_two' class="pink_button change_step change_step_one">Далее</a>
						</div>

						<!-- ВТОРОЙ ШАГ -->
						<div style="display: none;" class="step_two">
							<p class="step">2/5</p>
							<h3><span data-old='step_two' data-new='step_one' class="change_step"></span>Выбор одежды</h3>
							<div class="form">
								<div class="select_wrapper select_type_wrapper">
									<a class="select">Тип</a>
									<div class="select_options">
										<p class="select_options_default">Тип</p>
										<p data-type='t_shirt'>Футболка</p>
										<p data-type='t_shirt_long'>Футболка с дл. рукавом</p>
										<p data-type='shirt'>Рубашка</p>
										<p data-type='sweatshirt'>Толстовка</p>
										<p data-type='hoodie'>Худи</p>
										<p data-type='jeans'>Джинсовка</p>
										<p data-type='jeans_pant'>Джинсы</p>
										<p data-type='pant'>Брюки</p>
									</div>
									<div class="custom_error">
										<p>Обязательно для заполнения</p>
									</div>
								</div>
								<div class="select_wrapper select_size_wrapper">
									<a class="select">Размер</a>
									<div class="select_options">
										<p class="select_options_default">Размер</p>
										<p data-type='S'>S</p>
										<p data-type='M'>M</p>
										<p data-type='L'>L</p>
									</div>
									<div class="custom_error">
										<p>Обязательно для заполнения</p>
									</div>
								</div>
								<div class="select_wrapper select_sex_wrapper">
									<a class="select">Пол</a>
									<div class="select_options">
										<p class="select_options_default">Пол</p>
										<p class="hide_man" data-type='m'>Мужской</p>
										<p data-type='w'>Женский</p>
									</div>
									<div class="custom_error">
										<p>Обязательно для заполнения</p>
									</div>
								</div>
								<div class="select_wrapper select_color_wrapper">
									<a class="select">Цвет</a>
									<div class="select_options">
										<p class='select_options_default'>Цвет</p>
										<p data-type='gray_melange'>Серый меланж</p>
										<p data-type='blue_melange'>Синий меланж</p>
										<p data-type='blue'>Синий</p>
										<p data-type='black'>Черный</p>
									</div>
									<div class="custom_error">
										<p>Обязательно для заполнения</p>
									</div>
								</div>
							</div>
							<a href="" data-old='step_two' onclick="ym(66972550,'reachGoal','order_2'); return true;" data-new='step_three' class="pink_button change_step_two">Далее</a>
						</div>

						<!-- ТРЕТИЙ ШАГ -->
						<div style="display: none;" class="step_three">
							<p class="step">3/5</p>
							<h3><span data-old='step_three' data-new='step_two' class="change_step"></span>Идея рисунка</h3>
							<p class="step_three_p">Размер рисунка</p>
							<div class="form">
								<div class="form_radio">
									<input id="size_small" type="radio" name="size_select" value="Small" checked>
									<label for="size_small">Small</label>
									<input id="size_medium" type="radio" name="size_select" value="Medium">
									<label for="size_medium">Medium</label>
									<input id="size_Large" type="radio" name="size_select" value="Large">
									<label for="size_Large">Large</label>
								</div>
								<textarea name="idea" id="" placeholder="Опишите свою идею"></textarea>
								<input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
								<label class="inputfile_label" for="file">Прикрепить файл</label>
							</div>
							<a href="" data-old='step_three' onclick="ym(66972550,'reachGoal','order_3'); return true;" data-new='step_four' class="pink_button change_step_three">Далее</a>
						</div>

						<!-- ЧЕТВЕРТЫЙ ШАГ -->
						<div style="display: none;" class="step_four">
							<p class="step">4/5</p>
							<h3><span data-old='step_four' data-new='step_three' class="change_step"></span>Ваши контакты</h3>
							<div class="form">
								<div class="clothes_type">
									<div class="left">
										<img class="cl_img" src="img/sec9/cl_type/t_shirt.png" alt="">
										<span class="cl_type">Футболка</span>
									</div>
									<div class="right">
										<ul>
											<li class='cl_size'><span>Мужской</span> размер: <b>M</b></li>
											<li class="cl_color">Цвет: <span></span><i>Зеленый</i></li>
											<li class="cl_paint_size">Размер рисунка: <b>Large</b></li>
										</ul>
									</div>
								</div>
								<div class="clothes_price">
									<div class="left">
										<p>Стоимость со <br> скидкой <b>-10%</b></p>
									</div>
									<div class="right">
										<div class="new_price"><span>4 990</span> Р.</div>
										<div class="old_price">(<span>6 990</span> Р.)</div>

									</div>
								</div>
								<div class="contacts">
									<div class="contacts_name">
										<input class="member_name" type="text" placeholder="Ваше имя">
										<div class="custom_error">
											<p>Обязательно для заполнения</p>
										</div>
									</div>
									<div class="contacts_number">
										<input class="member_number" type="text" data-mask="+7(000)-000-00-00" placeholder="+7(___)-__-__">
										<div class="custom_error">
											<p>Обязательно для заполнения</p>
										</div>
									</div>
								</div>
							</div>
							<a href="" data-old='step_four' onclick="ym(66972550,'reachGoal','order_4'); return true;" data-new='step_five' class="pink_button change_step_four">Перейти к оплате</a>
							<p class="privacy_policy">Нажимая на кнопку вы соглашаетесь с <br> <a class="show_privacy_policy" target="_blank" href="/privacy_policy.html">Политикой Конфиденциальности</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>



		<!-- Десятая секция, футер -->
		<div class="s_footer">
			<div class="container">
				<div class="s_footer__content">
					<div class="left">
						<img src="img/logo.png" alt="Hand-Print Ручная роспись одежды">
					</div>
					<div class="center">
						<p>Футболки</p>
						<p>Толстовки</p>
						<p>Свитшоты</p>
						<p>Джинсовки</p>
						<p>Брюки</p>
						<p>Рубашки</p>
					</div>
					<div class="navigation_right">
						<a onclick="ym(66972550,'reachGoal','contacts');" href="" class="contact number">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.88 5.05001C16.06 5.45001 18.55 7.94001 18.95 11.12C19.01 11.63 19.44 12 19.94 12C19.98 12 20.02 12 20.06 11.99C20.61 11.92 21 11.42 20.93 10.87C20.6842 8.88422 19.7824 7.03737 18.3675 5.62249C16.9526 4.20762 15.1058 3.30576 13.12 3.06001C12.57 3.00001 12.07 3.39001 12.01 3.94001C11.94 4.49001 12.33 4.99001 12.88 5.05001ZM13.26 7.16001C12.73 7.02001 12.18 7.34001 12.04 7.88001C11.9 8.42001 12.22 8.96001 12.76 9.10001C13.2774 9.23432 13.7495 9.50445 14.1275 9.88245C14.5055 10.2605 14.7757 10.7326 14.91 11.25C14.9766 11.5071 15.1424 11.7272 15.3711 11.8622C15.5998 11.9972 15.8727 12.036 16.13 11.97C16.66 11.83 16.98 11.28 16.85 10.75C16.6249 9.88644 16.1735 9.09853 15.5425 8.46749C14.9115 7.83645 14.1235 7.38512 13.26 7.16001ZM19.23 15.26L16.69 14.97C16.3913 14.9349 16.0886 14.968 15.8045 15.0667C15.5205 15.1654 15.2625 15.3273 15.05 15.54L13.21 17.38C10.3712 15.9362 8.06376 13.6288 6.61998 10.79L8.46998 8.94001C8.89998 8.51001 9.10998 7.91001 9.03998 7.30001L8.74998 4.78001C8.69329 4.29219 8.45917 3.84225 8.09222 3.51586C7.72526 3.18947 7.25109 3.00943 6.75998 3.01001H5.02998C3.89998 3.01001 2.95998 3.95001 3.02998 5.08001C3.55998 13.62 10.39 20.44 18.92 20.97C20.05 21.04 20.99 20.1 20.99 18.97V17.24C21 16.23 20.24 15.38 19.23 15.26Z" fill="#978787"/>
							</svg>
						</a>
						<a onclick="ym(66972550,'reachGoal','contacts'); return true;" target="_blank" href="https://instagram.com/hand__print" class="contact inst">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18.2049 8.96518C18.851 8.96518 19.3749 8.44136 19.3749 7.79518C19.3749 7.14901 18.851 6.62518 18.2049 6.62518C17.5587 6.62518 17.0349 7.14901 17.0349 7.79518C17.0349 8.44136 17.5587 8.96518 18.2049 8.96518Z" fill="#978787"/>
							<path d="M13 7.99341C12.0098 7.99341 11.0418 8.28704 10.2185 8.83718C9.39517 9.38731 8.75346 10.1692 8.37452 11.0841C7.99558 11.9989 7.89643 13.0056 8.08961 13.9768C8.28279 14.948 8.75963 15.8401 9.45982 16.5403C10.16 17.2404 11.0521 17.7173 12.0233 17.9105C12.9945 18.1036 14.0011 18.0045 14.916 17.6256C15.8308 17.2466 16.6128 16.6049 17.1629 15.7816C17.713 14.9582 18.0067 13.9903 18.0067 13C18.0067 11.6722 17.4792 10.3987 16.5403 9.45981C15.6013 8.52089 14.3279 7.99341 13 7.99341ZM13 16.25C12.3572 16.25 11.7289 16.0594 11.1944 15.7023C10.66 15.3452 10.2434 14.8376 9.99743 14.2438C9.75144 13.6499 9.68708 12.9964 9.81248 12.366C9.93789 11.7356 10.2474 11.1565 10.7019 10.7019C11.1565 10.2474 11.7356 9.93788 12.366 9.81248C12.9964 9.68708 13.6499 9.75144 14.2438 9.99742C14.8376 10.2434 15.3452 10.66 15.7023 11.1944C16.0594 11.7289 16.25 12.3572 16.25 13C16.25 13.862 15.9076 14.6886 15.2981 15.2981C14.6886 15.9076 13.862 16.25 13 16.25Z" fill="#978787"/>
							<path d="M13 5.00663C15.6032 5.00663 15.912 5.01637 16.9398 5.0635C17.558 5.07084 18.1703 5.18434 18.7501 5.39906C19.1707 5.56131 19.5526 5.80982 19.8714 6.12859C20.1902 6.44736 20.4387 6.82934 20.6009 7.24994C20.8157 7.82968 20.9292 8.442 20.9365 9.06019C20.9836 10.088 20.9934 10.3967 20.9934 13.0008C20.9934 15.6049 20.9836 15.912 20.9365 16.9398C20.9292 17.558 20.8157 18.1703 20.6009 18.7501C20.4387 19.1707 20.1902 19.5526 19.8714 19.8714C19.5526 20.1902 19.1707 20.4387 18.7501 20.6009C18.1703 20.8157 17.558 20.9292 16.9398 20.9365C15.912 20.9836 15.6032 20.9934 13 20.9934C10.3967 20.9934 10.088 20.9836 9.06019 20.9365C8.442 20.9292 7.82968 20.8157 7.24994 20.6009C6.82934 20.4387 6.44736 20.1902 6.12859 19.8714C5.80982 19.5526 5.56131 19.1707 5.39906 18.7501C5.18434 18.1703 5.07084 17.558 5.0635 16.9398C5.01637 15.912 5.00663 15.6032 5.00663 13C5.00663 10.3967 5.01637 10.088 5.0635 9.06019C5.07084 8.442 5.18434 7.82968 5.39906 7.24994C5.56131 6.82934 5.80982 6.44736 6.12859 6.12859C6.44736 5.80982 6.82934 5.56131 7.24994 5.39906C7.82968 5.18434 8.442 5.07084 9.06019 5.0635C10.088 5.01637 10.3967 5.00663 13 5.00663ZM13 3.25C10.3521 3.25 10.0198 3.26138 8.97975 3.3085C8.17113 3.32483 7.37113 3.47813 6.61375 3.76188C5.96596 4.01237 5.37766 4.39544 4.88655 4.88655C4.39544 5.37766 4.01237 5.96596 3.76188 6.61375C3.47803 7.37138 3.32474 8.17167 3.3085 8.98056C3.26138 10.0206 3.25 10.3513 3.25 13C3.25 15.6488 3.26138 15.9803 3.3085 17.0203C3.32483 17.8289 3.47813 18.6289 3.76188 19.3862C4.01237 20.034 4.39544 20.6223 4.88655 21.1134C5.37766 21.6046 5.96596 21.9876 6.61375 22.2381C7.37138 22.522 8.17167 22.6753 8.98056 22.6915C10.0206 22.7386 10.3521 22.75 13 22.75C15.6479 22.75 15.9803 22.7386 17.0203 22.6915C17.8291 22.6753 18.6294 22.522 19.3871 22.2381C20.0348 21.9876 20.6232 21.6046 21.1143 21.1134C21.6054 20.6223 21.9884 20.034 22.2389 19.3862C22.5225 18.6286 22.6755 17.8283 22.6915 17.0194C22.7386 15.9794 22.75 15.6488 22.75 13C22.75 10.3513 22.7386 10.0198 22.6915 8.97975C22.6752 8.17113 22.5219 7.37113 22.2381 6.61375C21.9876 5.96596 21.6046 5.37766 21.1134 4.88655C20.6223 4.39544 20.034 4.01237 19.3862 3.76188C18.6286 3.47831 17.8283 3.32529 17.0194 3.30931C15.9794 3.26056 15.6488 3.25 13 3.25Z" fill="#978787"/>
							</svg>
						</a>
						<a class="nav_order montserrat flowing_scroll" href="#order">Заказать</a>
					</div>
					<p class="privacy_policy"><a class="show_privacy_policy" target="_blank" href="/privacy_policy.html">Политика Конфиденциальности</a></p>
					<div class="legal_information">
						<p>ИП Чапоров Иван Андреевич</p>
						<p>ОГРНИП: 317774600428958</p>
						<p>ИНН: 772459508251</p>
					</div>
					
					<div class="uniqcode_block">
						<div class="uniqcode_img"></div>
						<p>Студия уникального кода</p>
					</div>
				</div>
			</div>
		</div>


		<!-- Модальные окна -->
		<div style="display: none;" class="modal_wrapper fast_order_wrapper">
			<div class="modal">
				<span class="close_modal">x</span>
				<h3>Быстрый заказ</h3>
				<div class="contacts">
					<div class="contacts_name">
						<input class="member_name" type="text" placeholder="Ваше имя">
						<div class="custom_error">
							<p>Обязательно для заполнения</p>
						</div>
					</div>
					<div class="contacts_number">
						<input class="member_number" type="text" data-mask="+7(000)-000-00-00" placeholder="+7(___)-__-__" autocomplete="off" maxlength="17">
						<div class="custom_error">
							<p>Обязательно для заполнения</p>
						</div>
					</div>
				</div>
				<a class="pink_button fast_order_button">Заказать звонок</a>
				<p class="privacy_policy">Нажимая на кнопку вы соглашаетесь с <br> <a class="show_privacy_policy" href="">Политикой Конфиденциальности</a></p>
			</div>
		</div>


		<!-- Для оповещений об ошибках и успехах -->
		<div class="custom_alert">
			<p>Ваше сообщение успешно отправлено!</p>
		</div>
	</div>
	<!-- Main js file -->
	<script src="js/main.js?<php echo time() ?>"></script>
	<!-- Input mask js file -->
	<script src="js/jquery.mask.min.js"></script>
</body>
</html>