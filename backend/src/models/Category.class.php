<?php
	/**
	 * Object represents table 'category'
	 *
     	 * @author: rajnish
     	 * @date: 2015-05-05 16:53	 
	 */
	class Category{
		
		var $id;
		var $name;
		var $parentId;
		var $imageLink;
		

		function __construct ($name, $parentId, $imageLink, $id = null) {
			$this -> id = $id;
			$this -> name = $name;
			$this -> parentId = $parentId;
			$this -> imageLink = $imageLink;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
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

		function toString () {
			return $this -> id . ", " . 
					$this -> name. ", " . 
					$this -> parentId. ", " . 
					$this -> imageLink;
		}


		function toArray () {
			return array (
						id => $this-> id,
						name => $this-> name,
						parentId => $this-> parentId,
						imageLink => $this-> imageLink
				);
		}
	}
?>