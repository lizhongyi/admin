<?php

class ListAction extends GlAction {
	
	
	             function _initialize(){ 
				 
                        parent::_initialize();
				
				         parent::Checklogin();
						  
				        $this->assign('page_hover','client');
				 }
	
		  
		  
		       //客户列表
            
			  public function index(){
				            
                              $keyword    =      $_GET['keyword'];
							  $area=         $_GET['area'];
							  $area_cn    =  $_GET['area_cn'];
							  $industry   =  $_GET['industry'];
							  $start_time =  $_GET['start_time'];
							  $end_time   =   $_GET['end_time'];
							  //$condition['comid']=$this->comid;
							  $keyword && $condition['companyname']=array('like','%'.$keyword.'%');
							  $area && $condition['area']=array('eq',$area);
							  $industry && $condition['trade']=array('eq',$industry);
							  
							  $start_time && $condition['create_time']=array('gt',strtotime($start_time));
							  
							 // $condition['_logic'] ="AND";
							  
							  $end_time &&   $condition['create_time']=array('lt',strtotime($end_time));
							
							  $pageCount = $this->dao->where($condition)->count();
							  $listRows = empty($listRows) ? 10 : $listRows;
							  $orderd = empty($orders) ? 'id DESC' : $orders;
							  $paged = new page($pageCount, $listRows);
                              $paged = new page($pageCount, $listRows);
		                    
							
		                    $list = $this->dao
							                        ->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();
													
						  
							 
                             $pageContentBar = $paged->show();
						
                             $this->assign('getList', $list);
                             $this->assign('pageBar', $pageContentBar);
                             $this->display();
					
				  }		  
				  
				  
				  
				  //回收站  
				  
				  public function recycle(){
					  
					       $this->indexList(0);
					  
					  }
		         
				  
				  
				
		  
		       //客户详细
			   
			   public function detail(){
				        
						parent::checkID();
					     
						$detail=$this->dao->find($this->id);
						
						
		 
						$this->assign("detail",$detail);
	                    $this->assign('pageBar', $pageContentBar);
						//print_r($detail);
						parent::_tpl('plus/detail');
						
						
						
				   
				    }
		  
		  
		  
		   
		    public function Hr_contact_add(){
				   
				   
				    $this->display();
				
				}
				
			//保存HR联系人	
		
				  
				  
				  //修改HR联系人 
				  public function hr_modfy(){
					   
					    $id=intval($_GET['id']);
						if($id!=0){
							$hr_modfy=M("hr_contacts")->where('id='.$id)->find();
								//print_r($hr_modfy);
								$this->assign('hr_modfy',$hr_modfy);
					            $this->display();
							
							}else{
								 
								 exit();
								 
								}
						
					  
					  }
					  
					  
		
		 
		 
		  
				
		
					//client  modfy
					public  function modfy(){
						
						        
							   if(!$this->id){
								parent::_message('error',"关键条件丢失");
								}
								
								$detail=$this->dao->find($this->id);
								$this->assign('page_title','客户数据修改');
						        $this->assign('dt',$detail);
								$this->display();
						} 
			
			       // client do modfy  
				   
				   public function do_modfy(){
					        
					       
						    $dao=$this->dao->create();
							
							
							
							if($dao){
							      
								$this->dao->update_time=time();
							  	$this->dao->comid=$this->comid;
								$this->dao->uid=$this->uid;
								$rs=$this->dao->save();
								 
								 if($rs){
									parent::_message('success',"保存成功");
									 }else{
										 
									
									  parent::_message('error',"保存失败");
								    }
								
							  }else{ 
								    exit($this->dao->getError());
								}
					   
					   }
					   
					   //delete  
					   
					   public function delete(){
						       
							    if(!$this->id){
								  parent::_message('error',"关键条件丢失");
								}
								  
								  parent::__deletes($this->dao,$this->id);  
						        
						   }
				
				
				
			
					
					
					
				
}