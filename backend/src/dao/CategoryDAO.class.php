<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-07 14:44
 */
interface CategoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Category 
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
 	 * @param category primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Category category
 	 */
	public function insert($category);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Category category
 	 */
	public function update($category);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStoreId($value);

	public function queryByName($value);

	public function queryByParentId($value);

	public function queryByImageLink($value);

	public function queryByType($value);


	public function deleteByStoreId($value);

	public function deleteByName($value);

	public function deleteByParentId($value);

	public function deleteByImageLink($value);

	public function deleteByType($value);


}
?>