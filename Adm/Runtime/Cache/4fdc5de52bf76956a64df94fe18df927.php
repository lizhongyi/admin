<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<meta name="author" content="" />

<meta name="copyright" content="jobmedia.cn" />

<title> </title>

<link href="__PUBLIC__/skin/style/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/skin/js/init.js"></script>


</head>

<body style="background-color:#E0F0FE">


<div class="admin_main_nr_dbox">

<div class="toptit">人才系统</div>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td style=" line-height:220%; color:#666666; padding-left:15px;"><table border="0" cellpadding="0" cellspacing="0" class="link_lan">
      <tr>
        <td width="300"  >系统当前版本：v{#$system_info.version#}</td>
        <td  >认证授权：<span id="certification">载入中...</span>
        </td>
      </tr>
      <tr>
        <td  >版权所有：jobmedia.cn<br /></td>
        <td  > 官方论坛：<a href="http://www.jobmedia.cn" target="_blank">www.jobmedia.cn</a></td>
      </tr>
      <tr>
        <td  >程序开发：程序开发组</td>
        <td  >官方论坛：<a href="http://devel.jobmedia.cn/" target="_blank">http://devel.jobmedia.cn</a></td>
      </tr>
    </table></td>
  </tr>
</table>
<div class="toptit">系统信息</div>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td style="  color:#666666; padding-left:15px;line-height:220%;">
	<table border="0" cellpadding="0" cellspacing="0" class="link_lan">
      <tr>
        <td width="300"  >操作系统：{#$system_info.os#}</td>
        <td  >PHP 版本：{#$system_info.php_ver#}</td>
      </tr>
      <tr>
        <td  >服务器软件：{#$system_info.web_server#}<br /></td>
        <td  >MySQL 版本：{#$system_info.mysql_ver#}</td>
      </tr>
    </table></td>
  </tr>
</table>
<div class="toptit">官方动态</div>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td style=" line-height:220%; color:#666666; padding-left:15px;">
	<span id="announcement">载入中...</span>
	</td>
  </tr>
</table>
</div>


<?php $_trace = trace(); foreach ($_trace as $key=>$info){ echo $key.' : '.$info.'<br/>'; }?>


</body>

</html>