<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\wamp64\www\xiaomi\git\state\public/../application/admin\view\login.html";i:1591600003;}*/ ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.zi-han.net/theme/hplus/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>话费充值(管理后台系统)</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css" rel="stylesheet">
    <link href="/static/admin/css/login.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-7">
                <div class="signin-info">
                    <div class="logopanel m-b">
                        <h1>话费充值登录页面(管理后台系统)</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <form method="post" action="index.html">
                    <h4 class="no-margins text-muted">登录：</h4>
                    <p class="m-t-md text-info" id="err_msg">话费充值(管理后台系统)</p>
                    <input type="text" class="form-control uname" placeholder="用户名" autocomplete="off" id="username"/>
                    <input type="password" class="form-control pword m-b" placeholder="密码" id="password"/>
                    <!--  <a href="#">忘记密码了？</a>  --> 
                	<input  type='button' class="btn btn-success btn-block" id="login_btn" value="登录"/>
                </form>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                <!-- &copy; 2019 烨华知识产权（深圳）有限公司 -->
            </div>
        </div>
    </div>
    
    <script src="/static/admin/js/jquery.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <!-- 登录js验证 -->
    <script type="text/javascript">
    document.onkeydown=function(event){
        var e = event || window.event || arguments.callee.caller.arguments[0];
        if(e && e.keyCode==13){ // enter 键
            $('#login_btn').click();
        }
    };
    
    
    var lock = false;
    $(function () {
        $('#login_btn').click(function(){
            if(lock){
                return;
            }
            lock = true;
            $('#err_msg').hide();
            $('#login_btn').removeClass('btn-success').addClass('btn-danger').val('登陆中...');
            var username = $('#username').val();
            var password = $('#password').val();
  
            $.post("<?php echo url('login/doLogin'); ?>",{'username':username, 'password':password},function(data){
                lock = false;
                $('#login_btn').val('登录').removeClass('btn-danger').addClass('btn-success');
                if(data.code!=1){
                   $('#err_msg').show().html("<span style='color:red'>"+data.msg+"</span>");
                   return;
                }else{
                    window.location.href=data.data;
                }
            });
            
        });
    });
</script>
</body>

</html>




