@extends('admin.layout')
@section('content')
<!--tab_1_2-->
<div class="tab-pane" id="tab_1_3">
    <div class="row profile-account">
        <div class="col-md-3">
            <ul class="ver-inline-menu tabbable margin-bottom-10">
                <li class="active">
                    <a data-toggle="tab" href="#tab_1-1">
                        <i class="fa fa-cog"></i> تفاصيل الطلبية
                    </a>
                    <span class="after">
                    </span>
                </li>

                <li>
                    <a data-toggle="tab" href="#tab_3-3">
                        <i class="fa fa-cog"></i> المنتجات المطلوبة
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#tab_4-4">
                        <i class="fa fa-eye"></i> معلومات التوصيل
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div id="tab_1-1" class="tab-pane active">
                    {{ Form::open(array('url'=>'users/updatedata/'))}}
                    <div class="form-group">
                        <label class="control-label">تاريخ الطلبية</label>
                        <?php $x = mb_substr($order->created_at, 0, 10); ?>
                        <input type="text" readonly="readonly" name="first_name" value="{{$x}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">اسم العميل </label>
                        <input type="text" readonly="readonly" name="last_name" value="{{Ads::getUser($order->user_id)}}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">طريقة الدفع</label>
                        <input type="text"  readonly="readonly" name="age" value="{{$order->type}}"  class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">اجمالي الطلبية</label>
                        <input type="text" readonly="readonly" name="telephone"  value="{{$order->price}}" class="form-control"/>
                    </div>

                    @if($order->finish == 0)
                    <div class="form-group">
                        <label class="control-label">حالة الطلبية</label>
                        <input type="text" readonly="readonly" name="email" value="في مرحلة التسليم"  class="form-control"/>
                    </div>
                    @else  
                    <div class="form-group">
                        <label class="control-label">حالة الطلبية</label>
                        <input type="text" readonly="readonly" name="email" value="تم التسليم"  class="form-control"/>
                    </div>
                    @endif



                    <!--   <div class="margiv-top-10">
                           {{ Form::submit('تعديل' , array('class'=>'btn green'))}}
   
   
                       </div>  -->
                    {{ Form::token() }}
                    {{ Form::close() }}

                </div>

                <div id="tab_3-3" class="tab-pane">
                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    اسم المنتج 
                                </th>
                                <th>
                                    السعر 
                                </th>
                                <th>
                                    الكمية 
                                </th>




                            </tr>
                        </thead>
                        @if(count($u))
                        @foreach($u as $uu)
                        <tbody>
                            <tr>
                                <td>
                                    {{$uu->ads_id}}
                                </td>
                                <td>

                                    {{Ads::getAddtitle($uu->ads_id)}}

                                </td>
                                <td>
                                    {{Ads::getAddprice($uu->ads_id)}}

                                </td>

                                <td>
                                    {{$uu->quantity}}

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
                <div id="tab_4-4" class="tab-pane">
                    <?php $userinfo = User::where('id', '=', $order->user_id)->first(); ?>

                    <div class="form-group">
                        <label class="control-label">اسم العضو </label>
                        <input type="text" readonly="readonly" name="last_name" value="{{$userinfo->first_name}}" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">الدولة </label>
                        <input type="text" readonly="readonly" name="last_name" value="{{$userinfo->country}}" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">المدينة </label>
                        <input type="text" readonly="readonly" name="last_name" value="{{$userinfo->city}}" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">الحي </label>
                        <input type="text" readonly="readonly" name="last_name" value="{{$userinfo->state}}" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">الشارع </label>
                        <input type="text" readonly="readonly" name="last_name" value="{{$userinfo->street}}" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">رقم الجوال </label>
                        <input type="text" readonly="readonly" name="last_name" value="{{$userinfo->telephone}}" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">تفاصيل اضافية </label>
                        <textarea readonly="readonly" class="form-control">{{$userinfo->desc_info}}</textarea>
                    </div>

                </div>
            </div>
        </div>
        <!--end col-md-9-->
    </div>
</div>
<!--end tab-pane-->
@stop