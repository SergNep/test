<?php define( '_ACCESS', 1 ); ?>

<?php $pageName = "add-edit-news"; ?>

<?php $pageTitle = "Добавить / редактировать новость"; ?>

<?php $pageDescription = ""; ?>

<?php $pageKeywords = ""; ?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
				
    <section class="add-edit-news">
	
	    <div class="container">
			
		    <div class="row">
			
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <h1>Добавить / редактировать новость</h1>
		
                    <form action="" method="post" class="add-edit-form" role="form">
		
                        <div class="row">
				
				            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input class="form-control" type="text" value="" placeholder="Название новости" />
                            </span><!-- /.col-lg-12-->  
							
			                <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" rows="" cols="" placeholder="Текст новости"></textarea>		
                            </span><!-- /.col-lg-12 -->
								
                        </div><!-- /.row --> 
		
                        <div class="row">
								
                            <span class="col-lg-2 col-md-3 col-sm-5 col-xs-6">	
                                <label>Превью новости</label>
                            </span>
				
				            <span class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
			                    <input type="file" class="filestyle" id="pic" data-input="false" />	
                            </span> 
								
                        </div><!-- /.row --> 
		
                        <div class="row">
								
                            <span class="col-lg-4 col-md-4 col-sm-6 col-xs-12">	
                                <button class="btn btn-primary btn-justified ">Сохранить изменения</button>
                            </span><!-- /.col-lg-4 -->
								
                        </div><!-- /.row -->

                    </form><!-- /.add-edit-form -->

                </div><!-- /.col-lg-12 -->    
								
            </div><!-- /.row --> 

	    </div><!-- /.container -->

    </section><!-- /.add-edit-news -->

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>