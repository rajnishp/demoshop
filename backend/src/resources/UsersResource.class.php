<?php

/**
 * @author Rajnish
 */
require_once 'resources/Resource.interface.php';
require_once 'dao/DAOFactory.class.php';
require_once 'models/UserDetail.class.php';
require_once 'exceptions/MissingParametersException.class.php';
require_once 'exceptions/UnsupportedResourceMethodException.class.php';

class UsersResource implements Resource {

    private $shopDAO;
    
    public function __construct() {
		$DAOFactory = new DAOFactory();
		$this -> shopDAO = $DAOFactory->getUserDAO();
    }

    public function checkIfRequestMethodValid($requestMethod) {
		return in_array($requestMethod, array('get', 'put', 'post', 'delete', 'options'));
    }

    public function options() {    }

    
    public function delete ($resourceVals, $data) {
        global $logger, $warnings_payload;
        $userId = $resourceVals ['user'];

        if (! isset($userId)) {
            $warnings_payload [] = 'DELETE call to /user must be succeeded ' .  
                                        'by /userId i.e. DELETE /user/userId';
            throw new UnsupportedResourceMethodException();
        }
        $logger -> debug ("Delete user with Id: " . $userId);
        
        $result = $this -> shopDAO -> delete($userId);
        $logger -> debug ("user Deleted? " . $result);

        if ($result) 
            $result = array('code' => '2003');
        else 
            $result = array('code' => '2004');

        return $result;
    }

    public function put ($resourceVals, $data) {
        global $logger, $warnings_payload;
        $update = false;
        
        $userId = $resourceVals ['user'];

        if (! isset($userId)) {
            $warnings_payload [] = 'PUT call to /user must be succeeded ' . 
                                    'by /userId i.e. PUT /user/userId';
            throw new UnsupportedResourceMethodException();
        }
        if (! isset($data))
            throw new MissingParametersException('No fields specified for updation');

        $userObj = $this -> shopDAO -> load($userId);
        
        if(! is_object($userObj))
            return array('code' => '2004');

        $newPhone= $data ['phone'];
        if (isset($newPhone)) {
            if ($newPhone != $userObj -> getPhone()) {
                $update = true;
                $userObj -> setPhone($newPhone);
            }
        }

        $newEmail = $data ['email'];
        if (isset($newEmail)) {
            if ($newEmail != $userObj -> getEmail()){
                $update = true;
                $userObj -> setEmail($newEmail);
            }
        }

        if ($update) {
            $logger -> debug('PUT User object: ' . $userObj -> toString());
            $result = $this -> shopAO -> update($userObj);
            $logger -> debug('Updated entry: ' . $result);
        }

        $users = $userObj -> toArray();
        $this -> users [] = $users;

        if(! isset($users ['id'])) 
            return array('code' => '2004');

        return array('code' => '2002', 
                        'data' => array(
                            'users' => $this -> users
                        )
        );
    }

    public function post ($resourceVals, $data) {
        global $logger, $warnings_payload;

        $userId = $resourceVals ['user'];
        if (isset($userId)) {
            $warnings_payload [] = 'POST call to /user must not have ' . 
                                        '/userId appended i.e. POST /user';
            throw new UnsupportedResourceMethodException();
        }

        $userObj = new Order($data ['firstame'], 
                                $data ['lastname'],
                                $data ['email'],
                                $data ['phone'],
                                $data ['password']
                                0
                            );
        $logger -> debug ("POSTed userDetail: " . $userObj -> toString());

        $this -> shopDAO -> insert($userObj);

        $user = $userObj -> toArray();
        
        if(! isset($user ['id'])) 
            return array('code' => '2011');

        $this -> user[] = $user;
        return array ('code' => '2001', 
                        'data' => array(
                            'user' => $this -> user
                        )
        );
    }

    public function get($resourceVals, $data) {    }
}
