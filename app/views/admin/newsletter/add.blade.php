@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    ارسال رساله     </h3>
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
                الرسائل   
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'letter/create' , 'files'=>true))}}
    <div class="form-group">
        <label class="control-label">    عنوان الرساله </label>
        <input type="text" name="name" required="required" placeholder="مثال : تم بحمد الله " class="form-control"/>
    </div>

    <div class="form-group">

        <div class="col-md-9">
            <textarea  class="ckeditor form-control" required="required" placeholder="مثال :......"  name="desc" rows="6" ata-error-container="#editor2_error"></textarea>
            <script>

                CKEDITOR.replace('desc');
            </script>
        </div>
    </div>





    <div class="margiv-top-10">
        {{ Form::submit('ارسال ' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
