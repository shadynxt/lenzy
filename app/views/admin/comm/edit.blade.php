@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    تعديل  دوله  </h3>
<div class="col-md-12">

    <ul class="page-breadcrumb breadcrumb">
        <li class="btn-group">

            <ul class="dropdown-menu pull-right" role="menu">


                <li class="divider">
                </li>

            </ul>
        </li>
        <li>
            <i class="fa fa-home"></i>
            <a href="#">
                الرئيسيه
            </a>
            <i class="fa fa-angle-left"></i>
        </li>
        <li>
            <a href="#">
                دوله 
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'country/update/' . $u->id))}}
    <div class="form-group">
        <label class="control-label"> الدوله    </label>
        <input type="text" name="country_name" value="{{$u->country_name}}" placeholder="مثال :مصر , السعوديه , الامارات " class="form-control"/>
    </div>




    <div class="margiv-top-10">
        {{ Form::submit('تعديل  البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
