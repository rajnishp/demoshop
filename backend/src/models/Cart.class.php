<?php
	/**
	 * Object represents table 'cart'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Cart{
		
		private $id;
		private $orderId;
		private $productId;
		private $quantity;
		private $status;

		private $productName;
		private $description;
		private $pricesell;
		
		function __construct ($orderId, $productId, $quantity, $status, $productName, $description, $pricesell, $id = null) {
			$this -> id = $id;
			$this -> orderId = $orderId;
			$this -> productId = $productId;
			$this -> quantity = $quantity;
			$this -> status = $status;
			$this -> productName = $productName;
			$this -> description = $description;
			$this -> pricesell = $pricesell;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function setOrderId ($orderId) {
			$this -> orderId = $orderId;
		}
		function getOrderId () {
			return $this -> orderId;
		}

		function setProductId ($productId) {
			$this -> productId = $productId;
		}
		function getProductId () {
			return $this -> productId;
		}

		function setQuantity ($quantity) {
			$this -> quantity = $quantity;
		}
		function getQuantity () {
			return $this -> quantity;
		}

		function setStatus ($status) {
			$this -> status = $status;
		}
		function getStatus () {
			return $this -> status;
		}

		function setProductName ($productName) {
			$this -> productName = $productName;
		}
		function getProductName () {
			return $this -> productName;
		}

		function setDescription ($description) {
			$this -> description = $description;
		}
		function getDescription () {
			return $this -> description;
		}

		function setPricesell ($pricesell) {
			$this -> pricesell = $pricesell;
		}
		function getPricesell () {
			return $this -> pricesell;
		}



		function toString () {
			return $this -> id . ", " . 
					$this -> orderId. ", " . 
					$this -> productId. ", " . 
					$this -> quantity. ", " . 
					$this -> status;

		}


		function toArrayCart () {
			return array (
						productName => $this-> productName,
						pricesell => $this-> pricesell,
						quantity => $this-> quantity,
						description => $this-> description
				);
		}

		/*$toArrayCart = array (productName => $this-> productName,
						pricesell => $this-> pricesell,
						quantity => $this-> quantity,
						description => $this-> description
						);*/


		function toArray () {
			return array (
						id => $this-> id,
						orderId => $this-> orderId,
						productId => $this-> productId,
						quantity => $this-> quantity,
						status => $this-> status
				);
		}
	}
?>