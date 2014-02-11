<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>OA后台管理</title>
  <link rel="stylesheet" href="/Public/css/base.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="/Public/css/diy.css" type="text/css" media="screen" />
  <link rel="stylesheet" id="current-theme" href="/Public/css/style.css" type="text/css" media="screen" />
  <script type="text/javascript" charset="utf-8" src="/Public/js/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/js/jquery-ui.js"></script>
  <script type="text/javascript" charset="utf-8" src="/Public/js/jquery.scrollTo.js"></script>
  <script type="text/javascript" charset="utf-8" src="/Public/js/jquery.localscroll.js"></script>
  <script type="" src="/Static/skin/js/artTemplate.js"></script>
  <script type="text/javascript" charset="utf-8">
    // <![CDATA[
    var Theme = {
      activate: function(name) {
        window.location.hash = 'themes/' + name
        Theme.loadCurrent();
      },

      loadCurrent: function() {
        var hash = window.location.hash;
        if (hash.length > 0) {
          matches = hash.match(/^#themes\/([a-z0-9\-_]+)$/);
          if (matches && matches.length > 1) {
            $('#current-theme').attr('href', 'stylesheets/themes/' + matches[1] + '/style.css');
          } else {
            alert('theme not valid');
          }
        }
      }
    }

    $(document).ready(function() {
      Theme.loadCurrent();
      $.localScroll();
      $('.table :checkbox.toggle').each(function(i, toggle) {
        $(toggle).change(function(e) {
          $(toggle).parents('table:first').find(':checkbox:not(.toggle)').each(function(j, checkbox) {
            checkbox.checked = !checkbox.checked;
          })
        });
      });
	  
	  
	  
	  
	  $('tr').addClass('odd'); 
      $('tr:even').addClass('even'); //奇偶变色，添加样式 
	  
	  
	  
	  
	  
	  
    });
    // ]]>
  </script>
</head>
<body>
  <div id="container">
    <div id="header">
      <h1><a href="index.html">OA Admin</a></h1>
      <div id="user-navigation">
        <ul class="wat-cf">
         
          <li><a href="#">设置</a></li>
          <li><a class="logout" href="/Login/logout">退出</a></li>
        </ul>
      </div>
      <div id="main-navigation">
        <ul class="wat-cf">
          <li class="first"><a href="#block-text">主页</a></li>
        
        </ul>
      </div>
    </div>                    
               
               
<div id="wrapper" class="wat-cf">
      <div id="main">

        <div class="block" id="block-text">
          <div class="secondary-navigation">
            <ul class="wat-cf">
              <li class="active first"><a href="#block-text">管理首页</a></li>
              
            </ul>
          </div>
          <div class="content">  
            <h2 class="title">管理员你好，欢迎使用OA后来管理系统现在是<span id="localtime" style="font-size:18px; padding:20px; line-height:36px; color:#999; font-family:'微软雅黑'; " ></span></h2>
            <div class="inner">
          

<script type="text/javascript">
function showLocale(objD)
{
	var str,colorhead,colorfoot;
	var yy = objD.getYear();
	if(yy<1900) yy = yy+1900;
	var MM = objD.getMonth()+1;
	if(MM<10) MM = '0' + MM;
	var dd = objD.getDate();
	if(dd<10) dd = '0' + dd;
	var hh = objD.getHours();
	if(hh<10) hh = '0' + hh;
	var mm = objD.getMinutes();
	if(mm<10) mm = '0' + mm;
	var ss = objD.getSeconds();
	if(ss<10) ss = '0' + ss;
	var ww = objD.getDay();
	if  ( ww==0 )  colorhead="";
	if  ( ww > 0 && ww < 6 )  colorhead="";
	if  ( ww==6 )  colorhead="";
	if  (ww==0)  ww="星期日";
	if  (ww==1)  ww="星期一";
	if  (ww==2)  ww="星期二";
	if  (ww==3)  ww="星期三";
	if  (ww==4)  ww="星期四";
	if  (ww==5)  ww="星期五";
	if  (ww==6)  ww="星期六";
	colorfoot=""
	str = colorhead + yy + "年" + MM + "月" + dd + "日" + ww +""+ colorfoot + "　 " + hh + ":" + mm + ":" + ss ;
	return(str);
}
function tick()
{
	var today;
	today = new Date();
	document.getElementById("localtime").innerHTML = showLocale(today);
	window.setTimeout("tick()", 1000);
}
tick();
</script>
             
             <div class="inner">
              <form action="#" method="get" class="form">
               
                <div class="group">
                  <label class="label">管理备忘录</label>
                  <textarea class="text_area" rows="8" cols="80"></textarea>
                  
                </div>
                <div class="group navform wat-cf">
                  <button class="button" type="submit">
                    <img src="/Public/images/icons/tick.png" alt="Save"> Save
                  </button>
             
                  
                </div>
              </form>
            </div>
            
             
              <div class="title">

<h3>系统信息</h3></div>
<hr/>
			<ul class="ul sysinfo">

             <li>主机域名: <?php echo ($serverUri); ?></li>

				<li>操作系统: <?php echo ($serverSoft); ?></li>

				<li>数据库版本: <?php echo ($mysqlVersion); ?></li>

                 <li>PHP版本: <?php echo ($phpVersion); ?></li>

                 <li>全局变量: <?php echo ($phpGpc); ?></li>

				<li>上传许可: <?php echo ($phpUploadSize); ?></li>

				<li>最大执行时间: <?php echo ($maxExcuteTime); ?></li>

                <li>最大使用内存: <?php echo ($maxExcuteMemory); ?></li>

                <li>当前使用内存: <?php echo ($excuteUseMemory); ?></li>
 <div class="cl"></div>
          </ul>
         
            </div>
          </div>
        </div>
        <div id="footer">
          <div class="block">
            <p>Copyright &copy; 2010 Your Site.</p>
          </div>
        </div>
      </div>
      
      
      
      <!--seidebar--->
      <div id="sidebar">
        
        <div class="block">
          <h3>用户管理</h3>
          <ul class="navigation">
            <li><a href="/User" onclick="">用户查询</a></li>
            <li><a href="#" onclick="">用户认证</a></li>
            <li><a href="#" onclick="">用户审核</a></li>
           
          </ul>
        </div>
        <div class="block">
          <h3>统计查询</h3>
          <ul class="navigation">
            <li><a href="/Works">工作单</a></li>
            <li><a href="/Candidate">候选人</a></li>
            <li><a href="/Client">客户查询</a></li>
            <li><a href="/Commiss">业绩查询</a></li>
            <li><a href="/Cs">收款查询</a></li>
           　<li><a href="/List">List</a></li>
            
          </ul>
        </div>
        
          <div class="block">
          <h3>常规设置</h3>
          <ul class="navigation">
            <li><a href="/About/index">公司简介</a></li>
            <li><a href="/About/note">全站公告</a></li>
            <li><a href="/Feedback">建议反馈</a></li>
            <li><a href="/About/contact">联系我们</a></li>
            <li><a href="/About/contact">用户使用协议</a></li>
                       
          </ul>
        </div>
       
        
      </div>
      <!--seidebar--->
      
      
      
    </div>
</div>
</body>
</html>