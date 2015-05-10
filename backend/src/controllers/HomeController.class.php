<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class HomeController {

	private $categoryDAO;
	private $productDAO;
	private $storeName;
	function __construct ( $storeName = "shopnshop"){

		$this -> storeName = $storeName;

		$DAOFactory = new DAOFactory();
		$this -> categoryDAO = $DAOFactory->getCategoryDAO();
		$this -> productDAO = $DAOFactory->getProductDAO();

	}

	function render (){
		echo "inside HomeController Render </br>";
		$categoris = processCategories( $categoryDAO -> getAllStoreCategories( $storeName ) );

		var_dump( $productDAO -> readLatestStoreProducts( $storeName ) );

		var_dump( $productDAO -> readMaxProfitProducts( $storeName ) );
		
		var_dump($categoris);

	}

	function processCategories($categoris){


		return $categoris;
	}

}



?>