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
              <li class="first active"><a href="/User">收款查询</a></li>
             
            </ul>
          </div>
          <div class="content">
          
           <div class="inner" style="padding:25px;">
          
            <form>
            
            <input placeholder="关键字" type="text" name="keyword" id="keyword" class="text_field key span3 ft" value="<?php echo ($_GET['keyword']); ?>"/>  <button class="button ft"  type="submit">
                    <img src="/Public/images/icons/tick.png" alt="Save" /> 搜索
                  </button>
            
            </form>
            <div class="cl"></div>
            </div>
            
            
            
            <div class="inner">
              <form action="#" class="form">
              <table class="table table_list">
                        <tr>
                          <th width="70">序号</th>
                          <th width="90">姓名</th>
                          <th width="124">客户</th>
                          <th width="124">寻访职位</th>
                          <th width="124">收款类型</th>
                          <th width="109">应收款金额</th>
                          <th width="124">应收日期</th>
                          <th width="120" align="center">到账状态</th>
                          <th width="80" align="center">备注</th>
                        </tr>
                        <?php if(is_array($getList)): $i = 0; $__LIST__ = $getList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                              <?php echo ($vo['id']); ?></td>
                            <td><a href="/Works/detail/id/<?php echo ($vo['gid']); ?>#收款状态" ><?php echo (get_resume_name($vo['resume_id'])); ?></a></td>
                            <td><?php echo ($vo['client_name']); ?></td>
                            <td > <?php echo get_job($vo['gid']);?>
                            
                            </td>
                            <td id="stages_<?php echo ($vo['id']); ?>"><?php if($vo['c_type'] == 2): ?><script>get_sinfo("stages_<?php echo ($vo['id']); ?>",selecter.stages[8],"<?php echo ($vo['c_type']); ?>","（<?php echo ($vo['pici']); ?>-<?php echo ($vo['zongpi']); ?>）")</script>
                                <?php else: ?>
                                <script>get_sinfo("stages_<?php echo ($vo['id']); ?>",selecter.stages[8],"<?php echo ($vo['c_type']); ?>")</script><?php endif; ?></td>
                            <td><span 
                              <?php if($vo['c_status'] == 0): ?>class="red jine"<?php endif; ?>
                              class="jine">￥<?php echo ($vo['yfk_jine']); ?></span>　 </td>
                            <td><?php echo (date('Y-m-d',$vo['yfk_time'])); ?></td>
                            <td><?php if($vo['c_status'] == 1): ?><span style="color:#0C0">已到账
                                <?php if($vo['fen'] == 1): ?>　<a  class="yeji_detail" data-toggle="modal" href="#yeji_detail" link="<?php echo U('Commission/cid_list',array('cid'=>$vo['cid'],'did'=>$vo['id'],'ajax'=>1));?>">已分配</a><?php endif; ?>
                                </span>
                                <?php else: ?>
                                <span style=" color:#999">未到账</span><?php endif; ?></td>
                            <td align="center"><a href="#" class="beizhu" title="" data-content="<?php echo ($vo['mark']); ?>" data-original-title="备注">查看</a></td>
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                          <td colspan="9">&nbsp;</td>
                        </tr>
                        <tr>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th id="stages_<?php echo ($vo['id']); ?>2">&nbsp;</th>
                          <th id="stages_<?php echo ($vo['id']); ?>2">&nbsp;</th>
                          <th id="stages_<?php echo ($vo['id']); ?>2">合计</th>
                          <th><span>￥<?php echo ($zongjine); ?></span></th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                        </tr>
                      </table>
                <div class="actions-bar wat-cf">
                  <div class="actions">
                    <button class="button" type="submit">
                      <img src="/Public/images/icons/cross.png" alt="Delete"> Delete
                    </button>
                  </div>
                  <div class="pagination">
                   <?php echo ($pageBar); ?>
                  </div>
                  
               
                </div>
              </form>
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