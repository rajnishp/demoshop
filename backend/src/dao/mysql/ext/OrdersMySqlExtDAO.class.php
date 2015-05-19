<?php
/**
 * Class that operate on table 'orders'. Database Mysql.
 *
 * @author: rajnish
 * @date: 2015-05-06 23:52
 */
require_once 'dao/DAOFactory.class.php';
class OrdersMySqlExtDAO extends OrdersMySqlDAO{

	public function loadOrder($orderId){
		
		$sql = 'SELECT * FROM orders WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($orderId);
	
		$order = $this-> getRow($sqlQuery);

		$DAOFactory = new DAOFactory();
		$cartDAO = $DAOFactory->getCartDAO();
		
			
		$order -> setCarts ( $cartDAO -> getOrderCart ( $order -> getId () ) );
		
		return $order;
	}

	public function getStoreOrders($storeId){
		
		$sql = 'SELECT * FROM orders WHERE store_id = ? AND status = 0';
		//0 => pending, 1=> delivered
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($storeId);
		$listOfOrders = $this->getList($sqlQuery);
		$DAOFactory = new DAOFactory();
		$cartDAO = $DAOFactory->getCartDAO();

		
		foreach ($listOfOrders as $key => $order) {
			
			$order -> setCarts ( $cartDAO -> getOrderCart ( $order -> getId () ) );
		}
		return $listOfOrders;
	}

	public function updateStatus($id){
		$sql = 'UPDATE orders SET status = 1 WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
}
?>