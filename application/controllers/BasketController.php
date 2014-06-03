<?php

/**
 * BasketController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class BasketController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {
        if (empty($_COOKIE['basket'])) {
            $baseUrl = new Zend_View_Helper_BaseUrl();
            $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/');
        } else {
            $basket = explode(",", $_COOKIE['basket']);
            $resultGoods = array();
            $temp = array();
            for ($i = 0; $i < count($basket) - 1; $i++) {
                $temp[$i] = explode(":", $basket[$i]);

                $getGoods = new Application_Model_DbTable_Goods();
                $resultGoods[$i] = $getGoods->getGoodsId($temp[$i][0]);
            }
            $this->view->getBasketGoods = $resultGoods;
            $this->view->tempCookie = $temp;
        }
    }

    public function ordersAction()
    {
        $baseUrl = new Zend_View_Helper_BaseUrl();
        if (!isset($_SESSION)) {
            session_start();
        }
        if (empty($_COOKIE['basket'])) {
            $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/');
        }
        if (empty($_SESSION['user']['id'])) {
            $_SESSION['message'] = '<strong>Внимание!!!</strong> для заказа товара необходимо выполнить регистрацию или авторизацию на нашем сайте.';
            $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/login');
        } else {
            $basket = explode(",", $_COOKIE['basket']);
            $temp = array();
            $key = md5(microtime(true));
            $time = time();
            $insertOrders = new Application_Model_DbTable_Orders();
            $insertOrders->insertOrders($key, $_SESSION['user']['id'], $time);
            for ($i = 0; $i < count($basket) - 1; $i++) {
                $temp[$i] = explode(":", $basket[$i]);

                $insertGoods = new Application_Model_DbTable_Ordergoods();
                $insertGoods->insertOrderedGoods($key, $temp[$i][0], $temp[$i][1]);
            }
            setcookie('basket', '', -1, "/");
            setcookie('totalPrice', '', -1, "/");
            $baseUrl = new Zend_View_Helper_BaseUrl();
            $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/');

        }
    }
}
