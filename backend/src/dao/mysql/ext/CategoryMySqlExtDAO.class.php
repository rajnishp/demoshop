<?php
/**
 * Class that operate on table 'category'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-06 23:52
 */
class CategoryMySqlExtDAO extends CategoryMySqlDAO{

	public function getAllCategories($storeName){

		$sql = 'SELECT category.* FROM category AS category JOIN store AS store
						WHERE store.name = ? AND store.type = category.type';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($storeName);

		return $this->getList($sqlQuery);
	}
}
?>