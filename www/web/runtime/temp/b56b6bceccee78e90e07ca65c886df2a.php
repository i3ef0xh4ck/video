<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"/www/wwwroot/go.itlinux.cn/application/index/view/vip/update.html";i:1506735622;s:61:"/www/wwwroot/go.itlinux.cn/application/index/view/layout.html";i:1528290646;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>优视_APP用户管理系统</title>

    <!--<link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">-->
    <link rel="stylesheet" href="/public/static/assets/css/fonts/linecons/css/linecons.css">

    <link rel="stylesheet" href="/public/static/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/public/static/assets/css/custom.css">

    <script src="/public/static/assets/js/jquery-1.11.1.min.js"></script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/elusive/css/elusive.css">
    <style>
        .pagination{
            float: right;
        }
    </style>

</head>
<body class="page-body">
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
    <!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
    <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
    <div class="sidebar-menu toggle-others fixed">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo url('/index/index/index'); ?>" class="logo-expanded">
                        <img src="/public/static/assets/images/logo@3x.png" style="width: 200px;height: 50px" alt="" width="80" />
                    </a>

                    <a href="<?php echo url('/index/index/index'); ?>" class="logo-collapsed">
                        <img src="/public/static/assets/images/logo-collapsed@2x.png" width="40" alt="" />
                    </a>
                </div>
                <?php if(session('power')=='1'){?>
                <div style="float: left">
                    <br>
                    <p  style="color: red"><?php echo yue(); ?></p>
                    <p  style="color: red"><?php echo share(); ?></p>

                </div>
<?php }?>
                <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                <div class="mobile-menu-toggle visible-xs">


                    <a href="#" data-toggle="mobile-menu">
                        <i class="fa-bars"></i>
                    </a>
                </div>

                <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->



            </header>



            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class="">
                    <a href="<?php echo url('/index/index/index'); ?>">
                        <i class="linecons-cog"></i>
                        <span class="title">系统模块</span>
                    </a>
                    <ul>
					<li >
                            <a href="<?php echo url('/index/index/index'); ?>" >
                                <span class="title">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</span>
                            </a>
                        </li>
                       <!-- <li >
                            <a href="<?php echo url('user/daoqi'); ?>">
                                <span class="title">即将到期</span>
                            </a>
                        </li> -->
                        <li >
                            <a href="<?php echo url('user/pass'); ?>">
                                <span class="title">修改密码</span>
                            </a>
                        </li>
                        <li class="<?php echo request()->controller()=='admin'?'active':''; ?>">
                            <a href="<?php echo url('login/login/dologin'); ?>">
                                <span class="title" >用户退出</span>
                            </a>
                        </li>
                        <?php if(session('power')=='0'){?>
                        <li >
                            <a href="<?php echo url('vip/advert'); ?>">
                                <span class="title">系统设置</span>
                            </a>
                        </li>
                        <?php }?>

                    </ul>
                </li>
                <li class=" ">
                    <a href="<?php echo url('/index/index/index'); ?>">
                        <i class="linecons-cog"></i>
                        <span class="title">卡密管理</span>
                    </a>
                    <ul>

                        
                        <li >
                            <a href="<?php echo url('dianka/index'); ?>" >
                                <span class="title">点卡生成</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo url('dianka/ylog'); ?>" >
                                <span class="title">有效点卡</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo url('dianka/slog'); ?>" >
                                <span class="title">点卡使用记录</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=" ">
                    <a href="<?php echo url('/index/index/index'); ?>">
                        <i class="linecons-cog"></i>
                        <span class="title">平台管理</span>
                    </a>
                    <ul>
                        <?php if(session('power')=='0'){?>
                      	<li >
                            <a href="<?php echo url('user/paylog'); ?>">
                                <span class="title">在线支付</span>
                            </a>
                        </li>

                        <li >
                            <a href="<?php echo url('banner/index'); ?>">
                                <span class="title">APP轮播图</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo url('admin/index'); ?>">
                                <span class="title">管&nbsp;&nbsp;理&nbsp;&nbsp;员</span>
                            </a>
                        </li>


                        <!--<li >
                            <a href="<?php echo url('htyy/index'); ?>" >
                                <span class="title">平台排序</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo url('video/index'); ?>" >
                                <span class="title">云播管理</span>
                            </a>
                        </li>
						<li >
                            <a href="<?php echo url('audio/index'); ?>" >
                                <span class="title">电台管理</span>
                            </a>
                        </li>-->

                    </ul>
                </li>
                <li class=" ">
                    <a href="<?php echo url('/index/index/index'); ?>">
                        <i class="linecons-cog"></i>
                        <span class="title">用户管理</span>
                    </a>
                    <ul>
                        <li >
                            <a href="<?php echo url('user/clog'); ?>">
                                <span class="title">充值记录</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo url('user/mlog'); ?>">
                                <span class="title">代理记录</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo url('user/xlog'); ?>">
                                <span class="title">开通记录</span>
                            </a>
                        </li>
                         <li >
                            <a href="<?php echo url('user/daoqi'); ?>">
                                <span class="title">即将到期</span>
                            </a>
                        </li> 
                    <?php } if(session('power')=='1'){?>
                        <li >
                            <a href="<?php echo url('user/xlog'); ?>">
                                <span class="title">充值记录</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo url('user/clog'); ?>">
                                <span class="title">充点记录</span>
                            </a>
                        </li>

                        <?php }?>

                        <li >
                            <a href="<?php echo url('user/index'); ?>" >
                                <span class="title">代理管理</span>
                            </a>
                        </li>
                        <li class="<?php echo request()->controller()=='admin'?'active':''; ?>">
                            <a href="<?php echo url('vip/index'); ?>">
                                <span class="title" >用户管理</span>
                            </a>
                        </li>




                    </ul>
                </li>
            </ul>

        </div>

    </div>


    <div class="main-content">

        <!-- User Info, Notifications and Menu Bar -->
        <nav class="navbar user-info-navbar" role="navigation">

            <!-- Left links for user info navbar -->
            <ul class="user-info-menu left-links list-inline list-unstyled">

                <li class="hidden-sm hidden-xs">
                    <a href="#" data-toggle="sidebar">
                        <i class="fa-bars"></i>
                    </a>
                </li>



            </ul>


            <!-- Right links for user info navbar -->
            <ul class="user-info-menu right-links list-inline list-unstyled">



                <li class="dropdown user-profile">
                    <a href="#" data-toggle="dropdown">

                        <span>
								用户名：
<?php echo name(); ?>&nbsp;&nbsp;|
								<?php echo yue(); ?>
								<i class="fa-angle-down"></i>
							</span>
                    </a>

                    <ul class="dropdown-menu user-profile-menu list-unstyled" style="width: 0px">

                        <li class="last" style="width: 100px">
                            <a href="<?php echo url('login/login/dologin'); ?>">
                                <i class="el-share"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>

        </nav>

        <div class="page-title">

    <div class="title-env">
        <h1 class="title">用户管理</h1>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo url('/'); ?>"><i class="fa-home"></i>Home</a>
            </li>
            <li>

                <a href="<?php echo url('vip/index'); ?>">User</a>
            </li>
            <li class="active">

                <strong>Update</strong>
            </li>
        </ol>

    </div>

</div>
<div class="panel panel-default">


    <div class="panel-body">

        <form role="form" id="form1" method="post" action="<?php echo url('vip/update'); ?>" class="validate">

            <div class="form-group">
                <label class="control-label">账号</label>

                <input type="text" class="form-control" name="name" data-validate="required,minlength[4],maxlength[18]" value="<?php echo $data['username']; ?>" data-message-required="账号必填,长度最小为4个字符,最大为18个字符" placeholder="账号" />
            </div>

            <div class="form-group">
                <label class="control-label">密码</label>

                <input type="password" class="form-control" id="password" name="password" data-validate="minlength[4],maxlength[18]"  data-message-required="密码必填,长度最小为4个字符,最大为18个字符" placeholder="******" />
            </div>

            <div class="form-group">
                <label class="control-label">确认密码</label>

                <input type="password" class="form-control" name="_password" data-validate="minlength[4],equalTo[#password],maxlength[18]" data-message-required="确认密码必填,长度最小为4个字符,最大为18个字符,并与密码一致" placeholder="******" />
            </div>



            <div class="form-group">
                <label class="control-label">身份</label>


                    <select name="power" id="ss" onchange="dai()" class="form-control">
                        <option value="1" onclick="dai()" <?php echo !empty($data['power']) && $data['power']=='1'?'selected':''; ?>>开通代理&nbsp;(需扣除二十点)</option>
                        <option value="2" onclick="yong()" <?php echo !empty($data['power']) && $data['power']=='2'?'selected':''; ?>>用&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;户&nbsp;(无&nbsp;需&nbsp;扣&nbsp;点)</option>

                    </select>

            </div>

            <div class="form-group" id="dai" style="display: <?php echo !empty($data['power']) && $data['power']=='1'?'block':'none'; ?>">
                <label class="control-label">联系方式</label>

                <input type="text" class="form-control" name="phone" data-validate="required" value="<?php echo $data['phone']; ?>" data-message-required="联系方式必填" placeholder="QQ或者微信" />
            </div>


            <div class="form-group" id="wei" style="display: <?php echo !empty($data['power']) && $data['power']=='1'?'block':'none'; ?>">
                <label class="control-label">微信</label>

                <input type="text" class="form-control" name="weichat" data-validate="required" value="<?php echo $data['weichat']; ?>" data-message-required="微信必填" placeholder="微信" />
            </div>
            <INPUT type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <?php if(session('power')=='0'){?>
            <div class="form-group " id="share" style="display: <?php echo !empty($data['power']) && $data['power']=='1'?'block':'none'; ?>">
                <label class="control-label">推荐码</label>
                <input type="text" class="form-control" name="share_ma" value="<?php echo $data['share_ma']; ?>"  placeholder="推荐码不能为汉字" />
            </div><?php }?>
            <div class="form-group">
                <button type="submit" class="btn btn-success">提交</button>
                <button type="reset" class="btn btn-white">重置</button>
            </div>

        </form>

    </div>

</div>
<script>
    function dai() {
        var ss= $('#ss').val();
        if(ss=='1')
        {
            $('#dai').css('display','block')
            $('#wei').css('display','block')
            $('#share').css('display','block')
        }else{
            $('#dai').css('display','none')
            $('#wei').css('display','none')
            $('#share').css('display','none')
        }
    }
</script>
<?php echo !empty($code) && $code=='err1'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 修改失败 .用户已存在
        .请重新修改
    </div>
</div>

':''; ?>

<?php echo !empty($code) && $code=='err3'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 您的余额不足，请联系管理员充值
    </div>
</div>

':''; ?>

<?php echo !empty($code) && $code=='err4'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 推荐码已存在
        .请重新添加
    </div>
</div>

':''; ?>
<?php echo !empty($code) && $code=='err2'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 修改失败
        .请重新修改
    </div>
</div>

':''; ?>
<script>
    setTimeout("$('#alert').fadeOut(1000)",2000)
</script>

    </div>

</div>




<!-- Imported styles on this page -->
<link rel="stylesheet" href="/public/static/assets/css/fonts/meteocons/css/meteocons.css">

<!-- Bottom Scripts -->
<script src="/public/static/assets/js/bootstrap.min.js"></script>
<script src="/public/static/assets/js/TweenMax.min.js"></script>
<script src="/public/static/assets/js/resizeable.js"></script>
<script src="/public/static/assets/js/joinable.js"></script>
<script src="/public/static/assets/js/xenon-api.js"></script>
<script src="/public/static/assets/js/xenon-toggles.js"></script>


<!-- Imported scripts on this page -->
<script src="/public/static/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/public/static/assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
<script src="/public/static/assets/js/xenon-widgets.js"></script>


<script src="/public/static/assets/js/xenon-widgets.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

<script src="/public/static/assets/js/jquery-validate/jquery.validate.js"></script>
<!-- JavaScripts initializations and stuff -->
<script src="/public/static/assets/js/xenon-custom.js"></script>
<script src="/public/static/layer/layer.js"></script>


</body>

</html>