<?php
/**
 * Created by ADdobe DW cs6.
 * User: Administrator
 * Date: 13-5-15
 * Time: PM 14:52
 * To change this template use File | Settings | File Templates.
 * className:GlAction
 * dever:yige
 * ProjectName:jobmedia OA.
 */
 
 class GlAction extends Action{
	 
	          function _initialize(){
				    
				      Load('extend');  
					  import("ORG.Util.Session");
				      include('./includes/Page.class.php');
					    $this->uid=$_GET['uid'];
					    $this->dao=D(MODULE_NAME) ;   
	               include_once('./includes/array.php');	
			       $this->assign("select",$public_arr);
					  self::CheckLogin();
					 
				     }
	 
	 
	         //index
			 
			    function index(){
				 
				     $this->display();
				     
				 }
	 
	 
	 
	 
	   public function CheckLogin(){
		   
		             if(Session::get('Hash') == ""){
					  
					  redirect("/Login");
					   
					 }
			   
		    }
	 
	 
	 
	 
	 
	                 
		  protected function _message($type = 'success', $content = '更新成功', $jumpUrl = __URL__, $time = 1, $ajax = false)
    {
        $jumpUrl = empty($jumpUrl) ? __URL__ : $jumpUrl ;
        switch ($type){
            case 'success':
                $this->assign('jumpUrl', $jumpUrl);
                $this->assign('waitSecond', $time);
                $this->success($content, $ajax);
                break;
            case 'error':
                $this->assign('jumpUrl', 'javascript:history.back(-1);');
                $this->assign('waitSecond', $time);
                $this->assign('error', $content);
                $this->error($content, $ajax);
                break;
            case 'errorUri':
                $this->assign('jumpUrl', $jumpUrl);
                $this->assign('waitSecond', $time);
                $this->assign('error', $content);
                $this->error($content, $ajax);
                break;
            default:
                die('error type');
                break;
        }
    }
	
	 
	 
	 
	 
	 
	 
	                	 
	  public function checkID(){
		  
		     if(!$this->id){
				  
				  self::_message('error','关键条件丢失');
				  
				 }
		  
		  } 
	 
	 
	 
	 
	 
	 
	 
	 
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
 
 
?>