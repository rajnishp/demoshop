<?php
	/**
	 * Object represents table 'product'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-05-05 16:53	 
	 */
	class Product{
		
		var $id;
		var $name;
		var $description;
		var $sku;
		var $pricebuy;
		var $pricesell;
		var $categoryId;
		var $imageLink;
		
		function __construct ($name, $description, $sku, $pricebuy, $pricesell, $categoryId, imageLink, $id = null) {
			$this -> id = $id;
			$this -> name = $name;
			$this -> description = $description;
			$this -> sku = $sku;
			$this -> pricebuy = $pricebuy;
			$this -> pricesell = $pricesell;
			$this -> categoryId = $categoryId;
			$this -> imageLink = $imageLink;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function setName ($name) {
			$this -> name = $name;
		}
		function getName () {
			return $this -> name;
		}

		function setDescription ($description) {
			$this -> description = $description;
		}
		function getDescription () {
			return $this -> description;
		}

		function setPricebuy ($setPriceBuy) {
			$this -> pricebuy = $pricebuy;
		}
		function getPricebuy () {
			return $this -> pricebuy;
		}

		function setPricesell ($pricesell) {
			$this -> pricesell = $pricesell;
		}
		function getPricesell () {
			return $this -> pricesell;
		}

		function setCategoryId ($categoryId) {
			$this -> categoryId = $categoryId;
		}
		function getCategoryId () {
			return $this -> categoryId;
		}

		function setImageLink ($imageLink) {
			$this -> imageLink = $imageLink;
		}
		function getImageLink () {
			return $this -> imageLink;
		}

		function toString (){
			return $this -> id . ", " . 
					$this -> name. ", " . 
					$this -> description. ", " . 
					$this -> sku. ", " . 
					$this -> pricebuy. ", " . 
					$this -> pricesell. ", " . 
					$this -> categoryId. ", " . 
					$this -> imageLink;
		}
		
		function toArray() {
			return array (
						id => $this-> id,
						name => $this-> name,
						description => $this-> description,
						sku => $this-> sku,
						pricebuy => $this-> pricebuy,
						pricesell => $this-> pricesell,
						categoryId => $this-> categoryId,
						imageLink => $this-> imageLink
				);
		}

	}
?>