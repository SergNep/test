<?php define( '_ACCESS', 1 ); ?>

<?php $pageName = "add-edit-product"; ?>

<?php $pageTitle = "Добавить / редактировать товар"; ?>

<?php $pageDescription = ""; ?>

<?php $pageKeywords = ""; ?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
				
    <section class="add-edit-product">
	
	    <div class="container">
			
		    <div class="row">
			
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <h1>Добавить / редактировать товар</h1>
		
                    <form action="" method="post" class="add-edit-form" role="form">
		
                        <div class="row">
				
				            <span class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <input class="form-control" type="text" value="" placeholder="Название товара" />
                            </span><!-- /.col-lg-8--> 
				
				            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <input class="form-control" type="text" value="" placeholder="Код продукта" />
                            </span><!-- /.col-lg-4-->   
								
                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
                                <input class="form-control" type="text" value="" placeholder="Упаковка" />
                            </span><!-- /.col-lg-4 -->  
								
                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
                                <input class="form-control" type="text" value="" placeholder="Вес (грамм.)" />
                            </span><!-- /.col-lg-4 -->  
								
                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
                                <input class="form-control" type="text" value="" placeholder="Срок годности (суток)" />
                            </span><!-- /.col-lg-4 -->   
							
							<span class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <h3>в 100 г.</h3>
                            </span><!-- /.col-lg-2 -->
							
							<span class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <input class="form-control" type="number" value="" placeholder="Ккал." />		
                            </span><!-- /.col-lg-2 --> 
							
                            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-2">	
                                <input class="form-control" type="number" value="" placeholder="Белки (%)" />
                            </span><!-- /.col-lg-2 -->  
							
                            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-2">	
                                <input class="form-control" type="number" value="" placeholder="Жиры (%)" />
                            </span><!-- /.col-lg-2 --> 
							
                            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-2">	
                                <input class="form-control" type="number" value="" placeholder="Углеводы (%)" />
                            </span><!-- /.col-lg-2 --> 
							
                            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-2">	
                                <input class="form-control" type="number" value="" placeholder="Сахароза (%)" />
                            </span><!-- /.col-lg-2 -->   
			
			                <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" rows="" cols="" placeholder="Дополнительная информация о компании"></textarea>		
                            </span><!-- /.col-lg-12 -->
								
                        </div><!-- /.row --> 
		
                        <div class="row" id="order-line_no'+x+'">
								
                            <span class="col-lg-2 col-md-3 col-sm-5 col-xs-6">	
                                <label>Изображения товара №1</label>
                            </span>
				
				            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
			                    <input type="file" class="filestyle" id="pic" data-input="false" />	
                            </span> 
								
                        </div><!-- /.row -->
				 
                        <div id="added1"></div>

                        <input class="btn btn-default add-more-pics" type="button" value="Добавить еще изображений" /> 
		
                        <div class="row">
								
                            <span class="col-lg-4 col-md-4 col-sm-6 col-xs-12">	
                                <button class="btn btn-primary btn-justified ">Сохранить изменения</button>
                            </span><!-- /.col-lg-4 -->
								
                        </div><!-- /.row -->

                    </form><!-- /.add-edit-form -->

                </div><!-- /.col-lg-12 -->    
								
            </div><!-- /.row --> 

	    </div><!-- /.container -->

    </section><!-- /.add-edit-product -->
	
<!-- Добавление доп изображений -->	  
<script type="text/javascript">

var added = 2;
 
function addedb($this) {
	var x = added+2;
	
	$this.before('<div class="row" id="order-line_no'+x+'"><a href="#" class="fa fa-remove" title="Удалить"></a><span class="col-lg-2 col-md-3 col-sm-5 col-xs-6"><label>Изображения товара №'+added+'</label></span><span class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><input type="file" class="filestyle" data-input="false" id="pic'+added+'" data-input="false" /></span></div><!-- /.row -->');
    $(":file").filestyle({input: false});
	added++;
        $("#added" + x +" input[type=file]").styler();
	initModule();
}

jQuery(document).ready(function(){

	$('.add-more-pics').click(function(e) {
		e.preventDefault();
		addedb($(this));
	});


});
$(document).on("click", ".fa-remove", function(e) {
    e.preventDefault();
    $(this).parent().remove();
});

</script>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>