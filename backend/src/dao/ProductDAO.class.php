<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-05 16:53
 */
interface ProductDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Product 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param product primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Product product
 	 */
	public function insert($product);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Product product
 	 */
	public function update($product);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByDescription($value);

	public function queryBySku($value);

	public function queryByPricebuy($value);

	public function queryByPricesell($value);

	public function queryByCategoryId($value);

	public function queryByImageLink($value);


	public function deleteByName($value);

	public function deleteByDescription($value);

	public function deleteBySku($value);

	public function deleteByPricebuy($value);

	public function deleteByPricesell($value);

	public function deleteByCategoryId($value);

	public function deleteByImageLink($value);


}
?>