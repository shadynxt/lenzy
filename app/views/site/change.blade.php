@extends('site.layout')
@section('title') 
كلمه المرور-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')



<div id="inner" class="row">

    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 p04">
        <div class="report_section" style="">

            <div class="block">
                <h2 class="block-head">تغيير كلمة المرور</h2>
                <div class="block-content">
                    <form action="{{URL::to('site/changepass/'.Auth::User()->id)}}" method="post">
                        <input type="password" name="password" class="the_title  form-control"  placeholder="كلمة المرور"   required />		
                        <input type="password" name="password_confirmation" class="the_title  form-control"  placeholder="تأكيد كلمة المرور" required />		
                        <input type="submit" name="change" value="تغيير كلمة المرور" class="the_submit form-control btn btn-danger" style="width:30%;" />
                </div><!-- End Block Content -->
            </div>
        </div>
    </div>
</div>

@stop