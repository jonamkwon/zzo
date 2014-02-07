<?php

class ControllerBase extends Phalcon\Mvc\Controller
{

    protected function initialize()
    {
        Phalcon\Tag::prependTitle('INVO | ');
    }

    protected function forward($uri){
    	$uriParts = explode('/', $uri);
    	return $this->dispatcher->forward(
    		array(
    			'controller' => $uriParts[0], 
    			'action' => $uriParts[1]
    		)
    	);
    }
    
    public function getRoadView($folder_name, $file_name, $data_name, $data_value) 
    {
    	$view = new \Phalcon\Mvc\View();
    	 
    	$result = $view->getRender($folder_name, $file_name,
    			array(
    					$data_name => $data_value,
    					"someFeatureEnabled" => true
    			),
    			function($view) {
    				//Set any extra options here
    				$view->setViewsDir($this->view->getViewsDir());
    				$view->setRenderLevel(Phalcon\Mvc\View::LEVEL_LAYOUT);
    			}
    	);
    	
    	return $result;
    }
    
}
function pr($arr)
{
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}