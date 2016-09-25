@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            <small>الطلبات</small>
            طلبات الشراء</h3>
        <ul class="page-breadcrumb breadcrumb">
            <!--  <li class="btn-group">
                  <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                      <span>
                          Actions
                      </span>
                      <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu pull-right" role="menu">
                      <li>
                          <a href="#">
                              Action
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              Another action
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              Something else here
                          </a>
                      </li>
                      <li class="divider">
                      </li>
                      <li>
                          <a href="#">
                              Separated link
                          </a>
                      </li>
                  </ul>
              </li> -->
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">
                    الرئيسية
                </a>
                <i class="fa fa-angle-left"></i>
            </li>
            <li>
                <a href="#">
                    الطلبات
                </a>
                <i class="fa fa-angle-left"></i>
            </li>
            <li>
                <a href="#">
                    المرسله
                </a>
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-shopping-cart"></i>جدول الطلبات
                </div>
                <div class="actions">
                    <!--  <a href="#" class="btn default yellow-stripe">
                          <i class="fa fa-plus"></i>
                          <span class="hidden-480">
                              New Order
                          </span>
                      </a>
                      <div class="btn-group">
                          <a class="btn default yellow-stripe" href="#" data-toggle="dropdown">
                              <i class="fa fa-share"></i>
                              <span class="hidden-480">
                                  Tools
                              </span>
                              <i class="fa fa-angle-down"></i>
                          </a>
                          <ul class="dropdown-menu pull-right">
                              <li>
                                  <a href="#">
                                      Export to Excel
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      Export to CSV
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      Export to XML
                                  </a>
                              </li>
                              <li class="divider">
                              </li>
                              <li>
                                  <a href="#">
                                      Print Invoices
                                  </a>
                              </li>
                          </ul>
                      </div>  -->
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-container">
                    <div class="table-actions-wrapper">
                        <span>
                        </span>
                        <select class="table-group-action-input form-control input-inline input-small input-sm">
                            <option value="">Select...</option>
                            <option value="Cancel">Cancel</option>
                            <option value="Cancel">Hold</option>
                            <option value="Cancel">On Hold</option>
                            <option value="Close">Close</option>
                        </select>
                        <button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="datatable_orders">
                        <thead>
                            <tr role="row" class="heading">
                                <th width="5%">
                                    <input type="checkbox" class="group-checkable">
                                </th>
                                <th width="5%">
                                    &nbsp;#
                                </th>
                                <th width="15%">
                                    تاريخ الشراء
                                </th>
                                <th width="15%">
                                    اسم العميل
                                </th>


                                <th width="10%">
                                    طريقه الدفع
                                </th>
                                <th width="10%">
                                    اجمالي الطلبية
                                </th>

                                <th width="10%">
                                    حالة الطلب
                                </th>
                                <th width="10%">
                                    خيارات
                                </th>
                            </tr>

                            @foreach($orders as $order)
                            <tr role="row" class="filter">
                                <td>
                                </td>
                                <td>
                                    <input type="text" value="{{$order->id}}" class="form-control form-filter input-sm" name="order_id">
                                </td>
                                <td>
                                    <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                        <?php $x = mb_substr($order->created_at, 0, 10); ?>
                                        <input type="text" value="{{$x}}" class="form-control form-filter input-sm" readonly name="order_date_from" placeholder="From">
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>

                                </td>
                                <td>
                                    <input type="text" value="{{Ads::getUser($order->user_id)}}" class="form-control form-filter input-sm" name="order_customer_name">
                                </td>


                                <td>
                                    <input type="text" value="{{$order->type}}" class="form-control form-filter input-sm" name="order_ship_to">
                                </td>
                                <td>
                                    <div class="margin-bottom-5">
                                        <input type="text" value="{{$order->price}}" class="form-control form-filter input-sm" name="order_base_price_from" placeholder="From"/>
                                    </div>
                                </td>

                                <td>
                                    <div class="margin-bottom-5">

                                        @if($order->finish == 0)
                                        <span class="label label-sm label-danger">
                                            في مرحله التسليم
                                        </span>
                                        @else  
                                        <span class="label label-sm label-success">
                                            تم التسليم
                                        </span>
                                        @endif
                                    </div>
                                </td>
                                <td>

                                    <div class="margin-bottom-5">
                                        <button onclick="window.location.href ='{{URL::to('order/show/'. $order->id)}}'" class="btn btn-sm danger filter-submit margin-bottom"><i class="fa fa-edit"></i> التفاصيل</button>
                                    </div>

                                    @if($order->finish == 0)
                                    <div class="margin-bottom-5">
                                        <button onclick="window.location.href ='{{URL::to('order/active/'. $order->id)}}'" class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-edit"></i> تأكيد الوصول</button>
                                    </div>

                                    @else 
                                    <div class="margin-bottom-5">
                                        <button onclick="window.location.href ='{{URL::to('order/disactive/'. $order->id)}}'" class="btn btn-sm danger filter-submit margin-bottom"><i class="fa fa-edit"></i> ارجاع الطلب</button>
                                    </div>


                                    @endif
                                    <button onclick="window.location.href ='{{URL::to('order/delete/'.$order->id)}}'" class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> حذف</button>
                                </td>
                            </tr>

                            @endforeach
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End: life time stats -->
    </div>
</div>
@stop