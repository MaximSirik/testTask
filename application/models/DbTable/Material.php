<?php

/**
 * Application_Model_DbTable_Material
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
class Application_Model_DbTable_Material extends Zend_Db_Table_Abstract
{

    protected $_name = 'material';

    /**
     * Getting data from the database where b.id=c.id_product AND c.secret_key=id
     *
     * return $result;
     */

    public function getMaterial()
    {
        $select = $this->fetchAll();
        return $select;
    }

    public function addMaterial($material)
    {
        $data = array(
            'name'=> $material
        );
        $this->insert($data);
    }

}