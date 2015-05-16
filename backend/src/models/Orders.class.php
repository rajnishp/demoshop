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

		function __construct ( $storeId, $phone, $address, $orderTime, $status,$id = null) {
			
			

			$this -> id = $id;
			$this -> storeId = $storeId;
			$this -> phone = $phone;
			$this -> address = $address;
			$this -> orderTime = $orderTime;
			$this -> status = $status;
			

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

		function setCarts ($carts) {


			$this -> carts = $carts;
		}
		function getCarts () {
			return $this -> carts;
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

			$cartItems = array();
			foreach ($this -> carts as $key => $cart) {
				$cartItems [] = $cart -> toArray();	
			}
			
			return array (
						id => $this-> id,
						storeId => $this-> storeId,
						phone => $this-> phone,
						address => $this-> address,
						orderTime => $this-> orderTime,
						status => $this-> status,
						carts => $cartItems				
					);
		}

	}
	
?>