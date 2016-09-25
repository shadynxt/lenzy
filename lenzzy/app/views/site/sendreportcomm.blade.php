@extends('site.layout')

@section('title') 
 ابلاغ عن اعلان مخالف-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop


@section('content')
<div class="report_section" style="float: left; margin-left: 12px;">
    <div class="block">

        <h2 class="block-head">إبلاغ عن إعلان مخالف</h2>
        <div class="block-content">
            <div class="warning">
                تحذير:هذا النموذج مخصص فقط للإبلاغ عن الاعلانات المخالفه وليس للتواصل مع صاحب الاعلان
            </div>
            <div class="warning">
                الرسائل المرسلة عبر هذا النموذج لن تصل إلى صاحب الإعلان!
            </div>
            <form action="{{URL::to('site/sendreport2/'.$s->id)}}" method="post">
                <textarea required name="report_comment" class="the_replay" placeholder="هنا يكتب نص التبليغ"></textarea>
                <input type="submit" name="addreport" value="ارسال" class="the_submit" />
            </form>
        </div><!-- End Block Content -->
    </div>
</div>


@stop