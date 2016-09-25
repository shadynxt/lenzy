@extends('site.layout')

@section('title') 
سلة التسوق-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop


@section('content')

<section id="cart-page" class="down">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>سلة الشراء</h2>

                <table class="table">
                    <tr class="main">
                        <td>صورة المنتج</td>
                        <td>اسم المنتج </td>
                        <td>القسم </td>
                        <td>الكمية </td>
                        <td>السعر </td>
                        <td>حذف </td>
                    </tr>
                    @if(count($products))
                    @foreach($products as $product)
                    <tr>

                        <?php $img = json_decode($product->image); ?>
                        <td class="col-lg-3"><img src="{{URL::to('assets/admin/img/tmp/'.$img[0])}}" /></td>
                        <td class="col-lg-4"><a href="">{{$product->name}}</a>




                            <?php echo mb_substr($product->description, 0, 30, 'utf-8'); ?>

                        </td>
                        <td class="col-lg-2">{{Ads::getSectionName($product->section_id)}}</td>
                        <td class="col-lg-1">{{$product->quantity}}</td>
                        <td class="col-lg-1">{{$product->price}}</td>
                        <td class="col-lg-1">

                            <a href="{{URL::to('site/remov/'. $product->identifier )}}">حذف</a>
                        </td>
                    </tr>

                    @endforeach

                    @else  
                    <tr>
                        <td class="col-lg-2">

                        </td> 



                    </tr>

                    @endif


                </table>


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 Payment">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                        اكمال عمليه الشراء
                    </button>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 total">


                    <button type="button" class="btn btn-info">


                        الاجمالي :<div id="mytotalcash">{{ Cart::total() }} ريال </div>
                    </button>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 total">


                    <button onclick="window.location.href ='{{URL::to('/')}}'"   type="button" class="btn btn-danger">


                        اكمل التسوق<div id="mytotalcash"></div>
                    </button>
                </div>


                <div class="clearfix"></div>
            </div>
            <!-- end of col 12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</section>



<!-- Modal -->
<div  class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">اتمام عملية الدفع</h4>
            </div>
            <div class="modal-body">

                <div class="col-lg-12 infoarea">
                    <form role="form" class="addinfo" action="#">
                        <div class="form-group">

                            <input type="text" readonly="readonly" value="{{Auth::User()->first_name}}" name="first_name" class="form-control"  id="name" placeholder="اسمك الكريم">
                        </div>
                        <div class="form-group">
                            <input type="text"  name="country" value="{{Auth::User()->country}}"   class="form-control"  placeholder="الدولة" id="country" required>
                        </div>

                        <div class="form-group">
                            <input type="text"  name="city" value="{{Auth::User()->city}}"  class="form-control"  placeholder="المدينة" required> 
                        </div>
                        <div class="form-group">
                            <input type="text"  name="state" value="{{Auth::User()->state}}"  class="form-control"  placeholder="الحي" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="street" value="{{Auth::User()->street}}"  class="form-control"  placeholder="الشارع" required>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="telephone" value="{{Auth::User()->telephone}}"  class="form-control"  placeholder="الجوال" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control"  name="desc_info"  placeholder="ملاحظات عند التوصيل" required>{{Auth::User()->desc_info}}</textarea>
                        </div>



                        <button type="submit" class="btn btn-success nextstip">اتمام الشراء</button>
                    </form>


                </div>
                <div id="cartpayments">
                    <div class="col-lg-6"><img src="{{URL::to('assets/site')}}/images/paypal.jpg">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <button class="btn btn-primary" type="submit" > <i class="fa fa-check"></i>الدفع بالبايبال</button>
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="fo2ad.mahmoud-facilitator@gmail.com">
                            <input type="hidden" name="item_name" value="">
                            <input type="hidden" name="item_number" value="">
                            <input type="hidden" name="quantity" value="">
                            <input type="hidden" name="return" value="{{URL::to('paypal/success')}}">
                            <input type="hidden" name="notify_url" value="{{URL::to('paypal/ipn')}}">
                            <?php $total = round(Ads::currency('SAR', 'USD', Cart::total()), 2); ?>

                            <input type="hidden"  name="amount"  value="{{ $total }}" />
                            <input type="hidden"  name="first_name"  value="{{ Auth::user()->first_name}}"/>
                            <input type="hidden"  name="email"  value="{{ Auth::user()->email}}"/>
                        </form>
                    </div>

                    <div class="col-lg-6"><img src="{{URL::to('assets/site')}}/images/estelam.jpg">

                        <a href="{{URL::to('site/paylater')}}" style="padding: 6px 61px !important;" class="btn btn-info"><i class="fa fa-check"></i>الدفع عند الاستلام</a>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">


                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-default pull-left editinfo" >تعديل بيانات</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->





@stop