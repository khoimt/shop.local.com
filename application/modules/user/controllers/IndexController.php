<?php

class User_IndexController extends Zend_Controller_Action
{
    public function indexAction() 
    {
        $o_UserModel = new Model_User();
        $this->view->assign('a_users', $o_UserModel->getUsers());
    }
}