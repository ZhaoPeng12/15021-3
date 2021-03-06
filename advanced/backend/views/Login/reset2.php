﻿<!DOCTYPE html>
<html>
<head>
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="23635710066417756375" />
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
    <meta charset="UTF-8">

    <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

    <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">

    <title>找工作-互联网招聘求职网-拉勾网</title>

    <link rel="Shortcut Icon" href="//www.lgstatic.com/passport/static/common/static/favicon_faed927.ico">


    <!-- header/global_domain FE_base.. -->

    <script type="text/javascript">
        (function() {
            var protocol = window.location.protocol;
            var host = window.location.host;
            var baseUrl = protocol + '//' + host;

            window.GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
                    ctx: protocol + '//www.lagou.com',
                    rctx: protocol + '//hr.lagou.com',
                    crctx: protocol + '//hr.lagou.com/company',
                    pctx: protocol + '//passport.lagou.com',
                    actx: protocol + '//account.lagou.com',
                    paictx: protocol + '//pai.lagou.com',
                    sctx: protocol + '//suggest.lagou.com',
                    zctx: protocol + '//yanzhi.lagou.com',
                    proctx: 'https://pro.lagou.com',
                    lgsctx: protocol + '//www.lgstatic.com',
                    FE_frontLogin: baseUrl + '//www.lagou.com/frontLogin.do',
                    FE_frontLogout: baseUrl + '//www.lagou.com/frontLogout.do',
                    FE_frontRegister: baseUrl + '//www.lagou.com/frontRegister.do'
                };

            window.GLOBAL_CDN_DOMAIN = 'www.lgstatic.com';
        })();
    </script>

    <!-- 页面样式 --><!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">
        window.X_Anti_Forge_Token = 'cb880d85-0189-4b12-8fe1-395342afb3f4';
        window.X_Anti_Forge_Code = '64675263';
    </script>

    <!-- H5	 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" type="text/css" href="css/step1.html_aio_ae2eacb.css" />
</head>
<body>
<input type="hidden" value = "false" id = "isVisiable_request_form_verifyCode" />
<input type="hidden" value = "true" id = "is_must_show_verify_code" />
<!-- 页面主体START -->
<header class="sso_header">
    <a href="http://www.lagou.com" class="logo"></a>
</header>

<section class="content_box" id="findPwd2">
    <!-- 通过邮箱来找回密码 -->
    <div class="findPwd">
        <h5 class="change_way"><a rel="nofollow" href="//passport.lagou.com/login/login.html">返回登录</a><span class="separate">|</span><a class="go_phone" rel="nofollow" href="javascript:;" id="go-phone">通过手机号找回</a></h5>
        <form action="?r=login/reset" method="post">
            <ul class="form_head clearfix">
                <li class="active" style="margin-right:42px;">
                    <span class="icon_step step1"></span>
                    <span style="font-weight:bold; color: #0f0f0f">输入邮箱地址</span>
                </li>
                <li style="margin-right:53px;width:59px;">
                    <span class="icon_step step"><img src="images/step2-active_d53855e.png" alt=""></span>
                    <span style="font-weight:bold; color: #0f0f0f">验证邮箱</span>
                </li>
                <li style="width:59px">
                    <span class="icon_step step3"></span>
                    重置密码
                </li>
            </ul>

            <div class="form_body">
                <div class="input_item clearfix">
                    <h3 class="reset_mail">密码重置邮件已发送至你的邮箱：<span class="des_mail"><?php echo $email ?></span></h3>
                    <p class="reset_tips">请在24小时内登录你的邮箱接收邮件,链接激活后可重置密码。</p>
                </div>
                <div class="input_item clearfix" style="display:none;" id="gotoVerify">
                    <input type="button" class="btn btn_green btn_active btn_block" value="登录邮箱查看" id="step2" >
                </div>
            </div>
            <div class="form_body" style="display:none">
                <div class="input_item clearfix">
                    <input type="text" class="input input_white" id="" name="" placeholder="请输入新密码" data-required="required" autocomplete="off" >
                </div>
                <div class="input_item clearfix">
                    <input type="text" class="input input_white" id="" name="" placeholder="请再次输入新密码" data-required="required" autocomplete="off" >
                </div>
                <div class="input_item clearfix">
                    <input type="button" class="btn btn_green btn_active btn_block" value="确定" id="step3" onclick="findByMail('step3')">
                </div>
            </div>
        </form>
    </div>
</section>

<footer>
    <h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- 页面主体END --><!-- jquery lib --><!--拉勾UI框架 -->
<!-- analytics js file --><!-- plat analytics js file -->
<script type="text/javascript" src="js/vendor_c7a7c93.js"></script>
<script type="text/javascript" src="js/step1.html_aio_62622db.js"></script>
<script type="text/javascript" src="js/static_ab40326.js"></script>
<script type="text/javascript">
    //login page
    require(['pc/page/findpassword/main']);
</script>
<script type="text/javascript" src="js/oss.js"></script></body>
</html>
