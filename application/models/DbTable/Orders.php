<?php

/**
 * Application_Model_DbTable_Orders
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
class Application_Model_DbTable_Orders extends Zend_Db_Table_Abstract
{

    protected $_name = 'orders';


    public function insertOrders($key, $id_user, $time)
    {
        $data = array(
            'key_orders' => $key,
            'id_users' => $id_user,
            'time' => $time,
            'new_orders' => 0,
            'cancel' => 0,
            'delete' => 0,
        );
        $this->insert($data);
    }

    public function getOrders()
    {
        $select = $this->select();
        $select->setIntegrityCheck(false);
        $select->from(array('o' => 'orders'))
            ->join(array('u' => 'users'), 'o.id_users = u.id')
            ->order('o.new_orders ASC');
        return $this->getAdapter()->fetchAll($select);
    }

    public function updateResultOrders($key)
    {
        $data = array(
            'new_orders'=> 1,
        );
        $where = $this->getAdapter()->quoteInto('key_orders = ?', $key);
        $this->update($data, $where);
    }

    public function updateCancelOrders($key)
    {
        $data = array(
            'new_orders'=> 1,
            'cancel'=> 1,
        );
        $where = $this->getAdapter()->quoteInto('key_orders = ?', $key);
        $this->update($data, $where);
    }

    public function deleteOrders($key)
    {
        $where = $this->getAdapter()->quoteInto('key_orders = ?', $key);
        $this->delete($where);
    }
}
