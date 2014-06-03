<?php

/**
 * ProductsController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class ProductsController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $id = $this->getRequest()->getQuery('id');
        $getCategory = new Application_Model_DbTable_Category();
        $getGoods = new Application_Model_DbTable_Goods();
        $this->view->getAboutCategory = $getCategory->getNameCategory($id);
        $countTypeGoods = $getGoods->countType($id);
        $countParentGoods = $getGoods->countParent($id);
        if (($countTypeGoods != NULL) && ($countParentGoods == NULL)) {
            $this->view->getAllGoods = $getGoods->getAllGoods($id);
        } else {
            $this->view->getAllGoods = $getGoods->getAllParentsGoods($id);
        }
        if (!isset($id)) { $id = 0;}
        if (($countParentGoods == NULL)) {
            $id = $_SESSION['user']['category_id'];
        } else {
            $_SESSION['user']['category_id'] = $id;
        }
        $this->view->getCategory = $getCategory->getCategory($id);
        $this->view->getNameCategory = $getCategory->getNameCategory($id);
        if (($id != 0)) {
            $this->view->getNameParentCategory = $getCategory->getNameParentCategory($id);
        }
    }

    public function comentsAction()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        if ($this->getRequest()->isPost() ) {
            $commentsData = $this->getRequest()->getPost();
            if (!empty($commentsData['text_review'])) {
                $addComments = new Application_Model_DbTable_Comments();
                $addComments->addComments($_SESSION['goods']['id'], $commentsData['text_review'], $_SESSION['user']['id']);
                $baseUrl = new Zend_View_Helper_BaseUrl();
                $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/products/detail?id='.$_SESSION['goods']['id']);
            }
        }
    }

    public function comparisonAction()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $idComparison = $this->getRequest()->getQuery('id');
        $i = count($_SESSION['comparison']);
        $_SESSION['comparison'][$i] = $idComparison;
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() .$_SERVER['HTTP_REFERER']);
    }
}