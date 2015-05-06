<?php

/**
 * @author Rajnish
 */
require_once 'resources/Resource.interface.php';
require_once 'dao/DAOFactory.class.php';
require_once 'models/Store.class.php';
require_once 'exceptions/MissingParametersException.class.php';
require_once 'exceptions/UnsupportedResourceMethodException.class.php';

class StoreResource implements Resource {

    private $shopDAO;
    private $store;
    
    public function __construct() {
		$DAOFactory = new DAOFactory();
		$this -> shopDAO = $DAOFactory->getStoreDAO();
    }

    public function checkIfRequestMethodValid($requestMethod) {
		return in_array($requestMethod, array('get', 'put', 'post', 'delete', 'options'));
    }

    public function options() {    }

    
    public function delete ($resourceVals, $data) {
        global $logger, $warnings_payload; 
        $storeId = $resourceVals ['store'];

        if (! isset($storeId)) {
            $warnings_payload [] = 'DELETE call to /store must be succeeded ' .  
                                        'by /storeId i.e. DELETE /store/storeId';
            throw new UnsupportedResourceMethodException();
        }
        $logger -> debug ("Delete store with Id: " . $storeId);-
        
        $result = $this -> shopDAO -> delete($storeId);
        $logger -> debug ("store Deleted? " . $result);

        if ($result) 
            $result = array('code' => '2003');
        else 
            $result = array('code' => '2004');

        return $result;
    }

    public function put ($resourceVals, $data) {
    }

    public function post ($resourceVals, $data) {
        global $logger, $warnings_payload;

        $storeId = $resourceVals ['store'];
        if (isset($storeId)) {
            $warnings_payload [] = 'POST call to /store must not have ' . 
                                        '/storeId appended i.e. POST /store';
            throw new UnsupportedResourceMethodException();
        }

        $storeObj = new Store($data ['name'], 
                                $data ['login_id'],
                                $data ['password'],
                                $data ['location'],
                                $data ['type'],
                                0
                            );
        $logger -> debug ("POSTed store info " . $storeObj -> toString());

        $this -> shopDAO -> insert($storeObj);

        $store = $storeObj -> toArray();
        
        if(! isset($store ['id'])) 
            return array('code' => '2011');

        $this -> order[] = $store;
        return array ('code' => '2001', 
                        'data' => array(
                            'store' => $this -> store
                        )
        );
    }

    public function get () {    }
}