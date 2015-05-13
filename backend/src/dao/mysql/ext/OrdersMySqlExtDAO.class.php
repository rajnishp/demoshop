<?php
/**
 * Class that operate on table 'orders'. Database Mysql.
 *
 * @author: rajnish
 * @date: 2015-05-06 23:52
 */
class OrdersMySqlExtDAO extends OrdersMySqlDAO{
	
	public function getStoreOrders($storeId){
		$sql = 'SELECT orders.* , product.name, product.description, product.pricesell, cart.quantity
					FROM orders AS orders
						JOIN cart AS cart
							JOIN product AS product
					WHERE orders.store_id = ?
						AND orders.id = cart.order_id
						AND cart.product_id = product.id
						LIMIT 0 , 30';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($storeId);
		return $this->getListOrderItmes($sqlQuery);
	}

	protected function readRowOrderItems($row) {

		$orderItems = new Orders($row['store_id'], $row['phone'], $row['address'], $row['order_time'], $row['status'], $row['id']);
		


		return $orderItems;
	}
	
	protected function getListOrderItmes($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowOrderItems($tab[$i]);
		}
		return $ret;
	}
}
?>