<?php

/**
 * DetailController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class DetailController extends Zend_Controller_Action
{

    public function init()
    {
    }

    /**
     * Output information on the index
     */

    public function indexAction()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $id = $this->getRequest()->getQuery('id');
        $_SESSION['goods']['id'] = $id;
        $getGoodsId = new Application_Model_DbTable_Goods();
        $this->view->getGoodsId = $getGoodsId->getGoodsId($id);
        $getComments = new Application_Model_DbTable_Comments();
        $this->view->getComments = $getComments->getComments($id);
    }

}