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
      
        <!-- section content -->
       
<div id="wrapper" class="wat-cf">
  <div id="main">
   <div class="block" id="block-tables">
      <div class="secondary-navigation">
            <ul class="wat-cf">
             <li class="active"><a  href="/User/profile_edit">基本资料</a></li>
                                        <li><a  href="/User/profile_company/uid/<?php echo ($pr['uid']); ?>">企业信息</a></li>     
            </ul>
        </div>
          <div class="block" id="block-forms">
        
          <div class="content">
           
            <div class="inner" style="padding:25px;">
              
              
              
              
              
              <form method="post"  action="<?php echo U('User/do_profile',array('uid'=>$pr['uid']));?>" class="form">
                                                    
                                                
                                                    
                              <div class="group">
                                                            <label class="label" for="inputAuto">用户名</label>
                                                            <div class="controls">
                                                            <input id="uname" name="uname" class="text_field span3"  type="text" class="" value="<?php echo ($pr['username']); ?>" disabled />
                                 </div>
              </div>
                                                        
                                                        
                                                        
                                                        
                                                      <div class="group">
                                                            <label class="label" for="inputAuto">真实姓名</label>
                                                            <div class="controls">
                                                            <input name="realname"  type="text" class="text_field span3"  value="<?php echo ($pr['realname']); ?>"  />
                                                            </div>
        </div>
                                                        
                                                        
                                                    <div class="group">
                                                            <label class="label">性别</label>
                                                            <div class="controls">
                                                                <label class="radio">
                                                                    <input type="radio" data-form="uniform" name="sex" id="optionsRadios1" value="1" <?php if($pr['sex'] == 1): ?>checked<?php endif; ?> />
                                                                   男
                                                                </label>
                                                              
                                                              <label class="radio" style="padding-top:6px;">
                                                                    <input type="radio" data-form="uniform"  name="sex" id="optionsRadios2"  <?php if($pr['sex'] == 2): ?>checked<?php endif; ?>  value="2" />
                                                                   女
                                                              </label>
                                                            </div>
                               </div>
                                                        
                                                        
                                                        
                                                         <div class="group">
                                                            <label class="label">婚姻状况</label>
                                                            <div class="controls">
                                                                <label class="radio">
                                                                    <input type="radio" data-form="uniform" name="marriage" id="optionsRadios1" value="1"  <?php if($pr['marriage'] == 1): ?>checked<?php endif; ?> />
                                                                   未婚
                                                                </label>
                                                              
                                                                <label class="radio" style="padding-top:6px;">
                                                                    <input type="radio" data-form="uniform" name="marriage" id="optionsRadios2"  <?php if($pr['marriage'] == 2): ?>checked<?php endif; ?> value="2" />
                                                                   已婚
                                                                </label>
                                                                
                                                               
                                                              
                                                                <label class="radio" style="padding-top:6px;">
                                                                    <input type="radio" data-form="uniform" name="marriage" id="optionsRadios3"  <?php if($pr['marriage'] == 3): ?>checked<?php endif; ?> value="3" />
                                                                   保密
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                   
                                                     <div class="group">
                                                            <label class="label" for="inputAuto">年龄</label>
                                                            <div class="controls">
                                                            <input id="age" name="age"  type="text" class="text_field span2"  value="<?php echo ($pr['age']); ?>"  />
                                                            </div>
                               </div>
                                                        
                                                        
                                                        
                                                            <div class="group">
                                                            <label class="label" for="inputAuto">Email</label>
                                                            <div class="controls">
                                                            <input id="email" name="email"  type="text" class="text_field span3"  value="<?php echo ($pr['email']); ?>"  disabled />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                             
                                                        <div class="group">
                                                            <label class="label" for="inputAuto">手机</label>
                                                            <div class="controls">
                                                            <input id="uname" name="phone"  type="text" class="text_field span3"  value="<?php echo ($pr['phone']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                             
                                                        <div class="group">
                                                            <label class="label" for="inputAuto">电话</label>
                                                            <div class="controls">
                                                            <input id="uname" name="tel"  type="text"  class="text_field span3" value="<?php echo ($pr['tel']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                                  
                                                        <div class="group">
                                                            <label class="label" for="inputAuto">通讯地址</label>
                                                            <div class="controls">
                                                            <input id="addr" name="addr"  type="text"  class="text_field span3" value="<?php echo ($pr['addr']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                          <div class="group">
                                                            <label class="label" for="inputAuto">最近工作单</label>
                                                            <div class="controls">
                                                            <input id="last_company" name="last_company"  type="text"  class="text_field span3" value="<?php echo ($pr['last_company']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                      
                               
                                                        <div class="group">
                                                            <label class="label" for="inputSelect">学历</label>
                                                            <div class="controls">
                                                                <select id="inputSelect" name="education" data-form="select2" style="width:200px" data-placeholder="Your Favorite Type of Bear">
                                                                    <option  <?php if($pr['education'] == 1): ?>selected=""<?php endif; ?> value="1" />大专
                                                                    <option <?php if($pr['education'] == 2): ?>selected=""<?php endif; ?> value="2" />本科
                                                                    <option value="3" <?php if($pr['education'] == 3): ?>selected=""<?php endif; ?> />硕士
                                                                    <option <?php if($pr['education'] == 4): ?>selected=""<?php endif; ?> value="4" />博士
                                                                    <option <?php if($pr['education'] == 5): ?>selected=""<?php endif; ?>  value="5" />博士后                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                           <div class="group">
                                                            <label class="label" for="inputSelectGroup">所在地区</label>
                                                            <div class="controls">
                                                             <input  class="text_field area span3" size="16" type="text" value="<?php echo ($pr['area_cn']); ?>" name="area_cn"><input type="hidden" name="area" value="<?php echo ($_GET['area']); ?>" id="area-val"/>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                      
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    
                                                      
                                                         <div class="group">
                                                          <label class="label" for="inputEditorSimple">个人介绍</label>
                                                            <div class="controls">
                                                                <textarea id="inputEditorSimple"  class="text_area" rows="8" name="about" data-form="wysihtml5" placeholder="Enter text ..."><?php echo ($pr['about']); ?></textarea>
                                                                <input type="hidden" value="<?php echo ($pr['step']); ?>" name="step"/>
                                                            </div>
                               </div>
        <div class="group navform wat-cf">
                  <button class="button" type="submit">
                  <img src="/Public/images/icons/tick.png" alt="Save" /> Save
                  </button>
                  <span class="text_button_padding">or</span>
                  <a class="text_button_padding link_button" href="#header">Cancel</a>
                </div>
                </div>
        </div>
    </div>
  
  </div>
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


   <script src="/Static/skin/js/area.js"></script>
<div class="area-box tan-box">

 <script id="diqu" type="text/html">
    <div class="h-title">请选则地区<a href='javascript:void(0)' class='close'>关闭</a></div>
	<form id="area-f">
     <ul>
    <% for (var i = 0; i < list.length; i ++) { %>
<%  if (list[i].parentid ==0) { %><li data-id='<%= list[i].id%>'>
<img src="/Static/skin/images/left_e.gif" border="0" align="absmiddle" id="5" class="a-leftimg pointer"><span class='big-cate' data-text='<%=list[i].categoryname%>' class='h-s' hid='<%=list[i].id%>'><%=list[i].categoryname%></span>
 <dl> <% for (var j = 0; j < list.length; j ++) { %><% if(list[j].parentid ==list[i].id ) {%><dd><span class='small-cate' data-text='<%=list[i].categoryname%> / <%=list[j].categoryname%>' hid='<%=list[j].id%>' ><%= list[j].categoryname %> </dd><%}else {%><% } %><%  }%>
</dl></li><% } %> <% } %>
</ul>
<button type="reset" class='reset' style="display:none">重置</button> 
</form>
</script>

                    
                    
<script>
 
  
 html = template.render('diqu', {
	list:area
});
$('.area').live("focus","click",function(e) {
      
	 $(".tan-box").hide();
	// alert($(this).parent());
	 $(".area-box").show().css({'top':$(this).parent().offset().top+28+"px",'left':$(this).parent().offset().left+0+'px','z-index':'999993'});
	
});

$(".area_1").live("click",function(){
	 
	 $(".area").focus();
	
	});



$(".area-box").html(html);



           $(".area-box ul li img").click(function(e) {
			   $(".area-box ul li").find("dl").hide();
			  $(".h-leftimg").attr('src','/Static/skin/images/left_e.gif');
               if($(this).attr('src')=='/Static/skin/images/left_e.gif'){
					 $(this).parent().find("dl").show();
					 $(this).attr('src','/Static/skin/images/left_d.gif');
					}else{
						$(this).parent().find("dl").hide();
						$(this).attr('src','/Static/skin/images/left_e.gif');
						}
				
	        
});






$(".area-box ul li span.big-cate").click(function(e) {
	
    $(".area-box ul li dl").hide(); 
    $(".area-queding").attr('text',$(this).attr('data-text'));
	$(".area-queding").attr('hid',$(this).attr('hid'));
	$(".area-queding").click();
	
	
});


$(".area-box ul li span.small-cate").click(function(e) {
    //$(".hangye-box ul li dl").hide(); 
	
	$(".area-queding").attr('text',$(this).attr('data-text'));
	$(".area-queding").attr('hid',$(this).attr('hid'));
	$(".area-queding").click();
	
});


$(".h-s").click(function(e) {
     
	$(".area-box ul li dl").hide(); 
	  
});
$(".area-box a.close").click(function(e) {
    
	$(".area-box").hide();
	$(".reset").click();
	$(".area-box ul li dl").hide();
	
});
$(".area-queding").live("click",function(e) {
    $("input.area").val($(this).attr('text'));
	$("input#area-val").val($(this).attr('hid'));
	$(".area-box").hide();
	$(".reset").click();
	$("input.area").focus();
	$(".area-box ul li dl").hide();
});

$(document).click(function(e) {
    
	if(e.target.className.indexOf('area') != -1 || e.target.className.indexOf('a-leftimg') != -1){
		$(".area-box").show(); 
		}else{
			$(".area-box").hide();
			$(".area-box ul li dl").hide();
			$(".a-leftimg").attr('src','/Static/skin/images/left_e.gif')
			}
	
});
</script>
<div align="right" style="padding:15px; padding-right:50px;">
<div class="cl"></div>
<button type="button" class="btn area-queding" style="display:none">确定</button>
</div>
</div>




  
   <script src="/Static/skin/js/industry.js"></script>
<div class="hangye-box tan-box">

 <script id="hangye" type="text/html">
    <div class='h-title'>请选择行业<a href='javascript:void(0)' class='close'>关闭</a></div>
	<form id='hang-f'>
     <ul>
    <% for (var i = 0; i < list.length; i ++) { %>
<%  if (list[i].parentid ==0) { %><li data-id='<%= list[i].id%>' ><img src="/Static/skin/images/left_e.gif" border="0" align="absmiddle" id="5" class="h-leftimg pointer"><span class='big-cate' data-text='<%=list[i].categoryname%>' hid='<%=list[i].id%>'><%=list[i].categoryname%></span> <dl> <% for (var j = 0; j < list.length; j ++) { %><% if(list[j].parentid ==list[i].id ) {%><dd> 
<span class="small-cate"  data-text='<%=list[i].categoryname%> / <%=list[j].categoryname%>' hid='<%=list[j].id%>'><%= list[j].categoryname %></span> </dd><%}else {%><% } %><%  }%>
</dl></li><% } %> <% } %>
</ul>
<button type="reset" class='reset' style="display:none">重置</button> 
</form>
</script>

                    
                    
<script>
 
  
 html = template.render('hangye', {
	list:industry
});
$('.industry').live("focus","click",function(e){
    
	  $(".tan-box").hide();
	$(".hangye-box").show().css({'top':$(this).parent().offset().top+28+"px",'left':$(this).parent().offset().left+0+'px','z-index':'999993'});
	
});



$(".hangye-box").html(html);
           $(".hangye-box ul li img").click(function(e) {
			    $(".hangye-box ul li dl").hide();
				$(".h-leftimg").attr('src','/Static/skin/images/left_e.gif');
                if($(this).attr('src')=='/Static/skin/images/left_e.gif'){
					 $(this).parent().find("dl").show();
					 $(this).attr('src','/Static/skin/images/left_d.gif');
					}else{
						$(this).parent().find("dl").hide();
						$(this).attr('src','/Static/skin/images/left_e.gif');
						}
	    
});

$(".hangye-box ul li input:radio").live("click",function(e) {
    
	$(".hy-queding").attr('text',$(this).attr('data-text'));
	$(".hy-queding").attr('hid',$(this).val());
	
});

$(".hangye-box ul li span.big-cate").click(function(e) {
	
    $(".hangye-box ul li dl").hide(); 
	 
	$(".hy-queding").attr('text',$(this).attr('data-text'));
	$(".hy-queding").attr('hid',$(this).attr('hid'));
	$(".hy-queding").click();
	
	
});


$(".hangye-box ul li span.small-cate").click(function(e) {
    //$(".hangye-box ul li dl").hide(); 
	
	$(".hy-queding").attr('text',$(this).attr('data-text'));
	$(".hy-queding").attr('hid',$(this).attr('hid'));
	$(".hy-queding").click();
	
});



$(".h-s").click(function(e) {
      
	  
	$(".hangye-box ul li dl").hide(); 
	  
});
$(".hangye-box a.close").click(function(e) {
    
	$(".hangye-box").hide();
	$(".reset").click();
	$(".hangye-box ul li dl").hide();
	
});
$(".hy-queding").live("click",function(e) {
    $("#industry_input").val($(this).attr('text'));
	 $("input#industry-val").val($(this).attr('hid'));
	$(".hangye-box").hide();
	$(".reset").click();
	$("#industry_input").focus();
	$(".hangye-box ul li dl").hide();
});
$(document).click(function(e) {
    
	if(e.target.className.indexOf('industry') != -1 || e.target.className.indexOf('h-leftimg') != -1){
		$(".hangye-box").show(); 
		}else{
			$(".hangye-box").hide();
			$(".hangye-box ul li dl").hide();
			$(".h-leftimg").attr('src','/Static/skin/images/left_e.gif')
			}
	
});
</script>
<div align="right" style="padding:15px; padding-right:50px;">
<div class="cl"></div>
<button type="button" class="btn hy-queding" style="display:none">确定</button>
</div>
</div>
  
           <script src="/Static/skin/js/plus_tan.js"></script>
<script>