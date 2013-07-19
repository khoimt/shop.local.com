<?php

class Model_DbTable_User extends Zend_Db_Table
{
    public function init()
    {
        $this->_primary = 'user_id';
        $this->_name = 'user';
    }
    
    public function getOne($i_UserId)
    {
        $sz_Query = $this->select(true)
                        ->where('user_id = ?', $i_UserId)
                        ->limit(1);
        return $this->getAdapter()->fetchAll($sz_Query);
    }
    
    public function getAll()
    {
        $sz_Query = $this->select();
        return $this->getAdapter()->fetchAll($sz_Query);
    }
    
    public function updateOne($a_Data, $i_UserId)
    {
        
    }
}
