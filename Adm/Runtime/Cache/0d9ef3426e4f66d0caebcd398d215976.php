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
             <li><a  href="/User/detail/uid/<?php echo ($_GET['uid']); ?>">基本资料</a></li>
                                        <li class="active"><a  href="/User/profile_company/uid/<?php echo ($pr['uid']); ?>">企业信息</a></li>     
            </ul>
          </div>
          
          <?php if(isset($pr)): ?><div class="block" id="block-forms">
        
          <div class="content">
         
          
            
            <div class="inner" style="padding:25px;">
            
            
            
          <div class="p" style="position:absolute; right:40px; border:1px solid #ddd; background:#F6F6F6;padding:20px;">
          
          
          
          
                                <form name="" class="form" id="" action="/User/examine">
                                    <div class="group">
                                                            <label class="label" for="inputAuto">审核</label>
                                                            <div class="controls">
                                                            <input id="euid" name="euid" value="<?php echo ($pr['uid']); ?>" type="hidden"/>
                                                            
                                                            <select class="" id="examine" name="examine"><?php echo ($pr['examine']); ?>
                                                              <option value="0" <?php if($pr['examine'] == 0): ?>selected<?php endif; ?>>审核中</option>                                    
                                                              <option value="1" <?php if($pr['examine'] == 1): ?>selected<?php endif; ?>>通过</option>                                                             <option value="2" <?php if($pr['examine'] == 2): ?>selected<?php endif; ?>>未通过</option>
                                                            </select>
                                                           
                                                            </div>
                                                             <div class="controls ex"  <?php if($pr['exmine'] == 2): ?>style="display:block" <?php else: ?>  style="display:none"<?php endif; ?>>
                                                            <label class="label" for="inputAuto">拒绝理由</label>
                                                            
                                                           
                                                            
                                                            <textarea id="examine_info" id="examine_info"></textarea>
                                                           
                                                            
                                                            </div>
                                                            
                                                            <div class="controls">
                                                             <input  class="btn" type="button" id="ex_btn" value="提交"/>
                                                           </div>
                                
                                </div>
                                </form>
                                </div>
                                                    <!--element-->
                                                    <form method="post"  action="<?php echo U('User/do_company');?>" class="form" enctype="multipart/form-data" name="cp" id="cp" />
                                                    
                                                    <div class="group"></div>
                                                    
                               
                                                        
                                                        
                                                        
                                                        
                               <div class="group">
                                                            <label class="label" for="inputAuto">企业名称</label>
                                                            <div class="controls">
                                                            <input id="uname" name="companyname" class="text_field span3"   type="text" class="" value="<?php echo ($pr['companyname']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                      
                                                        
                                                        
                                                        
                               <div class="group">
                                                            <label class="label" for="inputSelect">企业性质</label>
                                                            <div class="controls">
                                                              <select  id="xingzhi" name="nature"  class="span3">
              <?php echo get_select($select['nature']);?>
              </select>
                                                            </div>
                               </div>         
                                                        
                                                   
                                           
                                           
                                           
                                           
                                           
                                           <div class="group">
                                                            <label class="label" for="inputSelect">企业性质</label>
                                                            <div class="controls">
                                                              
                                           <select id="scale" name="scale" class="span3">
			 <?php echo get_select($select['scale']);?></select>     
                                                       
                                                            </div>
                               </div> 
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                          
                               <div class="group">
                                                            <label class="label" for="inputSelectGroup">所在地区</label>
                                                            <div class="controls">
                                                             <input class="area span4 text_field"   size="16" type="text" value="<?php echo ($pr['area_cn']); ?>" name="area_cn"><input type="hidden" name="area" value="<?php echo ($_GET['area']); ?>" id="area-val"/>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                            <div class="group">
                                                            <label class="label" for="inputSelectGroup">所属行业</label>
                                                            <div class="controls">
                                                           <input class="span4 industry text_field" size="16" type="text" value="<?php echo ($pr['trade_cn']); ?>" autocomplete="off"  name="trade_cn" id="industry_input" /><input type="hidden" name="trade" value="<?php echo ($pr['trade']); ?>"   id="industry-val"/>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                   
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                             
                                                        <div class="group">
                                                            <label class="label" for="inputAuto">注册资金</label>
                                                            <div class="controls">
                                                            <input id="registered" name="registered"  type="text" class="text_field span2 " value="<?php echo ($pr['registered']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                   
                                                        <div class="group">
                                                            <label class="label" for="inputAuto">联系人</label>
                                                            <div class="controls">
                                                            <input id="linkman
" name="linkman"  type="text" class="text_field span3 " value="<?php echo ($pr['linkman']); ?>"  />
                                                            </div>
                                                        </div>                                               
                                                        
                                                             
                               <div class="group">
                                                            <label class="label" for="inputAuto">联系电话</label>
                                                            <div class="controls">
                                                            <input id="uname" name="tel"  type="text" class="text_field span3" value="<?php echo ($pr['tel']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                                  
                                                        <div class="group">
                                                            <label class="label" for="inputAuto">通讯地址</label>
                                                            <div class="controls">
                                                            <input id="addr" name="addr"  type="text" class="text_field span7" value="<?php echo ($pr['addr']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="group">
                                                            <label class="label" for="inputAuto">公司网站</label>
                                                            <div class="controls">
                                                            <input id="website" name="website"  type="text" class="text_field span7" value="<?php echo ($pr['website']); ?>"  />
                                                            </div>
                                                        </div>
                                                        
                                                          <div class="group">
                                                            <label class="label" for="inputUpload">营业执照</label>
                                                            <div class="controls">
                                                                <input type="file"  id="attach_file" name="attach_file" /> <a href="http://adm.jobme.cn/Uploads/<?php echo ($pr['license']); ?>">查看营业执照</a>
                                                            </div>
                                                        </div>
                                                        
                                                    
                                                 
                                                        
                                            
                                                        
                                                        
                                                        
                                                        
                                                      
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    
                                                      
                                                        <div class="group">
                                                          <label class="label" for="inputEditorSimple">企业简介</label>
                                                            <div class="controls">
                                                                <textarea id="inputEditorSimple" class="span10 text_area" rows="8" name="about" data-form="wysihtml5" placeholder="Enter text ..."><?php echo ($pr['about']); ?></textarea>
                                                                <input type="hidden" value="<?php echo ($pr['step']); ?>" name="step"/>
                                                            </div>
                               </div>
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               <div class="form-actions">
                                                            <button type="submit" class="btn btn-primary">保存资料</button>
                                                            <button type="button" class="btn">取消</button>
                                                        </div>
                                                    </form>
                                                    
                                                    
                                                    
                                                    </div>
                                               
                                               
         
          
          <?php else: ?>
          
          <div class="nodata">
          
          该用户没有填写企业信息
          
          </div><?php endif; ?>
          
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

<script>

  $("#ex_btn").click(function(e) {
						   
						   $this=$(this);
						  
						  $.ajax({
							   
							   url:'/User/examine',
							   type:"POST",
							   data:{examine:$("#examine").val(),uid:$("#euid").val(),examine_info:$("#examine_info").val()},
							   beforeSend: function(){
								    $this.attr('disabled',true);
									 $this.val('提交中...');
								   }
								   ,success: function(data){
									   
									   $this.val(data.info);
									   $this.attr('disabled',false);
									   
									   }
							  
							  });
						  
            
                    });
		
		
		
		
                
            
                
           
</script>