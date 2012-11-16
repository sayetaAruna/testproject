<?php

class ApiController extends Zend_Controller_Action
{

    public function init()
    {
         //$this->_helper->viewRenderer->setNoRender(true);
         
         $this->_todo = array (
         		"1" => "Buy milk",
         		"2" => "Pour glass of milk",
         		"3" => "Eat cookies"
         );
         $ggg;
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
    	echo 'IN POST';
    	try {
    		// your code
    		 
//     		$company_name = $this->_request->getPost('company_name');
//     		$customer_address = $this->_request->getPost('customer_address');
    		 
    		$model_jobs = new Application_Model_Jobs();
    		 
    		$data['code_type'] = 'WS_RESPONSE';
    		$data['code'] = '201';
    		$data['code_description'] = 'Successful Creation';
    		$data['code_description_display'] = 'Created';
    		$data['code_category'] = 'PASS';
    		$data['status'] = '1';
    		 
    		 
    		$job = $model_jobs->addJob($data);
    		 
    		//$array = json_decode($item);

    		//$this->_todo[count($this->_todo) + 1] = $item;

    		//echo $item;
    		//echo Zend_Json::encode($this->_todo);
    		 
    		if(!empty($job))
    		{
    			echo 'Success: ';
    		}
    		else
    		{
    			echo 'Error creating job record';
    		}
    	}
    	catch (Zend_Exception $e) 
    	{
    		echo 'Exception: '.$e;
    	}
    	
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









