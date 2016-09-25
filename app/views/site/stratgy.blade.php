@extends('site.layout')


@section('title') 

سياسة المتجر-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop

@section('content')
<section id="single-page" class="down">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>سياسة المتجر</h2>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {{$main->site_condition}}
                </div>
                <!-- end of col 6 -->
                <div class="clearfix" style="padding:30px 0"></div>



            </div>
            <!-- end of col 12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</section>

@stop