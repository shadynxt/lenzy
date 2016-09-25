<!DOCTYPE html>
<html lang="en-US">

    <head>
        <title>@yield('title') </title>
        <meta name="description" content="@yield('desc')"> 
        <!-- Meta
        ============================================= -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

        <!-- Stylesheets
        ============================================= -->
        <link href="{{URL::to('assets/site')}}/css/style.css" rel="stylesheet">
        <link href="{{URL::to('assets/site')}}/css/style-rtl.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900&subset=arabic" rel="stylesheet">

        <!-- Title
        ============================================= -->


    </head>

    @if(Session::has('alert'))
    <div id="overlay" class="message_overlay"></div>
    <div id="dialog" class="dialog_header">
        <div class="dialog_title align_right"><a id="close_dialog" href="#">X</a> <span style="float: right;">الرسالة</span></div>
        <div style="padding-left: 15px;" colspan="2" id="table_body"><p  class="messages">      {{ Session::get('alert') }}    </p></div>
    </div>

    @endif
    <div id="message-ajax">

    </div>
    @if(Session::has('yes'))
    <div class="alert-success" style="text-align: center;">
        <strong></strong>   {{ Session::get('yes') }}

    </a>
</div>
@endif

@if($errors->has())
<div class="alert-danger"  style="text-align: center;" >
    <p>لم تقم بتعبئة البيانات جيدا اتبع التعليمات</p>

    <ul>
        @foreach($errors->all() as $error)

        <li>{{$error}}</li>

        @endforeach
    </ul>
</div> <!-- end form errors -->
@endif

<body>

    <!-- Document Full Container
    ============================================= -->
    <div id="full-container">

        <!-- Top Bar
        ============================================= -->
        <div id="top-bar">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="call-us">
                            <i class="fa fa-phone"></i>
                            <span>اتصل بنا:</span>
                            (030) 333 456 789 - 686
                        </div><!-- .call-us end -->

                    </div><!-- .col-sm-6 end -->
                    <div class="col-sm-6">

                        <ul class="top-bar-adds">
                            <li>
                                <div class="my-accounts">
                                    <i class="fa fa-user"></i>
                                    <a href="#">حسابي</a>
                                    <ul>
                                        <li><a href="#">حساب جديد</a></li>
                                        <li><a href="#">تسجيل دخول</a></li>
                                    </ul>
                                </div><!-- .my-accounts end -->
                            </li>
                            <li>
                                <div class="currency-change">
                                    <a href="#">USD</a>
                                    <i class="fa fa-caret-down"></i>
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">SR</a></li>
                                    </ul>
                                </div><!-- .currency-change end -->
                            </li>
                            <li>
                                <div class="lang-change">
                                    <a href="#">English</a>
                                    <i class="fa fa-caret-down"></i>
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">عربي</a></li>
                                        <li><a href="#">Frensh</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div><!-- .lang-change end -->
                            </li>
                        </ul><!-- .top-bar-adds end -->

                    </div><!-- .col-sm-6 end -->

                </div><!-- .row end -->
            </div><!-- .container end -->

        </div><!-- #top-bar end -->

        <!-- Header
        ============================================= -->
        <header id="header">

            <div id="logo-bar">

                <div class="container">
                    <div class="row">
                        <div class="col-md-2">

                            <a class="logo" href="{{URL::to('/')}}">
                                <img src="{{URL::to('assets/site')}}/images/files/logo.png" alt="">
                            </a><!-- .logo end -->

                        </div><!-- .col-md-2 end -->
                        <div class="col-md-8">

                            <div class="search-product">
                                <form>
                                    <select>
                                        <option>كل الأقسام</option>
                                        <option>منزلي</option>
                                        <option>سوق</option>
                                        <option>إليكترونيات</option>
                                        <option>كتب</option>
                                        <option>ملابس</option>
                                    </select>
                                    <input type="text" placeholder="ابحث عن المنتج..." name="search-product">
                                    <input type="submit" value="ابحث">
                                </form>
                            </div><!-- .search-product end -->

                        </div><!-- .col-md-8 end -->
                        <div class="col-md-2">

                            <div class="cart-counter">
                                <span>
                                    <small>2</small>
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                                <span>سلة التسوق</span>

                            </div><!-- .cart-counter end -->
                            <div id="cart-dropdown">
                                <span class="cart-close"><i class="fa fa-close"></i></span>
                                <ul class="cart-dd-list">
                                    <li>
                                        <a class="thumb" href="#"><img src="{{URL::to('assets/site')}}/images/files/cart-thumbs/img-1.jpg" alt=""></a>
                                        <h6><a href="#">منتج رقم 1</a></h6>
                                        <span class="price">370.00$</span>
                                        <span class="quantity">x2</span>
                                        <a class="close" href="#"><i class="fa fa-close"></i></a>
                                    </li>
                                    <li>
                                        <a class="thumb" href="#"><img src="{{URL::to('assets/site')}}/images/files/cart-thumbs/img-2.jpg" alt=""></a>
                                        <h6><a href="#">منتج رقم 2</a></h6>
                                        <span class="price">150.00$</span>
                                        <span class="quantity">x3</span>
                                        <a class="close" href="#"><i class="fa fa-close"></i></a>
                                    </li>
                                    <li>
                                        <a class="thumb" href="#"><img src="{{URL::to('assets/site')}}/images/files/cart-thumbs/img-3.jpg" alt=""></a>
                                        <h6><a href="#">منتج رقم 3</a></h6>
                                        <span class="price">240.00$</span>
                                        <span class="quantity">x5</span>
                                        <a class="close" href="#"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul><!-- .cart-dd-list end -->								
                                <span class="total">980.00$</span>
                                <a class="view-cart btn small colorful hover-transparent-dark" href="#">أعرض السلة</a>
                            </div><!-- #cart-dropdown end -->

                        </div><!-- .col-md-2 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- #logo-bar end -->

            <div id="nav-bar">

                <div id="nav-bar-wrap">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">

                                <a class="home-link" href="#"><i class="fa fa-home"></i></a>
                                <div class="mobile-menu-btn hamburger hamburger--slider">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </div><!-- .mobile-menu-btn -->
                                <div id="mobile-menu"></div><!-- #mobile-menu end -->
                                <ul id="main-menu" class="main-menu sf-menu">
                                    <li>
                                        <a href="#">الأقسام</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">حسابي</a></li>
                                            <li>
                                                <a href="#">منتجات جديدة</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">حسابي</a></li>
                                                    <li><a href="#">منتجات جديدة</a></li>
                                                    <li><a href="#">قائمة رغبات</a></li>
                                                    <li><a href="#">منتجات جديدة</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">قائمة رغبات</a></li>
                                            <li><a href="#">منتجات جديدة</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">حسابي</a></li>
                                    <li>
                                        <a href="#">منتجات جديدة<small class="nav-new">جديد</small></a>
                                    </li>
                                    <li><a href="#">قائمة رغبات</a></li>
                                    <li>
                                        <a href="#">منتجات جديدة<small class="nav-hot">مميز</small></a>
                                    </li>
                                </ul>
                                <a class="hot-deals-btn" href="#">عروض خاصة</a>
                            </div><!-- .col-md-10 end -->
                            <div class="col-md-2">

                                <ul class="nav-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul><!-- .nav-social-icons end -->

                            </div><!-- .col-md-2 end -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->

                </div><!-- #nav-bar-wrap end -->


            </div><!-- #nav-bar end -->

        </header><!-- #header end -->

        <!-- Slider
        ============================================= -->
        @yield('content')
        <!-- Footer
        ============================================= -->
        <footer id="footer">

            <div id="footer-wrap">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="footer-widget wow fadeIn">
                                <h5 class="title">عن سوق لينزي</h5>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل.
                                </p>
                                <ul class="contact-info">
                                    <li>
                                        <span class="title"><i class="fa fa-map-marker"></i>العنوان :</span>
                                        35 شارع الترعة بجوار كلية الآداب 35111
                                    </li>
                                    <li>
                                        <span class="title"><i class="fa fa-phone"></i>تليفون :</span>
                                        (050) 333 456 789 - 686
                                    </li>
                                    <li>
                                        <span class="title"><i class="fa fa-envelope"></i>بريد الكتروني :</span>
                                        Needhelp@lenzy.com
                                    </li>
                                </ul><!-- .contact-info end -->
                            </div><!-- .footer-widget end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-2">
                            <div class="footer-widget wow fadeIn" data-wow-delay="0.15s">
                                <h5 class="title">روابط مفيدة</h5>
                                <ul class="links-list">
                                    <li><a href="#">معلومات عنا</a></li>
                                    <li><a href="#">سياسة الخصوصية</a></li>
                                    <li><a href="#">الشروط و الأحكام</a></li>
                                    <li><a href="#">دفع آمن</a></li>
                                    <li><a href="#">معلومات أخرى</a></li>
                                    <li><a href="#">جوائز و تقيمات</a></li>
                                    <li><a href="#">صحافة و إعلام</a></li>
                                    <li><a href="#">أخبار / تدوينات</a></li>
                                    <li><a href="#">برامج الموزعين</a></li>
                                </ul><!-- .links-list end -->
                            </div><!-- .footer-widget end -->
                        </div><!-- .col-md-2 end -->
                        <div class="col-md-4">
                            <div class="footer-widget wow fadeIn" data-wow-delay="0.3s">
                                <h5 class="title">اشترك في الرسائل الإخبارية</h5>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                </p>
                                <form class="footer-subscribe">
                                    <input class="email-subs" type="text" placeholder="البريد الألكتروني">
                                    <input type="submit" value="">
                                    <i class="fa fa-check"></i>
                                </form>
                                <img src="{{URL::to('assets/site')}}/images/files/payment-methods.png" alt="">
                            </div><!-- .footer-widget end -->
                        </div><!-- .col-md-4 end -->
                        <div class="col-md-3">
                            <div class="footer-widget wow fadeIn" data-wow-delay="0.45s">
                                <h5 class="title">تابعنا على</h5>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.
                                </p>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul><!-- .social-icons end -->
                            </div><!-- .footer-widget end -->
                        </div><!-- .col-md-3 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- #footer-wrap end -->

        </footer><!-- #footer end -->

        <!-- Footer Mini
        ============================================= -->
        <footer id="footer-mini">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyrights-message wow fadeIn" data-wow-offset="0">
                            جميع الحقوق محفوظة. <span>سوق لينزي</span>. © 2016 - 2017
                        </div><!-- .copyright-message end -->
                    </div><!-- .col-md-6 end -->
                    <div class="col-md-6">
                        <div class="made-by wow fadeIn" data-wow-delay="0.2s" data-wow-offset="0">
                            تم التصميم و التطوير بواسطة <img src="{{URL::to('assets/site')}}/images/files/elryad-logo-mini.png" alt=""> شركة الرياض
                        </div><!-- .made-by end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->

        </footer><!-- #footer-mini end -->

    </div><!-- #full-container end -->

    <a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

    <!-- External JavaScripts
    ============================================= -->
    <script src="{{URL::to('assets/site')}}/js/jquery.js"></script>


    <script src="{{URL::to('assets/site')}}/js/wow.min.js"></script>
    <script src="{{URL::to('assets/site')}}/js/owl.carousel.min.js"></script>
    <script src="{{URL::to('assets/site')}}/js/hoverIntent.js"></script>
    <script src="{{URL::to('assets/site')}}/js/superfish.js"></script>
    <script src="{{URL::to('assets/site')}}/js/countdown.js"></script>
    <script src='{{URL::to('assets/site')}}/js/functions.js'></script>


    {{ HTML::style('assets/site/style/message.css')}}

    {{ HTML::script('assets/site/js/message.js')}}




    <button type="button" class="btn btn-primary btn-lg hidden message-cart" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">تنبية</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>



    <script>


                $(document).ready(function () {


        $(document).on('click', '.sections .fa-angle-down', function () {
        $('.menu ul').slideToggle();
        });
                $(".addinfo").submit(function() {


        $.ajax({
        type: "POST",
                url: "{{URL::to('addinfo')}}",
                data: $(".addinfo").serialize(), // serializes the form's elements.
                success: function(data)
                {
                //alert(data); 
                }
        });
                return false; // avoid to execute the actual submit of the form.
        });
                $(document).on('click', '.compare', function () {


        var typelike = $(this).attr('type-like');
                var post = $(this).attr('post-id');
                if (typelike == 'compare')

        {

        $.ajax({
        url: '{{ URL::to("compare")}}',
                type: 'post',
                data: {postid: post, type: typelike},
                beforSend: function ()
                {


                }, success: function (data)
        {





        $('.modal-body').html('تم اضافة المنتج الي قائمة المقارنة');
                $('.message-cart').click();
        }


        });
        }



        });
                $(document).on('click', '.addcart', function () {


        var typelike = $(this).attr('type-like');
                var post = $(this).attr('post-id');
                if (typelike == 'addcart')

        {
        $.ajax({
        url: '{{ URL::to("addcart")}}',
                type: 'post',
                data: {postid: post, type: typelike},
                beforSend: function ()
                {


                }, success: function (data)
        {




        // alert(data);

        $('#cart-toogle').html(data);
                //$('#message-ajax').html('<div class="alert-success" style="text-align: center;">تم اضافه المنتج بنجاح</div>');


                $('.modal-body').html('تم اضافة المنتج الي سلة المشتروات');
                $('.message-cart').click();
        }


        });
        }



        });
                $(document).on('click', '.like', function () {


        var typelike = $(this).attr('type-like');
                var post = $(this).attr('post-id');
                if (typelike == 'like')

        {
        $.ajax({
        url: '{{URL::to("like")}}',
                type: 'post',
                data: {postid: post, type: typelike},
                beforSend: function ()
                {


                }, success: function (data)
        {


        if (data[0] == 'true' || data[0] == true)

        {

        $('.likke' + post).attr('type-like', 'unlike');
                $('.like' + post).addClass('hidden');
                $('.unlike' + post).removeClass('hidden');
        }



        }


        });
        }
        else if (typelike == 'unlike')

        {
        $.ajax({
        url: '{{URL::to("like")}}',
                type: 'post',
                data: {postid: post, type: typelike},
                beforSend: function ()
                {


                }, success: function (data)
        {


        if (data[0] == 'true' || data[0] == true)

        {

        $('.like').attr('type-like', 'like');
                $('.like' + post).removeClass('hidden');
                $('.unlike' + post).addClass('hidden');
        }



        }


        });
        }


        });
                $(document).on('click', '.unlike', function () {
        var link = $(this).attr('id');
                var unlink = '#un' + link;
                var typelike = $(this).attr('type-like');
                var post = $(this).attr('post-id');
                if (typelike == 'unlike')

        {
        $.ajax({
        url: '{{URL::to("unlike")}}',
                type: 'post',
                data: {postid: post, type: typelike},
                beforSend: function ()
                {


                }, success: function (data)
        {








        }



        });
                $('.unlike').hide();
                $(this).show();
        }



        });
                $('.cart-holder').click(function () {
        $('#cart-toogle').slideToggle();
        });
                $('.social li a').hover(function () {

        $(this).addClass('animated rotateIn');
        }, function () {
        $(this).removeClass('animated rotateIn');
        });
                $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                })

                $('.fa-search').click(function () {
        var search = '<div class="wrap-search"><div class="container"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><form role="search" method="get" action="{{URL::to('searchads')}}" class="searchform" action=""><input type="search" name="search" placeholder="ابحث عن اي شيء ..."></form></div></div></div></div>';
                if ($('.wrap-search').length > 0) {

        $('.wrap-search').remove();
        } else {

        $(search).appendTo('body').slideToggle();
        }
        });
                new WOW().init();
                $('.category li').hover(function () {
        $('.category li a').removeClass('animated flash');
                $(this).find('a').addClass('animated flash');
        });
                $("#owl-demo").owlCarousel({
        items: 4,
                autoPlay: true,
                lazyLoad: true,
                pagination: false,
                navigation: true,
                navigationText: ["", ""]
        });
                $("#owl-demo3").owlCarousel({
        items: 2,
                autoPlay: true,
                pagination: false,
                navigation: true,
                navigationText: ["", ""]
        });
                $("#owl-demo4").owlCarousel({
        items: 3,
                autoPlay: true,
                pagination: false,
                navigation: true,
                navigationText: ["", ""]
        });
                $("html").niceScroll({
        cursorcolor: "#0074d9"
        });
                $('#latest ul li').click(function () {
        $('#latest ul li').removeClass('active');
                $(this).addClass('active');
                $('#holdereffect').removeClass();
        });
                $(document).on('click', '.thump-img', function () {

        var thump = $(this).attr("src");
                $('.big-image img').remove();
                $('.big-image .loader').fadeIn(0).delay(1000).fadeOut(700);
                $('.big-image #ex1').append('<img id="product-img" onmousemove="Coordinates(event)" onmouseleave="myOverFunction()" class="img-responsive" src="' + thump + '" />').delay(3000);
        });
                $('#latest ul li#sec-tion').click(function () {

        $('#holdereffect #normal').empty();
                $('#holdereffect #second').empty();
                $('#holdereffect #third').load("{{URL::to('site/productsection')}}");
        });
                $('#latest ul li#new').click(function () {
        $('#holdereffect #third').empty();
                $('#holdereffect #second').empty();
                $('#holdereffect #normal').load("{{URL::to('site/new')}}");
        });
                $('#latest ul li#price').click(function () {

        $('#holdereffect #normal').empty();
                $('#holdereffect #third').empty();
                $('#holdereffect #second').load("{{URL::to('site/price')}}");
        });
                $(".item .smallimg img").click(function () {
        var src = $(this).attr("src");
                $(this).closest('.item').find(".bigimage img").remove();
                $(".item .smallimg img").removeClass('activeitem');
                $(this).addClass('activeitem');
                $(this).closest('.item').find('.loader').fadeIn(0).delay(1000).fadeOut(700);
                $(this).closest('.item').find(".bigimage").append('<img src="' + src + '" />').delay(3000);
        });
        });
                $("#owl-demo2").owlCarousel({
        items: 3,
                autoPlay: true,
                lazyLoad: true,
                pagination: true,
                navigation: true,
                navigationText: ["", ""]
        });
                (function ($) {

//Function to animate slider captions
                function doAnimations(elems) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';
                        elems.each(function () {
                        var $this = $(this),
                                $animationType = $this.data('animation');
                                $this.addClass($animationType).one(animEndEv, function () {
                        $this.removeClass($animationType);
                        });
                        });
                }

//Variables on page load
                var $myCarousel = $('#carousel-example-generic'),
                        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
//Initialize carousel
                        $myCarousel.carousel();
//Animate captions in first slide on page load
                        doAnimations($firstAnimatingElems);
//Pause carousel
                        $myCarousel.carousel('pause');
//Other slides to be animated on carousel slide event
                        $myCarousel.on('slide.bs.carousel', function (e) {
                        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                                doAnimations($animatingElems);
                        });
                })(jQuery);</script>

    <script>

                        $(document).ready(function () {
                $("html, body").animate({
                scrollTop: $('.down').offset().top
                }, 500);
                });
                        $('.nextstip').click(function () {
                $('.infoarea').toggle();
                        $('#cartpayments').toggle('400')
                        $('.editinfo').toggle();
                });
                        $('.editinfo').click(function () {
                $('.infoarea').toggle('400');
                        $('#cartpayments').toggle();
                        $(this).toggle();
                });
                        $('#latest ul li').click(function() {

                $('#holdereffect').find('.loader').fadeIn(0).delay(2500).fadeOut(700);
                });</script>


    <script>

                        var img = document.getElementById('product-img');
                        var width = img.width;
                        var height = img.height;
                        var height2 = height * 1.8;
                        var width2 = width * 1.9;
                        function Coordinates(e) {
                        var x = e.clientX;
                                var y = e.clientY;
                                var y = y - 150;
                                var x = x - 250;
                                $('#here ').css('display', 'block');
                                var img = $('#product-img').attr('src');
                                document.getElementById("here").innerHTML = "<img src=" + img + " />";
                                //$('#here img').css({left: x , top: y,width:'1800'});

                                $('#here img').css('marginLeft', '-' + x + 'px');
                                $('#here img').css('marginTop', '-' + y + 'px');
                                $('#here img').css('width', + width2 + 'px');
                                $('#here img').css('height', + height2 + 'px');
                                $('#here ').css('width', + width + 'px');
                                $('#here ').css('height', + height + 'px');
                        }
                function myOverFunction(){
                document.getElementById("here").innerHTML = "";
                        $('#here ').css('display', 'none');
                }

    </script>

</body>
</html>
