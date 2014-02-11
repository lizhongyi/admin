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
   <div class="block" id="block-tables">
          <div class="secondary-navigation">
            <ul class="wat-cf">
              <li class="first"><a href="/Works">全部工作单</a></li>
              <li class='active'><a href="#">工作单详细</a></li>
             
            </ul>
          </div>
          <div class="content">
          
           <div class="inner" style="padding:25px;">
          
       
            <div class="cl"></div>
            </div>
            
            
            
            <div class="inner">
              <div class="m15">
              
              
              
              
              
              
              
              
              <table class=" table table-bordered  tb-auto" >
              <tr>
              <th colspan="6"><?php echo ($detail['Search_posts']); ?>　（<span style="color:#333;"><?php echo ($detail['hr_num']); ?></span>人)　WO-<?php echo ($detail['id']); ?></th>
              </tr>
              <tr>
              <td width="107"><strong>客户名称</strong></td>
              <td width="150"><?php echo (get_clientname($detail['cid'])); ?></td>
              <td width="150"><strong>HR联系人　</strong></td>
              <td width="150"><?php echo ($detail['hr_contact']); ?></td>
              <td width="150"><strong>工作地点</strong></td>
              <td width="150"><?php echo ($detail['area_cn']); ?></td>
              </tr>
              <tr>
                <td><strong>薪酬待遇</strong></td>
                <td><?php echo ($detail['payment']); ?>~<?php echo ($detail['payment1']); ?>万元</td>
                <td><strong>执行部门</strong></td>
                <td><?php echo ($bm[$detail['department_id']]); ?></td>
                <td><strong>负责人　</strong></td>
                <td><?php echo ($detail['principal_cn']); ?></td>
              </tr>
              <tr>
                <td><strong>进展阶段　</strong></td>
                <td><?php echo ($select['stage1'][$detail['stage']]); ?></td>
                <td><strong>起止日期</strong></td>
                <td colspan="3">　<?php echo (date('Y-m-d',$detail['start_time'])); ?>　至　<?php echo (date('Y-m-d',$detail['end_time'])); ?></td>
                </tr>
              <tr>
                <td><strong>状态</strong></td>
                <td><?php echo ($select['status'][$detail['status']]); ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              
              </table>
              
              
              
              <div class="cl"></div>
              
              <table class=" table table-bordered  tb-auto">
              <tr>
              <th>职位描述</th>
              </tr>
              <tr>
              <td><?php echo ($detail['job_descriptions']); ?></td>
              </tr>
              <tr><th>任职要求</th></tr>
               <tr><td><?php echo ($detail['job_requirements']); ?></td></tr>
               <tr><th>备注</th></tr>
               <tr><td><?php echo ($detail['remark']); ?></td></tr>
              </table>
         
         
          <hr/>
          <div class="">
         <span class="left"> 创建日期：<?php echo (date('Y-m-d',$detail['create_time'])); ?> 　　 更新日期：<?php if( $detail['update_time'] != '0'): echo (date('Y-m-d',$detail['update_time'])); endif; ?></span>
         <span class="right">创建人：<?php echo ($uname); ?></span>
        
          </div>
      </div>
            </div>
          </div>
            
        </div>
     <div id="footer">
          <div class="block">
            <p>Copyright &copy; 2010 Your Site.</p>
          </div>
        </div>
     
<script charset="utf-8" src="/editor/kindeditor.js"></script>
<script charset="utf-8" src="/editor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
  </div>
  
  
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
  </div>