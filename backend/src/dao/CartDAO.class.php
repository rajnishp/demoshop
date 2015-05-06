<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-06 23:52
 */
interface CartDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Cart 
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
 	 * @param cart primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Cart cart
 	 */
	public function insert($cart);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Cart cart
 	 */
	public function update($cart);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOrderId($value);

	public function queryByProductId($value);

	public function queryByQuantity($value);

	public function queryByStatus($value);


	public function deleteByOrderId($value);

	public function deleteByProductId($value);

	public function deleteByQuantity($value);

	public function deleteByStatus($value);


}
?>