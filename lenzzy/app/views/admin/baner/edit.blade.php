@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    تعديل  بنر جديد </h3>
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
                البنرات  
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'baner/update/'.$u->id , 'files'=>true))}}
    <div class="form-group">
        <label class="control-label">الاسم    البنر  </label>
        <input type="text" name="baner_name" value="{{$u->baner_name}}" placeholder="مثال : بنر الاعلانات  " class="form-control"/>
    </div>
    <div class="form-group">
        <label class="control-label">رابط     البنر  </label>
        <input type="text" name="baner_link" value="{{$u->baner_link}}" placeholder="مثال : رابط  الاعلانات  " class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label">     نوع البنر   </label>
        {{Form::select('type' , array('1'=>'بنر علوي'  , '2'=>'بنر سفلي') , $u->type , array('class'=>'form-control'))}}
    </div>

    <div class="form-group">
        <label class="control-label">صوره  البنر </label>
        <td>{{ Form::file('image' , null , array('class'=>'form-control')) }}</td>

    </div>
    {{HTML::image($u->image)}}



    <div class="margiv-top-10">
        {{ Form::submit('تعديل  البيانات' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
