@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    اضافه   </h3>
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
                البنك  
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'bank/create' , 'files'=>true))}}
    <div class="form-group">
        <label class="control-label">الاسم    البنك  </label>
        <input type="text" name="bank_name" placeholder="مثال : الاهلي , الراجحي   " class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label">رقم الحساب</label>
        <input type="text" name="bank_num" placeholder="مثال :586665565656686   " class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label">الايبان </label>
        <input type="text" name="bank_ipan" placeholder="مثال :RHJ 58665   " class="form-control"/>
    </div>



    <div class="form-group">
        <label class="control-label">صوره  البنك </label>
        <td>{{ Form::file('image' , null , array('class'=>'form-control')) }}</td>

    </div>



    <div class="margiv-top-10">
        {{ Form::submit('اضافه البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
