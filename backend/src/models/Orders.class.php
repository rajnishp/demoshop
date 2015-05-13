<?php
	/**
	 * Object represents table 'orders'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Orders{
		
		private $id;
		private $storeId;
		private $phone;
		private $address;
		private $orderTime;
		private $status;
		private $carts;

		function __construct ( $storeId, $phone, $address, $orderTime, $status, 
								$carts = array(), $id = null) {
			$this -> id = $id;
			$this -> storeId = $storeId;
			$this -> phone = $phone;
			$this -> address = $address;
			$this -> orderTime = $orderTime;
			$this -> status = $status;
			$this -> carts = $carts;

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

		function setPhone ($phone) {
			$this -> phone = $phone;
		}
		function getPhone () {
			return $this -> phone;
		}

		function setAddress ($address) {
			$this -> address = $address;
		}
		function getAddress () {
			return $this -> address;
		}

		function setOrderTime ($orderTime) {
			$this -> orderTime = $orderTime;
		}
		function getOrderTime () {
			return $this -> orderTime;
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

		function setQuantity ($quantity) {
			$this -> quantity = $quantity;
		}
		function getQuantity () {
			return $this -> quantity;
		}

		function toString () {
			return $this -> id . ", " . 
					$this -> storeId . ", " . 
					$this -> phone. ", " . 
					$this -> address. ", " . 
					$this -> orderTime. ", " . 
					$this -> status;
		}


		function toArray () {
			return array (
						id => $this-> id,
						storeId => $this-> storeId,
						phone => $this-> phone,
						address => $this-> address,
						orderTime => $this-> orderTime,
						status => $this-> status
				);
		}

		function toArrayOrderItems () {
			return array (
						id => $this-> id,
						storeId => $this-> storeId,
						phone => $this-> phone,
						address => $this-> address,
						orderTime => $this-> orderTime,
						status => $this-> status,
						carts => $this-> carts
				);
		}
	}
?>