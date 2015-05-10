<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class OrderController {

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

		$categoris = processCategories( $categoryDAO -> getAllStoreCategories( $storeName ) );

		var_dump( $productDAO -> load( $productId ) );

		
		var_dump($categoris);

	}

	function processCategories($categoris){


		return $categoris;
	}

}



?>