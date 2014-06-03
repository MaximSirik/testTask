<?php

/**
 * Application_Model_DbTable_Category
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
class Application_Model_DbTable_Category extends Zend_Db_Table_Abstract
{

    protected $_name = 'category';

    /**
     * Getting data from the database where b.id=c.id_product AND c.secret_key=id
     *
     * return $result;
     */

    public function getCategory($id)
    {
        $select = $this->fetchAll($this->select()->where('parent_id = ?', $id));
        return $select;
    }

    public function getNameCategory($id)
    {
        $select = $this->fetchAll($this->select()->where('id = ?', $id));
        return $select;
    }

    public function getAllCategory()
    {
        return $this->fetchAll();
    }

    public function getNameParentCategory($id)
    {
        $select = $this->fetchAll($this->select()->where('id != ?', $id)->where('parent_id = ?', 0));
        return $select;
    }

    public function addCategory($name, $parent_id, $about)
    {
        $data = array(
            'name' => $name,
            'parent_id' => $parent_id,
            'about' => $about,
        );
        $this->insert($data);
    }

    public function getParentId($id)
    {
        $select = $this->fetchRow($this->select()->where('id = ?', $id));
        return $select;
    }
}