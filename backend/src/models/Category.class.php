<?php
	/**
	 * Object represents table 'category'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Category{
		
		private $id;
		private $storeId;
		private $name;
		private $parentId;
		private $imageLink;
		private $type;
		

		function __construct ($storeId, $name, $parentId, $imageLink, $type, $id = null) {
			$this -> id = $id;
			$this -> storeId = $storeId;
			$this -> name = $name;
			$this -> parentId = $parentId;
			$this -> imageLink = $imageLink;
			$this -> type = $type;
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

		function setParentId ($parentId) {
			$this -> parentId = $parentId;
		}
		function getParentId () {
			return $this -> parentId;
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

		function toString () {
			return $this -> id . ", " . 
					$this -> storeId . ", " . 
					$this -> name. ", " . 
					$this -> parentId. ", " . 
					$this -> imageLink. ", " . 
					$this -> type;
		}


		function toArray () {
			return array (
						id => $this-> id,
						storeId => $this-> storeId,
						name => $this-> name,
						parentId => $this-> parentId,
						imageLink => $this-> imageLink,
						type => $this-> type
				);
		}
	}
?>