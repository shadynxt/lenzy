@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    تبليغ عن  اعلان  </h3>
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
                الاعلانات المبلغ عنها  
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>''))}}
    <div class="form-group">
        <label class="control-label"> سبب التبليغ   </label>
        
        <div class="form-control">{{$r->report_comment}}</div>
    </div>





</div>

{{ Form::close()}}
</div>

@stop
