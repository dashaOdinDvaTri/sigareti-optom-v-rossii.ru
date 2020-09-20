<?php header('Content-type: text/html; charset=utf-8');
$ini = parse_ini_file('./config/config.ini');
if (!$ini) {
	echo 'Ошибка в конфигурационном файле';
	die();
}
?><!DOCTYPE html><html lang="ru">
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
      
        
        
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />   
        
        <meta name="yandex-verification" content="83d638a9a3e2a839" />
        
        <title><?php print $ini['title']; ?></title>
        
        <meta name="keywords" content="сигареты,сигареты оптом,продажа сигарет,сигареты с фильтром,сигаретф без фильтра,родопи,опал,космос,бт,мальборо,прима,винстон,оптима,кредо,бонд,лд,тройка,максим,столичные,интер,хортица,стюардесса,корона,кресты">
        
        <meta name="description" content="Оптовая продажа сигарет с фильтром и без фильтра на территории России по самым выгодным и низким ценам">
        
        <meta name="viewport" content="user-scalable=1, width=1001px, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="style/CSS_reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2-min.js"></script>
        <script type="text/javascript" src="js/jquery.plugins.js"></script>
        <!--<script type="text/javascript" src="js/js-form.js"></script>-->
        <script type="text/javascript" src="/js/jq-form.js"></script> 
        <script type="text/javascript" src="js/scripts.js?v2"></script>
        
        
        <?php if ($ini['head_code']) include($ini['head_code']); ?>
        
        </head>

<body data-metrika="<?php if ($ini['metrika_id']) print $ini['metrika_id']; ?>">
    
    
    <!-- Модальное Окно  -->
<div id="overlay">
    <div class="popup">
        <h2>ОБЯЗАТЕЛЬНО К ПРОЧТЕНИЮ!</h2> <br>
        <h2>КУРЕНИЕ УБИВАЕТ!</h2> <br>
        <div id="justify">&nbsp&nbsp&nbspВнимание! <br> 
        &nbsp&nbsp&nbspНа сайте вы не сможете купить товары, т.к. данный интернет-ресурс и его владельцы не ведут дистанционную продажу товаров! 
        На сайте размещена информация о реализуемых товарах, 
            ассортименте, правилах её приобретения, возможных акциях и мероприятиях, 
            а также хозяйственной деятельности владельцев сайта, продаваемых указанные на сайте товары.<br>
            &nbsp&nbsp&nbspДанный контент предназначен исключительно для информирования посетителей и не является рекламой товаров, представленных на сайте. <br>
            &nbsp&nbsp&nbspТакже, информация, размещённая на сайте, предназначена для лиц, старше 18 лет. Переходя на сайт вы подтверждаете своё совершеннолетие, 
            а равно то, что знакомы со ст.20 15-ФЗ от 23.02.2013г.</div>
                 <br><br>
         
        <button class="close" title="Перейти на сайт" onclick="document.getElementById('overlay').style.display='none';"></button>
        <button class="close_non" title="Уйти с сайта" onclick="javascript:document.location.href='http://smeshariki.ru'"></button>
    </div>
</div>
<!-- Модальное Окно  -->



	<div class="wrapper">
		<div class="header">
			<div class="head-top-row">
				
				<?php if ($ini['phone']) { ?>
				<address class="head-phone"><span class="phone-icon"></span>
				<?php print $ini['phone']; ?></address>
				
				<?php } ?>
				
				
				<?php if ($ini['phone2']) { ?>
				<address class="head-phone2">
				<?php print $ini['phone2']; ?></address>
				
				<?php } ?>
				
				
				<?php if ($ini['phone3']) { ?>
				<address class="head-phone3">
				
				<?php print $ini['phone3']; ?></address>
				
				<?php } ?>
				
		
				
				<a href="#" class="blue-btn call-request-btn header-btn">Обратный звонок</a>
			</div>
			<div class="head-nav-row">
				<div class="logo" id="ib-block1" contenteditable="true">
					<img src="images/logo.png" width="245" height="113" alt="sigareti_optom"></div>
				
				
	<div id="ib-block2" contenteditable="true">
	    <ul class="nav">
	<li><a href="#our-price">прайс-лист</a></li>
	<li><a href="#our-advantages">наши преимущества</a></li>
	<li><a href="#sheme">схема работы</a></li>
		<li><a href="#reviews">отзывы</a></li>
	<li><a href="#contacts">контакты</a></li>
</ul></div>
			</div>
			<div class="head-title-row" id="ib-block3" contenteditable="true"><h1>Сигареты оптом</h1>

<p class="main-post-title">Продажа сигарет с фильтром и без фильтра на территории России. Цены в прайсе на сайте актуальные. 
Сигареты продаются с МРЦ, имеющейся на момент отгрузки. Сигареты с другой МРЦ - по запросу. 
Посмотреть полный актуальный прайс-лист на сигареты вы можете <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">ТУТ</a>.</p>
</div>
		</div>
		
		<!--end header-->
		
		<div class="price">
			<div class="price" id="our-price" contenteditable="true">
			    <h2>Прайс-лист</h2>
		<p class="main-post-title"> Актуальные цены на сигареты ведущих российских, белорусских, киргизских, таджикских и многих других производителей качественной табачной продукции.
		Прайс-лист обновляется ежедневно. 
		Цены, указанные в нём всегда актуальны. О наличии и новых поступлениях сигарет в режиме он-лайн вы можете узначать 
		в чате в телеграм: @sigaretioptomvrossii, или написав по контактам, указанным на сайте.  </p>
		<p class="main-post-title"><a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">Смотреть прайс-лист</a></p><br><br>
		
		
		<!--end-price-->
		
		
		<div class="gallery-block" id="ib-block4" contenteditable="true"><ul id="gallery"><li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_marlboro_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Мальборо. Красн/Желт <br> Цена: 
	<a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a>
	</div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_optima_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Оптима. Красн/Желт <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a> </div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_winston_blue.jpg" width="249"></div>

	<div class="gal-title">Сигареты Винстон. Син <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_kosmos.jpg" width="249"></div>

	<div class="gal-title">Сигареты Космос. <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_opal.jpg" width="249"></div>

	<div class="gal-title">Сигареты Опал. <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a> </div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_rodopi.jpg" width="249"></div>

	<div class="gal-title">Сигареты Родопи. <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_bond_blue.jpg" width="249"></div>

	<div class="gal-title">Сигареты Бонд стрит. <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_credo.jpg" width="249"></div>

	<div class="gal-title">Сигареты Кредо. <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
			<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_ld_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты ЛД. Син/Красн <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
			<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_maksim_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Максим. Красн/Сер <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
			<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_tambovskii_volk_black.jpg" width="249"></div>

	<div class="gal-title">Сигареты Тамбовский волк. Черн/Красн <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_troika_brown.jpg" width="249"></div>

	<div class="gal-title">Сигареты Тройка. Корич <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_stolichnye_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты Столичные. Тв <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_donskoy_tabak_dark.jpg" width="249"></div>

	<div class="gal-title">Сигареты Донской табак. Темн/Светл<br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_inter_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты Интер. Тв <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_tu_134_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты ТУ 134. Тв <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_bt_hard.jpeg" width="249"></div>

	<div class="gal-title">Сигареты БТ. Тв <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_beloe_solnce_classic.jpg" width="249"></div>

	<div class="gal-title">Сигареты Белое солнце. Класс/Ориг <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_hortica_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Хортица. Красн/Син <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_stewardess_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты Стюардесса. Тв <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_kresty_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Кресты. Красн/Син <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_bayron_white.jpg" width="249"></div>

	<div class="gal-title">Сигареты Байрон. Бел <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_korona.jpg" width="249"></div>

	<div class="gal-title">Сигареты Корона. Желт <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="" height="299" src="images/gallery/sigarety_prima_dona.jpg" width="249"></div>

	<div class="gal-title">Сигареты Прима Дона. <br> Цена: <a href="https://is.gd/xLh4LY" target="newframe" style="color: #ff0000">см.прайс-лист</a></div>
	</li>
</ul></div><!--end-gallery-->


		<div class="form-block pattern-bg">	
			<div id="ib-block5" contenteditable="true"><h3 class="form-title">Отправьте заявку на сигареты.</h3></div>
				
<form class="order-form clr" method="post" action="form/form.php">
    
<p><input type="text" name="name" class="name <?php if ($ini['name_required']) print 'required'; ?>" placeholder="Ваше имя"></p>

<p><input type="text" name="phone" class="phone phone-mask <?php if ($ini['phone_required']) print 'required'; ?>" placeholder="Ваш телефон"></p>
	
<p><input type="text" name="email" class="email <?php if ($ini['email_required']) print 'required'; ?>" placeholder="Ваш e-mail"></p>
			
<script type="text/javascript" src="js/captcha.js"></script>

<div id="ib-block5" contenteditable="true">
					<p><button class="db-btn" type="submit">Отправить</button></p>
				</div>
				</form>

		</div><!--end form-block-->
		
		<div class="head-title-row" id="ib-block3" contenteditable="true"><h2>Ассортимент сигарет</h2>

<p class="main-post-title">В ассортименте имеется широкий выбор популярной табачной продукции различной ценовой категории от разных производителей, такие как Milano (Милано), 
Cavallo (Кавалло), Mond (Монд), Rothmans, LD, Winston, Alliance, Chesterfield, L&M, More, Saint George, NEXT, болгарские сигареты, крымские, сигареты производства республики Беларусь,
Киргизкой и Таджикской респ., Прима Дона и другие сигареты без фильтра, сигареты производства Балтийской Табачной Фабрики - Business Class, Dover и т.д. 
Сигареты оптом отправляются транспортной во все регионы россии. Так же возможно приобрести сигареты оптом с доставкой из Москвы.<br> Присылайте ваши заявки!</p>
</div>
		
		<!--end-stat-block-->
		
		
		
		<div class="why-we-wrap-block">
			<div class="why-we-block" id="our-advantages" contenteditable="true"><h2>Почему выбирают нас при покупке сигарет?</h2>

<ul class="why-we-list"><li>
	<ul class="why-we-inner"><li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/1.png" width="137"></div>
		Надежность</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/2.png" width="137"></div>
		Ответственность</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/3.png" width="137"></div>
		Сервис</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/4.png" width="137"></div>
		Доставка</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/5.png" width="137"></div>
		Гарантия</li>
	</ul></li>
	<li>
	<ul class="why-we-inner"><li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/6.png" width="137"></div>
		Мы - первые!</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/7.png" width="137"></div>
		Скидки</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/8.png" width="137"></div>
		Работаем 24 часа.</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/9.png" width="137"></div>
		Европейское качетсво</li>
		<li>
		<div class="why-we-img"><img alt="" height="137" src="images/why-we-list/10.png" width="137"></div>
		Любая сложность</li>
	</ul></li>
</ul></div>
		</div>
		
		
		
		
		
		<div class="work-sheme" id="sheme" contenteditable="true"><h2>Схема работы</h2>

<ul class="sheme-list clr">
	<li>
	<ul class="sheme-list-inner left-list">
		<li><img alt="" height="101" src="images/sheme-work/l-1.gif" width="101"><span>Присылаете заявку</span></li>
		<li><img alt="" height="101" src="images/sheme-work/l-2.gif" width="101"><span>Согласовываем способ оплаты</span></li>
		<li><img alt="" height="101" src="images/sheme-work/l-3.gif" width="101"><span>Выставляем счет</span></li>
	</ul>
	</li>
	<li class="l-right">
	<ul class="sheme-list-inner right-list">
		<li><span>Согласовываем необходимые объемы</span><img alt="" height="101" src="images/sheme-work/r-1.gif" width="101"></li>
		<li><span>Согласовываем варианты отгрузки</span><img alt="" height="101" src="images/sheme-work/r-2.gif" width="101"></li>
		<li><span>Отгружаем сигареты</span><img alt="" height="101" src="images/sheme-work/r-3.gif" width="101"></li>
	</ul>
	</li>
</ul>
</div>
		<div class="reviews" id="reviews" contenteditable="true">
			<h2>Отзывы</h2>
			<ul class="reviews-list"><li>
					<div class="rev-img">
						<img src="images/reviews/sigareti_optom_1.jpg" alt="" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Покупатель сигарет из р.Татарстан</h3>
						<span class="per-info">Казань</span>
						<span class="per-info">Рашит</span>
						<p>Никогда не подумал бы, что бывает такой высокий сервис и отзывчивость к клиентам. 
						За много лет работы случалось всякое, но в этой компании девиз - "Клиент всегда прав!" работает на все сто! 
						И вот что я скажу - даже если я найду гдето дешевле, никогда не закажу, т.к. такой сервис как в этой компании я никогда и нигде больше не видел.</p>
					</div>
				</li>
				<li>
					<div class="rev-img">
						<img src="images/reviews/sigareti_optom_2.jpg" alt="" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Оптовый покупатель сигарет из Белгородской области</h3>
						<span class="per-info">Губкин</span>
						<span class="per-info">Николай</span>
						<p>Работаю с этой компанией уже больше 3х лет. Цены всегда адекватные, делают скидки от объема. Всегда оперативно решают все вопросы. Молодцы!</p>
					</div>
				</li>
				<li>
					<div class="rev-img">
						<img src="images/reviews/sigareti_optom_3.jpg" alt="" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Покупатель сигарет из Бурятского АО</h3>
						<span class="per-info">Улан-Удэ</span>
						<span class="per-info">Надым</span>
						<p>Все честно и оперативно. Сделал заявку на сигареты, через 15 минут созвонились, обговорили условия поставки. 
						После чего я оплатил вместе с доставкой и через 5 дней сигареты были уже у меня! Рекомендую!</p>
					</div>
				</li>
				<li>
					<div class="rev-img">
						<img src="images/reviews/sigareti_optom_4.jpg" alt="" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Покупатель сигарет из Новосибирской области</h3>
						<span class="per-info">Новосибирск</span>
						<span class="per-info">Дмитрий</span>
						<p>Компания произвела на меня очень хорошее впечатление. Я не разочаровался! Лучший сервис по продаже сигарет!</p>
					</div>
				</li>
			</ul></div>
		<div class="contacts-info clr" id="contacts">
			<div id="ib-block-cont" contenteditable="true"><h2>Контактная информация</h2></div>
			<div class="map-column">
			    
			    <script type="text/javascript" charset="utf-8" 
			 async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4f03fcea4187dfb9658c31a96d8b84b811d7421bb2e87cb1cdffc3433c412644&amp;width=635&amp;height=357&amp;lang=uk_UA&amp;scroll=true"></script>
			    
			</div>
			
			
			<div class="contacts-column">
				
				<address class="bottom-contacts">
					<?php if ($ini['address']) { ?><span class="contacts-title">Адрес:</span>
					
					<span><?php print $ini['address']; ?></span>
					<?php } ?><?php if ($ini['phone']) { ?>
					
					<span class="contacts-title">Телеграм:</span>
					<span>
					    <?php print $ini['phone']; ?> </span> 
					    
					    <span class="contacts-title">Только ТЕЛЕГРАМ:</span>
					<span>
					    <?php print $ini['phone2']; ?> </span>
					    
					    <?php } ?>
					    
					    
					    
					
					<span class="contacts-title">Электронная почта:</span>
					<span>zakaz@sigareti-optom-v-rossii.ru (для корректного и оперативного ответа просим отправлять заявки через форму обратной связи или в Телеграм)</span>
					
					
					
					
					</address>
				<a href="#" class="blue-btn call-request-btn bottom-btn">Обратный звонок</a>
				<div class="delivery-info" id="ib-block-delivery" contenteditable="true">
					<span class="contacts-title">Условия доставки сигарет:</span>
					<span>Любая партия сигарет до терминала транспортной компании бесплатно</span>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="copyright">
				<p>© <?php print $ini['company_name'] . ', ' . date('Y'); ?></p>
			</div>
			
			
			
			
			
			
			
				<div class="developer">
				<p>Лэндинг сделан <a href="http://ya.ru/" target="_blank">Руками мастеров</a></p>
			</div>
			
		</div>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Мы чтим закон. </br> 
		&nbsp&nbsp! Согласно Федеральному закону от 04.05.2011 № 99-ФЗ «О лицензировании отдельных видов деятельности» оптовая и розничная торговля сигаретами и табачной продукцией лицензированию не подлежит.</br> 
		
		&nbsp&nbsp* Мы соблюдаем федеральный закон от 23.02.2013 N 15-Ф3 "Об охране здоровья граждан от воздействия окружающего табачного дыма и последствий потребления табака", и не продаём табачную продукцию несовершеннолетним лицам.</br> 
		
		
		
	</div>
	
	
	
	
	<!--end wrapper-->
	
	<div class="modals">
		<div class="overlay"></div>
		<div class="modal recall-modal">
			<a href="#" class="close-btn"></a>
			
			
		<form action="form/form.php" method="POST" class="modal-form callback-form">
		<input type="hidden" name="type" value="call_request">
			
			<p><input type="text" name="name" class="name" placeholder="Ваше имя"></p>
			<p><input type="text" name="phone" class="phone phone-mask required" placeholder="Ваш телефон"></p>
			<p><input type="text" name="email" class="email email-mask required" placeholder="Ваша почта"></p>
			<script type="text/javascript" src="js/captcha.js"></script>
			<p><button type="submit" class="blue-btn modal-btn" name="submit">Заказать звонок</button></p>
			</form>
		
		</div>
		
		<div class="modal thanks1-modal">
			<h3 class="form-title">Спасибо!</h3>
			<a href="#" class="close-btn"></a>
			<p class="call-you">Ваша заявка принята!</p>
		</div>
		
		<div class="modal thanks2-modal">
			<h3 class="form-title">Спасибо!</h3>
			<a href="#" class="close-btn"></a>
			<p class="call-you">Мы перезвоним вам в ближайшее время!</p>
		</div>
	</div>
	<?php if ($ini['body_code']) include($ini['body_code']); ?><?php include 'functions_html.php'; ?>
	
	

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47013231 = new Ya.Metrika({
                    id:47013231,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47013231" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
	
	
	
	
	
	
	<!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t14.16;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+";"+Math.random()+
"' alt='' title='LiveInternet: number of pageviews for 24 hours,"+
" of visitors for 24 hours and for today is shown' "+
"border='0' width='88' height='31'><\/a>")
</script><!--/LiveInternet-->
	
	<!-- Скрипт для модального окна определяющий время появления окна -->
    <script type="text/javascript">
	var delay_popup = 2000;
	setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
</script>
<!-- Скрипт для модального окна  -->
	
	
	</body></html>
