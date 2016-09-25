@extends('site.layout')

@section('title') 
الصور-{{$main->site_title}}
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



        <section>






            <table class="ad-table">
                <tr class="first-row">
                    <td>السيارات المصورة</td>
                </tr>

                <tr style="background-color:#f7f7f7">
                    <td>
                        <ul class="imgtotitle">


                            @if(count($ads))

                            @foreach($ads as $a)

                            <li><a href='{{URL::to('site/adv/'. $a->id)}}'>

                                    <?php $img = json_decode($a->image); ?>
                                    {{HTML::image('assets/admin/img/tmp/'.$img[0])}}

                                    <span class='imxad'>{{$a->add_title}}</span>
                                </a></li>



                            @endforeach
                            @endif


                        </ul>
                    </td>
                </tr>



            </table>


        </section>

    </div>
</div>


@stop