<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <form id="myform" action="<?php echo site_url('Login/Authentication') ?>" method="post">
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                            <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="fm-checkbox">
                        <label><input type="checkbox" class="i-checks"> <i></i> Keep me signed in</label>
                    </div>
                    <a href="javascript: submitform()" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></a>
                </form>
            </div>

            <div class="nk-navigation nk-lg-ic">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>

        <!-- Register -->
        <div class="nk-block" id="l-register">
            <div class="nk-form">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation rg-ic-stl">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>

        <!-- Forgot Password -->
        <div class="nk-block" id="l-forget-password">
            <div class="nk-form">
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                </div>

                <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic rg-ic-stl">
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>

    <script type="text/javascript">
        function submitform(){
            document.forms["myform"].submit();
        }
    </script>
</body>

</html>