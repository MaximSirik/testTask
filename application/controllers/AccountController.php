<?php

/**
 * AccountController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class AccountController extends Zend_Controller_Action
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
        if (!isset($_SESSION)) {
            session_start();
        }
        $baseUrl = new Zend_View_Helper_BaseUrl();
        if (empty($_SESSION['user']['id'])) {
            $_SESSION['message'] = '<strong>Внимание</strong> личный кабинет доступен только зарегистрированным пользователям.
             Пожалуйста выполните авторизацию или регистрацию на нашем сайте';
            $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/login');
        }
    }
}
