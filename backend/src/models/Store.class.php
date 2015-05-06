<?php
	/**
	 * Object represents table 'store'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Store{
		
		var $id;
		var $name;
		var $loginId;
		var $password;
		var $address;
		var $latitude;
		var $longitude;
		var $type;

		function __construct ($name, $loginId, $password, $address, $latitude, $longitude, $type, $id = null) {
			$this -> id = $id;
			$this -> loginId = $loginId;
			$this -> password = $password;
			$this -> address = $address;
			$this -> location = $latitude;
			$this -> longitude = $longitude;
			$this -> type = $type;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function setName($name) {
			$this -> name = $name;
		}
		function getName () {
			return $this -> name;
		}

		function setLoginId ($loginId) {
			$this -> loginId = $loginId;
		}
		function getLoginId () {
			return $this -> loginId;
		}

		function setPassword ($password) {
			$this -> password = $password;
		}
		function getPassword () {
			return $this -> password;
		}

		function setAddress ($address) {
			$this -> address = $address;
		}
		function getAddress () {
			return $this -> address;
		}

		function setLatitude ($latitude) {
			$this -> latitude = $latitude;
		}
		function getLatitude () {
			return $this -> latitude;
		}

		function setLongitude ($longitude) {
			$this -> longitude = $longitude;
		}
		function getLongitude () {
			return $this -> longitude;
		}

		function setType ($type) {
			$this -> type = $type;
		}
		function getType () {
			return $this -> type;
		}


		function toString () {
			return $this -> id . ", " . 
					$this -> name. ", " . 
					$this -> loginId. ", " . 
					$this -> password. ", " . 
					$this -> address. ", " . 
					$this -> latitude. ", " . 
					$this -> longitude. ", " . 
					$this -> type;
		}


		function toArray () {
			return array (
						id => $this-> id,
						name => $this-> name,
						loginId => $this-> loginId,
						password => $this-> password,
						address => $this-> address,
						latitude => $this-> latitude,
						longitude => $this-> longitude,
						type => $this-> type
				);
		}
	}
?>