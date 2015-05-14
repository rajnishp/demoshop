<?php
/**
 * Class that operate on table 'orders'. Database Mysql.
 *
 * @author: rajnish
 * @date: 2015-05-06 23:52
 */
class OrdersMySqlExtDAO extends OrdersMySqlDAO{
	
	public function getStoreOrders($storeId){
		/*$sql = 'SELECT orders.* , product.name, product.description, product.pricesell, cart.quantity
					FROM orders AS orders
						JOIN cart AS cart
							JOIN product AS product
					WHERE orders.store_id = ?
						AND orders.id = cart.order_id
						AND cart.product_id = product.id
						LIMIT 0 , 30';*/
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

		try {
			$sqlQuery = new SqlQuery($sql);
			$sqlQuery->set($orderId);
			$orderItems[$orderId] = $this->getListCartItems($sqlQuery);	
		} catch (Exception $e) {	}
		
		
		$row['cart'] = $orderItems;
	
		$orders = new Orders($row['store_id'], $row['phone'], $row['address'], $row['order_time'], $row['status'], $row['cart'], $row['id']);
		
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

		$orderItems = new Cart(0,0,$row['quantity'],0, $row['name'], $row['pricesell'],  $row['description'], $row['id']);

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
}
?>