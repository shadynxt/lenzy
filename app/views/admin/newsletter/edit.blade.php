@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    تعديل  المناسبه </h3>
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
                المناسبه   
            </a>
            <a href="#">
                تعديل  
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'apport/update/'. $a->id , 'files'=>true))}}
    <div class="form-group">
        <label class="control-label">    اسم المؤسس    </label>
        <input type="text" name="apport_name" value="{{$a->apport_name}}" placeholder="مثال : تم بحمد الله " class="form-control"/>
    </div>

    <div class="form-group">

        <div class="col-md-9">
            <textarea id="editor2_error" class="ckeditor form-control" placeholder="مثال :......"  name="apport_desc" rows="6" ata-error-container="#editor2_error">{{$a->apport_desc}}</textarea>
            <script>

                CKEDITOR.replace('apport_desc');
            </script>
        </div>
    </div>





    <div class="margiv-top-10">
        {{ Form::submit('تعديل ' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
