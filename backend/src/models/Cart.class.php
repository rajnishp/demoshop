<?php
	/**
	 * Object represents table 'cart'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Cart{
		
		var $id;
		var $orderId;
		var $productId;
		var $quantity;
		var $status;
		
		function __construct ($orderId, $productId, $quantity, $status, $id = null) {
			$this -> id = $id;
			$this -> orderId = $orderId;
			$this -> productId = $productId;
			$this -> quantity = $quantity;
			$this -> status = $status;
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

		function toString () {
			return $this -> id . ", " . 
					$this -> orderId. ", " . 
					$this -> productId. ", " . 
					$this -> quantity. ", " . 
					$this -> status;

		}


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