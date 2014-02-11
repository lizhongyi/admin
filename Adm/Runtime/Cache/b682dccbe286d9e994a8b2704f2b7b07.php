<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Logn In - Stilearn Admin Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="stilearning" />

        <!-- google font -->
       <link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" />
 <link href="/Static/skin/css/jquery-ui.css" rel="stylesheet"/>
        <!-- styles -->
        <link href="/Public/css/bootstrap.css" rel="stylesheet" />
        <link href="/Public/css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="/Public/css/stilearn.css" rel="stylesheet" />
        <link href="/Public/css/stilearn-responsive.css" rel="stylesheet" />
        <link href="/Public/css/stilearn-helper.css" rel="stylesheet" />
        <link href="/Public/css/stilearn-icon.css" rel="stylesheet" />
        <link href="/Public/css/font-awesome.css" rel="stylesheet" />
        <link href="/Public/css/animate.css" rel="stylesheet" />
        <link href="/Public/css/uniform.default.css" rel="stylesheet" />
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <!-- section header -->
        <header class="header" data-spy="affix" data-offset-top="0">
            <!--nav bar helper-->
            <div class="navbar-helper">
                <div class="row-fluid">
                    <!--panel site-name-->
                    <div class="span2">
                        <div class="panel-sitename">
                            <h2><a href="index.html"><span class="color-teal">Job</span>me</a>admin</h2>
                        </div>
                    </div>
                     <div class="span2 offset7" style="line-height:40px;">
                   
                    </div>
                    <!--/panel name-->
                </div>
            </div><!--/nav bar helper-->
        </header>
        
        <!-- section content -->
        <section class="section">
            <div class="container" style=" border:1px solid #ddd; background:#F4F4F4; padding:15px;">
                <div class="signin-form row-fluid">
                    <!--Sign In-->
                    <div class="span5" style=" margin:0 auto; float:none">
                        <div class="box corner-all">
                            <div class="box-header grd-teal color-white corner-top">
                                <span>管理员登陆:</span>
                            </div>
                            <div class="box-body bg-white">
                                <form id="sign-in" method="post" action="Login/doLogin" />
                                    <div class="control-group">
                                        <label class="control-label">用户名</label>
                                        <div class="controls">
                                            <input type="text" class="input-block-level" data-validate="{required: true, messages:{required:'请输入用户名'}}" name="username" id="username" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">密码</label>
                                        <div class="controls">
                                            <input type="password" class="input-block-level" data-validate="{required: true, messages:{required:'请输入密码'}}" name="password" id="login_password" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="pull-right helper-font-32">
                                            <a href="#" rel="tooltip-left" title="Sign in using twitter account"><i class="socialico-twitter-sign color-blue"></i></a>
                                            <a href="#" rel="tooltip-left" title="Sign in using facebook account"><i class="socialico-facebook-sign color-sky"></i></a>
                                        </div>
                                        <label class="checkbox">
                                            <input type="checkbox" data-form="uniform" name="remember_me" id="remember_me_yes" value="yes" /> 记住我
                                        </label>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" id="login_btn" class="btn btn-block btn-large btn-primary" value="立即登陆" />
                                        <p class="recover-account">&nbsp;</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--/Sign In-->
                    <!--Sign Up-->
                    <!--/Sign Up-->
                </div><!-- /row -->
            </div><!-- /container -->
            
            <!-- modal recover -->
            <!-- /modal recover-->
        </section>

      
    </body>
</html>