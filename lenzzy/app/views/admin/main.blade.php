@extends('admin.layout')
@section('content')


<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            لوحه التحكم </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="">
                    الرئيسيه
                </a>
                <i class="fa fa-angle-left"></i>
            </li>
            <li>
                <a href="#">
                    لوحه التحكم 
                </a>
            </li>

        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS -->
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $auser;?>
                </div>
                <div class="desc">
                   عضو  
                </div>
            </div>
            <a class="more" href="#">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                   <?php echo $unuser;?>
                </div>
                <div class="desc">
                  اعلان
                </div>
            </div>
            <a class="more" href="#">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?php echo $con;?>
                </div>
                <div class="desc">
                    بنر 
                </div>
            </div>
            <a class="more" href="#">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat yellow">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                     <?php echo $cit;?>
                </div>
                <div class="desc">
                     القائمه البريدية  
                </div>
            </div>
            <a class="more" href="#">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>
<!-- END DASHBOARD STATS -->
<div class="clearfix">
</div>
<div class="row">
   
        <!-- END PORTLET-->
    </div>
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->

        <!-- END PORTLET-->
        <!-- BEGIN PORTLET-->
        <div class="portlet solid bordered light-grey" style="text-align: center;">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-signal"></i>Server Load
                </div>
                <div class="tools">
                    <div class="btn-group pull-right" data-toggle="buttons">
                        <a href="" class="btn red btn-sm active">
                            Database
                        </a>
                        <a href="" class="btn red btn-sm">
                            Web
                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div id="load_statistics_loading">
                    {{ HTML::image('assets/admin/img/loading.gif')}}
                </div>
                <div id="load_statistics_content" class="display-none">
                    <div id="load_statistics" style="height: 108px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="clearfix">
</div>

<div class="clearfix">
</div>

<div class="clearfix">
</div>

<div class="clearfix">
</div>
<div class="row ">

    
</div>


@stop