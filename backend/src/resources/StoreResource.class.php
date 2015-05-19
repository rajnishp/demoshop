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

    private $storeDAO;
    private $store;
    
    public function __construct() {
		$DAOFactory = new DAOFactory();
		$this -> storeDAO = $DAOFactory->getStoreDAO();
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
        
        $result = $this -> storeDAO -> delete($storeId);
        $logger -> debug ("store Deleted? " . $result);

        if ($result) 
            $result = array('code' => '2003');
        else 
            $result = array('code' => '2004');

        return $result;
    }

    public function put ($resourceVals, $data) {

        global $logger, $warnings_payload;
        $update = false;
        
        $storeId = $resourceVals ['store'];

        if (! isset($storeId)) {
            $warnings_payload [] = 'PUT call to /store must be succeeded ' . 
                                    'by /store_id i.e. PUT /store/store_id';
            throw new UnsupportedResourceMethodException();
        }
        if (! isset($data))
            throw new MissingParametersException('No fields specified for updation');

        $storeObj = $this -> storeDAO -> load($storeId);
        
        if(! is_object($storeObj)) 
            return array('code' => '2004');

        $newLoginId= $data ['login_id'];
        if (isset($newLoginId)) {
            if ($newLoginId != $storeObj -> getLoginId()) {
                $update = true;
                $storeObj -> setLoginId($newLoginId);
            }
        }

        $newPassword = $data ['password'];
        if (isset($newPassword)) {
            if ($newPassword != $storeObj -> getPassword()){
                $update = true;
                $storeObj -> setPassword($newPassword);
            }
        }


        $newAddress = $data ['address'];
        if (isset($newAddress)) {
            if ($newAddress != $storebj -> getAddress()){
                $update = true;
                $storeObj -> setAddress($newAddress);
            }
        }


        if ($update) {
            $logger -> debug('PUT Store object: ' . $storeObj -> toString());
            $result = $this -> storeDAO -> update($storeObj);
            $logger -> debug('Updated entry: ' . $result);
        }

        $storePut = $storeObj -> toArray();
        $this -> store [] = $storePut;

        if(! isset($store ['id'])) 
            return array('code' => '2004');

        return array('code' => '2002', 
                        'data' => array(
                            'store' => $this -> store
                        )
        );
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
                                $data ['address'],
                                $data ['latitude'],
                                $data ['longitude'],
                                $data ['type'],
                                $data ['last_update_time'],
                                0
                            );
        $logger -> debug ("POSTed store info " . $storeObj -> toString());

        $this -> storeDAO -> insert($storeObj);

        $store = $storeObj -> toArray();
        
        if(! isset($store ['id'])) 
            return array('code' => '2011');

        $this -> store[] = $store;
        return array ('code' => '2001', 
                        'data' => array(
                            'store' => $this -> store
                        )
        );
    }

    public function get($resourceVals, $data) {
        
        $storeId = $resourceVals ['store'];

        if (isset($storeId))
            $result = $this-> getStore($storeId);
        else    
            $result = $this-> getListOfAllStores();

        if (!is_array($result)) {
            return array('code' => '6004');
        }

        return $result;
    }

    private function getStore($storeId) {
        global $logger;
        $logger->debug('Fetch store...');

        $storeObj = $this -> storeDAO -> load($storeId);

        if(empty($storeObj)) 
                return array('code' => '2004');

        
             
        $this -> store [] = $storeObj-> toArray();
        
        $logger -> debug ('Fetched list of stores: ' . json_encode($this -> store));

        return array('code' => '2000', 
                     'data' => array(
                                'store' => $this -> store
                            )
            );
    }

    private function getListOfAllStores() {
        global $logger;
        $logger->debug('Fetch list of all stores...');

        $listOfStoreObjs = $this -> storeDAO -> queryAll();

        if(empty($listOfStoreObjs)) 
                return array('code' => '2004');

        foreach ($listOfStoreObjs as $storeObj) {
            $this -> stores [] = $storeObj -> toArray();
        }
        $logger -> debug ('Fetched list of stores: ' . json_encode($this -> stores));

        return array('code' => '2000', 
                     'data' => array(
                                'stores' => $this -> stores
                            )
            );
    }
}