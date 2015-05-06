<?php

	/**
	 * @author Rahul Lahoria
	 */

	require_once 'ResourceRegistry.interface.php';

    class v0ResourceRegistry implements ResourceRegistry{

        private $resource = null;

        public function lookupResource ($resourceType) {

            switch($resourceType) {

            	case '/order': 
            		require_once 'resources/OrdersResource.class.php';
            		$this -> resource = new OrdersResource();
                break;

                case '/store': 
                    require_once 'resources/StoreResource.class.php';
                    $this -> resource = new StoreResource();
                break;

                case '/category': 
                    require_once 'resources/CategoryResource.class.php';
                    $this -> resource = new CategoryResource();
                break;

                case '/products':
                    require_once 'resources/ProductsResource.class.php';
                    $this -> resource = new ProductsResource();
                break;

                case '/user':
                    require_once 'resources/UsersResource.class.php';
                    $this -> resource = new UsersResource();
                break;

            	default:
                    require_once 'exceptions/UnsupportedResourceTypeException.class.php';
            		throw new UnsupportedResourceTypeException();
                break;
            }
        	return $this -> resource;
        }

        public function toString() {
            return "Resource: " . $this -> resource;
        }
    }
