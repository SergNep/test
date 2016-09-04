<?php define( '_ACCESS', 1 ); ?>

<?php $pageName = "search"; ?>

<?php $pageTitle = "Результаты поиска"; ?>

<?php $pageDescription = ""; ?>

<?php $pageKeywords = ""; ?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
				
    <section class="search-results"> 
	
	    <div class="container">
			
		    <div class="row">
			
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			        <form class="" action="" role="form">  
	            
				        <div class="input-group input-group-lg">
               
				            <input type="text" class="form-control" placeholder="Введите название товара или компании" />
							
				            <div class="input-group-btn">
				                <button type="button" class="btn btn-primary">Найти</button>
				            </div><!-- /.btn-group -->
               
				        </div><!-- /.input-group --> 
			
			        </form>
				
				</div><!-- /.col-lg-12 -->
		
		    </div><!-- /.row -->
			
			<br />
			
		    <div class="row">
			
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				
				    <div class="row">
			
			            <div class="col-lg-5 col-md-6 col-sm-5 col-xs-5">
						    <label for="amount">Цена:</label>
							<input type="text" id="amount" readonly />
				        </div><!-- /.col-lg-5 --> 
			
			            <div class="col-lg-7 col-md-6 col-sm-7 col-xs-7">
						    <div id="slider-range"></div>
				        </div><!-- /.col-lg-7 --> 
		
		            </div><!-- /.row -->
 
				</div><!-- /.col-lg-6 -->
			
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		
			        <ul class="nav nav-pills pull-right">
	
			            <li><span>Глибина:</span></li>
			            <li class="active"><a href="#">Производство</a></li>
			            <li><a href="#">Фасовка</a></li>
 			            <li><a href="#">Доставка</a></li>

			        </ul>
 	
				</div><!-- /.col-lg-6 -->
		
		    </div><!-- /.row -->
			
			<br /> 
			
		    <div class="row">
			
			    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					
					<div class="row">
			
			    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
				
				    	    <ul class="tabs">
			
                        	    <li class="current col-lg-6 col-md-6 col-sm-6 col-xs-6"><div>Товары</div></li>
                        	    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div>Производители</div></li> 
				
                    	    </ul><!-- /.tabs -->
				
					    </div><!-- /.col-lg-12 --> 
			
                	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box visible">
				
				    	    <ul class="items-list">
					
					    	    <li>
						    	    <div class="row">
						        	    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3">
						            	    <a class="preview" href="" title="">
							            	    <span>2</span>
							            	    <img class="img-responsive" src="pics/products/product-1.jpg" alt="" />
							        	    </a>
							    	    </div><!-- /.col-lg-4 --> 
						        	    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
				                    	    <a href="/account" title="">КЕФИР ГРУПП</a>
					                	    <h4><a href="/product" title="">Золотое масло сливочное ГОСТ</a></h4>
					                	    <span class="pull-left">
					                    	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star-o"></i>
						                	    <i class="fa fa-star-o"></i>
					                	    </span>
					                	    <span class="pull-right">12 отзывов</span>
					                	    <div class="clearfix"></div>
					                	    <div class="pull-left">219 <i class="fa fa-rub"></i>/кг</div> 
							   	     </div><!-- /.col-lg-8 -->
								    </div><!-- /.row -->
							    </li> 
					
					    	    <li>
						    	    <div class="row">
						        	    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3">
						            	    <a class="preview" href="" title="">
							            	    <span>2</span>
							            	    <img class="img-responsive" src="pics/products/product-1.jpg" alt="" />
							        	    </a>
							    	    </div><!-- /.col-lg-4 --> 
						        	    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
				                    	    <a href="/account" title="">КЕФИР ГРУПП</a>
					                	    <h4><a href="/product" title="">Золотое масло сливочное ГОСТ</a></h4>
					                	    <span class="pull-left">
					                    	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star-o"></i>
						                	    <i class="fa fa-star-o"></i>
					                	    </span>
					                	    <span class="pull-right">12 отзывов</span>
					                	    <div class="clearfix"></div>
					                	    <div class="pull-left">219 <i class="fa fa-rub"></i>/кг</div> 
							   	     </div><!-- /.col-lg-8 -->
								    </div><!-- /.row -->
							    </li> 
					
					    	    <li>
						    	    <div class="row">
						        	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						            	    <a class="preview" href="" title=""> 
							            	    <img class="img-responsive" src="pics/banners/banner-small.jpg"alt="" />
							        	    </a>
							    	    </div><!-- /.col-lg-12 --> 
								    </div><!-- /.row -->
							    </li> 
					
					    	    <li>
						    	    <div class="row">
						        	    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3">
						            	    <a class="preview" href="" title="">
							            	    <span>2</span>
							            	    <img class="img-responsive" src="pics/products/product-1.jpg" alt="" />
							        	    </a>
							    	    </div><!-- /.col-lg-4 --> 
						        	    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
				                    	    <a href="/account" title="">КЕФИР ГРУПП</a>
					                	    <h4><a href="/product" title="">Золотое масло сливочное ГОСТ</a></h4>
					                	    <span class="pull-left">
					                    	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star-o"></i>
						                	    <i class="fa fa-star-o"></i>
					                	    </span>
					                	    <span class="pull-right">12 отзывов</span>
					                	    <div class="clearfix"></div>
					                	    <div class="pull-left">219 <i class="fa fa-rub"></i>/кг</div> 
							   	     </div><!-- /.col-lg-8 -->
								    </div><!-- /.row -->
							    </li> 
						
						    </ul><!-- /.items-list -->
							
							<a class="show-more" href="" title="">Показать еще</a>
			
                	    </div><!-- /.box -->
			
                	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">
				
				    	    <ul class="items-list">
					
					    	    <li>
						    	    <div class="row">  
						        	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
					                	    <h4><a href="/account" title="">КЕФИР ГРУПП</a></h4>
											<h5><a href="" title="">Московская обл., Москва, Мира, 1</a></h5> 
					                	    <span class="pull-left">
					                    	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star-o"></i>
						                	    <i class="fa fa-star-o"></i>
					                	    </span>
					                	    <span class="pull-right">12 отзывов</span>
					                	    <div class="clearfix"></div>
										    <p>Глибина производства: <span>Производство</span> + <span>Фасовка</span> + <span>Доставка</span></p> 
							   	        </div><!-- /.col-lg-12 -->
								    </div><!-- /.row -->
							    </li>
					
					    	    <li>
						    	    <div class="row">  
						        	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
					                	    <h4><a href="/account" title="">КЕФИР ГРУПП</a></h4>
											<h5><a href="" title="">Московская обл., Москва, Мира, 1</a></h5> 
					                	    <span class="pull-left">
					                    	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star-o"></i>
						                	    <i class="fa fa-star-o"></i>
					                	    </span>
					                	    <span class="pull-right">12 отзывов</span>
					                	    <div class="clearfix"></div>
										    <p>Глибина производства: <span>Производство</span> + <span>Фасовка</span> + <span>Доставка</span></p> 
							   	        </div><!-- /.col-lg-12 -->
								    </div><!-- /.row -->
							    </li> 
					
					    	    <li>
						    	    <div class="row">  
						        	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
					                	    <h4><a href="/account" title="">КЕФИР ГРУПП</a></h4>
											<h5><a href="" title="">Московская обл., Москва, Мира, 1</a></h5> 
					                	    <span class="pull-left">
					                    	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star"></i>
						                	    <i class="fa fa-star-o"></i>
						                	    <i class="fa fa-star-o"></i>
					                	    </span>
					                	    <span class="pull-right">12 отзывов</span>
					                	    <div class="clearfix"></div>
										    <p>Глибина производства: <span>Производство</span> + <span>Фасовка</span> + <span>Доставка</span></p> 
							   	        </div><!-- /.col-lg-12 -->
								    </div><!-- /.row -->
							    </li>   
						
						    </ul><!-- /.items-list --> 
							
							<a class="show-more" href="" title="">Показать еще</a>
			
                	    </div><!-- /.box -->     
								
            	    </div><!-- /.row -->
				
				</div><!-- /.col-lg-4 --> 
			
			    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
				
				    <h1>Найдено <span class="green">3409</span> предложений</h1>
					
					<div id="map"></div>
				
				</div><!-- /.col-lg-8 --> 
		
		    </div><!-- /.row -->

	    </div><!-- /.container -->  

    </section><!-- /.search-results -->  
				
    <section class="news">
	
	    <div class="container">
		
		    <h2>Новости</h2>
	
	        <div class="row">
			
			    <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 col-xs-12 col-xs-push-0">
				
				    <ul class="row tabs2">
			
                        <li class="current col-lg-6 col-md-6 col-sm-6 col-xs-6"><div>Новости рынка</div></li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div>Новости производителя</div></li> 
				
                    </ul><!-- /.tabs2 -->
				
				</div><!-- /.col-lg-6 -->
			
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box2 visible">
			
                    <div class="row"> 
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						    <h3><a href="/page" title="">Запрет на свиноводство</a></h3>
							<p>Правительство может запретить содержать свиней в хозяйствах, не принимающих меры биозащиты.</p>
							<span>12 сентября</span>
						</div><!-- /.col-lg-4 -->
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						    <h3><a href="/page" title="">Запрет на свиноводство</a></h3>
							<p>Правительство может запретить содержать свиней в хозяйствах, не принимающих меры биозащиты.</p>
							<span>12 сентября</span>
						</div><!-- /.col-lg-4 --> 
				
                    </div><!-- /.row -->
					
					<br />
			
                    <div class="row"> 
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						    <h3><a href="/page" title="">Запрет на свиноводство</a></h3>
							<p>Правительство может запретить содержать свиней в хозяйствах, не принимающих меры биозащиты.</p>
							<span>12 сентября</span>
						</div><!-- /.col-lg-4 -->
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						    <h3><a href="/page" title="">Запрет на свиноводство</a></h3>
							<p>Правительство может запретить содержать свиней в хозяйствах, не принимающих меры биозащиты.</p>
							<span>12 сентября</span>
						</div><!-- /.col-lg-4 --> 
				
                    </div><!-- /.row -->
			
                </div><!-- /.box -->
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box2">
			
                    <div class="alert alert-warning">
                        Пока <strong>новости</strong> отсутствуют.
                    </div>
			
                </div><!-- /.box -->     
								
            </div><!-- /.row --> 

	    </div><!-- /.container -->

    </section><!-- /.news -->  
	
<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>