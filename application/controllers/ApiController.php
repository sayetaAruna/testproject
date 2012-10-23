<?php

class ApiController extends Zend_Controller_Action
{

    public function init()
    {
         $this->_helper->viewRenderer->setNoRender(true);
         
         $this->_todo = array (
         		"1" => "Buy milk",
         		"2" => "Pour glass of milk",
         		"3" => "Eat cookies"
         );
    }

    public function indexAction()
    {
       // echo Zend_Json::encode($this->_todo);
        echo mime_content_type('php.gif');
    }

    public function getAction()
    {
        $request = $this->getRequest();
        $id = $request->getParam('id');
        $name = $request->getParam('name');
        echo 'PR 1'.$id ;
        echo 'PR 2'.$name ;
        

    }

    public function postAction()
    {
    	$item = $this->_request->getPost('item');
    	$array = json_decode($item);

    	//$this->_todo[count($this->_todo) + 1] = $item;

    	//echo $item;
    	//echo Zend_Json::encode($this->_todo);
    	
    	echo $array[0];
    	
    }

    public function putAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }
    // Test comment for Github


}









