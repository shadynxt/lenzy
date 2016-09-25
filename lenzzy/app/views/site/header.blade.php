<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <link rel="icon" href="images/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{URL::to('assets/site/css/sky-tabs.css')}}">
        <link href="{{URL::to('assets/site/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::to('assets/site/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::to('assets/site/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::to('assets/site/js/jquery-2.1.3.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::to('assets/site/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::to('assets/site/js/modernizr.custom.60228.js')}}" type="text/javascript"></script>
        <script src="{{URL::to('assets/site/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::to('assets/site/js/code.js')}}" type="text/javascript"></script>

        {{ HTML::script('assets/site/js/message.js')}}
        {{ HTML::style('assets/site/style/message.css')}}
        <!--   end  for message alert  -->
        <!--   start for asstes for google map -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=ar"></script>
        {{ HTML::script('assets/site/js/jquery-gmaps-latlon-picker.js')}}
        {{ HTML::style('assets/site/style/jquery-gmaps-latlon-picker.css')}}
        <!--  end of google map assets -->


    <input name="base_url" id="base_url" hidden="" value="{{URL::to('')}}"/>
    <!--   start for youtube runner   -->
    {{ HTML::script('assets/site/js/nanobar.js')}}
    <script>
var nanobar = new Nanobar();
nanobar.go(100);
    </script>
    <!--   end for youtube runner   -->


    <script src="https://1ae10066b8bfbc853929cebd61dffaae1e776e06.googledrive.com/host/0B-RplPQkPZYmZE9EQTN0NThwTUU"></script>



    <script type="text/javascript">
$(document).ready(function () {


    $('.make_id').on('change', function () {

        $.ajax({
            url: "{{URL::to('site/modajax')}}",
            type: "POST",
            data: {make_id: $(this).val()},
            dataType: "json"

        }).done(function (data) {

            $('.model_id').html('');

            $('.model_id').append('<option value="">اختر  الموديل     </option>');
            for (i = 0; i < data.length; i++) {

                $('.model_id').append('<option value="' + data[i].id + '">' + data[i].mod_name + '</option>');
            }
        }).fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });
    $('.make_idd').on('change', function () {

        $.ajax({
            url: "{{URL::to('site/modajax')}}",
            type: "POST",
            data: {make_id: $(this).val()},
            dataType: "json"

        }).done(function (data) {

            $('.model_idd').html('');

            $('.model_idd').append('<option value="">اختر  الموديل     </option>');
            for (i = 0; i < data.length; i++) {

                $('.model_idd').append('<option value="' + data[i].id + '">' + data[i].mod_name + '</option>');
            }
        }).fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });




});
    </script>
    <script type="text/javascript">
        $(document).ready(function () {


            $('.section_id').on('change', function () {
                $.ajax({
                    url: "{{URL::to('site/modajax2')}}",
                    type: "POST",
                    data: {section_id: $(this).val()},
                    dataType: "json"

                }).done(function (data) {

                    $('.subsection_id').html('');
                    $('.subsection_id').append('<option value="">اختر  القسم الفرعي     </option>');
                    for (i = 0; i < data.length; i++) {

                        $('.subsection_id').append('<option value="' + data[i].id + '">' + data[i].subsection_name + '</option>');
                    }
                }).fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                });
            });
        });</script>

    <script type="text/javascript">
        $().ready(function () {


            var value = $('#section_id').val();
//                        $('.aqar').hide();
            if (value == 1) {
                $('.company').show();
            } else {
                $('.company').hide();
            }
            if (value == 2) {
                $('.aqar').show();
            } else {
                $('.aqar').hide();
            }
            $('#section_id').change(function () {
                var value = $('#section_id').val();
                if (value == 1) {
                    $('.company').show();
                } else {
                    $('.company').hide();
                }
                if (value == 2) {
                    $('.aqar').show();
                } else {
                    $('.aqar').hide();
                }
            });

            //$('.company').hide();



            $('.thetags').focus(function () {
                $('.tags').html('مثال ( كامري  كورولا  ماكسيما  ألتيما بي_ام_دبليو )');
            });
            $('.thetags').blur(function () {
                $('.tags').html('');
            });
            $('.cotact').focus(function () {
                $('.tags2').html('مثال ( 0555555555)');
            });
            $('.cotact').blur(function () {
                $('.tags2').html('');
            });
            $('.google').focus(function () {
                $('.tag_google').html('مثال ( اختيارك للموقع يتيح لمشتري مرونه اكتر في عمليه الشراء)');
            });
            $('.google').blur(function () {
                $('.tag_google').html('');
            });
            $('.title').focus(function () {
                $('.tag_title').html('مثال ( تحديد نوع الاعلان بدقه يؤدي الي بيع منتجك بسرعه و ظهوره في البحث بشكل سليم)');
            });
            $('.title').blur(function () {
                $('.tag_title').html('');
            });



        })


    </script>

    <script type="text/javascript">var switchTo5x = true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "5cf5fd56-9dd0-4c81-83e1-72b7fe444674", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '435825746596526',
            xfbml: true,
            version: 'v2.3'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<body>

    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="comment">
                        <form action="#" method="post" name="drop_list" class="form-inline">
                            <fieldset>
                                <legend>بحث السيارات</legend>
                                <div class="form-group">
                                    <label class="sr-only">أختر ماركة السيارة</label>
                                    <select class="form-control" name="city" id="marka">
                                        <option value="marka">أختر ماركة السيارة</option>
                                        <option value="تويوتا">تويوتا</option>
                                        <option value="شيفروليه">شيفروليه</option>
                                        <option value="نيسان">نيسان</option>
                                        <option value="فورد">فورد</option>
                                        <option value="مرسيدس">مرسيدس</option>
                                        <option value="جي ام سي">جي ام سي</option>
                                        <option value="بي ام دبليو">بي ام دبليو</option>
                                        <option value="لكزس">لكزس</option>
                                        <option value="جيب">جيب</option>
                                        <option value="هونداي">هونداي</option>
                                        <option value="هوندا">هوندا</option>
                                        <option value="همر">همر</option>
                                        <option value="انفنيتي">انفنيتي</option>
                                        <option value="لاند روفر">لاند روفر</option>
                                        <option value="مازدا">مازدا</option>
                                        <option value="ميركوري">ميركوري</option>
                                        <option value="فولكس واجن">فولكس واجن</option>
                                        <option value="ميتسوبيشي">ميتسوبيشي</option>
                                        <option value="لنكولن">لنكولن</option>
                                        <option value="اوبل">اوبل</option>
                                        <option value="ايسوزو">ايسوزو</option>
                                        <option value="بورش">بورش</option>
                                        <option value="كيا">كيا</option>
                                        <option value="مازيراتي">مازيراتي</option>
                                        <option value="بنتلي">بنتلي</option>
                                        <option value="استون مارتن">استون مارتن</option>
                                        <option value="كاديلاك">كاديلاك</option>
                                        <option value="كرايزلر">كرايزلر</option>
                                        <option value="سيتروين">سيتروين</option>
                                        <option value="دايو">دايو</option>
                                        <option value="ديهاتسو">ديهاتسو</option>
                                        <option value="دودج">دودج</option>
                                        <option value="فيراري">فيراري</option>
                                        <option value="فيات">فيات</option>
                                        <option value="جاكوار">جاكوار</option>
                                        <option value="لامبورجيني">لامبورجيني</option>
                                        <option value="رولز رويس">رولز رويس</option>
                                        <option value="بيجو">بيجو</option>
                                        <option value="سوبارو">سوبارو</option>
                                        <option value="سوزوكي">سوزوكي</option>
                                        <option value="فولفو">فولفو</option>
                                        <option value="سكودا">سكودا</option>
                                        <option value="اودي">اودي</option>
                                        <option value="رينو">رينو</option>
                                        <option value="بيوك">بيوك</option>
                                        <option value="ساب">ساب</option>
                                        <option value="سيات">سيات</option>
                                        <option value="MG">MG</option>
                                        <option value="بروتون">بروتون</option>
                                        <option value="سانج يونج">سانج يونج</option>
                                        <option value="تشيري">تشيري</option>
                                        <option value="جيلي">جيلي</option>
                                        <option value="ZXAUTO">ZXAUTO</option>
                                        <option value="دبابات">دبابات</option>
                                        <option value="قطع غيار وملحقات">قطع غيار وملحقات</option>
                                        <option value="شاحنات ومعدات ثقيلة">شاحنات ومعدات ثقيلة</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">أختر نوع السيارة</label>
                                    <select id="model" name="subcity" class="form-control">
                                        <option value="">أختر نوع السيارة</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">كل الموديلات</label>
                                    <select name="startmodel" class="form-control " id="startmodel">
                                        <option value="">من موديل</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option></select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">كل الموديلات</label>
                                    <select name="endmodel" class="form-control " id="endmodel">
                                        <option value="">إلى موديل</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">اختر الموديل</label>
                                    <select name="cities" class="cities form-control">
                                        <option selected="selected" value="">كل المدن</option>
                                    </select> 
                                </div>
                                <button type="submit" class=" btn  btn-success" name="submit"><i class="fa fa-search"></i></button> 
                            </fieldset>
                        </form> 
                    </div>
                    <hr>
                    <div class="comment">
                        <form action="#" method="post" name="aqar_form" class="form-inline">
                            <legend>بحث العقار</legend>
                            <div class="form-group">
                                بحث عن:
                                <label class="sr-only">بحث عن</label>
                                <select name="aqar_type" class="form-control">
                                    <option selected="selected" value="اراضي للبيع
                                            ">اراضي للبيع
                                    </option>
                                    <option value="اراضي تجارية للبيع">اراضي تجارية للبيع
                                    </option>
                                    <option value="شقق للايجار">شقق للايجار
                                    </option>
                                    <option value="شقق للبيع">شقق للبيع
                                    </option>
                                    <option value="فلل للبيع">فلل للبيع
                                    </option>
                                    <option value="فلل للايجار">فلل للايجار
                                    </option>
                                    <option value="عماره للايجار">عماره للايجار
                                    </option>
                                    <option value="محلات للتقبيل">محلات للتقبيل
                                    </option>
                                    <option value="محلات للايجار">محلات للايجار
                                    </option>
                                    <option value="مزارع للبيع">مزارع للبيع
                                    </option>
                                    <option value="استراحات للبيع">استراحات للبيع
                                    </option>
                                    <option value="استراحات للايجار">استراحات للايجار
                                    </option>
                                    <option value="بيوت للبيع">بيوت للبيع
                                    </option>
                                    <option value="بيوت للايجار">بيوت للايجار
                                    </option>
                                    <option value="ادوار للايجار">ادوار للايجار
                                    </option>
                                </select>
                            </div>


                            <div class="form-group">

                                في مدينة:
                                <label class="sr-only">في مدينة:</label>

                                <select name="aqar_city" class="form-control">

                                    <option value="الرياض">الرياض</option>

                                    <option value="الشرقيه">الشرقيه</option>
                                    <option value="جده">جده</option>
                                    <option value="مكه">مكه</option>
                                    <option value="المدينة">المدينة</option>
                                    <option value="الطايف">الطايف</option>
                                    <option value="تبوك">تبوك</option>
                                    <option value="القصيم">القصيم</option>
                                    <option value="حائل">حائل</option>
                                    <option value="أبها">أبها</option>
                                    <option value="الباحة">الباحة</option>
                                    <option value="جيزان">جيزان</option>
                                    <option value="نجران">نجران</option>
                                    <option value="الجوف">الجوف</option>
                                    <option value="عرعر">عرعر</option>
                                    <option value="الكويت">الكويت</option>
                                    <option value="الإمارات">الإمارات</option>
                                    <option value="قطر">قطر</option>
                                    <option value="البحرين">البحرين</option>



                                </select> 
                            </div>

                            <div class="form-group">

                                <label class="sr-only">بحث عن</label> <br>

                                <button type="submit" class=" btn  btn-success" name="submit"><i class="fa fa-search"></i></button> 
                            </div>

                            <br>

                        </form>
                    </div>
                    <hr>
                    <div class="comment">
                        <form class="form-inline " action="#" method="get">
                            <legend>بحث في الأقسام</legend>
                            <div class="form-group">
                                <input name="key" type="search" placeholder="هنا اكتب ماتريد البحث عنه..." class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <select name="city" class="form-control cities">
                                    <option selected="selected" value="">كل المدن</option>
                                </select> 
                            </div>
                            <div class="form-group">
                                <select name="sec" class="form-control">
                                    <option value=""> كل الأقسام</option>
                                    <option value="حراج السيارات">حراج السيارات</option>
                                    <option value="حراج العقار">حراج العقار</option>
                                    <option value="حراج الأجهزة">حراج الأجهزة</option>
                                    <option value="كل الحراج">
                                        البحث في القسم العام
                                    </option>
                                </select> 
                            </div>
                            <button type="submit" class=" btn  btn-success"><i class="fa fa-search"></i></button> 
                        </form>                            
                    </div>
                    <hr>
                    <div class="comment">
                        <form action="#" method="get" name="user_form" class="form-inline">
                            <legend>بحث عن عضو</legend>
                            <div class="form-group">
                                <input type="search" name="user" class="form-control" placeholder="ادخل اسم العضو">
                            </div>
                            <button type="submit" name="user_submit" class=" btn  btn-success"><i class="fa fa-search"></i></button> 
                        </form>
                    </div>
                    <div class="search-ptn close-form"><i class="glyphicon glyphicon-remove"></i></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--Container-->
    <div class="container">
        <!--header-->
        <header>
            <!--navbar-->
            <!--  <nav class="navbar navbar-default">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                   </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                              <li><a href="{{URL::to('/')}}">الرئيسية</a></li>
  
                              @foreach($sec as $cc)
  
                              <li> <a href="{{URL::to('site/cat/'.$cc->id)}}">{{$cc->section_name}} </a></li>
                              @endforeach
  
  
                              <li><a href="{{URL::to('site/advsearch')}}">البحث</a></li>
                          </ul>
                      </div>
                  </div> 
           </nav>-->


            <div class="row top-header">
                <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                    <button type="button" class="navbar-toggle collapsed minecol" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a href="{{URL::to('/')}}">
                            <img src="{{URL::to('assets/site/images/logo.png')}}" alt=""/>
                        </a>
                    </div>
                </div>
                <div  class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                </div>
                <div  class="col-lg-11 col-md-10 col-sm-12 col-xs-12">
                    <!--top_link-->
                    <div class="top_link">
                        <ul class="collapse navbar-collapse aa" id="bs-example-navbar-collapse-2">
                            @if(!Auth::check())
                            <li><a href="{{URL::to('site/login')}}">تسجيل الدخول</a></li>
                            <li><a href="{{URL::to('site/registernew')}}">التسجيل بالموقع</a></li>
                            @endif
                            @if(Auth::check())
                            @if(Auth::User()->admin ==0)
                            <li><a href="{{URL::route('dashboard-admin')}}">لوحة التحكم</a></li>

                            @endif
                            @endif



                            @if(Auth::check())


                            <li><a href="{{URL::to('site/myads')}}">إعلاناتي  ({{$countad}}) -  <i class="fa fa-user"></i>{{Auth::User()->first_name}}</a></li>
                            <li><a href="{{URL::to('site/note')}}"><i class="fa fa-asterisk"></i> الاشعارات({{$countnote}})</a></li>
                            <li><a href="{{URL::to('site/point')}}"><i class="fa fa-credit-card"></i> النقاط({{Auth::User()->money}})</a></li>

                            <li><a href="{{URL::to('site/follow')}}"><i class="fa fa-asterisk"></i> المتابعه</a></li> 

                            <li><a href="{{URL::to('site/showfav')}}"><i class="fa fa-star"></i>     إعلاناتي المفضلة  ({{$countfavad}})   </a></li>

                            <li><a href="{{URL::to('site/showmessage')}}"><i class="fa fa-envelope-o"></i>الرسائل الخاصة (<?php echo $messnum; ?>)</a>
                            </li>
                            <li><a href="{{URL::to('site/changepass/'. Auth::User()->id)}}">تغيير كلمة المرور</a></li>
                            <li><a href="{{URL::to('users/sitelogout')}}">تسجيل خروج</a></li>


                            @endif





                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown" href="#"> <i class="fa fa-bars"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{URL::to('site/advsearch')}}"> البحث المتقدم</a></li>
                                    <li><a href="{{URL::to('site/commession')}}">حساب عمولة الموقع</a></li>
                                    <li><a href="{{URL::to('site/contactus')}}">اتصل بنا</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!--top_link-->
                </div>
                <div class="clearfix"></div>

            </div>
            <!--top header-->
        </header>





