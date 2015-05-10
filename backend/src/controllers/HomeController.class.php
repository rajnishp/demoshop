<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class HomeController {

	private $categoryDAO;
	private $productDAO;
	private $storeName;
	function __construct ( $storeName = "shopnshop" ){

		$this -> storeName = $storeName;

		$DAOFactory = new DAOFactory();
		$this -> categoryDAO = $DAOFactory->getCategoryDAO();
		$this -> productDAO = $DAOFactory->getProductDAO();

	}

	function render (){
		echo "inside HomeController Render </br>";
		$categories = $this -> processCategories( $this -> categoryDAO -> getAllStoreCategories( $this -> storeName ) );

		echo "inside HomeController getAllStoreCategories Render </br>";
		
		var_dump($categories);
		
		echo "inside HomeController readLatestStoreProducts Render </br>";
		
		var_dump( $this -> productDAO -> readLatestStoreProducts( $this -> storeName ) );

		echo "inside HomeController readMaxProfitProducts Render </br>";
		
		var_dump( $this-> productDAO -> readMaxProfitProducts( $this -> storeName ) );
		


	}

	function processCategories($categories){


		return $categories;
	}

}



?>