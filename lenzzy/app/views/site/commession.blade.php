@extends('site.layout')
@section('title') 
عمولة الموقع-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')



<div id="inner" class="container">

    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 p04"> 
        <div class="section_section" >
            <div class="comm_text">

                <span>عمولة حراج</span> 
                كما هو مذكور في معاهدة استخدام الموقع، فإن الموقع يحصل على عمولة قدرها 0.5% من سعر السلعة المباعة عن طريق الموقع و يدفعها المعلن، وهي أمانه في ذمته. وإن كانت هذه العملية كبيرة كالعقارات، وبها أكثر من وسيط، فإن الموقع يكون أحد الوسطاء، ويتقاسم العمولة معهم. ويعتبر هذا الشرط اتفاقاً ملزماً، يحق بموجبه للموقع المطالبة بهذه العمولة.إن كانت قيمة العمولة أقل من 20 ريال سعودي ، فيمكن التصدق بها عن الموقع. 
                <br />
                <span style="color:red;">ملاحظات:</span>
                <ul>
                    <li>
                        سيارات الإيجار المعروضه للتنازل تكون عمولتها حسب القيمة المدفوعه خلال الاتفاق. مثلا لو اراد شخص التنازل عن سيارته وباقي عليها 20 قسط واتفق مع شخص ان يتنازل عنها له بمبلغ 10 الف ريال فأن عمولة الموقع هي 100 ريال. اذا كان التنازل مجانيا فأن العموله أيضا مجانيه.
                    </li>

                    <li>
                        بالنسبة للسيارات المتبادلة عن طريق الموقع، اذا كان المبادله رأس برأس فالعمولة تعتبر مجانية، وإذا كان هناك مبلغ مدفوع خلال المبادله فان العموله هي على المبلغ المدفوع فقط. مثلا لو اتفق شخصين على مبادلة سياره بسياره أخرى مع دفع 10 الف ريال كزيادة فان العمولة هي 100 ريال فقط يدفعها المعلن.
                    </li>

                    <li>
                        بالنسبه للعمولة على الطلبات: اذا وجد صاحب الاعلان عن الطلب سلعته عن طريق الموقع ولم يسبق لصاحب السلعه الإعلان عنها في الموقع من قبل فأن العمولة هي 1% على صاحب الطلب . اذا كانت السلعه قد سبق الإعلان عنها في الموقع فأن العمولة هي على صاحب السلعه.
                    </li>
                </ul>
                <br />
                <span>حساب العمولة : </span> 
                <strong>
                    حساب قيمة العمولة:
                </strong>
                إذا تم بيع السلعة بسعر
                <input type="text" class="saleval" value="" placeholder="0" size="5" />
                ريال فأن العمولة هي:
                <input type="text" class="commval" value="" placeholder="0" size="5" />
                ريال

                <br />

                <span>دفع العموله</span>
                يمكنك استخدام التحويل البنكي لدفع العموله عن طريق إرسال حواله إلى حساباتنا في البنوك المحليه.
                <span>الحسابات البنكيه</span>
               
                <table class="table tableAds table-borderedAds ">
                    <tr>

                        <th>اسم البنك</th>
                        <th>رقم الحساب</th>
                        <th>الايبان</th>
                        <th>الصوره</th>
                    </tr>


                    <!-- favorit normal ads -->
                    @foreach(Bank::all() as $a2)



                    <tr style="background-color:#F8FAC1">




                        <td class="titles"><a class="adtitle" >
                                {{$a2->bank_name}}</a>


                        </td>


                        <td><a style="margin-right: 130px;" href="#" class="smallsize"> {{$a2->bank_num}}</a> </td>
                        <td><a href="#" class="smallsize"> {{$a2->bank_ipan}}</a> </td>


                        <td>{{HTML::image($a2->image , null , array('height'=>'80' , 'width'=>'180'))}}</td>
                    </tr>

                    @endforeach



                </table>

                <br />
                <hr />
                <br />
                <span>مراسلتنا</span>


                @if(Auth::check())
                بعد إرسال المبلغ،يجب مراسلتنا عبر النموذج التالي:

                </p>

                <div class="block">

                    <h2 class="block-head">نموذج المراسله</h2>
                    <div class="block-content">
                        <form action="{{URL::to('site/sendcomm')}}" method="post" name="postform" enctype="multipart/form-data">
                            <table width="100%" cellspacing="1" class="tablebg">
                                <tbody>
                                    <tr>
                                <input class="post form-control"  type="hidden" name="user_id"  value="{{Auth::User()->id}}" required="required">

                                <td class="row1" width="25%"><b class="genmed">أسم المستخدم</b></td><td class="row2" align="right"> <input class="post form-control"  type="text" name="user_name"  value="{{Auth::User()->first_name}}" required="required"></td>
                                </tr>	
                                <tr>

                                    <td class="row1" width="25%"><b class="genmed">مبلغ العمولة</b></td><td class="row2" align="right"> <input class="post form-control"  type="text" name="money"  value="" required="required"></td>
                                </tr>	
                                <tr>

                                    <td class="row1" width="25%"><b class="genmed">اسم البنك</b></td><td class="row2" align="right"> <input class="post form-control"  type="text" name="bank"  value="" required="required"></td>

                                </tr>
                                <tr>

                                    <td class="row1" width="25%"><b class="genmed">أسم المحول</b></td><td class="row2" align="right"> <input class="post form-control"  type="text" name="transfer_name"  value="" required="required"></td>
                                </tr>
                                <tr>

                                    <td class="row1" width="25%"><b class="genmed">البريد الإلكتروني</b></td><td class="row2" align="right"> <input  class="post form-control"  type="text" name="email"   tabindex="2" value="" required="required"></td>
                                </tr>
                                <tr>

                                    <td class="row1" width="25%"><b class="genmed">رقم الإعلان</b></td><td class="row2" align="right"> <input class="post form-control" required="required"  type="text" name="ad_num"  tabindex="2" value=""> <i style="color:red">نرجو حذف الإعلان بعد الإنتهاء منه.
                                        </i>
                                </tr>


                                <tr>

                                    <td class="row1" valign="top"><b class="genmed">ملاحظات</b><br></td>

                                    <td class="row2" align="right"> 
                                        <textarea name="point_desc" cols="5" rows="5" id="message" class="form-control" required="required"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="row4" colspan="2" align="center">&nbsp;
                                        <input class="the_submit btn btn-danger" name="submit" type="submit" value="إرســـال">      </td></tr>
                                </tbody></table>
                        </form>
                    </div><!-- End Block Content -->
                </div><!-- end block -->
                @else  
                <div class="alert alert-info">
                    يجب عليك تسجيل الدخول حتى تتمكن من رؤيه نموذج العموله.
                </div>
                @endif
            </div>

        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.saleval').keyup(function () {
                    var value = $('.saleval').val();
                    var calc = (value * 0.5) / 100;
                    $('.commval').val(calc);
                });
            });
        </script>

    </div>

</div>

@stop