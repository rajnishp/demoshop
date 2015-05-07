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
	public function readAllProducts($storeId, $categoryId){
		$sql = 'SELECT * FROM product WHERE store_id = ? AND category_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($storeId);
		$sqlQuery->set($categoryId);
		return $this->getList($sqlQuery);
	}

	public function readMaxProfitProducts($storeId){
		$sql = 'SELECT * FROM product 
					WHERE store_id = ? 
						ORDER BY (pricesell-pricebuy) DESC LIMIT 0, 10';

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($storeId);
		return $this->getList($sqlQuery);
	}

	public function readLatestStoreProducts(){
		$sql = 'SELECT product.* FROM product as product JOIN store as store 
					WHERE store.id = product.store_id ORDER BY store.last_update_time DESC LIMIT 0,2';

		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}

}
?>