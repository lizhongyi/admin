<?php
class LoginAction extends Action {
	
	
	function __construct(){
		
	 	 Vendor('Init.Loader');
		
		 parent::__construct();
	}
	
    public function index(){
		
		     $this->display();
    }

     
	 
	 
	 
	 public function doLogin(){
		 
		 
		    
			if ($_POST['username'] == "admin" && $_POST['password'] == "121212"){
		//  if($_SESSION['verify'] != md5($_POST['verify'])) {
			  // $this->error('验证码错误！');
		 // }
		
		        Session::set('Hash',md5($_POST['username']));  //设置session
			     redirect("/Index");

	           }else{
			          $this->error('登录失败！');
	         }
	 
	
		 
		 }
		 
		 
		 
		 
		 /*退出登陆*/
			   public function logout(){
				
			          Session::set('uid','');
					  Session::set('uname','');
					  Session::set('realid','');
					  Session::set('face','');
					  Session::set('permission','');
					  Session::set('role_id','');
					  Cookie::set('role_id','');
					  Session::set('consultant','');
					  Cookie::set('uid','');
					  Cookie::set('realid','');
					  Cookie::set('uname','');
					  Cookie::set('face','');
					  Cookie::set('consultant','');
	                  redirect("/Login");
               //  print_r($_COOKIE);
		   
		       //echo  Session::get('uid');
			
          

      
    
				   
			   }
			   
		 
		 
		 
		 
		 
		 

}

?>