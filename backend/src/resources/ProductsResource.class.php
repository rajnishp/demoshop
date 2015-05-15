<?php

/**
 * @author Rajnish
 */
require_once 'resources/Resource.interface.php';
require_once 'dao/DAOFactory.class.php';
require_once 'models/Product.class.php';
require_once 'exceptions/MissingParametersException.class.php';
require_once 'exceptions/UnsupportedResourceMethodException.class.php';

class ProductsResource implements Resource {

    private $productDAO;
    private $products;
    
    public function __construct() {
		$DAOFactory = new DAOFactory();
		$this -> productDAO = $DAOFactory-> getProductDAO();
    }

    public function checkIfRequestMethodValid($requestMethod) {
		return in_array($requestMethod, array('get', 'put', 'post', 'delete', 'options'));
    }

    public function options() {    }

    
    public function delete ($resourceVals, $data) {
        global $logger, $warnings_payload; 
        $postId = $resourceVals ['products'];

        if (! isset($productId)) {
            $warnings_payload [] = 'DELETE call to /products must be succeeded ' .  
                                        'by /productId i.e. DELETE /products/productId';
            throw new UnsupportedResourceMethodException();
        }
        $logger -> debug ("Delete product with Id: " . $productId);-
        
        $result = $this -> productDAO -> delete($productId);
        $logger -> debug ("Product Deleted? " . $result);

        if ($result) 
            $result = array('code' => '2003');
        else 
            $result = array('code' => '2004');

        return $result;
    }

    public function put ($resourceVals, $data) {
        global $logger, $warnings_payload;
        $update = false;
        
        $productId = $resourceVals ['products'];

        if (! isset($productId)) {
            $warnings_payload [] = 'PUT call to /products must be succeeded ' . 
                                    'by /product_id i.e. PUT /products/product_id';
            throw new UnsupportedResourceMethodException();
        }
        if (! isset($data))
            throw new MissingParametersException('No fields specified for updation');

        $productObj = $this -> productDAO -> load($productId);
        
        if(! is_object($productObj)) 
            return array('code' => '2004');

        $newPricebuy= $data ['pricebuy'];
        if (isset($newPricebuy)) {
            if ($newPricebuy != $productObj -> getPricebuy()) {
                $update = true;
                $productObj -> setPricebuy($newPricebuy);
            }
        }

        $newPricesell= $data ['pricesell'];
        if (isset($newPricesell)) {
            if ($newPricesell != $productObj -> getPricesell()) {
                $update = true;
                $productObj -> setPricesell($newPricesell);
            }
        }

        if ($update) {
            $logger -> debug('PUT Product object: ' . $productObj -> toString());
            $result = $this -> productDAO -> update($productObj);
            $logger -> debug('Updated entry: ' . $result);
        }

        $productPut = $productObj -> toArray();
        $this -> product [] = $productPut;

        if(! isset($product ['id'])) 
            return array('code' => '2004');

        return array('code' => '2002', 
                        'data' => array(
                            'product' => $this -> product
                        )
        );
    }

    public function post ($resourceVals, $data) {
        global $logger, $warnings_payload;

        $productId = $resourceVals ['products'];
        if (isset($productId)) {
            $warnings_payload [] = 'POST call to /products must not have ' . 
                                        '/productID appended i.e. POST /products';
            throw new UnsupportedResourceMethodException();
        }

        if( isset( $data["products"] ) ) {

            foreach ($data["products"] as $key => $value) {

                $productObj = new Product($value ['storeId'],
                                        $value ['name'], 
                                        $value ['description'], 
                                        $value ['sku'],
                                        $value ['pricebuy'],
                                        $value ['pricesell'],
                                        $value ['categoryId'],
                                        $value ['imageLink'],
                                        $value ['type'],
                                        0
                                    );

                $logger -> debug ("POSTed product detail.....: " . $productObj -> toString());

                try {
                    $this -> productDAO -> insert($productObj);
                } 
                catch (Exception $e) {    }

                $products = $productObj -> toArray();

                $this -> products[] = $products;
            }
        }
        else {
            $productObj = new Product($data ['storeId'],
                                        $data ['name'], 
                                        $data ['description'], 
                                        $data ['sku'],
                                        $data ['pricebuy'],
                                        $data ['pricesell'],
                                        $data ['categoryId'],
                                        $data ['imageLink'],
                                        $data ['type'],
                                        0
                                    );

                $logger -> debug ("POSTed product detail..........: " . $productObj -> toString());

                $this -> productDAO -> insert($productObj);

                $products = $productObj -> toArray();

                if(! isset($products ['id'])) 
                return array('code' => '2011');


                $this -> product[] = $products;
        }
    
        
        return array ('code' => '2001', 
                        'data' => array(
                            'products' => $this -> products
                        )
        );
    }

    public function get($resourceVals, $data) {
		
        /*$storeName = (int) $data['store_id'];
        $categoryName = (int) $data['category_id'];
        $maxStoreName = (int) $data['max_store_id'];*/
        $productName = $data['search_product'];
        $storeName = 'stopNshop';
        //$categoryName = 'Kitchen';
        //$maxStoreName = 'stopNshop';


		$productId = $resourceVals ['products'];
		if (isset($productId))
			$result = $this-> getProduct($productId);
		
        elseif (isset($storeName) && isset($categoryName))
			$result = $this-> getListOfAllProducts($storeName, $categoryName);

        elseif (isset($maxStoreName))
            $result = $this-> getMaxProfitProducts($maxStoreName);

        elseif (isset($productName))
            $result = $this-> getListSearchProducts($productName);     

        else
            $result = $this-> getLatestProducts($storeName);


		if (!is_array($result)) {
		    return array('code' => '6004');
		}

		return $result;
    }

    private function getProduct($productId) {
		global $logger;
		$logger->debug('Fetch list of  product...');

		$productObj = $this -> productDAO -> load($productId);

        if(empty($productObj)) 
                return array('code' => '2004');
             
        $this -> products [] = $productObj-> toArray();
        
        $logger -> debug ('Fetched list of Products: ' . json_encode($this -> products));

        return array('code' => '2000', 
                     'data' => array(
                                'posts' => $this -> posts
                            )
            );
    }

    private function getListOfAllProducts($storeName, $categoryName) {
        global $logger;
        $logger->debug('Fetch list of all products...');

        $listOfProductObjs = $this -> productDAO -> readAllProducts($storeName, $categoryName);

        if(empty($listOfProductObjs)) 
                return array('code' => '2004');

        foreach ($listOfProductObjs as $productObj) {
                $product = $productObj -> toArray();
                $this -> products [] = $product;
        }
        $logger -> debug ('Fetched list of products: ' . json_encode($this -> products));

        return array('code' => '2000', 
                     'data' => array(
                                'products' => $this -> products
                            )
            );
    }

    private function getMaxProfitProducts($maxStoreName) {
        global $logger;
        $logger->debug('Fetch list of all products with max profit...');

        $listOfProductObjs = $this -> productDAO -> readMaxProfitProducts($maxStoreName);

        if(empty($listOfProductObjs))
                return array('code' => '2004');

        foreach ($listOfProductObjs as $productObj) {
                $product = $productObj -> toArray();
                $this -> products [] = $product;
        }
        $logger -> debug ('Fetched list of products with max profit: ' . json_encode($this -> products));

        return array('code' => '2000', 
                     'data' => array(
                                'products' => $this -> products
                            )
            );
    }

    private function getLatestProducts($storeName) {
        global $logger;
        $logger->debug('Fetch list of all latest products...');

        $listOfProductObjs = $this -> productDAO -> readLatestStoreProducts($storeName);

        if(empty($listOfProductObjs)) 
                return array('code' => '2004');

        foreach ($listOfProductObjs as $productObj) {
                $product = $productObj -> toArray();
                $this -> products [] = $product;
        }
        $logger -> debug ('Fetched list of latest products: ' . json_encode($this -> products));

        return array('code' => '2000', 
                     'data' => array(
                                'products' => $this -> products
                            )
            );
    }

    private function getListSearchProducts($productName) {
        global $logger;
        $logger->debug('Fetch list of all searched products...');

        $listOfProductObjs = $this -> productDAO -> querySearchProduct($productName);

        if(empty($listOfProductObjs))
                return array('code' => '2004');

        foreach ($listOfProductObjs as $productObj) {
                $product = $productObj -> toArray();
                $this -> products [] = $product;
        }
        $logger -> debug ('Fetched list of all searched products...' . json_encode($this -> products));

        return array('code' => '2000', 
                     'data' => array(
                                'products' => $this -> products
                            )
            );
    }
}
