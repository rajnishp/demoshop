<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */

require_once('utils/sql/Connection.class.php');
require_once('utils/sql/ConnectionFactory.class.php');
require_once('utils/sql/ConnectionProperty.class.php');
require_once('utils/sql/QueryExecutor.class.php');
require_once('utils/sql/Transaction.class.php');
require_once('utils/sql/SqlQuery.class.php');
require_once('utils/ArrayList.class.php');

class DAOFactory{
	
	/**
	 * @return CartDAO
	 */
	public static function getCartDAO(){
		
		require_once('CartDAO.class.php');
		require_once('models/Cart.class.php');
		require_once('mysql/CartMySqlDAO.class.php');
		require_once('mysql/ext/CartMySqlExtDAO.class.php');

		return new CartMySqlExtDAO();
	}

	/**
	 * @return CategoryDAO
	 */
	public static function getCategoryDAO(){

		require_once('StoreDAO.class.php');
		require_once('models/Store.class.php');
		require_once('mysql/StoreMySqlDAO.class.php');
		//require_once('mysql/ext/StoreMySqlExtDAO.class.php');

		require_once('CategoryDAO.class.php');
		require_once('models/Category.class.php');
		require_once('mysql/CategoryMySqlDAO.class.php');
		require_once('mysql/ext/CategoryMySqlExtDAO.class.php');
		
		return new CategoryMySqlExtDAO();
	}

	/**
	 * @return OrdersDAO
	 */
	public static function getOrdersDAO(){

		require_once('OrdersDAO.class.php');
		require_once('models/Orders.class.php');
		require_once('mysql/OrdersMySqlDAO.class.php');
		require_once('mysql/ext/OrdersMySqlExtDAO.class.php');
		
		return new OrdersMySqlExtDAO();
	}

	/**
	 * @return ProductDAO
	 */
	public static function getProductDAO(){
		
		require_once('ProductDAO.class.php');
		require_once('CategoryDAO.class.php');
		require_once('StoreDAO.class.php');
		
		require_once('models/Store.class.php');
		require_once('models/Category.class.php');
		require_once('models/Product.class.php');
		
		require_once('mysql/ProductMySqlDAO.class.php');
		require_once('mysql/CategoryMySqlDAO.class.php');
		require_once('mysql/StoreMySqlDAO.class.php');
		
		require_once('mysql/ext/ProductMySqlExtDAO.class.php');

		return new ProductMySqlExtDAO();
	}

	/**
	 * @return StoreDAO
	 */
	public static function getStoreDAO(){
		require_once('StoreDAO.class.php');
		require_once('models/Store.class.php');
		require_once('mysql/StoreMySqlDAO.class.php');
		require_once('mysql/ext/StoreMySqlExtDAO.class.php');
		return new StoreMySqlExtDAO();
	}

	/**
	 * @return UserDetailsDAO
	 */
	public static function getUserDetailsDAO(){

		require_once('UserDetailsDAO.class.php');
		require_once('models/UserDetail.class.php');
		require_once('mysql/UserDetailsMySqlDAO.class.php');
		require_once('mysql/ext/UserDetailsMySqlExtDAO.class.php');
		return new UserDetailsMySqlExtDAO();
	}


}
?>