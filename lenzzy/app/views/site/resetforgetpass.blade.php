@extends('site.layout')
@section('title') 
 تغير كلمه المرور-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop

@section('content')
<div class="report_section" style="float: left; margin-left: 20px;">

    <div class="block">
        <h2 class="block-head">تغيير كلمة المرور</h2>
        <div class="block-content">
            <form action="{{URL::to('site/changeresetpass/'.$code)}}" method="post">
                <input type="password" name="password" class="the_title" style="width:55%;" placeholder="كلمة المرور"   required />		
                <input type="submit" name="change" value="تغيير كلمة المرور" class="the_submit" style="width:30%;" />
        </div><!-- End Block Content -->
    </div>
</div>

@stop