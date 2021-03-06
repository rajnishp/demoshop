<?php
	/**
	 * Object represents table 'product'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Product{
		
		private $id;
		private $storeId;
		private $name;
		private $description;
		private $sku;
		private $pricebuy;
		private $mrp;
		private $pricesell;
		private $categoryId;
		private $imageLink;
		private $type;
		private $addedTime;
		private $lastUpdateTime;
		
		function __construct ($storeId, $name, $description, 
								$sku, $pricebuy, $mrp, $pricesell, 
								$categoryId, $imageLink, $type, $addedTime, $lastUpdateTime, $id = null) {
			$this -> id = $id;
			$this -> storeId = $storeId;
			$this -> name = $name;
			$this -> description = $description;
			$this -> sku = $sku;
			$this -> pricebuy = $pricebuy;
			$this -> mrp = $mrp;
			$this -> pricesell = $pricesell;
			$this -> categoryId = $categoryId;
			$this -> imageLink = $imageLink;
			$this -> type = $type;
			$this -> addedTime = $addedTime;
			$this -> lastUpdateTime = $lastUpdateTime;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function setStoreId ($storeId) {
			$this -> storeId = $storeId;
		}
		function getStoreId () {
			return $this -> storeId;
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

		function setSku ($sku) {
			$this -> sku = $sku;
		}
		function getSku () {
			return $this -> sku;
		}

		function setPricebuy ($pricebuy) {
			$this -> pricebuy = $pricebuy;
		}
		function getPricebuy () {
			return $this -> pricebuy;
		}

		function setMrp ($mrp) {
			$this -> mrp = $mrp;
		}
		function getMrp () {
			return $this -> mrp;
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

		function setType ($type) {
			$this -> type = $type;
		}
		function getType () {
			return $this -> type;
		}

		function setAddedTime ($addedTime) {
			$this -> addedTime = $addedTime;
		}
		function getAddedTime () {
			return $this -> addedTime;
		}

		function setLastUpdateTime ($lastUpdateTime) {
			$this -> lastUpdateTime = $lastUpdateTime;
		}
		function getLastUpdateTime () {
			return $this -> lastUpdateTime;
		}

		function toString (){
			return $this -> id . ", " . 
					$this -> storeId . ", " . 
					$this -> name. ", " . 
					$this -> description. ", " . 
					$this -> sku. ", " . 
					$this -> pricebuy. ", " . 
					$this -> mrp. ", " . 
					$this -> pricesell. ", " . 
					$this -> categoryId. ", " . 
					$this -> imageLink. ", " . 
					$this -> type. ", " . 
					$this -> addedTime. ", " . 
					$this -> lastUpdateTime;
		}
		
		function toArray() {
			return array (
						id => $this-> id,
						storeId => $this-> storeId,
						name => $this-> name,
						description => $this-> description,
						sku => $this-> sku,
						pricebuy => $this-> pricebuy,
						mrp => $this-> mrp,
						pricesell => $this-> pricesell,
						categoryId => $this-> categoryId,
						imageLink => $this-> imageLink,
						type => $this-> type,
						addedTime => $this-> addedTime,
						lastUpdateTime => $this-> lastUpdateTime
				);
		}
	}
?>