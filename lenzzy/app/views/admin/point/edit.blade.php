@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    مشاهده النموذج  </h3>
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
                النموذج 
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
    {{ Form::open(array('url'=>'point/update/' . $u->user_id))}}
    <div class="form-group">
        <label class="control-label"> اسم المرسل    </label>
        <input type="text" name="user_name" value="{{$u->user_name}}"  class="form-control"/>
    </div>
    <div class="form-group">
        <label class="control-label"> المبلغ    </label>
        <input type="text" name="money" value="{{$u->money}}"  class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label"> البنك    </label>
        <input type="text" name="bank" value="{{$u->bank}}"  class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label"> اسم المحول    </label>
        <input type="text" name="transfer_name" value="{{$u->transfer_name}}"  class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label"> البريد الالكتروني</label>
        <input type="text" name="email" value="{{$u->email}}"  class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label"> رقم الاعلان</label>
        <input type="text" name="ad_num" value="{{$u->ad_num}}"  class="form-control"/>
    </div>

    <div class="form-group">
        <label class="control-label"> رساله</label>

        <textarea name="point_desc" class="form-control" style="height: 200px;">{{$u->point_desc}}</textarea>
    </div>




    <div class="margiv-top-10">
        {{ Form::submit('اعتماد النموذج و اضافه الرصيد' , array('class'=>'btn green'))}}

    </div>
</div>

{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
