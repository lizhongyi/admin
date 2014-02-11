<?php

class AboutAction extends GlAction {
	
	
	             function _initialize(){ 
				 
                        parent::_initialize();
				
				         
				       // $this->assign('page_hover','client');
				 }
	
	
       public function index(){ 
	   
	         $dt=M('About')->where('id=1')->find();
	          
			 $this->assign('dt',$dt); 	
		     $this->display();
    }
	
	
	
	public function note(){
		    
		     $dt=M('About')->where('id=2')->find();
	         $this->assign('dt',$dt); 	
		     $this->display();	
	 	    
	}
		
		
		  
		  
		      public function do_modfy(){
			      
				  $id=$_GET['id'];
				  
				     if(!$id) return false;
				   
				   $data=$_POST;
				   
				  if(!$data){
					     
						  parent::_message("error","非法数据提交");
					   
					  }
					  
					  
					 $rs=M('About')->where('id='.$id)->save($data); 
				    
					 if($rs){
						 
						      parent::_message("success","提交成功");
						 
						 }else{
							 
							  parent::_message("error","提交失败");
							 
						}
						 
				   
				   
				   
			  
			  
			  }
	        
			
			public function contact(){
				
				        
						 $dt=M('About')->where('id=3')->find();
						 $this->assign('dt',$dt); 	
						 $this->display();
				
				
				}
				
				
				
				public function agreement(){
				
				        
						 $dt=M('About')->where('id=4')->find();
						 $this->assign('dt',$dt); 	
						 $this->display();
				
				
				}
			 
			 
			 
		  	 
			 
		
		

}