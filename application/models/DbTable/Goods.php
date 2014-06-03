<?php

/**
 * Application_Model_DbTable_Goods
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
class Application_Model_DbTable_Goods extends Zend_Db_Table_Abstract
{

    protected $_name = 'goods';

    /**
     * Getting data from the database where b.id=c.id_product AND c.secret_key=id
     *
     * return $result;
     */

    public function search($searchWord)
    {
        $select = $this->fetchAll($this->select()->where('name LIKE ?', $searchWord));
        return $select;
    }

    public function addGoods($name, $type, $cost, $specification, $url, $color, $costall, $material, $season, $article, $complect, $parent_id)
    {
        $data = array(
            'name' => $name,
            'type' => $type,
            'cost' => $cost,
            'specification' => $specification,
            'time' => time(),
            'url' => $url,
            'color' => $color,
            'costall' => $costall,
            'material' => $material,
            'season' => $season,
            'article' => $article,
            'complect' => $complect,
            'parent_id' => $parent_id,
        );
        $this->insert($data);
    }

    public function getAllGoods($id)
    {
        $select = $this->fetchAll($this->select()->where('type = ?', $id));
        return $select;
    }

    public function getAllParentsGoods($id)
    {
        return $this->fetchAll($this->select()->where('parent_id = ?', $id));
    }

    public function countType($id)
    {
        return count($this->fetchAll($this->select()->where('type = ?', $id)));
    }

    public function countParent($id)
    {
        return count($this->fetchAll($this->select()->where('parent_id = ?', $id)));
    }

    public function getGoodsId($id)
    {
        return $this->fetchRow($this->select()->where('id = ?', $id));
    }

    public function getGoods()
    {
        return $this->fetchAll();
    }

}