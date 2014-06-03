<?php

/**
 * AdminpanelController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class AdminpanelController extends Zend_Controller_Action
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
        if (!isset($id)) {
            $id = 0;
        }
        $getCategory = new Application_Model_DbTable_Category();
        $this->view->getCategory = $getCategory->getCategory($id);
        $this->view->getNameCategory = $getCategory->getNameCategory($id);
        $this->view->getAllCategory = $getCategory->getAllCategory();
        $getSeason = new Application_Model_DbTable_Season();
        $this->view->getSeason = $getSeason->getSeason();
        $getTrademark = new Application_Model_DbTable_Trademark();
        $this->view->getTrademark = $getTrademark->getTrademark();
        $getColor = new Application_Model_DbTable_Color();
        $this->view->getColor = $getColor->getColor();
        $getMaterial = new Application_Model_DbTable_Material();
        $this->view->getMaterial = $getMaterial->getMaterial();
        $getAllUser = new Application_Model_DbTable_Users();
        $this->view->getAllUsers = $getAllUser->getAllUser();
        $getOrders = new Application_Model_DbTable_Orders();
        $this->view->getOrders = $getOrders->getOrders();
    }

    public function addgoodsAction()
    {
        if ($this->getRequest()->isPost()) {
            $GoodsData = $this->getRequest()->getPost();
            $getParendId = new Application_Model_DbTable_Category();
            $result = $getParendId->getParentId($GoodsData['type']);
            $addGoods = new Application_Model_DbTable_Goods();
            $addGoods->addGoods($GoodsData['name'],
                $GoodsData['type'],
                $GoodsData['cost'],
                $GoodsData['specification'],
                $GoodsData['url'],
                $GoodsData['color'],
                $GoodsData['costall'],
                $GoodsData['material'],
                $GoodsData['season'],
                $GoodsData['article'],
                $GoodsData['complect'],
                $result['parent_id']
            );
        }
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }

    public function addcategoryAction()
    {
        if ($this->getRequest()->isPost()) {
            $categoryData = $this->getRequest()->getPost();
            $addCategory = new Application_Model_DbTable_Category();
            $addCategory->addCategory($categoryData['name'], $categoryData['parent_id'], $categoryData['about']);
        }
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }

    public function addcolorAction()
    {
        if ($this->getRequest()->isPost()) {
            $colorData = $this->getRequest()->getPost();
            $addColor = new Application_Model_DbTable_Color();
            $addColor->addColor($colorData['name_color']);
        }
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }

    public function addmaterialAction()
    {
        if ($this->getRequest()->isPost()) {
            $materialData = $this->getRequest()->getPost();
            $addMaterial = new Application_Model_DbTable_Material();
            $addMaterial->addMaterial($materialData['name_material']);
        }
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }

    public function addtrademarkAction()
    {
        if ($this->getRequest()->isPost()) {
            $trademarkData = $this->getRequest()->getPost();
            $addTrademark = new Application_Model_DbTable_Trademark();
            $addTrademark->addTrademark($trademarkData['name_trademark']);
        }
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }

    public function orderAction()
    {
        $keyOrders = $this->getRequest()->getQuery('id');
        $getDetailOrders = new Application_Model_DbTable_Ordergoods();
        $this->view->getDetailOrders = $getDetailOrders->getDetailOrders($keyOrders);
    }

    public function resultAction()
    {
        $keyOrders = $this->getRequest()->getQuery('id');
        $resultOrders = new Application_Model_DbTable_Orders();
        $resultOrders->updateResultOrders($keyOrders);
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }

    public function cancelAction()
    {
        $keyOrders = $this->getRequest()->getQuery('id');
        $resultOrders = new Application_Model_DbTable_Orders();
        $resultOrders->updateCancelOrders($keyOrders);
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }

    public function deleteAction()
    {
        $keyOrders = $this->getRequest()->getQuery('key');
        $deleteOrders = new Application_Model_DbTable_Orders();
        $deleteOrders->deleteOrders($keyOrders);
        $deleteOrdersGoods = new Application_Model_DbTable_Ordergoods();
        $deleteOrdersGoods->deleteOrdersGoods($keyOrders);
        $baseUrl = new Zend_View_Helper_BaseUrl();
        $this->getResponse()->setRedirect($baseUrl->baseUrl() . '/adminpanel');
    }
}
