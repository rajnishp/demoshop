<?php

/**
 * @author Rajnish
 */
require_once 'resources/Resource.interface.php';
require_once 'dao/DAOFactory.class.php';
require_once 'models/Category.class.php';
require_once 'exceptions/MissingParametersException.class.php';
require_once 'exceptions/UnsupportedResourceMethodException.class.php';

class CategoryResource implements Resource {

    private $categoryDAO;
    private $category;
    
    public function __construct() {
		$DAOFactory = new DAOFactory();
		$this -> categoryDAO = $DAOFactory->getCategoryDAO();
    }

    public function checkIfRequestMethodValid($requestMethod) {
		return in_array($requestMethod, array('get', 'put', 'post', 'delete', 'options'));
    }

    public function options() {    }

    
    public function delete ($resourceVals, $data) {
        global $logger, $warnings_payload; 
        $categoryId = $resourceVals ['category'];

        if (! isset($categoryId)) {
            $warnings_payload [] = 'DELETE call to /category must be succeeded ' .  
                                        'by /categoryId i.e. DELETE /category/categoryId';
            throw new UnsupportedResourceMethodException();
        }
        $logger -> debug ("Delete category with Id: " . $categoryId);-
        
        $result = $this -> categoryDAO -> delete($categoryId);
        $logger -> debug ("category Deleted? " . $result);

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

        $categoryId = $resourceVals ['category'];
        if (isset($categoryId)) {
            $warnings_payload [] = 'POST call to /category must not have ' . 
                                        '/categoryId appended i.e. POST /category';
            throw new UnsupportedResourceMethodException();
        }

        $categoryObj = new Category($data ['store_id'], 
                                $data ['name'],
                                $data ['parent_id'],
                                $data ['image_link'],
                                $data ['type'],
                                0
                            );
        $logger -> debug ("POSTed category info " . $categoryObj -> toString());

        $this -> categoryDAO -> insert($categoryObj);

        $category = $categoryObj -> toArray();
        
        if(! isset($category ['id'])) 
            return array('code' => '2011');

        $this -> category[] = $category;
        return array ('code' => '2001', 
                        'data' => array(
                            'category' => $this -> category
                        )
        );
    }

    public function get($resourceVals, $data) {
        
        $storeName = 'stopNshop';

        $categoryId = $resourceVals ['category'];

        if (isset($categoryId))
            $result = $this-> getCategory($storeName, $categoryId);
        else    
            $result = $this-> getListOfAllCategories($storeName);

        if (!is_array($result)) {
            return array('code' => '6004');
        }

        return $result;
    }

    private function getCategory($storeId, $categoryId) {
        global $logger;
        $logger->debug('Fetch list of  category...');

        $categoryObj = $this -> categoryDAO -> load($storeId, $categoryId);

        if(empty($categoryObj)) 
                return array('code' => '2004');

        
             
        $this -> category [] = $categoryObj-> toArray();
        
        $logger -> debug ('Fetched list of category: ' . json_encode($this -> category));

        return array('code' => '2000', 
                     'data' => array(
                                'category' => $this -> category
                            )
            );
    }

    private function getListOfAllCategories($storeName) {
        global $logger;
        $logger->debug('Fetch list of all categories...');

        $listOfCategoryObjs = $this -> categoryDAO -> getAllStoreCategories($storeName);

        if(empty($listOfCategoryObjs)) 
                return array('code' => '2004');

        foreach ($listOfCategoryObjs as $categoryObj) {
                $category = $categoryObj -> toArray();
                $this -> categories [] = $category;
        }
        $logger -> debug ('Fetched list of categories: ' . json_encode($this -> categories));

        return array('code' => '2000', 
                     'data' => array(
                                'categories' => $this -> categories
                            )
            );
    }
}