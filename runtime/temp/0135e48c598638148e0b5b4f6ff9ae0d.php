<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:54:"D:\phpStudy\WWW\Tplus/app/system\view\index\index.html";i:1501235529;s:54:"D:\phpStudy\WWW\Tplus/app/system\view\base\common.html";i:1487660130;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T+ 最清爽的后台框架</title>
    <meta name="keywords" content="T+ 最清爽的后台框架">
    <meta name="description" content="T+ 最清爽的后台框架">
    <link rel="shortcut icon" href="./favicon.ico">
    <link href="<?php echo $_css; ?>/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo $_css; ?>/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo $_css; ?>/animate.min.css" rel="stylesheet">
    <link href="<?php echo $_css; ?>/main.css" rel="stylesheet" />
    <link href="<?php echo $_css; ?>/style.min862f.css?v=4.1.0" rel="stylesheet" />
    <link href="<?php echo $_css; ?>/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo $_css; ?>/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?php echo $_css; ?>/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <script src="<?php echo $_js; ?>/jquery.min.js?v=2.1.4"></script>
     
    <script src="<?php echo $_js; ?>/bootstrap.min.js?v=3.3.6"></script>
    <script src="<?php echo $_js; ?>/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo $_js; ?>/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo $_js; ?>/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo $_js; ?>/common.js"></script>
    <script src="<?php echo $_js; ?>/main.js"></script>
    <script src="<?php echo $_js; ?>/modernizr-2.8.0.min.js"></script>
    <script src="<?php echo $_js; ?>/video.js"></script>
    <script src="<?php echo $_js; ?>/jquery.autocompleter.js"></script>
   <script src="<?php echo $_js; ?>/plugins/layer/layer.min.js"></script>
</head>

<body class="fixed-sidebar full-height-layout gray-bg  pace-done" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav" style="height: 190px">
                    <img alt="image" style="padding-top: 20px" src="<?php echo $_img; ?>/logo.png" />
                </li>
                <?php if(is_array($tplusmenu) || $tplusmenu instanceof \think\Collection): $i = 0; $__LIST__ = $tplusmenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;if(isset($menu['child']) and count($menu['child']) > 0): ?>
                <li>
                    <a href="#">
                        <i class="fa fa-<?php echo $menu['font_class']; ?>"></i>
                        <span class="nav-label"><?php echo $menu['title']; ?></span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <?php if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection): $i = 0; $__LIST__ = $menu['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;if(is_array($sub_menu) || $sub_menu instanceof \think\Collection): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a class="J_menuItem" href="<?php echo url($vo['url'],$vo['param']); ?>" >
                                <i class="fa fa-<?php echo $vo['font_class']; ?>"></i>
                                <?php echo $vo['title']; ?>
                                </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
                <?php else: ?>
                <li>
                    <a class="J_menuItem" href="<?php echo url($menu['url']); ?>">
                        <i class="fa fa-<?php echo $menu['font_class']; ?>"></i><span class="nav-label"><?php echo $menu['title']; ?></span></a>
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a class="" >
                            <i class="fa fa-trash"></i> <span _url="<?php echo url('Config/clearRuntime'); ?>" id="clear">清理缓存</span>
                        </a>
                    </li>
                    <li>
                        <a class="" >
                            <i class="fa fa-user-plus"></i> 官方论坛
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo url('logout'); ?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo url('Index/main'); ?>" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right">&copy; 2016-2017
            </div>
        </div>
    </div>
    <!--右侧部分结束-->
    <!--右侧边栏开始-->
    <div id="right-sidebar">

    </div>
    <!--右侧边栏结束-->
</div>
<script src="<?php echo $_js; ?>/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo $_js; ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo $_js; ?>/plugins/layer/layer.min.js"></script>
<script src="<?php echo $_js; ?>/hplus.min.js?v=4.1.0"></script>
<script src="<?php echo $_js; ?>/contabs.min.js"></script>
<script src="<?php echo $_js; ?>/plugins/pace/pace.min.js"></script>
<script>
    $(function(){
        //清理缓存
        $("#clear").click(function(){
            var _url = $(this).attr("_url");
            $.ajax({
                url : _url,
                type : 'get',
                success :function(data){
                    alert(data.msg);
                }
            })
        });
    });
</script>

</html>