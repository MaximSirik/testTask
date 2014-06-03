<?php

/**
 * Application_Model_DbTable_Comments
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
class Application_Model_DbTable_Comments extends Zend_Db_Table_Abstract
{

    protected $_name = 'comments';

    /**
     * Getting data from the database where b.id=c.id_product AND c.secret_key=id
     *
     * return $result;
     */

    public function addComments($idGoods, $comments, $idUser)
    {
        $data = array(
            'id_goods' => $idGoods,
            'comments' => $comments,
            'user_id' => $idUser,
        );
        $this->insert($data);
    }


    public function getComments($id)
    {
        $select = $this->select();
        $select->setIntegrityCheck(false);
        $select->from(array('c' => 'comments'))
            ->join(array('u' => 'users'), 'c.user_id = u.id AND c.id_goods="' . $id . '"')
            ->limit(2);
        return $this->getAdapter()->fetchAll($select);
    }
}