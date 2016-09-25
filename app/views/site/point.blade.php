@extends('site.layout')
@section('title') 
دخول الأعضاء-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')
<div id="inner" class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-4">
        <h2>نظام النقاط</h2>
   
        <div class="alert alert-info" style="text-align: center;">
        شرح نظام النقاط 
        </div>
           {{$main->site_condition}}
    </div>
    <div class="clearfix"></div>
    <br><br><br><br><br><br>
</div>
@stop