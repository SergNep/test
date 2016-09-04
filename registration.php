<?php define( '_ACCESS', 1 ); ?>

<?php $pageName = "registration"; ?>

<?php $pageTitle = "Регистрация"; ?>

<?php $pageDescription = ""; ?>

<?php $pageKeywords = ""; ?>

<?php

    require_once($_SERVER["DOCUMENT_ROOT"].'/scr/city.php'); // подключаем список с городами
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

    // возвращаем список городов
    if ($action == 'getCity') {
        if (isset($city[$_GET['region']])) echo json_encode($city[$_GET['region']], JSON_FORCE_OBJECT); // возвраащем данные в JSON формате;
        else echo json_encode(array('Выберите область'), JSON_FORCE_OBJECT);

	    exit;
    }

    // session_start();
    // print_r($_SESSION);

?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
				
    <section class="registration">
	
	    <div class="container">
			
		    <div class="row">
			
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <h1>Регистрация</h1>
		
                    <form action="" method="post" class="registration-form" role="form">
		
                        <div class="row">
				
				            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input class="form-control" type="text" value="" placeholder="Название компании" />
                            </span><!-- /.col-lg-12-->   
								
                            <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
                                <input class="form-control" type="text" value="" placeholder="Введите e-mail" />
                            </span><!-- /.col-lg-6 --> 
								
                            <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" type="text" value="" placeholder="Телефон" />		
                            </span><!-- /.col-lg-6 --> 
								
                            <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" type="text" value="" placeholder="Пароль" />
                            </span><!-- /.col-lg-6 -->
								
                            <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
                                <input class="form-control" type="text" value="" placeholder="Пароль еще раз" />
                            </span><!-- /.col-lg-6 -->
								
                        </div><!-- /.row -->
							
                        <div class="row"> 
								
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <select class="form-control validate required" id="region_select1" class="form-control validate required" name="Persone[region]">	
			                        <option value="" placeholder="Выберите регион"></option>
			            <?php // заполняем список областей
			                foreach ($city as $region => $cityList) {
			                    echo '<option value="' . $region . '" '.(isset($_SESSION['auth']['region']) && $_SESSION['auth']['region']==$region ? ' selected="selected"' : null).'>' . $region . '</option>' . "\n";
			                }
			            ?>
								
                                </select> 
                            </div><!-- /.col-lg-4 -->
	
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <select class="form-control validate required" id="city_select1" name="Persone[city]" class="form-control validate required">
			                        <option value="" placeholder="Выберите область"></option>
			            <?php // заполняем список областей
			                if ($_SESSION['auth']['region']) {
				                foreach ($city[$_SESSION['auth']['region']] as $city) {
					                echo '<option value="' . $city . '" '.($_SESSION['auth']['city']==$city ? ' selected="selected"' : null).'>' . $city . '</option>' . "\n";
				                }
			                }
			            ?>
                                </select>   
                            </div><!-- /.col-lg-4 -->
								
                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-12">	
                                <input class="form-control" type="text" value="" placeholder="Адрес" />	
                            </span><!-- /.col-lg-4 -->
			
			                <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" rows="" cols="" placeholder="Дополнительная информация о компании"></textarea>		
                            </span><!-- /.col-lg-12 -->
								
                            <!-- <span class="col-lg-2 col-md-2 col-sm-2 col-xs-6">	
                                <label>Логотип компании</label>
                            </span>
				
				            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
			                    <input type="file" class="filestyle" data-input="false" />	
                            </span> -->
								
                            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			                    <label>Глубина производства:</label>	
                            </span><!-- /.col-lg-2 --> 
								
                            <span class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			                    <div class="checkbox">
				                    <input type="checkbox" id="proizv" /><label for="proizv">Производство</label> 
				                    <input type="checkbox" id="fasov" /><label for="fasov">Фасовка</label> 
				                    <input type="checkbox" id="dost" /><label for="dost">Доставка</label>
				                </div><!-- /.checkbox -->	
                            </span><!-- /.col-lg-6 --> 
				
				            <br />
			
                            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
			
                                <h4>Пользовательское соглашение:</h4>
					
					            <br />
								
                                <p>Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно говорил этот человек, открывший истину, которого я бы назвал зодчим счастливой жизни. Действительно, никто не отвергает, не презирает, не избегает наслаждений только из-за того, что это наслаждения, но лишь из-за того, что тех, кто не умеет разумно предаваться наслаждениям, постигают великие страдания. Равно как нет никого, кто возлюбил бы, предпочел и возжаждал бы само страдание только за то, что это страдание, а не потому, что иной раз возникают такие обстоятельства, когда страдания и боль приносят некое и немалое наслаждение.</p>	
				
                            </span><!-- /.col-lg-12 -->  
								
                            <span class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				                <div class="checkbox">
                                    <input id="soglasie" type="checkbox" checked="checked" /> <label for="soglasie">Я согласен с условиями пользовательского соглашения</label>	
					            </div><!-- /.checkbox -->
                            </span><!-- /.col-lg-6 --> 
				
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label for="captcha">Картинка каптчи</label>
                            </div><!-- /.col-lg-2 -->
						
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <input class="form-control" type="text" id="captcha" size="4" maxlength="4" value="" placeholder="Введите символы *"/> 
                            </div><!-- /.col-lg-2 -->  
								
                            <span class="col-lg-2 col-md-2 col-sm-4 col-xs-12">	
                                <button class="btn btn-primary btn-justified">Зарегистрироваться</button>
                            </span><!-- /.col-lg-2 -->
								
                        </div><!-- /.row -->

                    </form><!-- /.registration-form -->

                </div><!-- /.col-lg-12 -->    
								
            </div><!-- /.row --> 

	    </div><!-- /.container -->

    </section><!-- /.registration -->
 
<!-- Выбор города -->
<script type="text/javascript">
    // <![CDATA[
    $('#region_select1').change(function() {
        this1 = $(this);
        var citySelect = $('#city_select1');
        citySelect.attr('disabled', 'disabled'); // делаем список городов не активным

        // послыаем AJAX запрос, который вернёт список городов для выбранной области
        $.getJSON('/registration.php', {action:'getCity', region:this.value}, function(cityList){

            citySelect.html(''); // очищаем список городов

            // заполняем список городов новыми пришедшими данными
            $.each(cityList, function(i){
                citySelect.append('<option value="' + this + '">' + this + '</option>');
            });

            citySelect.prop('disabled', false); // делаем список городов активным

            // Перезагружаем Стайлер
            citySelect.trigger('refresh');
        });
    }); 
    // ]]>
</script> 
	
<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>