<?php

class Model_User 
{
    protected $_userTable = null;

    public function __construct()
    {
        $this->setUserTable(new Model_DbTable_User());
    }
    
    public function getUser($i_UserId) 
    {
        return $this->getUserTable()->getOne($i_UserId);
    }
    
    public function getUsers() {
        return $this->getUserTable()->getAll();
    }
    
    public function updateUser() {
        
    }
    
    public function getUserTable() {
        if ($this->_userTable === null) {
            $this->_userTable = new Model_DbTalbe_User();
        }
        return $this->_userTable;
    }
            
    public function setUserTable($o_Table) {
        if ($o_Table instanceof Zend_Db_Table) {
            $this->_userTable = $o_Table;
            return true;
        }
        return false;
    }
}