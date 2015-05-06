<?php

/**
 * @author Rajnish
 */
require_once 'resources/Resource.interface.php';
require_once 'dao/DAOFactory.class.php';
require_once 'models/Product.class.php';
require_once 'exceptions/MissingParametersException.class.php';
require_once 'exceptions/UnsupportedResourceMethodException.class.php';

class PostsResource implements Resource {

    private $shopDAO;
    
    public function __construct() {
		$DAOFactory = new DAOFactory();
		$this -> shopDAO = $DAOFactory->getProductsDAO();
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
        
        $result = $this -> shopDAO -> delete($productId);
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
        
        $postId = $resourceVals ['posts'];

        if (! isset($postId)) {
            $warnings_payload [] = 'PUT call to /posts must be succeeded ' . 
                                    'by /post_id i.e. PUT /posts/post_id';
            throw new UnsupportedResourceMethodException();
        }
        if (! isset($data))
            throw new MissingParametersException('No fields specified for updation');

        $postObj = $this -> postDAO -> load($postId);
        
        if(! is_object($postObj)) 
            return array('code' => '2004');

        $newChId= $data ['chId'];
        if (isset($newChId)) {
            if ($newChId != $postObj -> getChId()) {
                $update = true;
                $postObj -> setChId($newChId);
            }
        }

        $newTitle = $data ['title'];
        if (isset($newTitle)) {
            if ($newTitle != $postObj -> getTitle()){
                $update = true;
                $postObj -> setTitle($newTitle);
            }
        }


        $newHashtag = $data ['hashtag'];
        if (isset($newHashtag)) {
            if ($newHashtag != $postObj -> getHashtag()){
                $update = true;
                $postObj -> setHashtag($newHashtag);
            }
        }


        if ($update) {
            $logger -> debug('PUT Post object: ' . $postObj -> toString());
            $result = $this -> postDAO -> update($postObj);
            $logger -> debug('Updated entry: ' . $result);
        }

        $posts = $postObj -> toArray();
        $this -> posts [] = $posts;

        if(! isset($posts ['id'])) 
            return array('code' => '2004');

        return array('code' => '2002', 
                        'data' => array(
                            'posts' => $this -> posts
                        )
        );
    }

    public function post ($resourceVals, $data) {
        global $logger, $warnings_payload;

        $postId = $resourceVals ['posts'];
        if (isset($postId)) {
            $warnings_payload [] = 'POST call to /posts must not have ' . 
                                        '/POST_ID appended i.e. POST /posts';
            throw new UnsupportedResourceMethodException();
        }

        $this -> sanitize($data);

        $postObj = new Post($data ['chId'], $data ['title'], $data ['hashtag'], 0);
        $logger -> debug ("POSTed post: " . $postObj -> toString());

        $this -> postDAO -> insert($postObj);

        $posts = $postObj -> toArray();
        
        if(! isset($posts ['id'])) 
            return array('code' => '2011');

        $this -> posts[] = $posts;
        return array ('code' => '2001', 
                        'data' => array(
                            'posts' => $this -> posts
                        )
        );
    }

    private function create($postObj) {

    }


    public function get($resourceVals, $data) {
		
        $storeId = 1;

		$productId = $resourceVals ['products'];
		if (isset($productId))
			$result = $this-> getProduct($productId, $storeId, $categoryId);
		else	
			$result = $this-> getListOfAllProducts($storeId);

		if (!is_array($result)) {
		    return array('code' => '6004');
		}

		return $result;
    }

    private function getProduct($productId, $storeId, $categoryId) {
		global $logger;
		$logger->debug('Fetch list of  product...');

		$productObj = $this -> shopDAO -> load($productId, $categoryId);

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

    private function getListOfAllProducts($storeId, $categoryId) {
		global $logger;
		$logger->debug('Fetch list of all products...');

		$listOfProductObjs = $this -> shopDAO -> readAll($storeId, $categoryId);

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

}
