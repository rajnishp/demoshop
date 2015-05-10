<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

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

		$categoris = $this -> processCategories( $this -> categoryDAO -> getAllStoreCategories( $this -> storeName ) );

		var_dump( $this -> productDAO -> load( $this -> productId ) );

		
		var_dump($categoris);

	}

	function processCategories($categoris){


		return $categoris;
	}

}



?>