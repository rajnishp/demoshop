<?php
	/**
	 * Object represents table 'user_details'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class UserDetail{
		
		private $id;
		private $firstname;
		private $lastname;
		private $email;
		private $phone;
		private $password;
	

		function __construct ($firstname, $lastname, $email, $phone, $password, $id = null) {
			$this -> id = $id;
			$this -> firstname = $firstname;
			$this -> lastname = $lastname;
			$this -> email = $email;
			$this -> phone = $phone;
			$this -> password = $password;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function setFirstname ($firstname) {
			$this -> firstname = $firstname;
		}
		function getFirstname () {
			return $this -> firstname;
		}

		function setLastname ($firstname) {
			$this -> firstname = $firstname;
		}
		function getLastname () {
			return $this -> firstname;
		}

		function setEmail ($email) {
			$this -> email = $email;
		}
		function getEmail () {
			return $this -> email;
		}

		function setPhone ($phone) {
			$this -> phone = $phone;
		}
		function getPhone () {
			return $this -> phone;
		}

		function setPassword ($password) {
			$this -> password = $password;
		}
		function getPassword () {
			return $this -> password;
		}

		function toString (){
			return $this -> id . ", " . 
					$this -> firstname. ", " . 
					$this -> lastname. ", " . 
					$this -> email. ", " . 
					$this -> phone;
		}
		
		function toArray() {
			return array (
						id => $this-> id,
						firstname => $this-> firstname,
						lastname => $this-> lastname,
						email => $this-> email,
						phone => $this-> phone,
						password => $this-> password
				);
		}
	}
?>