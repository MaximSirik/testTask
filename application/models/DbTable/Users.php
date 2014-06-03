<?php

/**
 * Application_Model_DbTable_Users
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
class Application_Model_DbTable_Users extends Zend_Db_Table_Abstract
{

    protected $_name = 'users';

    /**
     * Getting data from the database where b.id=c.id_product AND c.secret_key=id
     *
     * return $result;
     */

    public function usersAdd($name,$sirname,$email,$password,$telephone)
    {
        $data = array(
            'first_name' => $name,
            'last_name' => $sirname,
            'email' => $email,
            'password' => $password,
            'level' => 0,
            'telephone' => $telephone,
        );
        $this->insert($data);
    }

    public function getUser($email, $password)
    {
        $select = $this->fetchRow($this->select()->where('email = ?', $email)->where('password = ?', $password));
        return $select;
    }

    public function getAllUser()
    {
        $select = $this->fetchAll();
        return $select;
    }
}