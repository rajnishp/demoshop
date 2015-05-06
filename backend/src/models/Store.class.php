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
		var $location;
		var $type;

		function __construct ($name, $loginId, $password, $location, ,$type, $id = null) {
			$this -> id = $id;
			$this -> loginId = $loginId;
			$this -> password = $password;
			$this -> location = $location;
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

		function setLocation ($location) {
			$this -> location = $location;
		}
		function getLocation () {
			return $this -> location;
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
					$this -> location. ", " . 
					$this -> type;
		}


		function toArray () {
			return array (
						id => $this-> id,
						name => $this-> name,
						loginId => $this-> loginId,
						password => $this-> password,
						location => $this-> location,
						type => $this-> type
				);
		}
	}
?>