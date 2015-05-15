<?php
/**
 * Class that operate on table 'product'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-06 23:52
 */


class ProductMySqlExtDAO extends ProductMySqlDAO{

	/**
	 * Get all records from table
	 */
	public function readAllProducts($storeName, $categoryName){

		$storeObj = new StoreMySqlDAO ();
		$storeData = $storeObj -> queryByStoreName($storeName);
		//returns store_id
	
		$storeArray = $storeData[0] -> toArray();

		$storeId = $storeArray['id'];

		$categoryObj = new CategoryMySqlDAO ();
		$categoryData = $categoryObj -> queryByCategoryName($categoryName);
		//returns store_id
		
		$categoryArray = $categoryData[0] -> toArray();

		$categoryId = $categoryArray['id'];

		$sql = "SELECT * FROM product WHERE store_id = ? AND category_id = ?";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($storeId);
		$sqlQuery->set($categoryId);
		
		return $this->getList($sqlQuery);
	}

	public function readMaxProfitProducts($storeName){
		$storeObj = new StoreMySqlDAO ();
		$storeData = $storeObj -> queryByStoreName($storeName);
		//returns store_id
	
		$storeArray = $storeData[0] -> toArray();

		$storeId = $storeArray['id'];

		$sql = "SELECT * FROM product 
					WHERE store_id = ?
						ORDER BY (pricesell-pricebuy) DESC LIMIT 0, 10";

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($storeId);
		return $this->getList($sqlQuery);
	}

	public function readLatestStoreProducts($storeName){

		$storeObj = new StoreMySqlDAO ();
		$storeData = $storeObj -> queryByStoreName($storeName);
		//returns store_id
	
		$storeArray = $storeData[0] -> toArray();

		$storeId = $storeArray['id'];

		$sql = "SELECT * FROM product WHERE store_id = ? ORDER BY last_update_time DESC LIMIT 0,10";

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($storeId);
		return $this->getList($sqlQuery);
	}


	public function querySearchProduct($productName){
		$sql = "SELECT * FROM product WHERE name like '%' ? '%'";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($productName);
		return $this->getList($sqlQuery);
	}

}
?>