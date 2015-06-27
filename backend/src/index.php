<?php
include_once "controllers/HomeController.class.php";
include_once "controllers/CategoryProductsController.class.php";
include_once "controllers/OrderController.class.php";
include_once "controllers/ProductController.class.php";
//include_once "components/base.php";


require_once 'utils/Util.php';
	require_once 'utils/Timer.php';
	require_once 'utils/ShopbookLogger.php';
	require_once 'cache/AppCacheRegistry.class.php';
	require_once 'exceptions/ApiException.class.php';
	require_once 'exceptions/UnauthorizedException.class.php';

/*

/shopnshop -> HomeController.class.php
/shopnshop/category/:name -> CategoryProductsController.class.php
/shopnshop/order -> OrderController.class.php
/shopnshop/category/:name/product/:name -> ProductController.class.php


*/

/* Setting up the app-configurations globally for use across classes */
global $configs;
$configs = json_decode (file_get_contents('collap-configs.json'), true);

/* Setting up the logger globally for use across classes */
global $logger;
$logger = new ShopbookLogger();
$logger -> enabled = true;
$logger -> debug ("Setting up ...");

$route = explode("/",$_SERVER[REQUEST_URI]);
//var_dump($route);


if ( count($route) <= 2 ){
	$homeController = new HomeController($route[1]?	$route[1]:dailyNeeds);
	$homeController -> render ();
}else {

	switch ($route[2]) {
		case 'category':
			if ( count($route) <= 4 ){
								
				$categoryProductsController = new CategoryProductsController($route[1], $route[3]);
				$categoryProductsController -> render();

			} else if ($route[4] == "product"){
				
				$productController = new ProductController($route[1], $route[3], $route[5]);
				$productController -> render ();
			}


			break;

		case 'order':
			$orderController = new OrderController($route[1]);
			$orderController -> process();
			$orderController -> render();
			break;
		
		
		
		default:
			
			break;
	}
}





?>