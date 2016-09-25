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

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p04">


        <table class="table tableAds table-borderedAds ">
            <tr>
                <th>#</th>
                <th>عنوان الرساله</th>
                <th>المرسل</th>
                <th>الوقت</th>
                <th>خيارات</th>
            </tr>

            @if(count($ads))
            <!-- favorit normal ads -->
            @foreach($ads as $a)



            <tr style="background-color:#F8FAC1">
                <td>
                    {{$a->id}}
                </td>

                <td><a href="{{URL::to('site/adv/'. $a->id)}}"></a> {{$a->message_title}} </td>

                <td><a href="{{URL::to('site/adv/'. $a->id)}}"></a>{{ Ads::getUser($a->message_from)}} </td>
                <td>{{ Ads::time(strtotime($a->created_at))}}</td>
                <td>
                    <a onclick="cofirm('هل انت متاكد من حذف الرساله ')" href="{{URL::to('site/readmessage/'. $a->id)}}">قرائه </a>
                    -

                    <a onclick="cofirmdelete()" href="{{URL::to('site/deletemessage/'. $a->id)}}">حذف </a>

                </td>
            </tr>

            @endforeach



            @else 

            @endif
        </table>
    </div>
</div>














@stop