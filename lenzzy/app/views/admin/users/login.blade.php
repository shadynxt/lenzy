<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>تسجيل دخول لوحه التحكم </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        {{ HTML::style('assets/admin/plugins/font-awesome/css/font-awesome.min.css')}}
        {{ HTML::style('assets/admin/plugins/bootstrap/css/bootstrap-rtl.min.css')}}
        {{ HTML::style('assets/admin/plugins/uniform/css/uniform.default.css')}}
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        {{ HTML::style('assets/admin/plugins/select2/select2-rtl.css')}}
        {{ HTML::style('assets/admin/plugins/select2/select2-metronic-rtl.css')}}
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        {{ HTML::style('assets/admin/css/style-metronic-rtl.css')}}
        {{ HTML::style('assets/admin/css/style-rtl.css')}}
        {{ HTML::style('assets/admin/css/style-responsive-rtl.css')}}
        {{ HTML::style('assets/admin/css/plugins-rtl.css')}}
        {{ HTML::style('assets/admin/css/themes/default-rtl.css')}}
        {{ HTML::style('assets/admin/css/pages/login-soft-rtl.css')}}
        {{ HTML::style('assets/admin/css/custom-rtl.css')}}
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">

        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">

            @if(Session::has('no'))
            <div class="alert alert-warning alert-dismissable" style="text-align: center;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <strong></strong>  {{ Session::get('no') }}
                <a href="" class="alert-link">

                </a>
            </div>
            @endif
            {{ Form::open(array('url'=>'users/login') , array('class'=>'login-form'))}}
            <h3 class="form-title">تسجيل الدخول</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                    ادخل كلمه اسم المستخدم و كلمه السر 
                </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">اسم المستخدم</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="اسم المستخدم" name="first_name"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">كلمه السر </label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="*************" name="password"/>
                </div>
            </div>
            <div class="form-actions">

                <button type="submit" class="btn blue pull-right">
                    دخول  <i class="m-icon-swapright m-icon-white"></i>
                </button>

            </div>
            <div class="login-options">

            </div>
            <div class="forget-password">

            </div>
            <div class="create-account">

            </div>
            {{ Form::close()}}

        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
            2015 &copy; 
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
                <script src="assets/plugins/respond.min.js"></script>
                <script src="assets/plugins/excanvas.min.js"></script> 
                <![endif]-->
        {{ HTML::script('assets/admin/plugins/jquery-1.10.2.min.js')}}
        {{ HTML::script('assets/admin/plugins/jquery-migrate-1.2.1.min.js')}}
        {{ HTML::script('assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}
        {{ HTML::script('assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
        {{ HTML::script('assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
        {{ HTML::script('assets/admin/plugins/jquery.blockui.min.js')}}
        {{ HTML::script('assets/admin/plugins/jquery.cokie.min.js')}}
        {{ HTML::script('assets/admin/plugins/uniform/jquery.uniform.min.js')}}

        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ HTML::script('assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js')}}
        {{ HTML::script('assets/admin/plugins/backstretch/jquery.backstretch.min.js')}}
        {{ HTML::script('assets/admin/plugins/select2/select2.min.js')}}
        {{ HTML::script('assets/admin/scripts/core/app.js')}}
        {{ HTML::script('assets/admin/scripts/custom/login-soft.js')}}
        <script>
            jQuery(document).ready(function () {
                App.init();
                Login.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>