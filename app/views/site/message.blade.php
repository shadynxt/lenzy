@extends('site.layout')
@section('title') 
الرسائل-{{$main->site_title}}
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
        <br />
        <br />
        <div class="info" >
            نرجو ملاحظة ان لإدارة الموقع الحق في قراءة الرسائل وذلك لأسباب رقابية.
        </div>
        <div class="report_section" >

            <div class="block">

                <h2 class="block-head">ارسال رسالة</h2>
                <div class="block-content">
                    <?php
                    ?>
                    <form action="{{URL::to('site/sendmessage/'.$ads->user_id)}}" method="post">
                        <input value="بخصوص الاعلانك رقم {{$ads->id}}" type="text" name="message_title" class="the_title form-control"  placeholder="عنوان الرسالة" required />
                        <textarea name="message_text" style="height: 200px;" class="the_replay form-control " placeholder="نص الرسالة" required></textarea>
                        <input type="submit" name="addpm" value="ارسال" class="the_submit btn btn-danger" />
                </div><!-- End Block Content -->
            </div>
        </div>

    </div>
</div>

@stop