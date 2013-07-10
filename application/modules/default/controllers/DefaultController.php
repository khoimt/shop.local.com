<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Default_DefaultController extends Zend_Controller_Action
{
    public function init()
    {
        $this->getHelper('ViewRenderer')->setNorender(1);
    }
    
    public function defaultAction()
    {
        print_r($this->getRequest()->getParams());
        echo 'Hello Default';
    }
}
