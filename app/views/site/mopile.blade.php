@extends('site.layout')
@section('title') 
 اعلانات جوال-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop

@section('content')
<section>
    



    <table class="ad-table">
        <tr class="first-row">
            <td>#</td>
            <td>العروض</td>
            <td>المدينة</td>
            <td>المعلن</td>
            <td>تاريخ الإعلان</td>
        </tr>


        @if(count($ads))

        @foreach($ads as $a)



        <tr style="background-color:#F8FAC1">
            <td>
                {{ HTML::image('assets/site/images/pinned.png' , null , array('width'=>'18' , 'height'=>'18'))}}</td>
            <td class="titles"><a class="adtitle" href='{{URL::to('site/adv/'. $a->id)}}'>
                    {{$a->ad_title}}</a>
                <i class="comment_count">  </i> 
            </td>
            <td><a href="{{URL::to('site/adv/'. $a->id)}}"></a> {{$a->city_name}} </td>
            <td><a href="{{URL::to('site/adv/'. $a->id)}}"></a>{{$a->first_name}} </td>
            <td>{{ Ads::time(strtotime($a->created_at))}}</td>
        </tr>
        @endforeach
       

        @else

        <tr>
            <td>2</td>
            <td class="titles"><a class="adtitle" href=''>لا يوجد  بيانات </a> <i class="comment_count">  </i>  </td>
            <td><a href=""></a>لا يوجد  بيانات</td>
            <td><a href=""></a>لا يوجد  بيانات</td>
            <td>لا يوجد  بيانات </td>
        </tr>


        @endif





    </table>
    <div class="numering">
        <ul>
            <li class="selected"><a href="">الصفحة الأولى</a></li>';
            <li class="selected"><a></a></li>
            <li><a href=""></a></li>

        </ul>
    </div>





    
</section>

@stop