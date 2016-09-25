<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
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
        <title>خطاء</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        {{HTML::style('assets/admin/plugins/font-awesome/css/font-awesome.min.css')}}
        {{HTML::style('assets/admin/plugins/bootstrap/css/bootstrap-rtl.min.css')}}
        {{HTML::style('assets/admin/plugins/uniform/css/uniform.default.css')}}
        {{HTML::style('assets/admin/css/style-metronic-rtl.css')}}
        {{HTML::style('assets/admin/css/style-rtl.css')}}
        {{HTML::style('assets/admin/css/style-responsive-rtl.css')}}
        {{HTML::style('assets/admin/css/plugins-rtl.css')}}
        {{HTML::style('assets/admin/css/themes/default-rtl.css')}}
        {{HTML::style('assets/admin/css/pages/error-rtl.css')}}
        {{HTML::style('assets/admin/css/custom-rtl.css')}}

        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-404-full-page">
        <div class="row">
            <div class="col-md-12 page-404">
                <div class="number">
                    404
                </div>
                <div class="details">
                    <h3 style="color:red;">رابط خاطئ</h3>
                    <h3>
                        ناسف الرابط المستدعي غير موجود او تم كتابته  خطاء<br/>
                        <br/>
                        <a href="{{URL::to('/')}}" style="color:#800;">
                            رجوع للرئيسيه 
                        </a>

                    </h3>

                </div>
            </div>
        </div>
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="assets/plugins/respond.min.js"></script>
        <script src="assets/plugins/excanvas.min.js"></script> 
        <![endif]-->

        {{HTML::script('assets/admin/plugins/jquery-1.10.2.min.js')}}
        {{HTML::script('assets/admin/plugins/jquery-migrate-1.2.1.min.js')}}
        {{HTML::script('assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}
        {{HTML::script('assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
        {{HTML::script('assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
        {{HTML::script('assets/admin/plugins/jquery.blockui.min.js')}}
        {{HTML::script('assets/admin/plugins/jquery.cokie.min.js')}}
        {{HTML::script('assets/admin/plugins/uniform/jquery.uniform.min.js')}}
        {{HTML::script('assets/admin/scripts/core/app.js')}}

        <script>
            jQuery(document).ready(function () {
                App.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>