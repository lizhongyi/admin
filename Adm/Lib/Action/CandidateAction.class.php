<?php
// 本类由系统自动生成，仅供测试用途
class CandidateAction extends GlAction {
	
	              public $ajax;
	             function _initialize(){ 
				        $this->ajax=intval($_REQUEST['ajax']);
                        parent::_initialize();
						
						
						$this->can=D("candidate");
						$this->id=intval($_GET['id']);
						
						// $this->consultant 
				 }
	
	
	
	
	           
                 public function index(){  
				 
				 
				   $ajax=intval($this->_get('ajax'));
				            
							
							$where="1=1  and display=1";	
							$condition = !empty($conditions) ? $conditions : '' ;
                            $pageCount = $this->dao->where($where)->count();
		                    // echo $this->dao->getLastSql();
                            $listRows = empty($listRows) ? 10 : $listRows;
                            $orderd = empty($orders) ? 'id DESC' : $orders;
                            $paged = new page($pageCount, $listRows);
                            $dt = $this->dao->Where($where)->Order($orderd)->Limit($paged->firstRow.','.$paged->listRows)->select();    
							
							
							$pipi="";
							
							
							
							        
									
										foreach($dt as $k=>$v){
											
											
											        if($v['source']==0){
											      
													  $in=get_resume($v['resume_id']);
													  $dt[$k]['realname']=$in['realname'];
													  $dt[$k]['before_job']=$in['last_company'];
													  $dt[$k]['zhiwei']=$in['last_post'];
													}
													else if($v['source']==1){
														
													          $in=get_tlent($v['resume_id']);
													          $dt[$k]['realname']=getTruename($v['resume_id']);
													          $dt[$k]['before_job']=$in['last_company'];
													          $dt[$k]['zhiwei']=$in['post_cn'];
														}else if($v['source']==2){
															
														 $in=get_import($v['resume_id']);
														 
													           $dt[$k]['realname']=$in['title'];
														       $dt[$k]['before_job']=$in['last_company'];
													           $dt[$k]['zhiwei']=$in['post'];
														}
														
														
														
											         $info="";
													 
													 
							
													 
													 $info.="<div class='info_b'>";
											         $info.="<h5>初选评语</h5>";
													 $info.="<p>".$v['cx_mark']."</p>";
													 $info.="</div>";
													  $info.="<div class='info_b'>";
													 $info.="<h5>顾问评语</h5>";
													 $info.="<p>".$v['gw_mark']."</p>";
													 $info.="</div>";
													  $info.="<div class='info_b'>";
													 $info.="<h5>推荐反馈</h5>";
													 $info.="<p>".$v['tj_mark']."</p>";
													 $info.="</div>";
													  $info.="<div class='info_b'>";
													 $info.="<h5>面试反馈</h5>";
													 $info.="<p>".$v['ms_mark']."</p>";
													 $info.="</div>";
													  $info.="<div class='info_b'>";
													  $info.="<h5>谈判备注</h5>";
													 $info.="<p>".$v['tp_mark']."</p>";
													 $info.="</div>";
													  $info.="<div class='info_b'>";
													  $info.="<h5>录用备注</h5>";
													 $info.="<p>".$v['ly_mark']."</p>";
													 $info.="</div>";
													  $info.="<div class='info_b'>";
													  $info.="<h5>入职备注</h5>";
													 $info.="<p>".$v['rz_mark']."</p>";
													 $info.="</div>";
													  $info.="<div class='info_b'>";
													  $info.="<h5>收款备注</h5>";
													 $info.="<p>".$v['fk_mark']."</p>";
													 $info.="</div>";
												
													 $dt[$k]['mk']=$info;
													 
													 
													 
													 //还要读取候选人的状态，那么就是判断是否收款全部到账了。
													 
													 if($v['stage'] > 7){
													       $cl=M('Collection')->where('cid='.$v['id'].' and c_status=0')->count();
													 
													           if($cl==0){
														   
														        $dt[$k]['st']='<span class="lv">已完成</span>';
														  
														      }else{
																    
																	
																	
																  
																  $dt[$k]['st']='收款中';
																  
																  }
														 
														 
													 }
											   
											}
							              
								
									// echo $this->dao->getLastSql();
									 $ajax==0 ? $pageContentBar = $paged->show() : $pageContentBar = $paged->show_ajax();
									 //print_r($dataContentList); 
									$this->assign('getList', $dt);
									$this->assign('pageBar', $pageContentBar);
								    $this->display();
			 
				 
				 
				           
				             
           }     
		   
		   
		   
		   
		       //我参与的
			   
	
				
				
				
				
				
				
				
				
}
