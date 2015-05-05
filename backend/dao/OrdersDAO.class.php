<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-05 16:53
 */
interface OrdersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Orders 
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
 	 * @param order primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Orders order
 	 */
	public function insert($order);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Orders order
 	 */
	public function update($order);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByAddress($value);

	public function queryByOrderTime($value);

	public function queryByStatus($value);


	public function deleteByUserId($value);

	public function deleteByAddress($value);

	public function deleteByOrderTime($value);

	public function deleteByStatus($value);


}
?>