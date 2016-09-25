@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    اضافه قسم فرعي </h3>
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
                الاقسام 
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'subsection/create'))}}
    <div class="form-group">
        <label class="control-label">الاسم   القسم </label>
        <input type="text" name="subsection_name" placeholder="مثال : فقة , طهاره , اسلاميات , نصائح للشبابا و البنات  " class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label">     القسم الرئيسي   </label>
        {{Form::select('section_id' , $section , null , array('class'=>'form-control'))}}
    </div>



    <div class="margiv-top-10">
        {{ Form::submit('اضافه البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
