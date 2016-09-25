@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            <small></small>
            عرض الموديلات    </h3>
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
                    الموديلات 
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
                    <i class="fa fa-edit"></i>جدول عرض   الموديلات   
                </div>


            </div>


            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <a href="{{URL::route('addmod')}}" class="btn green">اضف موديل           <i class="fa fa-plus"></i></a>
                    </div>



                </div>

                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                الموديل  
                            </th>
                            <th>
                                الماركه  
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
                                {{ $uu->mod_name}}
                            </td>
                            <td>
                                {{ $uu->make_name}}
                            </td>

                            <td>
                                <a href="{{URL::route('editmod' , $uu->id)}}" class="btn default btn-xs purple">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>


                                <a onclick="return confirm('هل انت متاكد من الحذف ؟');" href="{{URL::to('mod/delete/' . $uu->id)}}" class="btn default btn-xs black">
                                    <i class="fa fa-trash-o"></i> حذف
                                </a>



                                <!--  start confirm message -->


                                <!--  end  confirm message -->
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