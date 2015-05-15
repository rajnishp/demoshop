<?php
/**
 * Class that operate on table 'orders'. Database Mysql.
 *
 * @author: rajnish
 * @date: 2015-05-06 23:52
 */
class OrdersMySqlExtDAO extends OrdersMySqlDAO{
	
	public function loadOrder($orderId){
		
		$sql = 'SELECT * FROM orders WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($orderId);
	
		return $this-> getRowOrder($sqlQuery);
	}

	public function getStoreOrders($storeId){
		
		$sql = 'SELECT * FROM orders WHERE store_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($storeId);
	
		return $this->getListOrders($sqlQuery);
	}

	protected function readRowOrders($row) {

		
		$orderItems = array();

		$sql = 'SELECT * FROM cart as cart JOIN product as product 
					WHERE cart.order_id = ? AND cart.product_id = product.id';
		$orderId = $row['id'];
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($orderId);
		
		try {	
			$orderItems = $this->getListCartItems($sqlQuery);	
		} catch (Exception $e) {	}
		
		//var_dump($orderItems1); exit;
		
		$row['carts'] = $orderItems;
	
		$orders = new Orders($row['store_id'], $row['phone'], $row['address'], $row['order_time'], $row['status'], $row['carts'], $row['id']);
		
		return $orders;
	}
	
	protected function getListOrders($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowOrders($tab[$i]);
		}

		return $ret;
	}

	protected function readRowCartItems($row) {

		$orderItems = new Cart(0,0,$row['quantity'],0, $row['name'], $row['description'], $row['pricesell'], $row['id']);

		return $orderItems;
	
	}

	protected function getListCartItems($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowCartItems($tab[$i]);
		}
		
		return $ret;
	}

	/**
	 * Get row
	 *
	 * @return OrdersMySql 
	 */
	protected function getRowOrder($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRowOrders($tab[0]);		
	}
}
?>