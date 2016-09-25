@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    تعديل   المدن     </h3>
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
                المدينه   
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'city/update/' . $u->id ))}}
    <div class="form-group">
        <label class="control-label">اسم المدينه       </label>
        <input type="text" name="city_name" value="{{$u->city_name}}" placeholder="مثال : الرياض , جده , جيزان " class="form-control"/>
    </div>
    <div class="form-group">
        <label class="control-label">اسم الدوله     </label>
        <td>{{ Form::select('country_id', $ss , $u->country_id, array('class'=>'form-control')) }}</td>

    </div>



    <div class="margiv-top-10">
        {{ Form::submit('تعديل  البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
