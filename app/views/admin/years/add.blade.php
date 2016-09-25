@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    اضافه قسم جديد </h3>
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
                سنوات الصنع  
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'years/create' , 'files'=>true))}}
    <div class="form-group">
        <label class="control-label">السنه      </label>
        <input type="text" name="year_num" placeholder="مثال : 2015 , 2014 , 2013 " class="form-control"/>
    </div>




    <div class="margiv-top-10">
        {{ Form::submit('اضافه البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
