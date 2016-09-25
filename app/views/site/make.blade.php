@extends('site.layout')

@section('title') 
السيارات -{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')




<div id="inner" class="row">

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p04"> 

        <section>







            <ul>


                @if(count($ads))

                @foreach($ads as $a)

                <li class="col-lg-4 col-md-12 col-sm-12 col-xs-12 p04" style="float: right;"><a href='{{URL::to('site/adv/'. $a->id)}}'>
                        <?php $img = json_decode($a->image); ?>
                        {{HTML::image('assets/admin/img/tmp/'.$img[0] , null , array('class'=>'img-responsive'))}}
                        <span class='imxad'>{{$a->add_title}}</span>
                    </a></li>



                @endforeach


                @else
                لا يوجد بيانات حاليا 
                @endif


            </ul>



        </section>
    </div>
</div>


@stop