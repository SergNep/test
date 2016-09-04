<?php defined('_ACCESS') or die('У вас нет прав для вызова данной страницы!'); ?>
 
<!doctype html>
<html>
<head>

<!-- UserAgent -->
<?php $agent=" ".$HTTP_USER_AGENT;
if (strpos($agent,"DISCo Pump") ||
    strpos($agent,"Offline Explorer") ||
    strpos($agent,"Teleport") ||
    strpos($agent,"WebZIP") ||
    strpos($agent,"WebCopier") ||
    strpos($agent,"Wget") ||
    strpos($agent,"FlashGet") ||
    strpos($agent,"CIS TE") ||
    strpos($agent,"DTS Agent") ||
    strpos($agent,"WebReaper") ||
    strpos($agent,"HTTrack") ||
    strpos($agent,"Web Downloader")) {
    die("Access Denied");
    } 
?>

<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $pageDescription; ?>" />
<meta name="keywords" content="<?php echo $pageKeywords; ?>" />

<!-- Charset & Cache -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="no-cache" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />

<meta name="author" content="hinex.ru">

<!-- Mobile Friendly -->

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Favicons --> 
<link rel="icon" href="img/favicons/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon" />

<!-- Styles -->

<link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/fonts.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/template.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/media.css" type="text/css" media="all" />

<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/nav.css" type="text/css" media="all" />  
<link rel="stylesheet" href="css/tabs.css" type="text/css" media="all" />   

<!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="css/lt7.css" media="screen"/>
<![endif]-->

<!--[if lt IE 9]>
    <script src="scr/css3-mediaqueries.js"></script>
    <script src="scr/html5shim.js"></script>
<![endif]-->

<!-- Libruaries & Fixes -->
<script type="text/javascript" src="scr/jquery-1.11.2.min.js"></script> 
<script type="text/javascript" src="scr/bootstrap.js"></script>
 
<!-- Bootstrap file -->
<script type="text/javascript" src="scr/bootstrap-filestyle.js"></script>
 
 
<!-- К началу страницы -->
<script type="text/javascript" src="scr/up.js"></script>

<!-- Ссылку в скопированное -->
<script type="text/javascript" src="scr/linkintocopy.js"></script>
 
<!-- Модалка -->
<script type="text/javascript" src="scr/jquery.colorbox.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
	    //Examples of how to assign the Colorbox event to elements
		$(".colorbox-img").colorbox({rel:'group1'});
		var client_w=document.body.clientWidth;
		if (client_w <= 460)
		  $(".colorbox-box").colorbox({inline:true, width:"95%"});
		else
		  $(".colorbox-box").colorbox({inline:true, width:"50%"});
				$('#filterLink > div > div .btn.btn-primary').on('click', function() {
		  $('#cboxClose').click();
		});

    });
</script> 
 
<!-- Табы -->
<script type="text/javascript">
	$(function() {
		$('.tabs').on('click', 'li:not(.current)', function() {
			$(this).addClass('current').siblings().removeClass('current')
				.parents('body').find('.box').eq($(this).index()).fadeIn(0).siblings('.box').hide();
		})
		$('.tabs2').on('click', 'li:not(.current)', function() {
			$(this).addClass('current').siblings().removeClass('current')
				.parents('body').find('.box2').eq($(this).index()).fadeIn(0).siblings('.box2').hide();
		})
	})
</script> 

<!-- Tooltip --> 
<script type="text/javascript">
	$(function(){
        $('.tt').tooltip();
    });
</script>
 
<!-- Прилипшая панель ( .sticky-active ) -->
<script src="scr/jquery.hc-sticky.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
        $('#header').hcSticky();
    });
</script>

<!-- Меню 
<script type="text/javascript">
	$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script> -->
 
<!-- Star rating -->
<script type='text/javascript' src="/scr/star-rating.js"></script>
<script type="text/javascript">
    $(function() {
    return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#stars').on('starrr:change', function(e, value){
    $('#count').html(value);
  });
  
  $('#stars-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});
</script>

<!-- Слайдер цены -->
<script type='text/javascript' src="/scr/jquery-ui.js"></script>
<script>
	$(function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] + " руб." );
			}
		});
		$( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) +
			" - " + $( "#slider-range" ).slider( "values", 1 ) +
			" руб." );
	});
</script>

<!-- Зебра списка -->
<script type="text/javascript">
  $(function(){
    $('.items-list li:even').addClass('stripe');
  });
</script>

<!-- Активный пункт на клик -->
<script type="text/javascript">
    $(function() {
        $('.nav-pills > li').click(function(){
            $('.nav-pills > li').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
 
</head>

<body class="page-name-<?php echo $pageName ?>">

    <div id="wrapper">
	
        <div class="w1">
		
		    <div class="container"> 
			
			    <a href="#" title=""><img class="img-responsive" src="../pics/banners/banner-big.jpg" alt="" /></a>	 
			 
			</div><!-- /.container --> 
		
		    <header id="header"> 
		
		        <div class="container">
 
					<nav class="navbar">
					
    					<div class="navbar-header">
    						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"><i class="fa fa-bars"></i></button>
							<a class="navbar-brand" href="/" title="ТвойПродукт"><img src="img/logo.png" alt="На главную" /></a> 
						</div>
	
						<div class="collapse navbar-collapse js-navbar-collapse">
						
					        <ul class="nav navbar-nav">
							
			                    <li class="dropdown mega-dropdown">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Компании <span class="caret"></span></a>				
				                    <ul class="dropdown-menu mega-dropdown-menu">
					                    <li>
    					                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/meat.png" alt="" /> <span>Мясо и птица</span></a></li>
					                            <li><a class="current" href="/category">Говядина</a></li>
					                            <li><a href="/category">Телятина</a></li>
					                            <li><a href="/category">Свинина</a></li>
					                            <li><a href="/category">Баранина</a></li>
					                            <li><a href="/category">Козлятина</a></li>
					                            <li><a href="/category">Кролик</a></li>
					                            <li><a href="/category">Фарши</a></li>
					                            <li><a href="/category">Шашлыки</a></li>
					                            <li><a href="/category">Пельмени</a></li>
					                            <li><a href="/category">Сало</a></li>
					                            <li><a href="/category">Колбасы</a></li>
					                            <li><a href="/category">Прочее</a></li> 
						                    </ul>
					                    </li>
					                    <li>
						                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/fish.png" alt="" /> <span>Рыба и <br />морепродукты</span></a></li> 
					                            <li><a href="/category">Свежая рыба</a></li>
					                            <li><a href="/category">Замороженная рыба</a></li>
					                            <li><a href="/category">Северная рыба</a></li>
					                            <li><a href="/category">Креветки</a></li>
					                            <li><a href="/category">Кальмары</a></li>
					                            <li><a href="/category">Мидии</a></li>
					                            <li><a href="/category">Крабы</a></li>
					                            <li><a href="/category">Прочее</a></li>							
						                    </ul>
					                    </li>
					                    <li>
						                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/milk.png" alt="" /> <span>Молочная <br />продукция</span></a></li>
									            <li><a href="/category">Молочные напитки</a></li>
					                            <li><a href="/category">Сметана</a></li>
					                            <li><a href="/category">Сыры</a></li>
					                            <li><a href="/category">Творог</a></li>
					                            <li><a href="/category">Йогурты</a></li>
					                            <li><a href="/category">Масло</a></li>
					                            <li><a href="/category">Десерты</a></li>
					                            <li><a href="/category">Прочее</a></li>                         
						                    </ul>
					                    </li>
                                        <li>
    					                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/hunny.png" alt="" /> <span>Пчелиная <br />продукция</span></a></li>
									    
					                            <li><a href="/category">Мёд</a></li>
					                            <li><a href="/category">Маточное молочко</a></li>
					                            <li><a href="/category">Трутневый гематоген</a></li>
					                            <li><a href="/category">Прополис</a></li>
					                            <li><a href="/category">Пчелиный воск</a></li>
					                            <li><a href="/category">Перга</a></li>
					                            <li><a href="/category">Прочее</a></li>
						                    </ul>
					                    </li>
                                        <li>
    					                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/veggie.png" alt="" /> <span>Овощи и <br />фрукты</span></a></li>
									 
					                            <li><a href="/category">Овощи</a></li>
					                            <li><a href="/category">Фрукты</a></li>
					                            <li><a href="/category">Зелень</a></li>
					                            <li><a href="/category">Ягоды</a></li>
					                            <li><a href="/category">Грибы</a></li>
					                            <li><a href="/category">Прочее</a></li>
						                    </ul>
					                    </li>
			                        </ul><!-- /.dropdown-menu -->				
			                    </li>
								
                                <li class="dropdown mega-dropdown">
    			                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Товары <span class="caret"></span></a>				
				                    <ul class="dropdown-menu mega-dropdown-menu">
					                    <li>
    					                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/meat.png" alt="" /> <span>Мясо и птица</span></a></li>
					                            <li><a class="current" href="/category">Говядина</a></li>
					                            <li><a href="/category">Телятина</a></li>
					                            <li><a href="/category">Свинина</a></li>
					                            <li><a href="/category">Баранина</a></li>
					                            <li><a href="/category">Козлятина</a></li>
					                            <li><a href="/category">Кролик</a></li>
					                            <li><a href="/category">Фарши</a></li>
					                            <li><a href="/category">Шашлыки</a></li>
					                            <li><a href="/category">Пельмени</a></li>
					                            <li><a href="/category">Сало</a></li>
					                            <li><a href="/category">Колбасы</a></li>
					                            <li><a href="/category">Прочее</a></li> 
						                    </ul>
					                    </li>
					                    <li>
						                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/fish.png" alt="" /> <span>Рыба и <br />морепродукты</span></a></li> 
					                            <li><a href="/category">Свежая рыба</a></li>
					                            <li><a href="/category">Замороженная рыба</a></li>
					                            <li><a href="/category">Северная рыба</a></li>
					                            <li><a href="/category">Креветки</a></li>
					                            <li><a href="/category">Кальмары</a></li>
					                            <li><a href="/category">Мидии</a></li>
					                            <li><a href="/category">Крабы</a></li>
					                            <li><a href="/category">Прочее</a></li>							
						                    </ul>
					                    </li>
					                    <li>
						                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/milk.png" alt="" /> <span>Молочная <br />продукция</span></a></li>
									            <li><a href="/category">Молочные напитки</a></li>
					                            <li><a href="/category">Сметана</a></li>
					                            <li><a href="/category">Сыры</a></li>
					                            <li><a href="/category">Творог</a></li>
					                            <li><a href="/category">Йогурты</a></li>
					                            <li><a href="/category">Масло</a></li>
					                            <li><a href="/category">Десерты</a></li>
					                            <li><a href="/category">Прочее</a></li>                         
						                    </ul>
					                    </li>
                                        <li>
    					                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/hunny.png" alt="" /> <span>Пчелиная <br />продукция</span></a></li>
									    
					                            <li><a href="/category">Мёд</a></li>
					                            <li><a href="/category">Маточное молочко</a></li>
					                            <li><a href="/category">Трутневый гематоген</a></li>
					                            <li><a href="/category">Прополис</a></li>
					                            <li><a href="/category">Пчелиный воск</a></li>
					                            <li><a href="/category">Перга</a></li>
					                            <li><a href="/category">Прочее</a></li>
						                    </ul>
					                    </li>
                                        <li>
    					                    <ul>
							                    <li class="dropdown-header"><a href="/category"><img src="../img/nav/icons/veggie.png" alt="" /> <span>Овощи и <br />фрукты</span></a></li>
									 
					                            <li><a href="/category">Овощи</a></li>
					                            <li><a href="/category">Фрукты</a></li>
					                            <li><a href="/category">Зелень</a></li>
					                            <li><a href="/category">Ягоды</a></li>
					                            <li><a href="/category">Грибы</a></li>
					                            <li><a href="/category">Прочее</a></li>
						                    </ul>
					                    </li>
			                        </ul><!-- /.dropdown-menu -->				
			                    </li> 
								
					        </ul><!-- /.navbar-nav -->
		
					        <ul class="nav navbar-nav navbar-right">
					
                                <li><a class="btn btn-default" href="/registration.php" title="Регистрация"><i class="fa fa-user-plus"></i><span>Регистрация компании</span></a></li>
						        <li><a class="colorbox-box btn btn-default" href="#login" title="Войти на сайт"><i class="fa fa-sign-in"></i><span>Вход</span></a></li>
						        <li><a class="btn btn-primary" href="/add-edit-product" title="Добавить свой товар"><i class="fa fa-plus-circle"></i><span>Добавить товар</span></a></li>
							
							        <div style="display:none">
							            <div id="login">
								
   							                <form action="" class="">
	
   							                    <div class="row"> 
								
            				                        <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											            <div class="input-group">
      										                <div class="input-group-addon"><i class="fa fa-user"></i></div> 
							                                <input class="form-control" type="text" value="" placeholder="Логин" />	
    										            </div><!-- /.input-group -->
           				                            </span><!-- /.col-lg-6 -->
								
            				                        <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											            <div class="input-group">
      										                <div class="input-group-addon"><i class="fa fa-key"></i></div> 
							                                <input class="form-control" type="password" value="" placeholder="Пароль" />
    										            </div><!-- /.input-group --> 	
            				                        </span><!-- /.col-lg-6 -->
								
            				                        <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							                            <button class="btn btn-primary">Войти</button>	
            				                        </span><!-- /.col-lg-6 -->
			
							                        <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							                            <a class="colorbox-box label" href="#forgot-password" title="Напомнить пароль">Забыли пароль?</a>
   							                        </span><!-- /.col-lg-6 -->
								
   							                    </div><!-- /.row -->

   							                </form><!-- /. -->
									
							            </div>
							        </div><!-- /.colorbox-box -->
							
							        <div style="display:none">
							            <div id="forgot-password">
								
   							                <form action="" class="forgot-password-form">
									
									            <div class="row">
											
							                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
							   	                        <input class="form-control" type="text" value="" placeholder="Введите ваш e-mail" />
							                        </div><!-- /.col-lg-8 -->
						
							                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							    	                   <button class="btn btn-primary">Напомнить</button>
							                        </div><!-- /.col-lg-4 -->
										
									            </div><!-- /.row -->
                                
   							                </form><!-- /.forgot-password-form --> 
									
							            </div>
						            </div><!-- /.colorbox-box -->
								
						        </li>
						
                                <!-- <li><a class="btn btn-primary" href="/account" title="Ваш аккаунт">Название компании</a></li>
						
                                <li><a href="/registration" title="Редактировать персональные данные"><i class="fa fa-cog"></i></a></li>
                       
					            <li><a class="btn btn-default" href="/" title=""><i class="fa fa-sign-out"></i><span>Выход</span></a></li> -->
						
					        </ul><!-- /. --> 
					
					    </div><!-- /.nav-collapse -->
						
					</nav><!-- /.navbar -->
 
			    </div><!-- /.container -->
			
			</header><!-- /#header -->