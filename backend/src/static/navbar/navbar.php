<section id="header" class="header">
   <div id="header-main">
      <div class="container">
         <div class="quick-login-form">
            <form action="http://venusdemo.com/magento/harvest/index.php/customer/account/loginPost/" method="post" id="login-form">
               <input name="form_key" type="hidden" value="Qc95WkBksJV51fI6" />
               <div class="content">
                  <ul class="form-list">
                     <li>
                        <label for="email" class="required"><em>*</em>Email Address</label>
                     </li>
                     <li>
                        <div class="input-box">
                           <input type="text" name="login[username]" value="" id="email" class="input-text required-entry validate-email" title="Email Address" />
                        </div>
                     </li>
                     <li>
                        <label for="pass" class="required"><em>*</em>Password</label>
                     </li>
                     <li>
                        <div class="input-box">
                           <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password" />
                        </div>
                     </li>
                     <li>
                        <button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Login</span></span></button>
                     </li>
                     <li>
                        <a href="http://venusdemo.com/magento/harvest/index.php/customer/account/forgotpassword/" class="link password">Forgot Your Password?</a>
                     </li>
                     <li>
                        <a title="Create an Account" href="http://venusdemo.com/magento/harvest/index.php/customer/account/create/ " class="link account">Create an Account</a>
                     </li>
                  </ul>
               </div>
            </form>
         </div>
         <div class="header">
            <div class="top-infor">
               <div class="row ">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 logo">
                     <div id="logo-theme" class="logo-store">
                        <strong class="logo-title">Corner Shop</strong>
                        <a href="http://venusdemo.com/magento/harvest/index.php/" title="Corner Shop" class="logo">
                        <img src="static/images/logo.png" alt="Corner Shop" /></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                   <form id="search_mini_form" action="http://venusdemo.com/magento/harvest/index.php/catalogsearch/result/" method="get">
                        <div class="form-search">
                           <!--<label for="search">Search:</label>-->
                           <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" />
                           <button type="submit" title="Search" class="button button-search">
                              <!--<span><span>Search</span></span> -->
                           </button>
                           <div id="search_autocomplete" class="search-autocomplete"></div>
                          
                        </div>
                     </form>
                     </div>
                  <div class="login col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="column pull-right">
                        <div class="quick-login"><span>Quick login<i class="fa fa-angle-up"></i></span></div>
                     </div>
                    
                    <!--  <div class="column pull-right">
                        <div class="currency ">
                           <ul>
                              <li class="euro">	
                                 <a href="http://venusdemo.com/magento/harvest/index.php/directory/currency/switch/currency/EUR/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC8,/"> 
                                 €				</a>			
                              </li>
                              <li class="us dollar active">	
                                 <a href="http://venusdemo.com/magento/harvest/index.php/directory/currency/switch/currency/USD/uenc/aHR0cDovL3ZlbnVzZGVtby5jb20vbWFnZW50by9oYXJ2ZXN0L2luZGV4LnBocC8,/"> 
                                 $				</a>			
                              </li>
                           </ul>
                        </div>
                     </div> -->
                    
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-9">
                     <div class="cart-top pull-right">
                        <div class="clearfix" id="cart">
                           <div class="heading">
                              <div class="cart-inner">				
                                 <span class="icon-bag">
                                 <span class="title">Cart</span>	
                                 </span>						
                                 <a href="javascript:;" title="Shopping cart">
                                 <span id="cart-total"><span id="itemCount" >0</span> item(s) - <span class="price"><span id="totleAmt">0.00 </span>Rs</span></span> 
                                 </a>
                              </div>
                           </div>
                           <div class="content">
                              <div class=" block-cart">
                                 <div class="block-content">
                                    <div id="cartItems">You have no items in your shopping cart.</div>
                                    <div class="actions">

                                       <button type="button" title="Checkout" class="button"><span><span>Checkout</span></span></button>
                                       <a class="view-cart" href="order" title="View cart">View cart</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <script type="text/javascript">
                           text_confirm_delete_item = "Are you sure you would like to remove this item from the shopping cart?";
                           var text_cart_total = "%total% item(s) - %price%"; 
                        </script>					
                     </div>
                  </div>
               </div>
            </div>
          
         </div>
      </div>
   </div>
   <script type="text/javascript">
      //<![CDATA[
      	var dataForm = new VarienForm('login-form', true);
      //]]>
      (function($) { 
      	$('.quick-login').bind('click',function(e) {
      	 //   alert("AAAAAAAAAA");
      		if($(this).hasClass('active')){
      			$('.quick-login-form').removeClass('open');
      			$(this).removeClass('active');
      		}else{
      			$(this).addClass('active');
      			$('.quick-login-form').addClass('open');
      		}
      	}); 
      })(jQuery);
   </script>
</section>
<section id="sys-notification">
   <div class="container">
      <div id="notification"></div>
   </div>
</section>