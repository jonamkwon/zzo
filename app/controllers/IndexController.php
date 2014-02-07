<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }

    public function indexAction()
    {
    	$frontCache = new Phalcon\Cache\Frontend\Data(array(
    			"lifetime" => 30
    	));
    	 
    	$cache = new Phalcon\Cache\Backend\File($frontCache, array(
    			"cacheDir" => "../cache/"
    	));
    	
    	$cacheKey = 'deal_infos.cache';
    	$deal_infos = $cache->get($cacheKey);
    	 
    	if (!$this->request->isPost()) {
    		$this->flash->notice('This is a sample application of the Phalcon PHP Framework.
                        Please don\'t provide us any personal information. Thanks');
    	}
    
    	if($deal_infos === null){
    		$deal_infos = $this->_createDealCache();
    	}
    	// data set
    	$folder_name = 'contact';
    	$file_name = 'index';
    	$data_name = 'data_info';
    	$data_value = array('test'=>'1234', 'eeee' => '22222');
    	 
    	$nam = $this->elements->getRoadView($folder_name, $file_name, $data_name, $data_value);
    	 
    	$this->view->nam = $nam;
    	
    	$this->view->deal_infos = $deal_infos;
    }
    
    public function getMoreAction()
    {
    	$frontCache = new Phalcon\Cache\Frontend\Data(array(
    			"lifetime" => 30
    	));
    	
    	$cache = new Phalcon\Cache\Backend\File($frontCache, array(
    			"cacheDir" => "../cache/"
    	));
    	 
    	$cacheKey = 'deal_infos.cache';
    	$deal_infos = $cache->get($cacheKey);
    	
    	if($deal_infos === null){
    		$deal_infos = $this->_createDealCache();
    	}
    	$curr_deal_cnt = isset($_POST['curr_deal_cnt']) ? $_POST['curr_deal_cnt'] : 0;
    	//pr($deal_infos['_rows:protected']);exit;
    	// data set
    	$folder_name = 'contact';
    	$file_name = 'addDeal';
    	$data_name = 'deal_info';
    	$data_value = $deal_infos;
    	$data_value2 = $curr_deal_cnt;
    
    	$html = $this->elements->getRoadView($folder_name, $file_name, $data_name, $data_value, $data_value2);
    	
    	echo json_encode(array('result' => 1, 'html' => $html));
    	$this->view->disable();
    }
    
    private function _createDealCache()
    {
    	$frontCache = new Phalcon\Cache\Frontend\Data(array(
    			"lifetime" => 30
    	));
    
    	$cache = new Phalcon\Cache\Backend\File($frontCache, array(
    			"cacheDir" => "../cache/"
    	));
    
    	$cacheKey = 'deal_infos.cache';
    
    	$query = $this->modelsManager->createQuery("
                    SELECT
                        di.price,
                        di.deal_id,
                        dk.img_onecut,
                        dk.main_name,
                        dk.line_summary
                    FROM
                        DealInfo di
                    INNER JOIN
                        DealInfoDetailKo dk
                    ON
                        di.deal_id = dk.deal_id
                    WHERE
                        dk.img_onecut != ''
                    ORDER BY
                        di.deal_id
                    DESC
                ");
    	
    	$deal_infos = $query->execute();
    
    	$cache->save($cacheKey, $deal_infos);
    
    	return $deal_infos;
    }
}
