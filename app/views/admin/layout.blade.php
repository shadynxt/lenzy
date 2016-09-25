<!DOCTYPE html>


<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>لوحه التحكم </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        {{ HTML::style('assets/admin/plugins/font-awesome/css/font-awesome.min.css')}}
        {{ HTML::style('assets/admin/plugins/bootstrap/css/bootstrap-rtl.min.css')}}
        {{ HTML::style('assets/admin/plugins/uniform/css/uniform.default.css')}}
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <!--  {{ HTML::style('assets/admin/plugins/gritter/css/jquery.gritter-rtl.css')}}  -->
        {{ HTML::style('assets/admin/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}
        {{ HTML::style('assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.css')}}
        <!-- {{ HTML::style('assets/admin/plugins/jqvmap/jqvmap/jqvmap.css')}}  -->
        {{ HTML::style('assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN THEME STYLES -->
        {{ HTML::style('assets/admin/css/style-metronic-rtl.css')}}
        {{ HTML::style('assets/admin/css/style-rtl.css')}}

        {{ HTML::style('assets/admin/css/style-responsive-rtl.css')}}
        {{ HTML::style('assets/admin/css/plugins-rtl.css')}}
        {{ HTML::style('assets/admin/css/pages/tasks-rtl.css')}}
        {{ HTML::style('assets/admin/css/themes/default-rtl.css')}}
        {{ HTML::style('assets/admin/css/custom-rtl.css')}}
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>

        <!--   start for asstes for google map -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=ar"></script>
        {{ HTML::script('assets/site/js/jquery-1.7.2.min.js')}}
        {{ HTML::script('assets/site/js/jquery-gmaps-latlon-picker.js')}}
        {{ HTML::style('assets/site/style/jquery-gmaps-latlon-picker.css')}}
        {{ HTML::script('assets/admin/js/ck/ckeditor.js')}}
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=ar"></script> 
        <!--   maps link  start -->
        <script src="http://maps.google.com/maps/api/js?sensor=false" 
        type="text/javascript"></script>
        {{ HTML::style('assets/admin/css/jquery-gmaps-latlon-picker.css')}}
        {{ HTML::script('assets/admin/js/jquery-1.7.2.min.js')}}
        {{ HTML::script('assets/admin/js/jquery-gmaps-latlon-picker.js')}}
    <input name="base_url" id="base_url" hidden="" value="{{URL::to('')}}"/>
    <script type="text/javascript">
$(document).ready(function () {


    $('.section_id').on('change', function () {
        $.ajax({
            url: "{{URL::to('works/modajax')}}",
            type: "POST",
            data: {section_id: $(this).val()},
            dataType: "json"

        }).done(function (data) {

            $('.subsection_id').html('');
            $('.subsection_id').append('<option value="">اختر  القسم الفرعي     </option>');
            for (i = 0; i < data.length; i++) {

                $('.subsection_id').append('<option value="' + data[i].id + '">' + data[i].subsection_name + '</option>');
            }
        }).fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });
});</script>

    <!--  end of google map assets -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="header-inner">
            <!-- BEGIN LOGO -->

            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                {{ HTML::image('assets/admin/img/menu-toggler.png')}}

            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->

                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                        <span class="username">
                            @if(Auth::check())
                            {{ Auth::User()->first_name}}

                            @endif
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @if(Auth::check())
                            <a href="{{URL::route('edituser'  , Auth::User()->id)}}">
                                @endif
                                <i class="fa fa-user"></i> My Profile
                            </a>
                        </li>



                        <li class="divider">
                        </li>
                        <li>
                            <a href="javascript:;" id="trigger_fullscreen">
                                <i class="fa fa-arrows"></i> Full Screen
                            </a>
                        </li>
                        <li>

                        </li>
                        <li>
                            <a href="{{URL::route('logout')}}">
                                <i class="fa fa-key"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">

            {{ View::make('admin.sidebar')}}

        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                @if(Session::has('yes'))
                <div class="alert alert-success alert-dismissable" style="text-align: center;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <strong>Ok!</strong>   {{ Session::get('yes') }}
                    <a href="" class="alert-link">

                    </a>
                </div>
                @endif
                @if(Session::has('no'))
                <div class="alert alert-warning alert-dismissable" style="text-align: center;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <strong>أنتبة!</strong>  {{ Session::get('no') }}
                    <a href="" class="alert-link">

                    </a>
                </div>
                @endif
                @if($errors->has())
                <div class="note note-warning"  style="text-align: center;" >
                    <p>لم تقم بالادخال بشكل صحيح  اتبع التعليمات </p>

                    <ul>
                        @foreach($errors->all() as $error)

                        <li>{{$error}}</li>

                        @endforeach
                    </ul>
                </div> <!-- end form errors -->
                @endif
                @yield('content')
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="footer-inner">

        </div>
        <div class="footer-tools">
            <span class="go-top">
                <i class="fa fa-angle-up"></i>
            </span>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <script src="assets/plugins/excanvas.min.js"></script> 
    <![endif]-->
    {{ HTML::script('assets/admin/plugins/jquery-1.10.2.min.js')}}
    {{ HTML::script('assets/admin/plugins/jquery-migrate-1.2.1.min.js')}}
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    {{ HTML::script('assets/admin/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}
    {{ HTML::script('assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}
    {{ HTML::script('assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
    {{ HTML::script('assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
    {{ HTML::script('assets/admin/plugins/jquery.blockui.min.js')}}
    {{ HTML::script('assets/admin/plugins/jquery.cokie.min.js')}}
    {{ HTML::script('assets/admin/plugins/uniform/jquery.uniform.min.js')}}
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{ HTML::script('assets/admin/plugins/jqvmap/jqvmap/jquery.vmap.js')}}
    {{ HTML::script('assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}
    {{ HTML::script('assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}
    {{ HTML::script('assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}
    {{ HTML::script('assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}
    {{ HTML::script('assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}
    {{ HTML::script('assets/admin/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}
    {{ HTML::script('assets/admin/plugins/flot/jquery.flot.min.js')}}
    {{ HTML::script('assets/admin/plugins/flot/jquery.flot.resize.min.js')}}
    {{ HTML::script('assets/admin/plugins/flot/jquery.flot.categories.min.js')}}
    {{ HTML::script('assets/admin/plugins/jquery.pulsate.min.js')}}
    {{ HTML::script('assets/admin/plugins/bootstrap-daterangepicker/moment.min.js')}}
    {{ HTML::script('assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.js')}}
    <!--  {{ HTML::script('assets/admin/plugins/gritter/js/jquery.gritter.js')}}  -->
    <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
    {{ HTML::script('assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.min.js')}}
    {{ HTML::script('assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}
    {{ HTML::script('assets/admin/plugins/jquery.sparkline.min.js')}}
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    {{ HTML::script('assets/admin/scripts/core/app.js')}}
    {{ HTML::script('assets/admin/scripts/custom/index.js')}}
    {{ HTML::script('assets/admin/scripts/custom/tasks.js')}}
    {{ HTML::script('assets/admin/js/upload-script.js') }}
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function () {
            App.init(); // initlayout and core plugins
            Index.init();
            Index.initJQVMAP(); // init index page's custom scripts
            Index.initCalendar(); // init index page's custom scripts
            Index.initCharts(); // init index page's custom scripts
            Index.initChat();
            Index.initMiniCharts();
            Index.initDashboardDaterange();
            Index.initIntro();
            Tasks.initDashboardWidget();
        });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>