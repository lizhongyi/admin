<?php
class ManagesAction extends Action {
	
     function login(){
	  if ($_POST['admin_name'] == "admin" && $_POST['admin_pwd'] == "121212"){
		//  if($_SESSION['verify'] != md5($_POST['verify'])) {
			  // $this->error('验证码错误！');
		 // }
		  import("ORG.Util.Session");
		  session::set('Hash',md5($_POST['admin_name']));  //设置session
			   $this->success('登录成功！','__APP__/Index/manage');

	 }else{
			   $this->error('登录失败！');
	 }
	 
	
	}



    // 退出登录
    function logout(){
	 
		  
		  session::destroy();  //设置session
		  $this->success('退出成功！','__APP__/');

	 
	
	}



}

?>