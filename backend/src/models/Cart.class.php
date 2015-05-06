<?php
	/**
	 * Object represents table 'cart'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Cart{
		
		var $id;
		var $userId;
		var $orderId;
		var $productId;
		var $status;
		
		function __construct ($userId, $orderId, $productId, $status, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> orderId = $orderId;
			$this -> productId = $productId;
			$this -> status = $status;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function setUserId ($userId) {
			$this -> userId = $userId;
		}
		function getUserId () {
			return $this -> userId;
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

		function setStatus ($status) {
			$this -> status = $status;
		}
		function getStatus () {
			return $this -> status;
		}

		function toString () {
			return $this -> id . ", " . 
					$this -> userId. ", " . 
					$this -> orderId. ", " . 
					$this -> productId. ", " . 
					$this -> status;

		}


		function toArray () {
			return array (
						id => $this-> id,
						userId => $this-> userId,
						orderId => $this-> orderId,
						productId => $this-> productId,
						status => $this-> status
				);
		}
	}
?>