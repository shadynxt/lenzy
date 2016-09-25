@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
   </h3>
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
                قرائه الرسائل 
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    <div class="form-group">

        <input type="text" name="country_name"  value="{{$r->message_title}}" placeholder="مثال :مصر , السعوديه , الامارات" class="form-control"/>
    </div>
    <div class="form-group">
        <textarea class="form-control" style="height: 150px;">{{$r->message_text}}</textarea>
    </div>





</div>

<a class="btn btn-danger" href="{{URL::to('mess/index')}}">رجوع للوراء</a>


</div>

@stop
