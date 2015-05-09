<?php
/**
 * Class that operate on table 'product'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-06 23:52
 */
class ProductMySqlDAO implements ProductDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ProductMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM product WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM product';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM product ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param product primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM product WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ProductMySql product
 	 */
	public function insert($product){
		$sql = 'INSERT INTO product (store_id, name, description, sku, pricebuy, pricesell, category_id, image_link, type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($product->getStoreId());
		$sqlQuery->set($product->getName());
		$sqlQuery->set($product->getDescription());
		$sqlQuery->set($product->getSku());
		$sqlQuery->set($product->getPricebuy());
		$sqlQuery->set($product->getPricesell());
		$sqlQuery->setNumber($product->getCategoryId());
		$sqlQuery->set($product->getImageLink());
		$sqlQuery->setNumber($product->getType());

		$id = $this->executeInsert($sqlQuery);	
		$product->setId ($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ProductMySql product
 	 */
	public function update($product){
		$sql = 'UPDATE product SET store_id = ?, name = ?, description = ?, sku = ?, pricebuy = ?, pricesell = ?, category_id = ?, image_link = ?, type = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($product->getStoreId());
		$sqlQuery->set($product->getName());
		$sqlQuery->set($product->getDescription());
		$sqlQuery->set($product->getSku());
		$sqlQuery->set($product->getPricebuy());
		$sqlQuery->set($product->getPricesell());
		$sqlQuery->setNumber($product->getCategoryId());
		$sqlQuery->set($product->getImageLink());
		$sqlQuery->setNumber($product->getType());

		$sqlQuery->setNumber($product->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM product';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByStoreId($value){
		$sql = 'SELECT * FROM product WHERE store_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM product WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescription($value){
		$sql = 'SELECT * FROM product WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySku($value){
		$sql = 'SELECT * FROM product WHERE sku = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPricebuy($value){
		$sql = 'SELECT * FROM product WHERE pricebuy = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPricesell($value){
		$sql = 'SELECT * FROM product WHERE pricesell = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCategoryId($value){
		$sql = 'SELECT * FROM product WHERE category_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByImageLink($value){
		$sql = 'SELECT * FROM product WHERE image_link = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM product WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByStoreId($value){
		$sql = 'DELETE FROM product WHERE store_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM product WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescription($value){
		$sql = 'DELETE FROM product WHERE description = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySku($value){
		$sql = 'DELETE FROM product WHERE sku = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPricebuy($value){
		$sql = 'DELETE FROM product WHERE pricebuy = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPricesell($value){
		$sql = 'DELETE FROM product WHERE pricesell = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCategoryId($value){
		$sql = 'DELETE FROM product WHERE category_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByImageLink($value){
		$sql = 'DELETE FROM product WHERE image_link = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM product WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ProductMySql 
	 */
	protected function readRow($row){
		//$product = new Product();
		
		/*$product->id = $row['id'];
		$product->storeId = $row['store_id'];
		$product->name = $row['name'];
		$product->description = $row['description'];
		$product->sku = $row['sku'];
		$product->pricebuy = $row['pricebuy'];
		$product->pricesell = $row['pricesell'];
		$product->categoryId = $row['category_id'];
		$product->imageLink = $row['image_link'];
		$product->type = $row['type'];*/

		$product = new Product($row['store_id'], $row['name'], $row['description'], $row['sku'],$row['pricebuy'], $row['pricesell'], $row['category_id'], $row['image_link'], $row['type'], $row['id']);
		
		return $product;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ProductMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>