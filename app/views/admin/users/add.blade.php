@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    اضافه مستخدم جديد</h3>
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
                المستخدمين
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>


<div id="tab_1-1" class="tab-pane active">
        {{ Form::open(array('url'=>'create'))}}
        <div class="form-group">
            <label class="control-label">الاسم الاول</label>
            <input type="text" name="first_name" placeholder="مثال : فهد" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">الاسم الاخير</label>
            <input type="text" name="last_name" placeholder="مثال : العنزي" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">العمر</label>
            <input type="text" name="age" placeholder="مثال : 25 " class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">الهاتف</label>
            <input type="text" name="telephone" placeholder="مثال : 0551896251" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">البريد </label>
            <input type="email" name="email" placeholder="مثال : haraj@haraj.com" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">حاله  العضو</label>
            {{ Form::select('admin',  array('0' => 'مدير' , '1' => 'مشرف' , '2' => 'عضويه فضيه ' , '3' => 'عضويه ذهبيه '  ) ,null, array('class'=>'form-control')) }}
        </div>
</div>
<div class="form-group">
    <label class="control-label">كلمه السر </label>
    {{ Form::password('password' , array('class'=>'form-control')) }}
</div>
<div class="form-group">
    <label class="control-label">اعاده كلمه السر </label>
    {{ Form::password('password_confirmation' , array('class'=>'form-control')) }}
</div>

<div class="margiv-top-10">
    {{ Form::submit('اضافه البيانات' , array('class'=>'btn green'))}}

</div>
{{ Form::token() }}
{{ Form::close()}}
</div>

@stop
