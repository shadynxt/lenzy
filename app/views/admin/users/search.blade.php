@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            <small></small>
            بحث عن مستخدمين  </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li class="btn-group">


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
                <i class="fa fa-angle-left"></i>
            </li>
            <li>
                <a href="#">
                    عرض المستخدمين
                </a>
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>


<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i>جدول عرض المستخدمين
                </div>

            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <a href="{{URL::route('adduser')}}" class="btn green">اضف الان       <i class="fa fa-plus"></i></a>
                    </div>



                </div>
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <div class="form-container" style="float: left; margin: 10px; ">

                    {{  Form::open(array('url'=>'users/search') ,array('class'=>'sidebar-search')) }}

                    <div class="input-box">
                        <a href="javascript:;" class="remove">
                        </a>
                        {{ Form::text('search'  ,null, array('placeholder'=>'ابحث هنا  ...' , 'required'=>'required'))}}
                        {{ Form::submit('بحث ' , array('class'=>'submit'))}}
                    </div>
                    {{ Form::token() }}
                    {{ Form::close() }}
                </div> 

                <br />
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                اسم المستخدم
                            </th>
                            <th>
                                البريد
                            </th>
                            <th>
                                العمر
                            </th>
                            <th>
                                حاله العضو
                            </th>
                            <th>
                                خصائص
                            </th>


                        </tr>
                    </thead>
                    @if(count($u))
                    @foreach($u as $uu)
                    <tbody>
                        <tr>
                            <td>
                                {{$uu->id}}
                            </td>
                            <td>
                                {{ $uu->first_name}}
                            </td>
                            <td>
                                {{ $uu->email}}

                            </td>
                            <td class="center">
                                {{ $uu->age}}
                            </td>


                            <td class="center">
                                @if($uu->active == 1)
                                <span class="label label-sm label-success">
                                    فعال
                                </span>
                                @else

                                <span class="label label-sm label-danger">
                                    موقوف
                                </span>
                                @endif


                            </td>
                            <td>
                                <a href="{{URL::route('edituser' , $uu->id)}}" class="btn default btn-xs purple">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

                                <a onclick="return confirm('هل انت متاكد من الحذف')"  href="{{URL::route('deleteuser' , $uu->id)}}" class="btn default btn-xs black">
                                    <i class="fa fa-trash-o"></i> حذف 
                                </a>
                            </td>

                        </tr>

                    </tbody>
                    @endforeach
                    @else
                    <tbody>
                        <tr>
                            <td>
                                لايوجد بيانات
                            </td>
                            <td>
                                لايوجد بيانات
                            </td>
                            <td>
                                لايوجد بيانات
                            </td>
                            <td class="center">
                                لايوجد بيانات
                            </td>
                            <td class="center">
                                لايوجد بيانات

                            </td>
                            <td>
                                لايوجد بيانات

                            </td>

                        </tr>

                    </tbody>

                    @endif

                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT -->
@stop