<?php
include_once "controllers/HomeController.class.php";
include_once "controllers/CategoryProductsController.class.php";
include_once "controllers/OrderController.class.php";
include_once "controllers/ProductController.class.php";
include_once "components/base.php";

/*

/shopnshop -> HomeController.class.php
/shopnshop/category/:name -> CategoryProductsController.class.php
/shopnshop/order -> OrderController.class.php
/shopnshop/product/:name -> ProductController.class.php


*/


$route = explode("/",$_SERVER[REQUEST_URI]);

if ( count($route) <= 2 ){
//	$homeController = new HomeController($route[1]);
//	$homeController -> render ();
}else {

	switch ($route[2]) {
		case 'category':
			$categoryProductsController = new CategoryProductsController($route[3]);
			$categoryProductsController -> render();
			break;

		case 'order':
			$orderController = new OrderController();
			$orderController -> process();
			$orderController -> render();
			break;
		
		case 'product':
			$productController = new ProductController($route[3]);
			$productController -> render ();
			break;
		
		
		default:
			
			break;
	}
}


var_dump($route);



?>