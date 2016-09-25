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




<!--inner-->
<div id="inner" class="row down">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 p04">
        <div class="sidbare">
            <form class="form-horizontal  bs-example-control-sizing" name="drop_list" action="{{URL::to('site/searchcars')}}" method="GET">
                <select id="make_id marka" name="make_id"  class="forma section make_id form-control">
                    <option name='make_id' value="">اختر الماركه </option>
                    @foreach($make2 as $make22)
                    <option value="{{$make22->id}}">{{$make22->make_name}}</option>
                    @endforeach

                </select> 
                {{ Form::select('model_id model'  ,  []  ,null,  array('class'=>'forma section model_id form-control' , 'id'=>'model_id'))}}

                <select id="year_id year" name="year_id"  class="forma section year_id form-control">
                    <option name='year_id' value="">اختر سنه الصنع </option>
                    @foreach($years as $year)
                    <option value="{{$year->id}}">{{$year->year_num}}</option>
                    @endforeach

                </select> 

        <!--        <select id="year_id year" name=""  class="forma section year_id form-control">
                    <option name='' value="">من موديل</option>
                    @foreach($years as $year)
                    <option value="{{$year->id}}">{{$year->year_num}}</option>
                    @endforeach

                </select> 

                <select id="year_id year" name=""  class="forma section year_id form-control">
                    <option name='' value="">الي موديل </option>
                    @foreach($years as $year)
                    <option value="{{$year->id}}">{{$year->year_num}}</option>
                    @endforeach

                </select>   -->


                <select name="city" id="city" class="form-control  cities hidden-xs" name="city" >
                    <option value="">  كل المدن</option>
                    @foreach($cityall as $cccx)


                    <option value="{{$cccx->id}}">{{$cccx->city_name}}</option>

                    @endforeach

                </select>
                <button type="submit" class="btn  btn-success form-control  "><i class="fa fa-search"></i> </button>
            </form>
            <hr>
            <form action="#" method="GET" class="visible-xs">

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"><input type="search" class="form-control " placeholder="ابحث عن سلعه ..." name="key"></div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> <button type="submit" class="btn btn-success  "><i class="fa fa-search"></i></button></div>
                </div>
            </form>
            <br class="visible-xs">

            <form action="{{URL::to('site/findads')}}" Method="GET">

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"><input name="id"  type="text" required  type="text" class="form-control " placeholder="ادخل رقم الاعلان"  pattern="[0-9]*"></div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> <button type="submit" class="btn btn-primary ">انتقال</button></div>
                </div>
            </form>
            <hr>
            <!-- tabs -->
            <div class="sky-tabs sky-tabs-pos-top-right sky-tabs-anim-flip sky-tabs-response-to-icons">
                <input type="radio" name="sky-tabs2" checked id="sky-tab1b" class="sky-tab-content-1">
                <label for="sky-tab1b"><span>سيارات</span></label>

                <input type="radio" name="sky-tabs2" id="sky-tab2b" class="sky-tab-content-2">
                <label for="sky-tab2b"><span>سيارات بالصور</span></label>
                <div class="clr"></div>
                <div class="w100"></div>
                <ul>
                    <li class="sky-tab-content-1">
                        <div class="sm_gal">


                            @if(count($m))
                            @foreach($m as $mm)

                            <a class="gallerypic" href="{{URL::to('site/make/'.$mm->id)}}">
                                <img class="car_cont sprite-toyota" title="" src="{{URL::to($mm->image)}}" height="77" width="77" alt="">
                            </a>

                            @endforeach

                            @else


                            @endif

                        </div>
                    </li>
                    <li class="sky-tab-content-2">
                        <div class="sm_gal">

                            @if(count($m))
                            @foreach($m as $mm)

                            <a class="gallerypic" href="{{URL::to('site/make/'.$mm->id)}}">
                                <img class="car_cont sprite-toyota" title="" src="{{URL::to($mm->image)}}" height="77" width="77" alt="">
                            </a>

                            @endforeach

                            @else


                            @endif


                        </div>
                    </li>
                    <div class="clr"></div>
                </ul>
            </div>
            <!--/ tabs -->
            <hr>
            <!-- tabs -->
            <div class="sky-tabs sky-tabs-pos-top-right sky-tabs-anim-flip sky-tabs-response-to-icons">
                <input type="radio" name="sky-tabs3" checked id="sky-tab1c" class="sky-tab-content-4">
                <label for="sky-tab1c"><span>أجهزة</span></label>

                <div class="clr"></div>
                <div class="w100"></div>
                <ul>
                    <li class="sky-tab-content-4">
                        <div class="sm_gal">
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                        </div>
                    </li>
                    <div class="clr"></div>
                </ul>
            </div>
            <!--/ tabs -->
            <!-- tabs -->
            <div class="sky-tabs sky-tabs-pos-top-right sky-tabs-anim-flip sky-tabs-response-to-icons">
                <input type="radio" name="sky-tabs4" checked id="sky-tab1d" class="sky-tab-content-6">
                <label for="sky-tab1d"><span>أقسام أخرى</span></label>

                <div class="clr"></div>
                <div class="w100"></div>
                <ul>
                    <li class="sky-tab-content-6">
                        <div class="sm_gal">
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                            <a class="gallerypic glyph" href="#">
                                <i class="fa fa-apple fa-3x"></i>
                            </a>
                        </div>
                    </li>
                    <div class="clr"></div>
                </ul>
            </div>
            <!--/ tabs -->
        </div>
    </div>




    <div id="inner" class="container">

        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 p04"> 


            <section>







                <ul>


                    @if(count($ads))

                    @foreach($ads as $a)

                    <li class="col-lg-4 col-md-12 col-sm-12 col-xs-12 p04" style="float: right; margin-bottom: 20px;"><a href='{{URL::to('site/adv/'. $a->id)}}'>
                            <?php $img = json_decode($a->image); ?>
                            {{HTML::image('assets/admin/img/tmp/'.$img[0] , null , array('class'=>'img-responsive'))}}
                            <span class='imxad'>{{$a->add_title}}</span>
                        </a></li>



                    @endforeach


                    @else
                    لا يوجد بيانات حاليا 
                    @endif


                </ul>

                {{$ads->links()}}

            </section>
        </div>
    </div>


    @stop