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
    {{ Form::open(array('url'=>'make/update/' . $u->id , 'files'=>true))}}
    <div class="form-group">
        <label class="control-label">اسم الماركه     </label>
        <input type="text" name="make_name" value="{{$u->make_name}}" placeholder="مثال : تويوتا , ليكزس , نيسان " class="form-control"/>
    </div>
    <div class="form-group">
        <label class="control-label">صوره الماركه   </label>
        <td>{{ Form::file('image' , null , array('class'=>'form-control')) }}</td>

    </div>
    <div class="form-group" style="text-align: center;">

        {{ HTML::image($u->image , null , array('height'=>50 , 'width'=>'50'))}}
    </div>


    <div class="margiv-top-10">
        {{ Form::submit('تعديل  البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
