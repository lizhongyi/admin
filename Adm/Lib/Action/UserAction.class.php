<?php
/**
 * Created by ADdobe DW cs6.
 * User: Administrator
 * Date: 13-5-15
 * Time: PM 14:49
 * To change this template use File | Settings | File Templates.
 * className:Persona
 * dever:yige
 * ProjectName:jobmedia OA.
 */
 
 class UserAction extends GlAction{
	 
	          function _initialize(){
				  
				       parent::_initialize();
					   $this->dao=D('User');
				  
				  }
	 
	 
	         //index
			 
			 function index(){
				               
							   
							  $keyword=$_GET['keyword'];
							  $keyword && $condition['username']=array('like',"%".$keyword."%");
							   $condition['type']=array('eq',0);
				 
				              $pageCount = $this->dao->where($condition)->count();
							  $listRows = empty($listRows) ? 10 : $listRows;
							  $orderd = empty($orders) ? 'uid DESC' : $orders;
							  $paged = new page($pageCount, $listRows);
							  $list = $this->dao->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();  
													
								         
										 
										 					
													
								 						
						      $pageBar = $paged->show();	
							  
							  
							
							  			
					         $this->assign('list',$list);
                             $this->assign('pageBar',$pageBar);
					
				    $this->display();
    }




              
			   function company(){
				 
				             // $condition['pid']=0;
							  $condition['type']=array('eq',0);
				              $pageCount = $this->dao->where($condition)->count();
							  $listRows = empty($listRows) ? 10 : $listRows;
							  $orderd = empty($orders) ? 'uid DESC' : $orders;
							  $paged = new page($pageCount, $listRows);
							  $list = $this->dao->Where($condition)
							                        ->Order($orderd)
							                        ->Limit($paged->firstRow.','.$paged->listRows)
													->select();  
													
													
													foreach($list as $k=>$v){
											      
												       $list[$k]['com']=get_com($v['uid']);
											     
											      }
											  		
													
						     $pageBar = $paged->show();
							 $this->assign('list',$list);
                             $this->assign('pageBar',$pageBar);
					
				    $this->display();
    }


                   	public function profile_company(){
						           
								    
							      $uid=$_GET['uid'];
								   
								  $list=D('User_company')->where('uid='.$uid)->find();
								  //$list['step']=$this->dao->where('uid='.$this->uid)->getField('step'); 
								 // echo D('User_company')->getLastSql();
								   
						          $this->assign('pr',$list);
						          $this->display();
						
						
						
						}


                     //save profile
				 
				public function do_profile(){
					     $data=$_POST; 
						 $dao=$this->dao->create();
						
						if($dao){
							     
								 if($data['step']<3){
									 $this->dao->step=3; 
									 $rs=$this->dao->where('uid='.$this->uid)->save(); 
									 }else{
										 $rs=$this->dao->where('uid='.$this->uid)->save(); 
										 }
								 
							   
								
								if($rs){
									
									 
									   $this->_message('success','更新成功','/User/detail/uid/'.$this->uid);
									   
									   
						
									}else{
										
										$this->_message('error','更新失败');
										}
							
							 }else{
								  
								  exit("错误了");
								 
								 
								 }
							 
					} 
				 




            


	 public function add(){

	   $this->display();
    }


	public function edit(){
	   $this->display();
    }

				  
				 public function detail(){
					 
					    
					    $dt=$this->dao->where('uid='.$this->uid)->find();
						$this->assign('pr',$dt);
						$this->display();
					 
					 }
					 
					 
	 
	 
	 
	     //examine user
		 
		 public function examine(){
			     
				  if(!$_POST){
					    
				      	parent::_message("error","非法操作");
					     
						  
					  }
			    
				    $rs=D('User_company')->where('uid='.$_POST['uid'])->save($_POST);
					
					if($rs){
						    //测试要初始化一下东西,比如初始化提成设置
							
							
							if($_POST['examine']==1){
						     $po=M("Persona")->where('comid='.$_POST['uid'])->count();
							 if($po==0){
								    
									$data['title']="人选提供";
									$data['comid']=$_POST['uid'];
									$data['bili']=3;
								    $rr=D("Persona")->add($data);
								    
									  if(!$rr){
										  parent::_message('error','闹心了');
										  }
								 } 
							}
							
						    parent::_message('success','审核完成');
						
						    }else{
							
							parent::_message('error','审核失败');
							
					}
					
			 
			   }
	   
	   
	       //删除用户
	   
	     public function delete(){
			 
			        
					$id=intval($_GET['uid']);
					
					  if($id){
						
						  $rs=D('User')->where('uid='.$id)->delete();
						  $rs1=D('User_company')->where('uid='.$id)->delete();
						  $rs2=D('User_group')->where('uid='.$id)->delete();
						  $rs3=D('Works')->where('uid='.$id)->delete();
						  
						   if($rs){
							   parent::_message('success','删除成功');
							       
							  
							  }else{
								  parent::_message('error','删除失败');
								  
								  }
						  
						
						}
						
						
			  
			 
			 }
	    
	 
	 
	 }
 
 
?>