<?php

/**
 * ComparisonController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class ComparisonController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $count = count($_SESSION['comparison']);
        $tempComparison = $_SESSION['comparison'];
        unset($_SESSION['comparison']);
        $resultGoods = array();
        if ($count <= 4) {
            $tempCount = $count;
        } else {
            $tempCount = 4;
        }
        $doTemp = 0;
        $i = 0;
        do {
            if (isset($tempComparison[$i])) {
                $temp = $tempComparison[$i];
                $getGoods = new Application_Model_DbTable_Goods();
                $resultGoods[$doTemp] = $getGoods->getGoodsId($temp);
                $_SESSION['comparison'][$doTemp] = $temp;
                $doTemp++;
            }
            $i++;
        } while ($doTemp < $tempCount);
        $this->view->getComparisonGoods = $resultGoods;
    }

    public function clearAction()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $pos = $this->getRequest()->getQuery('pos');
        unset($_SESSION['comparison'][$pos]);
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/comparison');
        if (empty($_SESSION['comparison'])) {
            $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/products?id=1');
        }
    }
}
