<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-05 16:53
 */
interface UserDetailsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserDetails 
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
 	 * @param userDetail primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserDetails userDetail
 	 */
	public function insert($userDetail);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserDetails userDetail
 	 */
	public function update($userDetail);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFirstname($value);

	public function queryByLastname($value);

	public function queryByEmail($value);

	public function queryByPhone($value);

	public function queryByPassword($value);


	public function deleteByFirstname($value);

	public function deleteByLastname($value);

	public function deleteByEmail($value);

	public function deleteByPhone($value);

	public function deleteByPassword($value);


}
?>