@extends('site.layout')

@section('title') 
البحث المتقدم -{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')



<div id="inner" class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="comment">
            <form class="form-inline" name="drop_list" action="{{URL::to('site/searchcars')}}" method="GET">

                <fieldset>
                    <legend>بحث السيارات</legend>
                    <div class="form-group">
                        <label class="sr-only">أختر ماركة السيارة</label>

                        <select id="make_id marka" name="make_id"  class="forma section make_id form-control">
                            <option name='make_id' value="">اختر الماركه </option>
                            @foreach($make2 as $make22)
                            <option value="{{$make22->id}}">{{$make22->make_name}}</option>
                            @endforeach

                        </select> 

                    </div>
                    <div class="form-group">
                        <label class="sr-only">أختر نوع السيارة</label>
                        {{ Form::select('model_id model'  ,  []  ,null,  array('class'=>'forma section model_id form-control' , 'id'=>'model_id'))}}


                    </div>
                    <div class="form-group">
                        <label class="sr-only">كل الموديلات</label>
                        <select id="year_id year" name="year_id"  class="forma section year_id form-control">
                            <option name='year_id' value="">اختر سنه الصنع </option>
                            @foreach($years as $year)
                            <option value="{{$year->id}}">{{$year->year_num}}</option>
                            @endforeach

                        </select> 
                    </div>

                    <div class="form-group">
                        <label class="sr-only">اختر الموديل</label>
                        <select name="city" id="city" class="form-control  cities hidden-xs" name="city" >
                            <option value="">  كل المدن</option>
                            @foreach($cityall as $cccx)


                            <option value="{{$cccx->id}}">{{$cccx->city_name}}</option>

                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class=" btn  btn-success" name="submit"><i class="fa fa-search"></i></button> 
                </fieldset>
            </form>	
        </div>
        <hr>
        <div class="comment">

            <form action="{{URL::to('site/aqarsearch')}}" method="post" name="aqar_form" class="form-inline">
                <div class="form-group">
                    <legend>بحث العقار</legend>
                    بحث عن:
                    <div class="form-group">
                        {{ Form::select('aqar_type'  ,  array(''=>'نوع العقار' ,'1'=>'ارض للبيع' , '2'=>'شقه للايجار ' ,'3'=>'شقه للبيع' ,'4'=>'فيلا للبيع ' ,'5'=>'فيلا للايجار' ,'6'=>'عماره للايجار' ,'7'=>'محل للتقبيل' ,'8'=>'محل للايجار','9'=>'مزرعه للبيع','10'=>'استراحه للايجار','11'=>'استراحه للبيع ','12'=>'بيت للبيع ','13'=>'بيت للايجار','14'=>'دور للايجار'  )  ,null,  array('class'=>'xyears form-control'))}}
                    </div>


                    في مدينة:
                    <div class="form-group">
                        {{ Form::select('city_type'  , $cit  ,null,  array('class'=>'xyears form-control'))}}
                    </div>
                    <div class="form-group">

                        <label class="sr-only">بحث عن</label> 

                        <button type="submit" class=" btn  btn-success" name="submit"><i class="fa fa-search"></i></button> 
                    </div>
                </div>
            </form>

        </div>
        <hr>
        <div class="comment">
            <form action="{{URL::to('site/searchads')}}" method="GET" class="form-inline " role="form">

                <legend>بحث في الأقسام</legend>
                <div class="form-group">
                    <input type="text" name="key" class="typeahead form-control " dir="rtl" placeholder="ابحث عن سلعه ..." id="autocomplete" autocomplete="off">
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                    <select name="city" id="city" class="form-control  cities hidden-xs" name="city" style="width:150px">
                        <option value="">  كل المدن</option>
                        @foreach($cityall as $cccx)


                        <option value="{{$cccx->id}}">{{$cccx->city_name}}</option>

                        @endforeach

                    </select>
                </div>
                <button type="submit" class=" btn  btn-success"><i class="fa fa-search"></i></button> 
            </form>							   
        </div>
        <hr>
        <div class="comment">
            <legend>بحث برقم اعلان</legend>

            <form action="{{URL::to('site/findads')}}" Method="GET" name="user_form" class="form-inline">

                <div class="row">
                    <div ><input name="id"  type="text" required  type="text" class="form-control col-lg-3 " placeholder="ادخل رقم الاعلان"  pattern="[0-9]*"></div>
                    <button type="submit" class=" btn  btn-success"><i class="fa fa-search"></i></button> 
                </div>
            </form>

        </div>
    </div>
    <div class="clearfix"></div>
</div>

@stop