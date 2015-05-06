<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-05 16:53
 */
interface StoreDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Store 
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
 	 * @param store primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Store store
 	 */
	public function insert($store);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Store store
 	 */
	public function update($store);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByLoginId($value);

	public function queryByPassword($value);

	public function queryByLocation($value);


	public function deleteByName($value);

	public function deleteByLoginId($value);

	public function deleteByPassword($value);

	public function deleteByLocation($value);


}
?>