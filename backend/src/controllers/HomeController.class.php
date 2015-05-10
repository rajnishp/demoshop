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
		
		echo $categories;

		echo "inside HomeController readLatestStoreProducts Render </br>";
		
		var_dump( $this -> productDAO -> readLatestStoreProducts( $this -> storeName ) );

		echo "inside HomeController readMaxProfitProducts Render </br>";
		
		var_dump( $this-> productDAO -> readMaxProfitProducts( $this -> storeName ) );
		


	}

	function processCategories($categories){

		 
		/* "
                  
                        </li>
                     
                  </ul>
               ;
*/
		return $this -> getCategroyTree ($categories, null, 0);
	}

	function getCategroyTree($categories, $parent, $level = 0){
		
		$categoriesTree = null;
		
		if ($level != 0)
			$returnHtml = "<ul class='level$level'>";

		for ($i=0; $i < count ($categories) ; $i++) { 
			
			if ( $categories[$i] -> getParentId() == null && $level == 0){
				$returnHtml .= "<li onmouseover=\"Element.addClassName(this, 'over') \" onmouseout=\"Element.removeClassName(this, 'over') \" class='level0 nav-categories parent'>
                  <span>". $categories[$i] -> getName ()."</span><span class='head'><a href='#' style='float:right;'></a></span>" .
				 
					$this -> getCategroyTree ($categories, $categories[$i], $level + 1 )

					.
					"</li>"
					;
			}
			elseif ( $level != 0 && $categories[$i] -> getParentId() == $parent -> getId () ) {

				$returnHtml .= "<li class='level". ($level + 1) ."  nav-categories-new-arrivals' >
									<a href='http://venusdemo.com/magento/harvest/index.php/categories/new-arrivals.html'>
									<span>".$categories[$i] -> getName () ."</span></a>
                     ".
				
					$this -> getCategroyTree ($categories, $categories[$i], $level + 1)
					.
					"</li>"
					;

			}

		}
		
		if ($level != 0)
			$returnHtml .= "</ul>";

		
		return $returnHtml;


	} 

}



?>