<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';
include_once "controllers/HomeController.class.php";

class ProductController {

	private $categoryDAO;
	private $productDAO;
	private $storeName;
	function __construct ( $storeName = "shopnshop", $categorisName = "", $productId = 0){

		$this -> storeName = $storeName;
		$this -> categorisName = $categorisName;
		$this -> productId = $productId;

		$DAOFactory = new DAOFactory();
		$this -> categoryDAO = $DAOFactory->getCategoryDAO();
		$this -> productDAO = $DAOFactory->getProductDAO();

	}

	function render (){

		$categories = HomeController :: processCategories( $this -> categoryDAO -> getAllStoreCategories( $this -> storeName ), $this -> storeName  );

		$product = $this -> productDAO -> load( $this -> productId ) ;
		$type = "product";

		include_once "components/base.php";

	}

	

}



?>