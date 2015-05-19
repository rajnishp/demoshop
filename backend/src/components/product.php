<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-content ">
								<div class="breadcrumbs">
									<ol class="breadcrumb" >
										<li class="home" >
											<a href="<?= $HOME. "/". $this -> storeName  ?>" title="Home">Home</a>
										</li>
										<li class="category4">
											<a href="<?php echo $HOME . "/". $this -> storeName ."/category/" . $this -> categorisName; ?>" title=""><?= $this -> categorisName ?> </a>
										</li>
										<li class="product">
											<strong><?= $product -> getName(); ?></strong>
										</li>
									</ol>
								</div>
								<div id="content">
									<script type="text/javascript">
										var optionsPrice = new Product.OptionsPrice([]);
									</script>
									<div id="messages_product_view"></div>
									<div class="product-view product-info" itemscope itemtype="http://schema.org/Product">
										<div class="product-essential ">
											<form action="http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbD9fX19TSUQ9VQ,,/product/22/form_key/Qc95WkBksJV51fI6/" method="post" id="product_addtocart_form">
												<input name="form_key" type="hidden" value="Qc95WkBksJV51fI6" />
												<div class="no-display">
													<input type="hidden" name="product" value="22" />
													<input type="hidden" name="related_product" id="related-products-field" value="" />
												</div>
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-container product-img-box">
														<div class="image">
															<span class="onsale"><span>Sale</span></span>
															<span class="new-icon"><span>New</span></span>
															<a href="<?= $product -> getImageLink() ?>" title="<?= $product -> getName(); ?>" class="colorbox">
															<img id="image" itemprop="image" src="<?= $product -> getImageLink() ?>" alt="<?= $product -> getName(); ?>" title="<?= $product -> getName(); ?>" data-zoom-image="<?= $product -> getName(); ?>" class="product-image-zoom img-responsive"/>        </a>
														</div>
														<div id="image-additional" class="image-additional slide carousel more-views">
															<div class="carousel-inner" id="image-gallery-zoom">
																<div class="item row clearfix">
																	<a class="colorbox cboxElement col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/5/x5.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/5/x5.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/5/x5.png">
																	<img src="<?= $product -> getImageLink() ?>"  title="" alt="" data-zoom-image="<?= $product -> getImageLink() ?>" class="product-image-zoom img-responsive" />
																	</a>
																	<a class=" col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/4/x4_1.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/4/x4_1.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/4/x4_1.png">
																	<img src="<?= $product -> getImageLink() ?>"  title="" alt="" data-zoom-image="<?= $product -> getImageLink() ?>" class="product-image-zoom img-responsive" />
																	</a>
																	<a class="colorbox cboxElement col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/6/x6.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/6/x6.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/6/x6.png">
																	<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/87x87/9df78eab33525d08d6e5fb8d27136e95/x/6/x6.png"  title="" alt="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/6/x6.png" class="product-image-zoom img-responsive" />
																	</a>
																	<a class="colorbox cboxElement col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/7/x7.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/7/x7.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/7/x7.png">
																	<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/87x87/9df78eab33525d08d6e5fb8d27136e95/x/7/x7.png"  title="" alt="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/7/x7.png" class="product-image-zoom img-responsive" />
																	</a>
																</div>
																<div class="item row clearfix">
																	<a class="colorbox cboxElement col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/8/x8.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/8/x8.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/8/x8.png">
																	<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/87x87/9df78eab33525d08d6e5fb8d27136e95/x/8/x8.png"  title="" alt="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/8/x8.png" class="product-image-zoom img-responsive" />
																	</a>
																	<a class="colorbox cboxElement col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/3/x32_3.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/3/x32_3.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/3/x32_3.png">
																	<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/87x87/9df78eab33525d08d6e5fb8d27136e95/x/3/x32_3.png"  title="" alt="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/3/x32_3.png" class="product-image-zoom img-responsive" />
																	</a>
																	<a class="colorbox cboxElement col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/3/x33_3.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/3/x33_3.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/3/x33_3.png">
																	<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/87x87/9df78eab33525d08d6e5fb8d27136e95/x/3/x33_3.png"  title="" alt="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/3/x33_3.png" class="product-image-zoom img-responsive" />
																	</a>
																	<a class="colorbox cboxElement col-xs-3" href="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/2/x24_2.png" title="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/2/x24_2.png" data-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/378x378/9df78eab33525d08d6e5fb8d27136e95/x/2/x24_2.png">
																	<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/87x87/9df78eab33525d08d6e5fb8d27136e95/x/2/x24_2.png"  title="" alt="" data-zoom-image="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/thumbnail/9df78eab33525d08d6e5fb8d27136e95/x/2/x24_2.png" class="product-image-zoom img-responsive" />
																	</a>
																</div>
															</div>
															<!-- Controls -->
															<div class="carousel-controls">
																<div class="left carousel-control" href="#image-additional" data-slide="next">
																	<i class="fa fa-angle-left"></i>
																</div>
																<div class="right carousel-control" href="#image-additional" data-slide="prev">                           
																	<i class="fa fa-angle-right"></i>
																</div>
															</div>
														</div>
														<script type="text/javascript">
															jQuery('#image-additional .item:first').addClass('active');
															jQuery('#image-additional').carousel({interval:false})
														</script>
														<script type="text/javascript" src="http://venusdemo.com/magento/harvest/js/venustheme/ves_tempcp/jquery/elevatezoom/elevatezoom-min.js"></script>
														<script type="text/javascript">
															jQuery("#image").elevateZoom({
															         gallery:'image-additional', 
															   cursor: 'pointer', 
															   lensShape : "basic",
															   lensSize    : 150,
															   galleryActiveClass: 'active'});
															
														</script>
														<script type="text/javascript"><!--
															jQuery(document).ready(function() {
															  jQuery('.colorbox').colorbox({
															    width: '600', 
															    height: '600',
															    overlayClose: true,
															    opacity: 0.5,
															    rel: "colorbox"
															  });
															  jQuery('#image-gallery-zoom').find("a").click(function(){
															    if(jQuery(".product-img-box .image a").length > 0) {
															      var image_link = jQuery(this).attr("href");
															      jQuery(".product-img-box .image a").attr("href", image_link);
															    }
															  })
															});
															//--></script> 
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 product-shop product-view">
														<h1 itemprop="name"><?= $product -> getName() ?></h1>
														
														<div class="description" itemprop="description">
															<div class="short-description">
																<h2>Schnellübersicht</h2>
																<div class="std"><?= $product -> getDescription() ?> </div>
															</div>
															<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
																<meta itemprop="priceCurrency" content="USD"/>
																<p class="availability in-stock">
																	<meta itemprop="availability" href="http://schema.org/InStock" />
																	Verfügbarkeit: <span>Auf Lager</span>
																</p>
																<div class="price">
																	<div class="price-box">
																		<p class="old-price">
																			<span class="price-label">Regulärer Preis:</span>
																			<span class="price" id="old-price-22">
																			     <?= $product -> getPricesell() ?> Rs          </span>
																		</p>
																		<p class="special-price">
																			<span class="price-label">Special Price</span>
																			<span class="price" id="product-price-22">
																			<?= $product -> getPricesell() ?> Rs                </span>
																		</p>
																		<meta content="USD" itemprop="currency"/>
																		<meta content="110" itemprop="price"/>
																	</div>
																</div>
															</div>
														</div>
														<div class="product-extra">
															<div class="add-to-box">
																<div class="add-to-cart">
																	<div class="qty quantity-adder pull-left">
																		<div class="quantity-number pull-left">
																			<label for="qty">QTY:</label>	
																			<span class="add-down add-action fa fa-minus"></span>
																			<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Menge" class="input-text qty" />
																			<span class="add-up add-action fa fa-plus"></span> 
																		</div>
																		<!--	<div class="quantity-wrapper pull-left">
																			</div> -->
																	</div>
																</div>
																<button type="button" title="Zum Warenkobrn hinzufügen" class="btn button btn-cart" onclick="productAddToCartForm.submit(this)"><span>
																<span>Add to Cart</span></span></button>
																
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								<?php /*	<div class="tabs-group block row-fuild product-collateral">
										<div id="tabs" class="htabs col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<ul class="nav nav-tabs clearfix">
												<li> <a href="#tab-description">Description</a> </li>
												<li><a href="#tab-tags">Produkttags</a> </li>
												<li> <a href="#tab-reviews">Bewertungen</a> </li>
											</ul>
										</div>
										<div class="tab-contents col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div id="tab-description" class="tab-content block-description">
												<h2>Details</h2>
												<div class="std">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi	    
												</div>
												<br class="clear clr"/>
											</div>
											<div id="tab-tags" class="tab-content">
												<div class="box-collateral box-tags">
													<h2>Produkttags</h2>
													<form id="addTagForm" action="http://venusdemo.com/magento/harvest/index.php/tag/index/save/product/22/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/" method="get">
														<div class="form-add">
															<label for="productTagName">Fügen Sie Ihre Tags hinzu:</label>
															<div class="input-box">
																<input type="text" class="input-text required-entry" name="productTagName" id="productTagName" />
															</div>
															<button type="button" title="Tags hinzufügen" class="button" onclick="submitTagForm()">
															<span>
															<span>Tags hinzufügen</span>
															</span>
															</button>
														</div>
													</form>
													<p class="note">Verwenden Sie Leerzeichen um Tags zu trennen. Verwenden Sie Apostrophe (') für Phrasen.</p>
													<script type="text/javascript">
														//<![CDATA[
														    var addTagFormJs = new VarienForm('addTagForm');
														    function submitTagForm(){
														        if(addTagFormJs.validator.validate()) {
														            addTagFormJs.form.submit();
														        }
														    }
														//]]>
													</script>
												</div>
												<br class="clear clr"/>
											</div>
											<div id="tab-reviews">
												<div class="box-collateral box-reviews" id="customer-reviews">
													<div class="form-add">
														<h2>Schreiben Sie Ihr eigenes Review</h2>
														<form action="http://venusdemo.com/magento/harvest/index.php/review/product/post/id/22/" method="post" id="review-form">
															<input name="form_key" type="hidden" value="Qc95WkBksJV51fI6" />
															<h3>Sie schreiben ein Review für: <span>Quisque in arcu</span></h3>
															<h4>Wie bewerten Sie dieses Produkt? <em class="required">*</em></h4>
															<span id="input-message-box"></span>
															<div >
																<table class="data-table table-responsive" id="product-review-table">
																	<col />
																	<col width="1" />
																	<col width="1" />
																	<col width="1" />
																	<col width="1" />
																	<col width="1" />
																	<thead>
																		<tr>
																			<th>&nbsp;</th>
																			<th><span class="nobr">1 Stern</span></th>
																			<th><span class="nobr">2 Sterne</span></th>
																			<th><span class="nobr">3 Sterne</span></th>
																			<th><span class="nobr">4 Sterne</span></th>
																			<th><span class="nobr">5 Sterne</span></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<th>Value</th>
																			<td class="value"><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio" /></td>
																		</tr>
																		<tr>
																			<th>Quality</th>
																			<td class="value"><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio" /></td>
																		</tr>
																		<tr>
																			<th>Price</th>
																			<td class="value"><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio" /></td>
																			<td class="value"><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio" /></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<input type="hidden" name="validate_rating" class="validate-rating" value="" />
															<script type="text/javascript">decorateTable('product-review-table')</script>
															<ul class="form-list">
																<li>
																	<label for="nickname_field" class="required"><em>*</em>Nickname</label>
																	<div class="input-box">
																		<input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="" />
																	</div>
																</li>
																<li>
																	<label for="summary_field" class="required"><em>*</em>Zusammenfassung Ihres Reviews</label>
																	<div class="input-box">
																		<input type="text" name="title" id="summary_field" class="input-text required-entry" value="" />
																	</div>
																</li>
																<li>
																	<label for="review_field" class="required"><em>*</em>Überprüfen</label>
																	<div class="input-box">
																		<textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
																	</div>
																</li>
															</ul>
															<div class="buttons-set">
																<button type="submit" title="Review abschicken" class="button"><span><span>Review abschicken</span></span></button>
															</div>
														</form>
														<script type="text/javascript">
															//<![CDATA[
															    var dataForm = new VarienForm('review-form');
															    Validation.addAllThese(
															    [
															           ['validate-rating', 'Bitte wählen Sie jeweils eine der obenstehenden Bewertungen', function(v) {
															                var trs = $('product-review-table').select('tr');
															                var inputs;
															                var error = 1;
															
															                for( var j=0; j < trs.length; j++ ) {
															                    var tr = trs[j];
															                    if( j > 0 ) {
															                        inputs = tr.select('input');
															
															                        for( i in inputs ) {
															                            if( inputs[i].checked == true ) {
															                                error = 0;
															                            }
															                        }
															
															                        if( error == 1 ) {
															                            return false;
															                        } else {
															                            error = 1;
															                        }
															                    }
															                }
															                return true;
															            }]
															    ]
															    );
															//]]>
														</script>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Carousel -->
									<div id="upsell" class="carousel slide" data-interval="false">
										<div class="block block-collateral block-up-sell">
											<div class="block-title">
												<strong>
												<span>Upsell Products</span>
												</strong>				
												<!-- Controls -->
												<div class="carousel-controls">
													<a class="carousel-control left" href="#upsell" data-slide="prev">
													<i class="fa fa-angle-left"></i>
													</a>				
													<a class="carousel-control right" href="#upsell" data-slide="next">					
													<i class="fa fa-angle-right"></i>
													</a>
												</div>
											</div>
											<div class="carousel-inner block-content">
												<div class="item active products-grid no-margin">
													<div class="row products-row">
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item first product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<span class="new-icon"><span>Neu</span></span>
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/etiam-gravida.html" title="Etiam gravida" class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/4/x40.png" width="200" height="200" alt="Etiam gravida" />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/16/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/16/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/16/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/16/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/etiam-gravida.html" title="Etiam gravida">Etiam gravida</a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<span class="regular-price" id="product-price-16_clone">
																					<span class="price">1.320,00 $</span>                                    </span>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="1320" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/16/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/16/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/16/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/16"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<span class="new-icon"><span>Neu</span></span>
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/skinny-fit-suit-oxygen-canis.html" title="Skinny Oxygen Canis" class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/2/x20.png" width="200" height="200" alt="Skinny Oxygen Canis" />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/9/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/9/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/9/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/9/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/skinny-fit-suit-oxygen-canis.html" title="Skinny Oxygen Canis">Skinny Oxygen Canis</a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<span class="regular-price" id="product-price-9_clone">
																					<span class="price">99,99 $</span>                                    </span>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="99.99" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/9/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/9/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/9/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/9"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/accumsan-elit.html" title="Accumsan elit" class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/5/x5_2.png" width="200" height="200" alt="Accumsan elit" />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/5/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/5/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/5/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/5/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/accumsan-elit.html" title="Accumsan elit">Accumsan elit</a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<span class="regular-price" id="product-price-5_clone">
																					<span class="price">99,00 $</span>                                    </span>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="99" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/5/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/5/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/5/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/5"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item last product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<span class="onsale"><span>Verkauf</span></span>
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/proin-lectus-ipsum.html" title="Proin lectus ipsum" class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/7/x7_1.png" width="200" height="200" alt="Proin lectus ipsum" />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/21/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/21/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/21/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/21/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/proin-lectus-ipsum.html" title="Proin lectus ipsum">Proin lectus ipsum</a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<p class="old-price">
																						<span class="price-label">Regulärer Preis:</span>
																						<span class="price" id="old-price-21_clone">
																						430,00 $                </span>
																					</p>
																					<p class="special-price">
																						<span class="price-label">Special Price</span>
																						<span class="price" id="product-price-21_clone">
																						400,00 $                </span>
																					</p>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="400" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/21/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/21/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/21/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/21"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<script type="text/javascript">
														jQuery(document).ready(function() {
														    jQuery(".ves-colorbox").colorbox({
														            width: '60%', 
														            height: '80%',
														            overlayClose: true,
														            opacity: 0.5,
														            iframe: true, 
														    });
														    
														});
													</script>
												</div>
												<div class="item  products-grid no-margin">
													<div class="row products-row">
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item first product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<span class="onsale"><span>Verkauf</span></span>
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/pellentesque-habitant.html" title="Pellentesque habitant " class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/4/x43.png" width="200" height="200" alt="Pellentesque habitant " />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/17/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/17/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/17/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/17/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/pellentesque-habitant.html" title="Pellentesque habitant ">Pellentesque habitant </a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<p class="old-price">
																						<span class="price-label">Regulärer Preis:</span>
																						<span class="price" id="old-price-17_clone">
																						39,00 $                </span>
																					</p>
																					<p class="special-price">
																						<span class="price-label">Special Price</span>
																						<span class="price" id="product-price-17_clone">
																						38,00 $                </span>
																					</p>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="38" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/17/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/17/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/17/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/17"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/cras-neque-metus.html" title="Cras neque metus " class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/3/x38_1.png" width="200" height="200" alt="Cras neque metus " />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/15/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/15/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/15/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/15/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/cras-neque-metus.html" title="Cras neque metus ">Cras neque metus </a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<span class="regular-price" id="product-price-15_clone">
																					<span class="price">120,00 $</span>                                    </span>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="120" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/15/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/15/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/15/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/15"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/slim-fit-suit-in-black.html" title="Slim In black" class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/9/x9_3.png" width="200" height="200" alt="Slim In black" />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/6/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/6/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/6/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/6/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/slim-fit-suit-in-black.html" title="Slim In black">Slim In black</a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<span class="regular-price" id="product-price-6_clone">
																					<span class="price">34,00 $</span>                                    </span>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="34" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/6/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/6/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/6/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/6"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item last product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/nunc-facilisis.html" title="Nunc facilisis " class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/4/x40_2.png" width="200" height="200" alt="Nunc facilisis " />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/24/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/24/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/24/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/24/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/nunc-facilisis.html" title="Nunc facilisis ">Nunc facilisis </a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<span class="regular-price" id="product-price-24_clone">
																					<span class="price">69,99 $</span>                                    </span>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="69.99" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/24/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/24/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/nunc-facilisis.html')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/24"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<script type="text/javascript">
														jQuery(document).ready(function() {
														    jQuery(".ves-colorbox").colorbox({
														            width: '60%', 
														            height: '80%',
														            overlayClose: true,
														            opacity: 0.5,
														            iframe: true, 
														    });
														    
														});
													</script>
												</div>
												<div class="item  products-grid no-margin">
													<div class="row products-row">
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item first product-col  ">
															<div class="wrap-item">
																<div class="product-block">
																	<div class="product-meta product-shop">
																		<div class="image ">
																			<span class="onsale"><span>Verkauf</span></span>
																			<div class="product-img img">
																				<a href="http://venusdemo.com/magento/harvest/index.php/donec-non-est.html" title="Donec non est" class="product-image img">
																				<img src="http://venusdemo.com/magento/harvest/media/catalog/product/cache/3/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/x/1/x18.png" width="200" height="200" alt="Donec non est" />
																				</a>
																				<div class="add-to-links">
																					<a href="http://venusdemo.com/magento/harvest/index.php/wishlist/index/add/product/19/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Wishlist" class="link-wishlist" ><i class="fa fa-heart-o"></i></a>
																					<a href="http://venusdemo.com/magento/harvest/index.php/catalog/product_compare/add/product/19/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/form_key/Qc95WkBksJV51fI6/" data-toggle="tooltip" data-placement="top" data-original-title="Compare" class="link-compare"><i class="fa fa-signal"></i></a>
																				</div>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																				<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/19/category/4/">0 Review</a>
																				<span class="separator">|</span>
																				<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/19/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																		</div>
																		<h3 class="product-name name"><a href="http://venusdemo.com/magento/harvest/index.php/donec-non-est.html" title="Donec non est">Donec non est</a></h3>
																		<div class="price" >
																			<div class="price">
																				<div class="price-box">
																					<p class="old-price">
																						<span class="price-label">Regulärer Preis:</span>
																						<span class="price" id="old-price-19_clone">
																						800,00 $                </span>
																					</p>
																					<p class="special-price">
																						<span class="price-label">Special Price</span>
																						<span class="price" id="product-price-19_clone">
																						760,00 $                </span>
																					</p>
																					<meta content="USD" itemprop="currency"/>
																					<meta content="760" itemprop="price"/>
																				</div>
																			</div>
																		</div>
																		<!--                                <div class="rating">
																			<div class="ratings">
																			<div class="rating-box">
																			<div class="rating"></div>
																			</div>
																			<span class="separator">|</span>
																			<p class="rating-links">
																			<a href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/19/category/4/">0 Review</a>
																			<span class="separator">|</span>
																			<a class="add-review" href="http://venusdemo.com/magento/harvest/index.php/review/product/list/id/19/category/4/#review-form">Eigenes Review hinzufügen</a>
																			</p>
																			</div>
																			</div>
																			-->
																	</div>
																	<div class="action">
																		<button type="button" title="Zum Warenkobrn hinzufügen" class="btn btn-shopping-cart" onclick="addToCart('http://venusdemo.com/magento/harvest/index.php/checkout/cart/add/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC9xdWlzcXVlLWluLWFyY3UuaHRtbA,,/product/19/form_key/Qc95WkBksJV51fI6/')"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
																		<a class="a-quickview ves-colorbox cboxElement" href="http://venusdemo.com/magento/harvest/index.php/vestempcp/quickview/view/id/19"><span>Quick View </span></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<script type="text/javascript">
														jQuery(document).ready(function() {
														    jQuery(".ves-colorbox").colorbox({
														            width: '60%', 
														            height: '80%',
														            overlayClose: true,
														            opacity: 0.5,
														            iframe: true, 
														    });
														    
														});
													</script>
												</div>
											</div>
										</div>
									</div>
									<script type="text/javascript">	
										jQuery('.carousel').carousel({
											interval:6000,auto:true,pause:'hover', cycle: true
										});
									</script>
									<script type="text/javascript">
										jQuery('#tabs a').tabs();
									</script>
									*/ ?> 
									<div id="map-popup" class="map-popup" style="display:none;">
										<a href="#" class="map-popup-close" id="map-popup-close">x</a>
										<div class="map-popup-arrow"></div>
										<div class="map-popup-heading">
											<h2 id="map-popup-heading"></h2>
										</div>
										<div class="map-popup-content" id="map-popup-content">
											<div class="map-popup-checkout">
												<form action="" method="POST" id="product_addtocart_form_from_popup">
													<input type="hidden" name="product" class="product_id" value="" id="map-popup-product-id" />
													<div class="additional-addtocart-box">
													</div>
													<button type="button" title="Zum Warenkobrn hinzufügen" class="button btn-cart" id="map-popup-button"><span><span>Zum Warenkobrn hinzufügen</span></span></button>
												</form>
											</div>
											<div class="map-popup-msrp" id="map-popup-msrp-box"><strong>Preis:</strong> <span style="text-decoration:line-through;" id="map-popup-msrp"></span></div>
											<div class="map-popup-price" id="map-popup-price-box"><strong>Tatsächlicher Preis:</strong> <span id="map-popup-price"></span></div>
											<script type="text/javascript">
												//<![CDATA[
												    document.observe("dom:loaded", Catalog.Map.bindProductForm);
												//]]>
											</script>
										</div>
										<div class="map-popup-text" id="map-popup-text">Our price is lower than the manufacturer's &quot;minimum advertised price.&quot;  As a result, we cannot show you the price in catalog or the product page. <br /><br /> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.</div>
										<div class="map-popup-text" id="map-popup-text-what-this">Our price is lower than the manufacturer's &quot;minimum advertised price.&quot;  As a result, we cannot show you the price in catalog or the product page. <br /><br /> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.</div>
									</div>
									<script type="text/javascript">
										var lifetime = 3600;
										var expireAt = Mage.Cookies.expires;
										if (lifetime > 0) {
										    expireAt = new Date();
										    expireAt.setTime(expireAt.getTime() + lifetime * 1000);
										}
										Mage.Cookies.set('external_no_cache', 1, expireAt);
									</script>
								</div>
							</section>