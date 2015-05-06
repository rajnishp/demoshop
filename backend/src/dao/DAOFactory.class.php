<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return CartDAO
	 */
	public static function getCartDAO(){
		return new CartMySqlExtDAO();
	}

	/**
	 * @return CategoryDAO
	 */
	public static function getCategoryDAO(){
		return new CategoryMySqlExtDAO();
	}

	/**
	 * @return OrdersDAO
	 */
	public static function getOrdersDAO(){
		return new OrdersMySqlExtDAO();
	}

	/**
	 * @return ProductDAO
	 */
	public static function getProductDAO(){
		return new ProductMySqlExtDAO();
	}

	/**
	 * @return StoreDAO
	 */
	public static function getStoreDAO(){
		return new StoreMySqlExtDAO();
	}

	/**
	 * @return UserDetailsDAO
	 */
	public static function getUserDetailsDAO(){
		return new UserDetailsMySqlExtDAO();
	}


}
?>