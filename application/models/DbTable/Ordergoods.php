<?php

/**
 * Application_Model_DbTable_Ordergoods
 *
 * Model for working with name_products table
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */
class Application_Model_DbTable_Ordergoods extends Zend_Db_Table_Abstract
{

    protected $_name = 'ordered_goods';

    public function insertOrderedGoods($key, $id_goods, $count)
    {
        $data = array(
            'key' => $key,
            'id_goods' => $id_goods,
            'count' => $count,
        );
        $this->insert($data);
    }

    public function getDetailOrders($keyOrders)
    {
        $select = $this->select();
        $select->setIntegrityCheck(false);
        $select->from(array('o' => 'ordered_goods'))
            ->join(array('g' => 'goods'), 'o.id_goods = g.id AND o.key = "'.$keyOrders.'"');
        return $this->getAdapter()->fetchAll($select);
    }

    public function deleteOrdersGoods($key)
    {
        $where = $this->getAdapter()->quoteInto('key = ?', $key);
        $this->delete($where);
    }

}