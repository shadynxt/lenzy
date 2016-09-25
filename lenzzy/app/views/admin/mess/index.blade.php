@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            <small></small>
            عرض الرسائل   </h3>
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
                    الرسائل 
                </a>
                <i class="fa fa-angle-left"></i>
            </li>
            <li>
                <a href="#">
                    عرض الرسائل
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
                    <i class="fa fa-edit"></i>جدول عرض الرسائل
                </div>

            </div>
            <div class="portlet-body">

                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->


                <br />
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                عنوان الرساله 
                            </th>
                            <th>
                                العضو الراسل
                            </th>
                            <th>
                                العضو المرسل اليه
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
                                {{ $uu->message_title}}
                            </td>
                            <td>
                                {{ Ads::getUser($uu->message_from)}}

                            </td>
                            <td>
                                {{ Ads::getUser($uu->message_to)}}

                            </td>




                            <td>


                                <a  href="{{URL::to('mess/show/' . $uu->id)}}" class="btn default btn-xs purple">
                                    <i class="fa "></i> قرائه
                                </a>
                                <a onclick="return confirm('هل انت متاكد من الحذف ؟');" href="{{URL::to('mess/delete/' . $uu->id)}}" class="btn default btn-xs black">
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