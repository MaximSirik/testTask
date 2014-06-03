<?php

/**
 * RegistrationController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class RegistrationController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {
        if ($this->getRequest()->isPost() ) {
            $formData = $this->getRequest()->getPost();
            if ($formData['repeadpass'] == $formData['password']) {
                $name = $formData['name'];
                $sirname = $formData['sirname'];
                $password = md5($formData['password']);
                $email = $formData['email'];
                $telephone = $formData['telephone'];
                $usersAdd = new Application_Model_DbTable_Users();
                $this->view->usersAdd = $usersAdd->usersAdd($name,$sirname,$email,$password,$telephone);
                unset($_SESSION['message']);
                $baseUrl = new Zend_View_Helper_BaseUrl();
                $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/');
            }
            else
            {
                $baseUrl = new Zend_View_Helper_BaseUrl();
                $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/login/registration');
            }
        }
    }
}
