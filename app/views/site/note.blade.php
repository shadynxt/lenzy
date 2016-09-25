@extends('site.layout')
@section('title') 
الأشعارات-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')


<?php
$x = Note::where('user_id_to', '=', Auth::User()->id)->first();
$user = Auth::User()->id;
$rate = 1;
$results = DB::update('update note set see=' . $rate . ' where user_id_to="' . $user . '"');
?>

<div id="inner" class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p04">


        <table class="table tableAds  ">
            <tr>

                <th>الأشعارات</th>

            </tr>

            <!-- favorit normal ads -->
            @foreach($ads as $a)


            @if($a->type == 1)
            <tr style="background-color:#F8FAC1">
                <td style="font: 400 18px droid; float: right;">
                    <i class="fa fa-asterisk"></i>
                    <?php $opject = Ads::getAddtitle($a->ad_id); ?>

                    اعلان جديد تم اضافته  عن <a href="{{URL::to('site/adv/'.$a->ad_id)}}"><?php echo mb_substr($opject, 0, 33, 'utf-8'); ?></a> بواسطه  <a href="{{URL::to('site/alluserads/' .$a->user_id_from )}}">{{Ads::getuser($a->user_id_from)}}</a>  
                </td>

            </tr>




            @else

            <tr style="background-color:#F8FAC1">
                <td style="font: 400 18px droid; float: right;">
                    <i class="fa fa-asterisk"></i>
                    <?php $opject = Ads::getAddtitle($a->ad_id); ?>

                    يوجد رد جديد علي اعلانك عن    <a href="{{URL::to('site/adv/'.$a->ad_id)}}"><?php echo mb_substr($opject, 0, 33, 'utf-8'); ?></a> بواسطه  <a href="{{URL::to('site/alluserads/' .$a->user_id_from )}}">{{Ads::getuser($a->user_id_from)}}</a>  
                </td>

            </tr>

            @endif

            @endforeach

        </table>
    </div>
</div>







@stop