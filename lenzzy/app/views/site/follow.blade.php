@extends('site.layout')

@section('title') 
قائمه المتابعه-{{$main->site_title}}
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

        <table class="table tableAds table-borderedAds ">
            <tr>
                <th>الماركه</th>
                <th>الموديل</th>
                <th>خصائص</th>
            </tr>


            <!-- favorit normal ads -->
            @foreach(Follow::where('user_id' , '=' , Auth::User()->id)->orderBy('id' , 'desc')->get() as $a2)



            <tr style="background-color:#F8FAC1">
                <td>{{Ads::getMake($a2->make_id)}}  </td>

                <td>{{Ads::getModel($a2->model_id)}}  </td>

                <td><a onclick="return confirm('هل انت متاكد من الحذف ؟');" href="{{URL::to('site/deletef/'.$a2->id)}}">حذف</a> </td>






            </tr>

            @endforeach



        </table>
        <div class="comment">
            <form class="form-inline" name="drop_list" action="{{URL::to('site/postfollow')}}" method="POST">

                <fieldset>
                    <legend>متابعه السيارات</legend>
                    <div class="form-group">
                        <label class="sr-only">أختر ماركة السيارة</label>

                        <select id="make_id marka" required="required" name="make_id"  class="forma section make_id form-control">
                            <option name='make_id' value="">اختر الماركه </option>
                            @foreach($make2 as $make22)
                            <option value="{{$make22->id}}">{{$make22->make_name}}</option>
                            @endforeach

                        </select> 

                    </div>
                    <div class="form-group">
                        <label class="sr-only">أختر نوع السيارة</label>
                        {{ Form::select('model_id'  ,  []  ,null,  array('class'=>'forma section model_id form-control' , 'id'=>'model_id' , 'required'=>'required'))}}


                    </div>
                    <div class="form-group">
                        <label class="sr-only">كل الموديلات</label>
                        <select id="year_id year" required="required" name="year_id"  class="forma section year_id form-control">
                            <option name='year_id' value="">اختر سنه الصنع </option>
                            @foreach($years as $year)
                            <option value="{{$year->id}}">{{$year->year_num}}</option>
                            @endforeach

                        </select> 
                    </div>

                    <div class="form-group">
                        <label class="sr-only">اختر الموديل</label>
                        <select name="city" id="city" required="required" class="form-control  cities hidden-xs" name="city" >
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


    </div>
    <div class="clearfix"></div>
</div>

@stop