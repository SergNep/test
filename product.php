<?php define( '_ACCESS', 1 ); ?>

<?php $pageName = "product"; ?>

<?php $pageTitle = "Товар"; ?>

<?php $pageDescription = ""; ?>

<?php $pageKeywords = ""; ?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
				
    <section class="product">
	
	    <div id="map"></div> 
	
	    <div class="container"> 
			
		    <div class="row">
			
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			
			        <div class="left-side">
					
			            <div id="carousel" class="carousel slide" data-ride="carousel">
						
			                <div class="carousel-inner">
			
			                    <div class="item active">
								    <img src="pics/products/product-big-1.jpg" alt="" />
			                    </div>
				
			                    <div class="item">
								    <img src="pics/products/product-big-1.jpg" alt="" />
			                    </div> 
				
			                    <div class="item">
								    <img src="pics/products/product-big-1.jpg" alt="" />
			                    </div> 
				
			                    <div class="item">
								    <img src="pics/products/product-big-1.jpg" alt="" />
			                    </div> 
				
			                    <div class="item">
								    <img src="pics/products/product-big-1.jpg" alt="" />
			                    </div> 
				
			                    <div class="item">
								    <img src="pics/products/product-big-1.jpg" alt="" />
			                    </div>  
				
			                </div><!-- /.carousel-inner -->
			
			            </div><!-- /.carousel -->
		
			            <div class="clearfix">
						
			                <div id="thumbcarousel" class="carousel slide" data-interval="false">
							
			                    <div class="carousel-inner">
							
                                    <div class="item active">
                                        <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="pics/products/product-big-1.jpg" alt="" /></div>
                                        <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="pics/products/product-big-1.jpg" alt="" /></div>
                                        <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="pics/products/product-big-1.jpg" alt="" /></div>
                                    </div><!-- /item -->
				
                                    <div class="item">
                                        <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="pics/products/product-big-1.jpg" alt="" /></div>
                                        <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="pics/products/product-big-1.jpg" alt="" /></div>
                                        <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="pics/products/product-big-1.jpg" alt="" /></div> 
                                    </div><!-- /item -->
				
			                    </div><!-- /carousel-inner -->
			
			                    <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			                    <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
			
			                </div> <!-- /thumbcarousel -->
							
			            </div><!-- /clearfix -->
 
						<div class="price">
						    <strong>219 руб.</strong>
						    <p>за кг</p>
						</div><!-- /.price -->
						
						<div class="row">
						
						    <div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12 col-xs-push-0">
							    <a class="btn btn-primary btn-justified" href="" title="">В корзину</a>
							</div><!-- /.col-lg-10 -->  
						
						    <div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-12 col-xs-push-0">
							    <a class="btn btn-default btn-justified colorbox-box" href="#message" title="Отправить сообщение {Название компании}">Отправить сообщение</a> 
							</div><!-- /.col-lg-10 --> 
 
							<div style="display:none">
								<div id="message"> 
			 
   									<p>Поля, помеченные звездочкой <sup>*</sup> - обязательные.</p> 
							
								    <form action="" role="form">
						
						                <div class="row">
										 
									        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									 	        <textarea class="form-control" name="message" rows="" cols="">Текст сообщения *</textarea>
									        </div><!-- /.col-lg-12 -->
									
									        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									 	        <input class="form-control" type="text" name="name" value="Ваше имя *" />
									        </div><!-- /.col-lg-4 -->
										 
									        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									 	        <input class="form-control" type="text" name="email" value="Ваш e-mail *" data-type="mail" />
									        </div><!-- /.col-lg-4 -->  
										 
									        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									 	        <button class="btn btn-primary btn-justified">Отправить</button> 
									        </div><!-- /.col-lg-4 --> 

                                        </div><!-- /.row --> 

                                    </form>
 
					    		</div><!-- /#message -->
							</div><!-- /.colorbox-box --> 

                        </div><!-- /.row -->
						
						<h4>Состав <span>в 100г. продукта:</span></h4>
						
						<ul class="meter-list">
						
						<li class="row">
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <label>Белки <span>33%</span></label>
						    </div><!-- /.col-lg-6 -->
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <div class="meter"><span style="width: 33%"></span></div>
						    </div><!-- /.col-lg-6 -->

                        </li><!-- /.row --> 
						
						<li class="row">
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <label>Жиры <span>22%</span></label>
						    </div><!-- /.col-lg-6 -->
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <div class="meter"><span style="width: 22%"></span></div>
						    </div><!-- /.col-lg-6 -->

                        </li><!-- /.row --> 
						
						<li class="row">
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <label>Углеводы <span>15%</span></label>
						    </div><!-- /.col-lg-6 -->
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <div class="meter"><span style="width: 15%"></span></div>
						    </div><!-- /.col-lg-6 -->

                        </li><!-- /.row --> 
						
						<li class="row">
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <label>Сахароза <span>63%</span></label>
						    </div><!-- /.col-lg-6 -->
										 
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							    <div class="meter"><span style="width: 63%"></span></div>
						    </div><!-- /.col-lg-6 -->

                        </li><!-- /.row -->
						
						</ul><!-- /.meter-list -->	 
						
						<h4>Энергетическая ценность: <span>165 ккал</span></h4>
 
					</div><!-- /.left-side -->
				
				</div><!-- /.col-lg-4 --> 
			
			    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
					
					<a href="/account" title="">КЕФИР ГРУПП</a>
					
					<a class="btn btn-default colorbox-box pull-right" href="#complane" title="Пожаловаться на {название продукта}">Пожаловаться</a>
					
					<p>Код продукта : 922293, 922290, КЧ:2</p>
						 
					<div style="display:none">
						<div id="complane"> 
			 
   							<p>Поля, помеченные звездочкой <sup>*</sup> - обязательные.</p>
 
   							<form action="" method="post" id="" target="" role="form">
								
								<div class="row">
										 
									 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									 	 <textarea class="form-control" name="message" rows="" cols="">Текст сообщения *</textarea>
									 </div><!-- /.col-lg-12 -->
									
									 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									 	 <input class="form-control" type="text" name="name" value="Ваше имя *" />
									 </div><!-- /.col-lg-4 -->
										 
									 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									 	 <input class="form-control" type="text" name="email" value="Ваш e-mail *" data-type="mail" />
									 </div><!-- /.col-lg-4 -->  
										 
									 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									 	 <button class="btn btn-primary btn-justified">Отправить</button> 
									 </div><!-- /.col-lg-4 --> 

                                </div><!-- /.row -->
                                
   						    </form><!-- /# --> 
									
					    </div><!-- /#complane -->
					</div><!-- /.colorbox-box --> 
					
					<h1>Творог со сливками 5% жира, рассыпчатый</h1>
					
					<span class="pull-left">
					    <div id="stars-existing" class="starrr" data-rating='4'></div>
					</span>
					
					<span class="pull-right">12 отзывов</span>
					
					<div class="clearfix"></div>
					
					<br />
					
					<p>Изготовлен из нормализованного молока с использованием закваски, хлористого кальция, пепсина.</p>
  
					<table class="table">
					    <tr>
						    <td>Упаковка:</td>
							<td>к/п стакан</td>
						</tr>
					    <tr>
						    <td>Вес:</td>
							<td>250 грамм</td>
						</tr>
					    <tr>
						    <td>Срок годности, суток:</td>
							<td>72 часа (при t 4+-2)</td>
						</tr>
					</table>
					
					<p>
					    <img src="img/product-icons/icon-1.png" alt="" title="" /> 
						<img src="img/product-icons/icon-2.png" alt="" title="" /> 
						<img src="img/product-icons/icon-3.png" alt="" title="" /> 
					</p>
					
					<p>Взбитый творог с натуральными сливками из коровьего молока получил название творожный крем. Продукт имеет нежную однородную консистенцию, чистый вкус и аромат ванилина. Воздушный творожный крем, фото которого представлено в нашем каталоге, после производства не подвергается дополнительной температурной обработке. В результате удается сохранить максимум полезных свойств натурального сырья.</p>
				
				</div><!-- /.col-lg-8 --> 
		
		    </div><!-- /.row -->

	    </div><!-- /.container -->  

    </section><!-- /.product -->
	
	<section class="comments">
	
	    <div class="container">
	
            <h2>Комментарии: <span>100</span></h2>
			
		    <div class="row"> 
				
                <form class="col-md-12 col-md-12 col-sm-12 col-xs-12"> 	

                    <ul class="row">
				 
                        <li>
					 
                            <div class="col-md-1 col-sm-1 col-xs-4">
						 
                                <img class="tt" title="Логин пользователя" src="http://lorempixel.com/50/50/people/1" />
											 
                                <h4>Логин пользователя</h4>
											 
                            </div><!-- /.col-md-1 -->
						 
                            <div class="col-md-10 col-sm-10 col-xs-10">
						 
                                <p class="">Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно говорил этот человек, открывший истину, которого я бы назвал зодчим счастливой жизни.</p>
							 
                                <span class="text-muted">16.07.2015 - 22:41</span>
							 
                                <span class="pull-right">
							        <a href="#"><i class="fa fa-thumbs-up"></i> 22</a>
							        <a href="#"><i class="fa fa-thumbs-down"></i> 5</a>
                                </span>
							 
                            </div><!-- /.col-md-10 -->
						 
                            <div class="col-md-1 col-sm-1 col-xs-2">
						 
                                <span class="pull-right"><a href="#" class="tt btn btn-default" title="Ответить"><i class="fa fa-quote-left"></i></a></span>
							 
                            </div><!-- /.col-md-1 -->
						 
                        </li>
					 
                        <li>
					 
                            <div class="col-md-1 col-sm-1 col-xs-4">
						 
                                <img class="tt" title="Логин пользователя" src="http://lorempixel.com/50/50/people/2" />
											 
                                <h4>Логин пользователя</h4>
							 
                            </div><!-- /.col-md-1 -->
						 
                            <div class="col-md-10 col-sm-10 col-xs-10">
						 
                                <p class="">Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания.</p>
							 
                                <span class="text-muted">16.07.2015 - 22:41</span>
							 
							    <span class="pull-right">
							        <a href="#"><i class="fa fa-thumbs-up"></i> 22</a>
							        <a href="#"><i class="fa fa-thumbs-down"></i> 5</a>
						        </span>
							 
                            </div><!-- /.col-md-10 -->
						 
                            <div class="col-md-1 col-sm-1 col-xs-2">
						 
                                <span class="pull-right"><a href="#" class="tt btn btn-default" title="Ответить"><i class="fa fa-quote-left"></i></a></span>
							 
                            </div><!-- /.col-md-1 -->
						 
                        </li>
					 
                        <li>
                
                            <div class="col-md-1 col-sm-1 col-xs-4">
						 
                                <img class="tt" title="Логин пользователя" src="http://lorempixel.com/50/50/people/3" />
											 
                                <h4>Логин пользователя</h4>
							 
                            </div><!-- /.col-md-1 -->
						 
                            <div class="col-md-10 col-sm-10 col-xs-10">
						 
                                <p class="">Но чтобы вы поняли, откуда возникает это превратное представление людей, порицающих наслаждение и восхваляющих страдания, я раскрою перед вами всю картину и разъясню, что именно говорил этот человек, открывший истину.</p>
							 
                                <span class="text-muted">16.07.2015 - 22:41</span>
							 
                                <span class="pull-right">
							        <a href="#"><i class="fa fa-thumbs-up"></i> 22</a>
							        <a href="#"><i class="fa fa-thumbs-down"></i> 5</a>
                                </span>
							 
                            </div><!-- /.col-md-10 -->
						 
                            <div class="col-md-1 col-sm-1 col-xs-2">
						 
                                <span class="pull-right"><a href="#" class="tt btn btn-default" title="Ответить"><i class="fa fa-quote-left"></i></a></span>
							 
                            </div><!-- /.col-md-1 -->
				
                            <div class="col-md-12">
						 
                                 <ul class="row">
							 
                                     <li>
								 
                                         <div class="col-md-1 col-sm-1 col-xs-4">
						 
			                                 <img class="tt" title="Логин пользователя" src="http://lorempixel.com/50/50/people/4" />
											 
									         <h4>Логин пользователя</h4>
										 
                                         </div><!-- /.col-md-1 -->
									 
                                         <div class="col-md-10 col-sm-10 col-xs-10">
									 
                                             <p class="">Согласен на 100%.</p>
										 
                                             <span class="text-muted">16.07.2015 - 22:41</span>
										 
                                             <span class="pull-right">
							                     <a href="#"><i class="fa fa-thumbs-up"></i> 22</a>
							                     <a href="#"><i class="fa fa-thumbs-down"></i> 5</a>
                                             </span>
										 
                                         </div><!-- /.col-md-10 -->
									 
                                         <div class="col-md-1 col-sm-1 col-xs-2">
									 
                                             <span class="pull-right"><a href="#" class="tt btn btn-default" title="Ответить"><i class="fa fa-quote-left"></i></a></span>
										 
                                         </div><!-- /.col-md-1 -->
									 
                                     </li>
								 
                                 </ul><!-- /.row -->
					
                            </div><!-- /.col-md-12 -->
				
                        </li>
					 
                        <li>
                
                            <div class="col-md-1 col-sm-1 col-xs-4">
						 
                                <img class="tt" title="Логин пользователя" src="http://lorempixel.com/50/50/people/5" />
											 
                                <h4>Логин пользователя</h4>
							 
                            </div><!-- /.col-md-1 -->
						 
                            <div class="col-md-10 col-sm-10 col-xs-10">
						 
			                    <p class="">Но чтобы вы поняли, откуда возникает это превратное представление людей.</p>
							 
			                    <span class="text-muted">16.07.2015 - 22:41</span>
							 
                                <span class="pull-right">
							        <a href="#"><i class="fa fa-thumbs-up"></i> 22</a>
							        <a href="#"><i class="fa fa-thumbs-down"></i> 5</a>
                                </span>
							 
                            </div><!-- /.col-md-10 -->
						 
                            <div class="col-md-1 col-sm-1 col-xs-2">
						 
                                <span class="pull-right"><a href="#" class="tt btn btn-default" title="Ответить"><i class="fa fa-quote-left"></i></a></span>
							 
                            </div><!-- /.col-md-1 -->
						 
                        </li>
					 
                    </ul>
		
                    <div class="text-center">
				 
                        <ul class="pagination">
					 
                            <li class="disabled">
                                <a href="#" aria-label="Previous">
			                        <span aria-hidden="true">&laquo;</span>
			                    </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
			                    <a href="#" aria-label="Next">
			                        <span aria-hidden="true">&raquo;</span>
			                    </a>
                            </li>
						 
                        </ul><!-- /.pagination -->
					 
                    </div><!-- /.text-center -->
				 
                    <div class="alert alert-warning" role="alert">Ваш комментарий будет добавлен после проверки модератором</div>
				
				    <div class="row">
				
				        <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <input class="form-control" type="text" value="" placeholder="Ваш e-mail" />	
                        </span><!-- /.col-lg-12 -->
				
				        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			                <textarea class="form-control" placeholder="Текст вашего комментария"></textarea> 
					    </div><!-- /.col-lg-12 -->
				
				        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					        <button class="btn btn-primary btn-justified" type="button">Комментировать</button>
					    </div><!-- /.col-lg-4 -->
				
				    </div><!-- /.row -->
			 
                </form><!-- /. --> 
		
		    </div><!-- /.row -->

	    </div><!-- /.container --> 

    </section><!-- /.comments -->
	
	<section class="featured-products">
	
	    <div class="row">
			
		    <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 col-xs-12 col-xs-push-0">
				
			    <ul class="row tabs">
			
                    <li class="current col-lg-6 col-md-6 col-sm-6 col-xs-6">Похожие товары</li>
                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Другие товары производителя</li> 
				
                </ul><!-- /.tabs2 -->
				
			</div><!-- /.col-lg-6 -->
			
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box visible">
			
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
 
		            <ol class="carousel-indicators">
		                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                <li data-target="#carousel-example-generic" data-slide-to="1"></li> 
		            </ol><!-- /. -->
 
		            <div class="carousel-inner" role="listbox">
			
		                <div class="item active"> 

		                    <div class="container">
	
		                        <div class="row"> 
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 --> 
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 --> 
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->  
								
		                        </div><!-- /.row --> 

		                    </div><!-- /.container -->
	  
		                </div><!-- /.item -->
	
		                <div class="item"> 

		                    <div class="container">
	
		                        <div class="row"> 
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 --> 
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 --> 
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->
								
		                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
							
				                        <div class="product-item">
								
				                            <a class="preview" href="/product" title=""><img src="pics/products/product-1.jpg" alt="" /></a>
					                        <div class="clearfix"></div>
				                            <a href="/account" title="">КЕФИР ГРУПП</a>
					                        <h3><a href="/product" title="">Золотое масло сливочное ГОСТ </a></h3>
					                        <span class="pull-left">
					                            <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star"></i>
						                        <i class="fa fa-star-o"></i>
						                        <i class="fa fa-star-o"></i>
					                        </span>
					                        <span class="pull-right">12 отзывов</span>
					                        <div class="clearfix"></div>
					                        <div class="price">219 <i class="fa fa-rub"></i>/кг</div>
					                        <a class="btn btn-primary pull-right" href="" title="Купить {название товара}">Купить</a>
									
					                    </div><!-- /.product-item -->
					
		                            </div><!-- /.col-lg-4 -->  
								
		                        </div><!-- /.row --> 

		                    </div><!-- /.container -->
	  
		                </div><!-- /.item --> 
	
		            </div><!-- /.carousel-inner -->
 
		            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			
		            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
			
                </div><!-- /.carousel -->    
			
            </div><!-- /.box -->
				
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">
			
                <div class="container">
	
		            <div class="row"> 
								
		                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
						    <div class="alert alert-warning">
                                Пока <strong>товары</strong> отсутствуют.
                            </div>
					
		                </div><!-- /.col-lg-12 -->  
								
		            </div><!-- /.row --> 

		        </div><!-- /.container -->
			
            </div><!-- /.box -->     
								
        </div><!-- /.row -->
 
    </section><!-- /.featured-products -->  
				
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
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xxs-4">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-8">
						    <h3><a href="/page" title="">Запрет на свиноводство</a></h3>
							<p>Правительство может запретить содержать свиней в хозяйствах, не принимающих меры биозащиты.</p>
							<span>12 сентября</span>
						</div><!-- /.col-lg-4 -->
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xxs-4">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-8">
						    <h3><a href="/page" title="">Запрет на свиноводство</a></h3>
							<p>Правительство может запретить содержать свиней в хозяйствах, не принимающих меры биозащиты.</p>
							<span>12 сентября</span>
						</div><!-- /.col-lg-4 --> 
				
                    </div><!-- /.row -->
					
					<br />
			
                    <div class="row"> 
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xxs-4">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-8">
						    <h3><a href="/page" title="">Запрет на свиноводство</a></h3>
							<p>Правительство может запретить содержать свиней в хозяйствах, не принимающих меры биозащиты.</p>
							<span>12 сентября</span>
						</div><!-- /.col-lg-4 -->
					
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-xxs-4">
						    <a href="" title=""><img class="img-responsive" src="pics/news/news-1.jpg" alt="" /></a>
						</div><!-- /.col-lg-2 -->
					
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-8">
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