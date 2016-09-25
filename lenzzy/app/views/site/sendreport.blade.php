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


<div id="inner" class="row">

    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 p04">
        <div class="report_section" >
            <div class="block">

                <h2 class="block-head">إبلاغ عن إعلان مخالف</h2>
                <div class="block-content">
                    <div class="warning">
                        تحذير:هذا النموذج مخصص فقط للإبلاغ عن الاعلانات المخالفه وليس للتواصل مع صاحب الاعلان
                    </div>
                    <div class="warning">
                        الرسائل المرسلة عبر هذا النموذج لن تصل إلى صاحب الإعلان!
                    </div>
                    <form action="{{URL::to('site/sendreport/'.$s->id)}}" method="post">
                        <textarea required name="report_comment" class="the_replay form-control" placeholder="هنا يكتب نص التبليغ"></textarea>
                        <input type="submit" name="addreport" value="ارسال" class="the_submit btn btn-danger" />
                    </form>
                </div><!-- End Block Content -->
            </div>
        </div>
    </div>
</div>


@stop