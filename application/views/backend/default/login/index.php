<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!-- DNS prefetch -->
  <link rel=dns-prefetch href="//fonts.googleapis.com">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Login :: CI - Master &amp; Admin Panel</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?=backend_css_url()?>/style.css"> <!-- Generic style (Boilerplate) -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/960.fluid.css"> <!-- 960.gs Grid System -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/main.css"> <!-- Complete Layout and main styles -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/buttons.css"> <!-- Buttons, optional -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/lists.css"> <!-- Lists, optional -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/icons.css"> <!-- Icons, optional -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/notifications.css"> <!-- Notifications, optional -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/typography.css"> <!-- Typography -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/forms.css"> <!-- Forms, optional -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/tables.css"> <!-- Tables, optional -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/charts.css"> <!-- Charts, optional -->
  <link rel="stylesheet" href="<?=backend_css_url()?>/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
  <link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
  <script src="<?=backend_js_url()?>/libs/modernizr-2.0.6.min.js"></script>
</head>
<body class="special-page">

  <!-- Begin of #container -->
  <div id="container">
  	
  	<!-- Begin of LoginBox-section -->
    <section id="login-box">
    	
    	<div class="block-border" style="position: relative">
    		<div class="block-header" style="position: relative">
    			<h1>Đăng nhập hệ thống</h1>
    		</div>
            <form id="login-form" class="block-content form" method="post" style="position: relative">
                <p class="inline-small-label">
                    <label for="username">Tài khoản</label>
                    <input type="text" id="username" name="username" value="" class="required">
                </p>
                <p class="inline-small-label">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" value="" class="required">
                </p>
                <p>
                    <label><input type="checkbox" name="keep_logged" /> Nhớ mật khẩu.</label>
                </p>

                <div class="clear"></div>

                <!-- Begin of #block-actions -->
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><a class="button" name="recover_password" onclick="GotoFormRecover()" href="javascript:void(0);">Khôi phục mật khẩu</a></li>
                        <li class="divider-vertical"></li>
                        <li><a class="button red" id="reset-login" href="javascript:void(0);">Bỏ qua</a></li>
                    </ul>
                    <ul class="actions-right">
                        <li><a class="button" onclick="CheckLogin('<?=base_url()?>')">Đăng nhập</a></li>
                    </ul>
                </div> <!--! end of #block-actions -->
            </form>
            <form id="recover-form" class="block-content form" method="post" style="display: none;position: relative">
                <p class="inline-small-label">
                    <label for="username">Email đăng ký</label>
                    <input type="text" id="email" name="email" value="" class="required">
                </p>
                <div class="clear"></div>
                <!-- Begin of #block-actions -->
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><a class="button" onclick="ComeBack()">&laquo; Quay lại</a></li>
                        <li class="divider-vertical"></li>
                    </ul>
                    <ul class="actions-right">
                        <li><a class="button" name="recover_password" onclick="RecoverPassword()" href="javascript:void(0);">Thực hiện</a></li>
                    </ul>
                </div> <!--! end of #block-actions -->
            </form>

    		
    	</div>
    </section> <!--! end of #login-box -->
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="<?=backend_js_url()?>/libs/jquery-1.11.0.min.js"></script>
  <script defer src="<?=backend_js_url()?>/plugins.js"></script> <!-- lightweight wrapper for consolelog, optional -->
  <script defer src="<?=backend_js_url()?>/mylibs/jquery.notifications.js"></script> <!-- Notifications  -->
  <script defer src="<?=backend_js_url()?>/mylibs/jquery.uniform.min.js"></script> <!-- Uniform (Look & Feel from forms) -->
  <script defer src="<?=backend_js_url()?>/mylibs/jquery.validate.min.js"></script> <!-- Validation from forms -->
  <script defer src="<?=backend_js_url()?>/mylibs/jquery.tipsy.js"></script> <!-- Tooltips -->
  <script defer src="<?=backend_js_url()?>/common.js"></script> <!-- Generic functions -->
  <script defer src="<?=backend_js_url()?>/script.js"></script> <!-- Generic scripts -->
  <script defer src="<?=backend_js_url()?>/form_handle.js"></script>

</body>
</html>
