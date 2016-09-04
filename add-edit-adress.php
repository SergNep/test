<?php define( '_ACCESS', 1 ); ?>

<?php $pageName = "add-edit-adress"; ?>

<?php $pageTitle = "Добавить / редактировать адрес"; ?>

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
    //print_r($_SESSION);

?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
				
    <section class="add-edit-adress">
	
	    <div class="container">
			
		    <div class="row">
			
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <h1>Добавить / редактировать адрес</h1>
		
                    <form action="" method="post" class="registration-form" role="form"> 
							
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
								
                            <span class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			                    <label>Глубина производства:</label>	
                            </span><!-- /.col-lg-2 --> 
								
                            <span class="col-lg-6 col-md-6 col-sm-8 col-xs-8">
			                    <div class="checkbox">
				                    <input type="checkbox" id="proizv" /><label for="proizv">Производство</label> 
				                    <input type="checkbox" id="fasov" /><label for="fasov">Фасовка</label> 
				                    <input type="checkbox" id="dost" /><label for="dost">Доставка</label>
				                </div><!-- /.checkbox -->	
                            </span><!-- /.col-lg-6 --> 
				
				            <br /> 
								
                            <span class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
                                <button class="btn btn-primary btn-justified">Сохранить изменения</button>
                            </span><!-- /.col-lg-4 -->
								
                        </div><!-- /.row -->

                    </form><!-- /.registration-form -->

                </div><!-- /.col-lg-12 -->    
								
            </div><!-- /.row --> 

	    </div><!-- /.container -->

    </section><!-- /.add-edit-adress -->
 
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