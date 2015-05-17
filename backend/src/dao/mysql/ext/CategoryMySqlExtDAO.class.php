<?php
/**
 * Class that operate on table 'category'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-06 23:52
 */
class CategoryMySqlExtDAO extends CategoryMySqlDAO{

	public function getAllCategories(){

		//$storeObj = new StoreMySqlDAO ();
		//$storeData = $storeObj -> queryByStoreName($storeName);
		//returns store_id
		//$storeArray = $storeData[0] -> toArray();

		//$storeId = $storeArray['id'];
		


		$sql = "SELECT * FROM category";
		$sqlQuery = new SqlQuery($sql);
		//$sqlQuery->set($storeId);
		//var_dump($this->getList($sqlQuery)); exit;
		return $this->getList($sqlQuery);
	}
}
?>