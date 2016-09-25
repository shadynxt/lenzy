@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            <small></small>
            عرض التعليقات  </h3>
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
                    التعليقات
                </a>
                <i class="fa fa-angle-left"></i>
            </li>
            <li>
                <a href="#">
                    عرض التعليقات
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
                    <i class="fa fa-edit"></i>جدول عرض الاعلانات
                </div>

            </div>
            <div class="portlet-body">

                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <div class="form-container" style="float: left; margin: 10px; ">

                    {{  Form::open(array('url'=>'comment/searchcomm') ,array('class'=>'sidebar-search')) }}

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
                                عنوان التعليق 
                            </th>
                            <th>
                                العضو
                            </th>
                            <th>
                                رقم العضو
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
                                {{ $uu->comment_text}}
                            </td>
                            <td>
                                {{ Ads::getUser($uu->comment_user_id)}}

                            </td>
                            <td>
                                {{$uu->comment_user_id}}

                            </td>




                            <td>
                         


                                <a onclick="return confirm('هل انت متاكد من الحذف ؟');" href="{{URL::to('comm/delete/' . $uu->id)}}" class="btn default btn-xs black">
                                    <i class="fa fa-trash-o"></i> حذف
                                </a>

                                <!--  start confirm message -->
                                <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">انتبه</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    هل انت متاكد من الحذف 
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">تراجع</button>
                                                <a href="{{URL::route('deletecomm' , $uu->id)}}" class="btn blue">تاكيد  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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