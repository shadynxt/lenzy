@extends('site.layout')
@section('title') 
 القائمة السوداء-{{$main->site_title}}
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

        <h2 class="block-head">البحث في القائمه السوداء </h2>
        <div class="block-content">
            <form action="{{URL::to('site/searchblacklist')}}" method="post">
                <input type="text" name="black" class="the_title" style="width:55%;" placeholder="اكتب هنا رقم العضو او اسمه  للبحث في القائمه السوداء" required />		
                <input type="submit" name="rset" value="تأكد" class="the_submit" style="width:30%;" />
        </div><!-- End Block Content -->
    </div>
</div>


@stop