<?php

/**
 * IndexController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class loginController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    /**
     * Output information on the index
     */

    public function indexAction()
    {
        $id = $this->getRequest()->getQuery('id');
        if (!isset($id)) { $id = 0;}
        $getCategory = new Application_Model_DbTable_Category();
        $this->view->getCategory = $getCategory->getCategory($id);
        $this->view->getNameCategory = $getCategory->getNameCategory($id);
    }

    public function authorizationAction()
    {
        $baseUrl = new Zend_View_Helper_BaseUrl();
        if(!isset($_SESSION)){
            session_start();
        }
        if ($this->getRequest()->isPost() ) {
            $authData = $this->getRequest()->getPost();
            $getUser = new Application_Model_DbTable_Users();
            $resultUser = $getUser->getUser($authData['email'], md5($authData['password']));
            if (!empty($resultUser)) {
                $_SESSION['user']['id'] = $resultUser['id'];
                $_SESSION['user']['first_name'] = $resultUser['first_name'];
                $_SESSION['user']['level'] = $resultUser['level'];
                unset($_SESSION['message']);
                $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/');
            } else {
                $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/login');
            }
        }
    }

    public function logoutAction()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        unset($_SESSION['user']);
        unset($_SESSION['comparison']);
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/');
    }


}