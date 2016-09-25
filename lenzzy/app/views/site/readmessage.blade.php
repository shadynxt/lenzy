@extends('site.layout')

@section('title') 
قرائه الرسائل-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop

@section('content')

<?php
$x = Message::where('message_to', '=', Auth::User()->id)->first();
$user = Auth::User()->id;
$rate = 1;
$results = DB::update('update message set see=' . $rate . ' where message_to="' . $user . '"');
?>
<div id="inner" class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p04">


        <table class="table tableAds table-borderedAds ">
            <tr class="first-row">
                <td>رسالة خاصة</td>
            </tr>

            <tr>
                <td>
                    <div class="cont_title"  style="font-size:22px; font-family:Arial;padding:8px;" ><h2> {{$mess->message_title}}</h2>
                        المرسل:	 
                        {{Ads::getUser($mess->message_from)}}
                    </div>
                    <p style="text-align:right;font-size:22px; font-family:Arial; ">
                        {{$mess->message_text}}
                    <p>
         



                    <form action="{{URL::to('site/replymessage/'.$mess->message_from)}}" method="post">

                        <textarea required  name="message_text" class="form-control" placeholder="هنا نص الرد على الرسالة"></textarea>
                        <input type="submit" name="addpm" value="ارسال" class="btn btn-danger" />
                    </form>
                </td>
            </tr>

        </table>


    </div>
</div>
@stop