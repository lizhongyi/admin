<?php

class FeedbackAction extends GlAction {
	
	
	             function _initialize(){ 
				 
                        parent::_initialize();
				
				         
				       // $this->assign('page_hover','client');
				 }
	
	
       public function index(){ 
	                         
							 
							 
							 
							$condition=""; 
	                        $pageCount = 	M('Feedback')->where($condition)->count();
							$listRows = empty($listRows) ? 15 : $listRows;
							$orderd = empty($orders) ? 'id DESC' : $orders;
							$paged = new page($pageCount, $listRows);
							$cate=array('','使用帮助','问题建议','问题反馈');
							$dt = M('Feedback')
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select(); 
													       foreach($dt as $k=>$v){
														  	$dt[$k]['cate']=$cate[$dt[$k]['cate']];
															$dt[$k]['uname']=getTruename($dt[$k]['uid']);
															
														}
														
														
							// print_r($dt);
							 							
							$pageContentBar = $paged->show();
							$this->assign('getList', $dt);
							$this->assign('pageBar', $pageContentBar);
							$this->display();
                    
    }
	
	
	
	public function note(){
		    
		     $dt=M('About')->where('id=2')->find();
	         $this->assign('dt',$dt); 	
		     $this->display();	
	 	     $this->display();
	}
		
		
		  
		  
		    
		
		

}