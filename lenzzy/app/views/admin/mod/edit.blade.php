@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    تعديل  الماركه  جديد </h3>
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
                الماركات  
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'mod/update/' . $u->id ))}}
    <div class="form-group">
        <label class="control-label">اسم الموديل      </label>
        <input type="text" name="mod_name" value="{{$u->mod_name}}" placeholder="مثال : تويوتا , ليكزس , نيسان " class="form-control"/>
    </div>
    <div class="form-group">
        <label class="control-label">صوره الماركه   </label>
        <td>{{ Form::select('make_id', $ss , $u->make_id, array('class'=>'form-control')) }}</td>

    </div>



    <div class="margiv-top-10">
        {{ Form::submit('تعديل  البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
