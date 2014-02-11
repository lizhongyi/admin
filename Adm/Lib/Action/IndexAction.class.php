<?php
class IndexAction extends GlAction {
	
	
	function __construct(){
		
	 	 Vendor('Init.Loader');
		
		  parent::__construct();
		
		
		 
	}
	
    public function index(){
		
		
		
		
		 $data['serverSoft'] = $_SERVER['SERVER_SOFTWARE'];
        $data['serverOs'] = PHP_OS;
        $data['phpVersion'] = PHP_VERSION;
        $data['phpUploadSize'] = ini_get('file_uploads') ? ini_get('upload_max_filesize'): '禁止上传';
        $data['serverUri'] = $_SERVER['SERVER_NAME'];
        $data['maxExcuteTime'] = ini_get('max_execution_time').' 秒';
        $data['maxExcuteMemory'] = ini_get('memory_limit');
        $data['phpGpc'] = get_magic_quotes_gpc() ? '开启' : '关闭';;
        $data['excuteUseMemory'] =  function_exists('memory_get_usage') ? byte_format(memory_get_usage()) : '未知';
        $dao = new Model();
        $getMysqlVersion = $dao->query('select version()');
        $data['mysqlVersion'] = $getMysqlVersion[0]['version()'];
        $data['sys_version'] = $this->sys_version;
       
        //获取备忘信息
       
        $this->assign($data);
		
		
		
		
		
		
		
		$ls=M("User")->select();
     
	   
	   $this->display();
    }
	

	 public function manage(){
       
	   $this->display();
    }

	 public function init(){
       
	   $this->display();
    }

	 public function top(){
       
	   $this->display();
    }


	 public function main(){
       
	     // 验证登录
		 if (Inits::CheckLogin()){
			  $this->error('登录失败！','__APP__/Index/Login');
		}
	  
	    $this->display();
    }


	 public function left(){
       
	   $this->display();
    }



}

?>