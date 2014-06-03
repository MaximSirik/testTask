<?php

/**
 * SearchController
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class SearchController extends Zend_Controller_Action
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
        if ($this->getRequest()->isPost() ) {
            $searchWord = $this->getRequest()->getPost();
            $getSearchResult = new Application_Model_DbTable_Goods();
            $this->view->getSearchResult = $getSearchResult->search($searchWord['search_world']);
        }
    }
}
