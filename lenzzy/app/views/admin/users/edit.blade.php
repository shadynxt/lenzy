@extends('admin.layout')
@section('content')
<!--tab_1_2-->
<div class="tab-pane" id="tab_1_3">
    <div class="row profile-account">
        <div class="col-md-3">
            <ul class="ver-inline-menu tabbable margin-bottom-10">
                <li class="active">
                    <a data-toggle="tab" href="#tab_1-1">
                        <i class="fa fa-cog"></i> تعديل بيانات العضويه
                    </a>
                    <span class="after">
                    </span>
                </li>

                <li>
                    <a data-toggle="tab" href="#tab_3-3">
                        <i class="fa fa-lock"></i> تعديل كلمه السر 
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#tab_4-4">
                        <i class="fa fa-eye"></i> صلاحيات / تنشيط العضويه 
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div id="tab_1-1" class="tab-pane active">
                    {{ Form::open(array('url'=>'users/updatedata/'.$u->id))}}
                    <div class="form-group">
                        <label class="control-label">الاسم الاول</label>
                        <input type="text" name="first_name" value="{{$u->first_name}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">الاسم الاخير </label>
                        <input type="text" name="last_name" value="{{$u->last_name}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">العمر</label>
                        <input type="text" name="age" value="{{$u->age}}"  class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">الهاتف</label>
                        <input type="text" name="telephone"  value="{{$u->telephone}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">البريد الاكتروني</label>
                        <input type="text" name="email" value="{{$u->email}}"  class="form-control"/>
                    </div>


                    <div class="margiv-top-10">
                        {{ Form::submit('تعديل' , array('class'=>'btn green'))}}


                    </div>
                    {{ Form::token() }}
                    {{ Form::close() }}

                </div>

                <div id="tab_3-3" class="tab-pane">
                    {{ Form::open(array('url'=>'users/updatepass/'.$u->id))}}

                    <div class="form-group">
                        <label class="control-label">كلمه السر الجديده </label>
                        {{ Form::password('password',  array('class'=>'form-control') ,$u->password)}}
                    </div>
                    <div class="form-group">
                        <label class="control-label">اعاده كلمه السر</label>
                        {{ Form::password('password_confirmation',  array('class'=>'form-control') ,$u->password)}}
                    </div>
                    <div class="margin-top-10">

                        {{ Form::submit('تعديل كلمه السر' , array('class'=>'btn green'))}}


                    </div>
                    {{ Form::token() }}
                    {{ Form::close() }}
                </div>
                <div id="tab_4-4" class="tab-pane">
                    {{ Form::open(array('url'=>'users/updateactive/'.$u->id))}}

                    <div class="form-group">
                        <label class="control-label">حاله العضو  </label>
                        {{ Form::select('admin', array('0' => 'مدير' , '1' => 'مشرف' , '2' => 'عضويه فضيه ' , '3' => 'عضويه ذهبيه '  ) ,$u->admin, array('class'=>'form-control')) }}
                    </div>
                    <div class="form-group">
                        <label class="control-label">توقيف العضو / تفعيله </label>
                        {{ Form::select('active',  array('1' => 'مفعل' , '0' => 'موقوف') ,$u->active, array('class'=>'form-control')) }}
                    </div>
                    <div class="margin-top-10">

                        {{ Form::submit('تعديل الحاله ' , array('class'=>'btn green'))}}


                    </div>
                    {{ Form::token() }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <!--end col-md-9-->
    </div>
</div>
<!--end tab-pane-->
@stop