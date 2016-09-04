<?php define( '_ACCESS', 1 ); ?>

<?php $pageName = "contacts"; ?>

<?php $pageTitle = "Контакты"; ?>

<?php $pageDescription = ""; ?>

<?php $pageKeywords = ""; ?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
				
    <section class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

        <div class="title"><h1>Контакты</h1></div>
		
        <ul>
					
            <li><i class="fa fa-phone"></i> <a href="callto:+79000000000">+7 900 000 00 00</a></li>
            <li><i class="fa fa-envelope"></i> <a href="mailto:contact&#x0040;sitename.ru">contact&#x0040;sitename.ru</a></li>
						
        </ul>
		
		<div class="vcard" id="company">
			<div class="company-name">Компания <span class="fn org">Рога и копыта</span></div>
			<div class="adr">
				Адрес:
				<span class="postal-code">125153</span>,
				<span class="country-name">Россия</span>,
				<span class="locality">Москва</span>,
				<span class="street-address">Красная площадь, д.1</span>
			</div>
			<div>
			Телефон: <abbr title="+74952341234" class="tel">+7 (495) 234-12-34</abbr>
			</div>
			<div>
			Факс: <abbr title="+74952341234" class="tel">+7 (495) 234-12-34</abbr>
			</div>
			<a class="url" href=""></a>
		</div>

    </section><!-- /.col-lg-9 -->
	
<?php //include($_SERVER["DOCUMENT_ROOT"]."/inc/right.php"); ?> 
	
<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>