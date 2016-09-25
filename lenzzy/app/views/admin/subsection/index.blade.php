@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            <small></small>
            عرض   الاقسام  </h3>
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
                    الاقسام 
                </a>
                <i class="fa fa-angle-left"></i>
            </li>
            <li>
                <a href="#">
                    عرض  الاقسام 
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
                    <i class="fa fa-edit"></i>جدول عرض  الاقسام 
                </div>


            </div>


            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <a href="{{URL::to('subsection/add')}}" class="btn green">اضف قسم         <i class="fa fa-plus"></i></a>
                    </div>



                </div>

                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                اسم القسم الفرعي 
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
                                {{ $uu->subsection_name}}
                            </td>
     

                            <td>
                                <a href="{{URL::to('subsection/edit/' . $uu->id)}}" class="btn default btn-xs purple">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

            
                                <a onclick="return confirm('هل انت متاكد من الحذف ؟');" href="{{URL::to('subsection/delete/' . $uu->id)}}" role="button" class="btn default btn-xs black" data-toggle="modal">
                                    <i class="fa fa-trash-o"></i> حذف 
                                </a>

       
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