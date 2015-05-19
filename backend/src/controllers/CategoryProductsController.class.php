<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';
include_once "controllers/HomeController.class.php";

class CategoryProductsController {

	private $categoryDAO;
	private $productDAO;
	private $storeName;
	function __construct ( $storeName = "shopnshop", $categorisName = ""){

		$this -> storeName = $storeName;
		$this -> categorisName = urldecode($categorisName);

		$DAOFactory = new DAOFactory();
		$this -> categoryDAO = $DAOFactory->getCategoryDAO();
		$this -> productDAO = $DAOFactory->getProductDAO();

	}

	function render (){

		$categories = HomeController :: processCategories(
		 $this -> categoryDAO -> getAllCategories( $this -> storeName ), $this -> storeName  );

		$categoriesProducts = $this -> productDAO -> readAllProducts( $this -> storeName, $this -> categorisName ) ;
		include_once "components/base.php";

	}

	function processCategories($categories){

		return $this -> getCategroyTree ($categories, null, 0);
	}

	function getCategroyTree($categories, $parent, $level = 0){
		
		$categoriesTree = null;
		
		if ($level != 0)
			$returnHtml = "<ul class='level".($level - 1 )."'>";

		for ($i=0; $i < count ($categories) ; $i++) { 
			
			if ( $categories[$i] -> getParentId() == null && $level == 0){
				$temp = $this -> getCategroyTree ($categories, $categories[$i], $level + 1);

				if ($temp !== 0){

				$returnHtml .= "<li onmouseover=\"Element.addClassName(this, 'over') \" onmouseout=\"Element.removeClassName(this, 'over') \" class='level0 parent'>
                  <a href='#'><span >". $categories[$i] -> getName ()."</span></a><span class='head'><a href='#' style='float:right;'>IN</a></span>" .
				 
					$temp 

					.
					"</li>"
					;
				} else {
					$returnHtml .= "<li onmouseover=\"Element.addClassName(this, 'over') \" onmouseout=\"Element.removeClassName(this, 'over') \" class='level0 parent'>
                  <a href='". $this -> storeName ."/category/". $categories[$i] -> getName () ."'>
									
									<span>". $categories[$i] -> getName () ."</span></a><span class='head'><a href='#' style='float:right;'></a></span> 

					</li>"
					;
				}
					$out = 1;
				
			}
			elseif ( $level != 0 && $categories[$i] -> getParentId() == $parent -> getId () ) {
				$out = 1;
				$temp = $this -> getCategroyTree ($categories, $categories[$i], $level + 1);

				if ($temp === 0){
					
				$returnHtml .= "<li class='level". $level  ."  nav-categories-new-arrivals' >
									<a href='". $this -> storeName ."/category/". $categories[$i] -> getName () ."'>
									
									<span>". $categories[$i] -> getName () ."</span></a>
                     
					</li>"
					;
				}
				else{
				$returnHtml .= "<li onmouseover=\"Element.addClassName(this, 'over') \" onmouseout=\"Element.removeClassName(this, 'over') \" class='level". $level  ."  nav-categories-new-arrivals' >
									 <a href='#'><span>".$categories[$i] -> getName () ."</span></a><span class='head'><a href='#' style='float:right;'></a></span>
                     ".
				
					$temp
					.
					"</li>"
					;
				}

			}

		}
		
		if ($out != 1)
			return 0;

		if ($level != 0)
			$returnHtml .= "</ul>";

		
		return $returnHtml;


	} 

}



?>