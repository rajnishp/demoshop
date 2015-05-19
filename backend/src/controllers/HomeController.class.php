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
		//echo "inside HomeController Render </br>";
		$categories = self :: processCategories( $this -> categoryDAO -> getAllCategories( $this -> storeName ), $this -> storeName );

		//echo "inside HomeController getAllStoreCategories Render </br>";
		
		//echo $categories;
		

		//echo "inside HomeController readLatestStoreProducts Render </br>";
		
		$latest =  $this -> productDAO -> readLatestStoreProducts( $this -> storeName ) ;
		
		$maxSavings =  $this-> productDAO -> readMaxProfitProducts( $this -> storeName ) ;
		include_once "components/base.php";


	}

	static function  processCategories($categories, $storeName){

		return HomeController :: getCategroyTree ($categories, null, 0, $storeName);
	}

	static function  getCategroyTree($categories, $parent, $level = 0, $storeName){
		
		$categoriesTree = null;

		global $configs;
		
		if ($level != 0)
			$returnHtml = "<ul class='level".($level - 1 )."'>";

		for ($i=0; $i < count ($categories) ; $i++) { 
			
			if ( $categories[$i] -> getParentId() == null && $level == 0){
				$temp = HomeController :: getCategroyTree ($categories, $categories[$i], $level + 1);

				if ($temp !== 0){

				$returnHtml .= "<li onmouseover=\"Element.addClassName(this, 'over') \" onmouseout=\"Element.removeClassName(this, 'over') \" class='level0 parent'>
                  <a href='#'><span >". $categories[$i] -> getName ()."</span></a><span class='head'><a href='#' style='float:right;'>IN</a></span>" .
				 
					$temp 

					.
					"</li>"
					;
				} else {
					$returnHtml .= "<li onmouseover=\"Element.addClassName(this, 'over') \" onmouseout=\"Element.removeClassName(this, 'over') \" class='level0 parent'>
                  <a href='". $configs['CARTATHOME_BASE_URL'] . $storeName ."/category/". $categories[$i] -> getName () ."'>
									
									<span>". $categories[$i] -> getName () ."</span></a><span class='head'><a href='#' style='float:right;'></a></span> 

					</li>"
					;
				}
					$out = 1;
				
			}
			elseif ( $level != 0 && $categories[$i] -> getParentId() == $parent -> getId () ) {
				$out = 1;
				$temp = HomeController ::  getCategroyTree ($categories, $categories[$i], $level + 1);

				if ($temp === 0){
					
				$returnHtml .= "<li class='level". $level  ."  nav-categories-new-arrivals' >
									<a href='". $configs['CARTATHOME_BASE_URL']. $storeName ."/category/". $categories[$i] -> getName () ."'>
									
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