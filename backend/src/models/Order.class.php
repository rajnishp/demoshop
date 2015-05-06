<?php
	/**
	 * Object represents table 'orders'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Order{
		
		var $id;
		var $userId;
		var $address;
		var $orderTime;
		var $status;

		function __construct ($userId, $address, $orderTime, $status, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
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

		function setUserId ($userId) {
			$this -> userId = $userId;
		}
		function getUserId () {
			return $this -> userId;
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

		function toString () {
			return $this -> id . ", " . 
					$this -> userId. ", " . 
					$this -> address. ", " . 
					$this -> orderTime. ", " . 
					$this -> status;
		}


		function toArray () {
			return array (
						id => $this-> id,
						userId => $this-> userId,
						address => $this-> address,
						orderTime => $this-> orderTime,
						status => $this-> status
				);
		}
	}
?>