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
	
}
?>