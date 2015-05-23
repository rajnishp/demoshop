<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-content ">
   <div id="content">
      
      <div class="std">
         <div class="custom-block">
            <div class="row no-space">
               <div class="column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a title="" href="<?= $BASE ?>index.php/#">
                        <img src="<?= $BASE ?>static/media/wysiwyg/custom-1.jpg" alt="" />
                    </a>
                </div>
               <div class="column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a title="" href="<?= $BASE ?>index.php/#">
                        <img src="<?= $BASE ?>static/media/wysiwyg/custom-2.jpg" alt="" />
                    </a>
                </div>
            </div>
         </div>
      </div>
      
      <div class="contentBottom">
         <div class="0 block producttabs">
            
            <div class="tab-nav">
               <ul class="nav nav-tabs" id="producttabs932644420">
              <?php  if (!isset($categoriesProducts)) {?>
                  <li class="tab-news"><a href="#tab-news932644420" data-toggle="tab">New Arrival </a></li>
                  <li class="tab-featured"><a href="#tab-featured932644420" data-toggle="tab">Special Sale</a></li>
               <?php } else {?>
                  <li class="tab-news"><a href="#tab-news932644420" data-toggle="tab">Available Products </a></li>
                  <?php 
                     $latest = $categoriesProducts;
                  }?>
               </ul>
            </div>
            
            <div class="tab-content">
               <div class="tab-pane box-products  tabcarousel932644420 slide carousel" id="tab-news932644420">
                  <div class="carousel-inner ">
                     <div class="item first active product-grid no-margin">
                        <div class="row products-row">
                           <!-- //single product in row -->
                           <?php foreach ($latest as $key => $value) {
                              
                            ?>
                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item first product-col  ">
                              <div class="wrap-item">
                                 <div class="product-block">
                                    
                                    <div class="product-meta product-shop">
                                       
                                       <div class="image ">
                                          <span class="new-icon"><span>New</span></span>
                                          <div class="product-img img">
                                             <a href="<?php echo "/". $this -> storeName ."/category/". $this -> categorisName."/product/". $value -> getId() ; ?>" title="<?php echo $value -> getName(); ?> " class="product-image img">
                                             <img src="<?php echo $value -> getImageLink(); ?>" width="200" height="200" alt="<?php echo $value -> getName(); ?>  " />
                                             </a>
                                           
                                          </div>
                                       </div>
                                       
                                       <h3 class="product-name name"><a href="<?php echo "/". $this -> storeName ."/category/". $this -> categorisName."/product/". $value -> getId() ; ?>" title="Quisque in arcu"><?php echo $value -> getName(); ?></a></h3>
                                       <div class="price" >
                                          <div class="price">
                                             <div class="price-box">
                                                <p class="old-price">
                                                   <span class="price-label">Regular Price:</span>
                                                   <span class="price" id="old-price-22_tabshome_clone_news">
                                                   <?php echo $value -> getPricesell(); ?>                </span>
                                                </p>
                                                <p class="special-price">
                                                   <span class="price-label">Special Price</span>
                                                   <span class="price" id="product-price-22_tabshome_clone_news">
                                                   <?php echo $value -> getPricesell(); ?>                </span>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       
                                    </div>

                                    <div class="action">
                                       <button type="button" title="Add to Cart" class="btn btn-shopping-cart" onclick="addToCartCS(<?= $value -> getId() ?>,'<?= $value -> getName() ?>', <?= $value -> getPricesell() ?>)"><span><span>Add to Cart</span></span></button>
                                       <a class="a-quickview ves-colorbox cboxElement" href="<?php echo "/". $this -> storeName ."/category/". $this -> categorisName."/product/". $value -> getId() ; ?>"><span>Quick View </span></a>
                                    </div>

                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                           <!-- //end of single product in row -->

                         
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
               <!-- End of New Arrived Tab, 3 product Rows each with 4 product in row  -->


               <div class="tab-pane box-products  tabcarousel932644420 slide carousel" id="tab-featured932644420">
                  <div class="carousel-inner ">
                     <div class="item first active product-grid no-margin">
                        <div class="row products-row">
                            <?php foreach ($maxSavings as $key => $value) {
                              
                            ?>
                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 _item first product-col  ">
                              <div class="wrap-item">
                                 <div class="product-block">
                                    
                                    <div class="product-meta product-shop">
                                       
                                       <div class="image ">
                                          <span class="new-icon"><span>New</span></span>
                                          <div class="product-img img">
                                             <a href="<?= $BASE ?>index.php/quisque-in-arcu.html" title="Quisque in arcu" class="product-image img">
                                             <img src="<?php echo $value -> getImageLink(); ?>" width="200" height="200" alt="Quisque in arcu" />
                                             </a>
                                           
                                          </div>
                                       </div>
                                       
                                       <h3 class="product-name name"><a href="<?= $BASE ?>index.php/quisque-in-arcu.html" title="Quisque in arcu"><?php echo $value -> getName(); ?></a></h3>
                                       <div class="price" >
                                          <div class="price">
                                             <div class="price-box">
                                                <p class="old-price">
                                                   <span class="price-label">Regular Price:</span>
                                                   <span class="price" id="old-price-22_tabshome_clone_news">
                                                   <?php echo $value -> getPricesell(); ?>                </span>
                                                </p>
                                                <p class="special-price">
                                                   <span class="price-label">Special Price</span>
                                                   <span class="price" id="product-price-22_tabshome_clone_news">
                                                   <?php echo $value -> getPricesell(); ?>                </span>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       
                                    </div>

                                    <div class="action">
                                       <button type="button" title="Add to Cart" class="btn btn-shopping-cart" onclick="addToCartCS(<?= $value -> getId() ?>,'<?= $value -> getName() ?>', <?= $value -> getPricesell() ?>)"><span><span>Add to Cart</span></span></button>
                                       <a class="a-quickview ves-colorbox cboxElement" href="<?= $BASE ?>index.php/vestempcp/quickview/view/id/22"><span>Quick View </span></a>
                                    </div>

                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                         
                       
                        </div>
                     
                        <script type="text/javascript">
                           function addToCartCS(productId, name, price){
                              
                              cartProduct = read_cookie("cartProduct");
                              if (cartProduct == null)
                                 cartProduct = [];
                              flag = 0;
                              var arrayLength = cartProduct.length;
                              var itemCount = 0;
                              var totleAmt = 0;
                              var cartItems = "";
                              for (var i = 0; i < arrayLength; i++) {
                                 
                                 if(cartProduct[i].product_id == productId){
                                       cartProduct[i].quantity++;
                                       flag = 1;
                                       
                                 }
                                 itemCount += cartProduct[i].quantity;
                                 totleAmt += cartProduct[i].quantity * cartProduct[i].price;
                                 amt = cartProduct[i].quantity * cartProduct[i].price;

                                 cartItems = cartItems + cartProduct[i].name  + " " + cartProduct[i].quantity + " * " + cartProduct[i].price + "  =  " + amt + '<br/>';
                              }
                              if(flag == 0){
                                 cartProduct.push({product_id:productId, quantity:1, name:name, price: price});
                                 itemCount ++;
                                 totleAmt += price;
                                 amt = cartProduct[i].quantity * cartProduct[i].price;
                                 cartItems += cartProduct[i].name + " " + 1 + " * " + price + "  =  "+ totleAmt + '<br/>';
                              }

                              document.getElementById("itemCount").innerHTML = "" + itemCount;
                              document.getElementById("totleAmt").innerHTML = "" + totleAmt;
                              document.getElementById("cartItems").innerHTML = cartItems;
                              
                              bake_cookie("cartProduct", cartProduct);

                             
                              
                              console.log(cartProduct);
                           }

                           function postOrder(){
                              cartProduct = read_cookie("cartProduct");
                              root = {};
                              contact_detail = {};
                              contact_detail.phone = document.getElementById("phoneno").value;
                              contact_detail.address = document.getElementById("address1").value;
                              root.cartProduct = cartProduct; 
                              root.contact_detail = contact_detail;
                              order = {};
                              order.root = root;
                              orderJsonString = JSON.stringify(order);
                              console.log(orderJsonString); 
                               jQuery.ajax({
                                  url: 'http://api.shop.dpower4.com/v0/order',
                                  dataType: 'json',
                                  type: 'post',
                                  contentType: 'application/json',
                                  data: orderJsonString,
                                  processData: false,
                                  success: function( data, textStatus, jQxhr ){
                                     delete_cookie("cartProduct");
                                      $('#response pre').html( JSON.stringify( data ) );
                                  },
                                  error: function( jqXhr, textStatus, errorThrown ){
                                      console.log( errorThrown );
                                  }
                              });

                           }


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
               <!-- End of Special Sale Tab -->

           
            </div>
         </div>
         <script type="text/javascript">
            <!--
               jQuery(function () {
                jQuery('#producttabs932644420 a:first').tab('show');
                jQuery('.tabcarousel932644420').carousel({interval:false,auto:false,pause:'hover'});
               })
               
               //-->
         </script>


      </div>
   </div>
</section>