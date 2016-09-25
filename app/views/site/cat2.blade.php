@extends('site.layout')

@section('title') 
اقسام-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop


@section('content')
<div id="inner" class="row">

    <div class="row" id="wrapper">
        <div class="col-xs-12  col-sm-3 col-md-3 col-lg-3" id="firstDiv">

            <p class="moreoptions showhideside" style="display: none;width:30%;margin-right:10px">إظهار الخيارات</p>
            <div class="side-col  ">



                <ul class="nav nav-tabs">
                    <li class="active"><a style="font-size:12px !important;" href="#">{{Ads::getSubSectionName($section->id)}}</a></li>

                </ul>
                <br />
                <div>

                    @foreach(Subsection::where('section_id' , '=' ,$section->id)->get()  as $sec)


                    <a title="{{$sec->subsection_name}}" href="{{URL::to('site/subcat/'.$sec->id)}}" class="tag">#{{$sec->subsection_name}} </a><br>


                    @endforeach

                </div>
                <div class="clear"></div>


                <hr />





            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 p04">


            <table class="table tableAds table-borderedAds ">
                <tr>
                    <th></th>
                    <th>العروض</th>
                    <th>المدينة</th>
                    <th>المعلن</th>
                    <th>قبل</th>
                </tr>

                @if(count($ads))
                <!-- favorit normal ads -->
                @foreach($ads as $a2)



                <tr style="background-color:#F8FAC1">
                    <td>{{$a2->id}}
                    </td>
                    <?php
                    $title = str_replace(' ', '-', $a2->ad_title);
                    ?>
                    <td class="titles"><a class="adtitle" href='{{URL::to('site/adv/'. $a2->id .'/' .$title)}}'>
                            {{$a2->ad_title}}</a>
                        <i class="comment_count">  </i> 
                        @if(count(json_decode($a2->image)))
                        <a href="#">&nbsp;<i class="fa fa-camera-retro black"></i> </a>&nbsp;

                        @else

                        @endif

                    </td>


                    <td><a href="{{URL::to('site/allcityads/'. $a2->city_id)}}" class="smallsize"> {{  Ads::getCity($a2->city_id) }}</a> </td>
                    <td><a href="{{URL::to('site/alluserads/'. $a2->user_id)}}" class="smallsize">{{ Ads::getuser($a2->user_id)}}</a> </td>


                    <td>{{ Ads::time(strtotime($a2->created_at))}}</td>
                </tr>

                @endforeach



                @else 

                @endif
            </table>
        </div>
    </div>

    @stop