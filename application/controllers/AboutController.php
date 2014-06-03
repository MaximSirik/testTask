<?php

/**
 * AboutController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class AboutController extends Zend_Controller_Action
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
}
