<?php
/**
 * Class that operate on table 'cart'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-06 23:52
 */
class CartMySqlExtDAO extends CartMySqlDAO{

	public function getOrderCart($orderId) {


		$sql = 'SELECT * FROM cart as cart JOIN product as product 
					WHERE cart.order_id = ? AND cart.product_id = product.id';
		
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($orderId);
		
		return $this->getListWithProductDetails($sqlQuery);
	}

	protected function readRowWithProductDetails($row){
		$cart = new Cart($row['order_id'], $row['product_id'], $row['quantity'], $row['status'], $row['name'], $row['description'], $row['pricesell'],$row['id']);

		return $cart;
	}
	
	protected function getListWithProductDetails($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowWithProductDetails($tab[$i]);
		}
		return $ret;
	}
	
}
?>