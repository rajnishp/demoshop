<?php
/**
 * Class that operate on table 'category'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-06 23:52
 */
class CategoryMySqlExtDAO extends CategoryMySqlDAO{

	public function getAllStoreCategories($storeName){

		$storeObj = new StoreMySqlDAO ();
		$storeData = $storeObj -> queryByStoreName($storeName);
		//returns store_id
		$storeArray = $storeData[0] -> toArray();

		$storeId = $storeArray['id'];
		

		$sql = "SELECT * FROM category WHERE store_id = '$storeId'";
		$sqlQuery = new SqlQuery($sql);
		//$sqlQuery->setNumber($id);
		
		return $this->getList($sqlQuery);
	}
}
?>