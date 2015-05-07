<?php

/**
 * @author Rajnish
 */
require_once 'resources/Resource.interface.php';
require_once 'dao/DAOFactory.class.php';
require_once 'models/Order.class.php';
require_once 'exceptions/MissingParametersException.class.php';
require_once 'exceptions/UnsupportedResourceMethodException.class.php';

class OrdersResource implements Resource {

    private $shopDAO;
    private $order;
    
    public function __construct() {
		$DAOFactory = new DAOFactory();
		$this -> shopDAO = $DAOFactory->getOrdersDAO();
        $this -> cartDAO = $DAOFactory -> getCartDAO();
    }

    public function checkIfRequestMethodValid($requestMethod) {
		return in_array($requestMethod, array('get', 'put', 'post', 'delete', 'options'));
    }

    public function options() {    }

    
    public function delete ($resourceVals, $data) {
        global $logger, $warnings_payload; 
        $orderId = $resourceVals ['order'];

        if (! isset($orderId)) {
            $warnings_payload [] = 'DELETE call to /order must be succeeded ' .  
                                        'by /orderId i.e. DELETE /order/orderId';
            throw new UnsupportedResourceMethodException();
        }
        $logger -> debug ("Delete product with Id: " . $orderId);-
        
        $result = $this -> shopDAO -> delete($orderId);
        $logger -> debug ("order Deleted? " . $result);

        if ($result) 
            $result = array('code' => '2003');
        else 
            $result = array('code' => '2004');

        return $result;
    }

    public function put ($resourceVals, $data) {
        global $logger, $warnings_payload;
        $update = false;
        
        $orderId = $resourceVals ['order'];

        if (! isset($orderId)) {
            $warnings_payload [] = 'PUT call to /order must be succeeded ' . 
                                    'by /orderId i.e. PUT /order/orderId';
            throw new UnsupportedResourceMethodException();
        }
        if (! isset($data))
            throw new MissingParametersException('No fields specified for updation');

        $orderObj = $this -> shopDAO -> load($orderId);
        
        if(! is_object($orderObj)) 
            return array('code' => '2004');

        $newProductId= $data ['product_id'];
        if (isset($newProductId)) {
            if ($newProductId != $orderObj -> getProductId()) {
                $update = true;
                $orderObj -> setProductId($newProductId);
            }
        }

        $newQuantity = $data ['quantity'];
        if (isset($newQuantity)) {
            if ($newQuantity != $orderObj -> getQuantity()){
                $update = true;
                $orderObj -> setQuantity($newQuantity);
            }
        }

        if ($update) {
            $logger -> debug('PUT Order object: ' . $orderObj -> toString());
            $result = $this -> shopDAO -> update($orderObj);
            $logger -> debug('Updated entry: ' . $result);
        }

        $posts = $orderObj -> toArray();
        $this -> order [] = $orders;

        if(! isset($orders ['id'])) 
            return array('code' => '2004');

        return array('code' => '2002', 
                        'data' => array(
                            'order' => $this -> order
                        )
        );
    }

    public function post ($resourceVals, $data) {
        global $logger, $warnings_payload;

        $orderId = $resourceVals ['order'];
        if (isset($orderId)) {
            $warnings_payload [] = 'POST call to /order must not have ' . 
                                        '/orderId appended i.e. POST /order';
            throw new UnsupportedResourceMethodException();
        }

        $orderObj = new Orders($data ['phone'], 
                                $data ['address'],
                                $data ['order_time'],
                                0,
                                0
                            );
        $logger -> debug ("POSTed order: " . $orderObj -> toString());

        $this -> shopDAO -> insert($orderObj);

        $orderDetail = $orderObj -> toArray();

        if (isset($orderDetail['id'])) {
            if( isset( $data['cart']) ){
            
                foreach ($data['cart']['cartProduct'] as $key => $value) {

                    $cartObj = new Cart($orderDetail['id'],
                                        $value ['product_id'],
                                        $value ['quantity'],
                                        0,
                                        0
                                    );
                    $logger -> debug ("POSTed order cart Detail: " . $cartObj -> toString());

                    $this -> cartDAO -> insert($cartObj);

                    $cartDetail = $cartObj -> toArray();
                }
            }
        }
        
        else 
            return array('code' => '2011');

        $this -> order[] = $order;
        return array ('code' => '2001', 
                        'data' => array(
                            'order' => $this -> order
                        )
        );
    }

    public function get($resourceVals, $data) {
		
        $storeId = 1;

		$orderId = $resourceVals ['order'];
		if (isset($orderId))
			$result = $this-> getOrder($orderId, $storeId, $categoryId);
		else	
			$result = $this-> getListOfAllOrders($storeId);

		if (!is_array($result)) {
		    return array('code' => '6004');
		}

		return $result;
    }

    private function getOrder($orderId, $storeId, $categoryId) {
		global $logger;
		$logger->debug('Fetch list of  order...');

		$orderObj = $this -> shopDAO -> load($orderId, $categoryId);

        if(empty($orderObj)) 
                return array('code' => '2004');

        
             
        $this -> orders [] = $orderObj-> toArray();
        
        $logger -> debug ('Fetched list of order: ' . json_encode($this -> orders);

        return array('code' => '2000', 
                     'data' => array(
                                'orders' => $this -> orders
                            )
            );
    }

    private function getListOfAllOrders($storeId, $categoryId) {
		global $logger;
		$logger->debug('Fetch list of all orders...');

		$listOfOrderObjs = $this -> shopDAO -> readAll($storeId, $categoryId);

        if(empty($listOfOrderObjs)) 
                return array('code' => '2004');

        foreach ($listOfOrderObjs as $orderObj) {
                $order = $orderObj -> toArray();
                $this -> orders [] = $order;
        }
        $logger -> debug ('Fetched list of orders: ' . json_encode($this -> orders));

        return array('code' => '2000', 
                     'data' => array(
                                'orders' => $this -> orders
                            )
            );
    }
}
