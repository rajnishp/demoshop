<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class CategoryProductsController {

	private $categoryDAO;
	private $productDAO;
	private $storeName;
	function __construct ( $storeName = "shopnshop", $categorisName = ""){

		$this -> storeName = $storeName;
		$this -> categorisName = $categorisName;

		$DAOFactory = new DAOFactory();
		$this -> categoryDAO = $DAOFactory->getCategoryDAO();
		$this -> productDAO = $DAOFactory->getProductDAO();

	}

	function render (){

		$categories = $this -> processCategories( $this -> categoryDAO -> getAllStoreCategories( $this -> storeName ) );

		var_dump( $this -> productDAO -> readAllProducts( $this -> storeName, $this -> categorisName ) );

		
		var_dump($categories);

	}

	function processCategories($categories){


		return $categories;
	}

}



?>