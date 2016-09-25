@extends('site.layout')


@section('title') 
{{$main->site_title}}-الرئيسية
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop


@section('content')


<section id="banner">

    <div class="banner-parallax">

        <div class="banner-slider">
            <ul class="owl-carousel">

                @foreach(Baner::orderBy('id' , 'desc')->where('type' , '=' ,1 )->take(5)->get()  as $baner)
                <li>
                    <div class="slide">
                        <img src="{{URL::to($baner->image)}}">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="banner-center-box text-right">
                                            <h2>
                                                {{$baner->baner_name}}
                                            </h2>

                                            <!--
                                            <div class="description">يوجد تخفيضات <span class="colored">70% </span> على المجموعات الجديد
                                            
                                            
                                            ة</div>
                                            
                                            -->
                                            <a class="btn colorful hover-transparent-dark" href="{{$baner->baner_link}}">تسوق الآن</a>
                                        </div><!-- .banner-center-box end -->

                                    </div><!-- .col-md-12 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->
                        </div><!-- .slide-content end -->
                    </div><!-- .slide end -->
                </li>

                @endforeach

            </ul>
        </div><!-- .banner-slider end -->

    </div><!-- .banner-parallax end -->

</section><!-- #banner end -->

<!-- Content
============================================= -->
<section id="content">

    <div id="content-wrap">

        <!-- === Intro 1 =========== -->
        <div class="flat-section intro-1">

            <div class="container">
                <div class="row">

                    <div class="section-content">
                        <div class="col-md-12">

                            <ul class="intro-images wow fadeIn">

                                @foreach(Baner::orderBy('id' , 'desc')->where('type' , '=' ,2 )->take(6)->get()  as $baner1)
                                <li><img src="{{URL::to($baner1->image)}}" alt=""></li>

                                @endforeach

                            </ul><!--  -->
                        </div><!-- .col-md-12 end -->
                        <div class="col-sm-3 wow fadeIn">
                            <h5>عن شركتنا</h5>
                            <p>
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.
                            </p>
                        </div><!-- .col-sm-3 end -->
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.15s">
                            <h5>رؤيتنا الخاصة</h5>
                            <p>
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.
                            </p>
                        </div><!-- .col-sm-3 end -->
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                            <h5>مهمتنا</h5>
                            <p>
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.
                            </p>
                        </div><!-- .col-sm-3 end -->
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.45s">
                            <h5>المميزات</h5>
                            <p>
                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي.
                            </p>
                        </div><!-- .col-sm-3 end -->
                    </div><!-- .section-content end -->

                </div><!-- .row end -->
            </div><!-- .container end -->

        </div><!-- .flat-section end -->

        <!-- === Intro 2 =========== -->
        <div class="flat-section intro-2">

            <div class="container">
                <div class="row">

                    <div class="section-content">


                        @foreach(Section::where('id' , '=' , 1)->get()  as $section)
                        <div class="col-md-6">

                            <div class="featured-box box-1 wow fadeIn">
                                <img src="{{URL::to($section->image2)}}" alt="">
                                <div class="featured-box-content">
                                    <h1>قسم<br>{{$section->section_name}}</h1>


                                    <p>


                                    </p>


                                    <a class="btn colorful hover-white" href="{{URL::to('site/cat/'.$section->id)}}">تسوق الآن</a>
                                </div><!-- .featured-box-content end -->
                            </div><!-- .featured-box -->

                        </div><!-- .col-md-6 end -->

                        @endforeach


                        @foreach(Section::where('id' , '=' , 2)->get()  as $section1)
                        <div class="col-md-6">

                            <div class="featured-box box-2 wow fadeIn" data-wow-delay="0.15s">
                                <img src="{{URL::to($section1->image2)}}" alt="">
                                <div class="featured-box-content">
                                    <h1>قسم<br>{{$section1->section_name}}</h1>
                                    <p> </p>
                                    <a class="btn colorful hover-white" href="{{URL::to('site/cat/'.$section1->id)}}">تسوق</a>
                                </div><!-- .featured-box-content end -->
                            </div><!-- .featured-box -->

                        </div><!-- .col-md-6 end -->

                        @endforeach
                        <div class="col-md-12">

                            <div class="team-quote text-center">
                                <h1>الأزياء الجيد هو شكل<br>للآداب الجيدة</h1>
                                <h3 class="colored">- فريق لينزي</h3>
                            </div><!-- .team-quote end -->

                        </div><!-- .col-md-12 end -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="categories-samples">


                                    @foreach(Section::orderBy('id' , 'asc')->take(6)->get()  as $section3)
                                    <div class="col-lg-2 col-sm-4 col-xs-6">

                                        <div class="box wow fadeIn">
                                            <a href="{{URL::to('site/cat/'.$section3->id)}}">
                                                <img src="{{URL::to($section3->image)}}" alt="">
                                                <h4>{{$section3->section_name}}</h4>
                                            </a>
                                        </div><!-- .box end -->

                                    </div><!-- .col-md-2 end -->

                                    @endforeach

                                </div><!-- .categories-samples end -->

                            </div><!-- .row end -->
                        </div><!-- .col-md-12 end -->
                    </div><!-- .section-content end -->

                </div><!-- .row end -->
            </div><!-- .container end -->

        </div><!-- .flat-section end -->

        <!-- === Featured Products =========== -->
        <div class="flat-section featured-products">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="section-title wow fadeIn">
                            <h3>منتجات <span class="colored">مميزة</span></h3>
                        </div><!-- .section-title end -->

                    </div><!-- .col-md-12 end -->
                    <div class="section-content">
                        <div class="col-md-12">

                            <div class="featured-products-slider wow fadeIn" data-wow-delay="0.5s">
                                <ul class="owl-carousel">

                                    @foreach(Ads::orderBy('id' , 'desc')->where('ad_type' , '=' , 1)->where('star' , '=' , 2)->take(10)->get() as $pro)
                                    <li>
                                        <div class="slide">
                                            <div class="product-box">
                                                <div class="product-preview">



                                                    <?php $img = json_decode($pro->image); ?>
                                                    <img src="{{URL::to('assets/admin/img/tmp/'.$img[0])}}" width="239" height="274" />
                                                    <!--
                                                    <span class="new-badge-1">جديد</span>
                                                    
                                                    -->
                                                    <ul class="product-meta">
                                                        <li><a href="{{URL::to('site/addtocart/'.$pro->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="{{URL::to('site/fav/'.$pro->id)}}"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="{{URL::to('site/addtocompare/'.$pro->id)}}"><i class="fa fa-random"></i></a></li>
                                                        <li><a href="{{URL::to('site/product/'.$pro->id)}}"><i class="fa fa-search"></i></a></li>

                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">{{$pro->ad_title}}</a></h5>
                                                    <h5 class="price">ريال   {{$pro->price}}</h5>

                                                    <!--
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    
                                                    -->


                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->
                                        </div><!-- .slide end -->
                                    </li>


                                    @endforeach


                                </ul>
                            </div><!-- .featured-products-slider end -->

                        </div><!-- .col-md-12 end -->
                    </div><!-- .section-content end -->

                </div><!-- .row end -->
            </div><!-- .container end -->

        </div><!-- .flat-section end -->

        <!-- === Great Offers =========== -->
        <div class="parallax-section great-offers dark">

            <div class="section-inner">

                <div class="container">
                    <div class="row">
                        <div class="section-content">

                            <div class="col-md-4">

                                <div class="section-title wow fadeIn">
                                    <h3>عروض <span class="colored">مميزة</span></h3>
                                </div><!-- .section-title end -->
                                <p class="wow fadeIn">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                </p>
                                <ul class="deadline-timer arabic wow fadeIn" data-event-date="21 august 2016 09:00:00">
                                    <li>
                                        <span class="title timeRefDays">Days</span>
                                        <span class="counter days">120</span>
                                    </li>
                                    <li>
                                        <span class="title timeRefHours">Hours</span>
                                        <span class="counter hours">17</span>
                                    </li>
                                    <li>
                                        <span class="title timeRefMinutes">Min</span>
                                        <span class="counter minutes">37</span>
                                    </li>
                                    <li>
                                        <span class="title timeRefSeconds">Secs</span>
                                        <span class="counter seconds">60</span>
                                    </li>
                                </ul><!-- .deadline-timer end -->
                                <p class="wow fadeIn">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                </p>
                                <a class="btn white hover-dark wow fadeIn" data-wow-delay="0.15s" href="#">تسوق الآن</a>

                            </div><!-- .col-md-4 end -->

                            <div class="col-md-8 wow fadeIn" data-wow-delay="0.5s">

                                <div class="offers-slider">
                                    <ul class="owl-carousel">
                                        <li>
                                            <div class="slide">
                                                <div class="slide-wrap">

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="single-offer-slider">
                                                                <div class="offer-preview">
                                                                    <span class="sale-badge-2">عرض!</span>
                                                                    <div class="prev">
                                                                        <img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg">
                                                                    </div><!-- .prev end -->
                                                                </div><!-- .offer-preview end -->
                                                                <ul class="offer-thumbs">
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-2.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-3.jpg"></li>
                                                                </ul><!-- .offer-thumbs -->
                                                            </div><!-- .single-offer-slider end -->

                                                        </div><!-- .col-md-5 end -->
                                                        <div class="col-md-7">

                                                            <div class="offer-details">
                                                                <div class="section-title">
                                                                    <h4>منتج رقم 1</h4>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div><!-- .rating end -->
                                                                </div><!-- .section-title end -->
                                                                <p>
                                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                                </p>
                                                                <ul class="features-list">
                                                                    <li>منتج مميز</li>
                                                                    <li>منتج مبتكر</li>
                                                                    <li>منتج رائع</li>
                                                                    <li>أفضل منتج</li>
                                                                    <li>أمان 100%</li>
                                                                    <li>معلومات اخرى</li>
                                                                </ul><!-- .features-list end -->
                                                                <h5 class="price">سعر القطعة: <span>$190.00</span> <span>$220.00</span></h5>
                                                                <form class="add-item-counter">
                                                                    <a class="decrease-btn" href="#">-</a>
                                                                    <input type="text" value="1">
                                                                    <a class="increase-btn" href="#">+</a>
                                                                </form><!-- .add-item-counter end -->
                                                                <ul class="offer-meta">
                                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                                </ul><!-- .offer-meta end -->
                                                            </div><!-- .offer-details -->

                                                        </div><!-- .col-md-7 end -->
                                                    </div><!-- .row end -->

                                                </div><!-- .slide-wrap end -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="slide-wrap">

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="single-offer-slider">
                                                                <div class="offer-preview">
                                                                    <span class="sale-badge-2">عرض!</span>
                                                                    <div class="prev">
                                                                        <img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg">
                                                                    </div><!-- .prev end -->
                                                                </div><!-- .offer-preview end -->
                                                                <ul class="offer-thumbs">
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-2.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-3.jpg"></li>
                                                                </ul><!-- .offer-thumbs -->
                                                            </div><!-- .single-offer-slider end -->

                                                        </div><!-- .col-md-5 end -->
                                                        <div class="col-md-7">

                                                            <div class="offer-details">
                                                                <div class="section-title">
                                                                    <h4>منتج رقم 1</h4>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div><!-- .rating end -->
                                                                </div><!-- .section-title end -->
                                                                <p>
                                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                                </p>
                                                                <ul class="features-list">
                                                                    <li>منتج مميز</li>
                                                                    <li>منتج مبتكر</li>
                                                                    <li>منتج رائع</li>
                                                                    <li>أفضل منتج</li>
                                                                    <li>أمان 100%</li>
                                                                    <li>معلومات اخرى</li>
                                                                </ul><!-- .features-list end -->
                                                                <h5 class="price">سعر القطعة: <span>$190.00</span> <span>$220.00</span></h5>
                                                                <form class="add-item-counter">
                                                                    <a class="decrease-btn" href="#">-</a>
                                                                    <input type="text" value="1">
                                                                    <a class="increase-btn" href="#">+</a>
                                                                </form><!-- .add-item-counter end -->
                                                                <ul class="offer-meta">
                                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                                </ul><!-- .offer-meta end -->
                                                            </div><!-- .offer-details -->

                                                        </div><!-- .col-md-7 end -->
                                                    </div><!-- .row end -->

                                                </div><!-- .slide-wrap end -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="slide-wrap">

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="single-offer-slider">
                                                                <div class="offer-preview">
                                                                    <span class="sale-badge-2">عرض!</span>
                                                                    <div class="prev">
                                                                        <img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg">
                                                                    </div><!-- .prev end -->
                                                                </div><!-- .offer-preview end -->
                                                                <ul class="offer-thumbs">
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-2.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-3.jpg"></li>
                                                                </ul><!-- .offer-thumbs -->
                                                            </div><!-- .single-offer-slider end -->

                                                        </div><!-- .col-md-5 end -->
                                                        <div class="col-md-7">

                                                            <div class="offer-details">
                                                                <div class="section-title">
                                                                    <h4>منتج رقم 2</h4>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div><!-- .rating end -->
                                                                </div><!-- .section-title end -->
                                                                <p>
                                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                                </p>
                                                                <ul class="features-list">
                                                                    <li>منتج مميز</li>
                                                                    <li>منتج مبتكر</li>
                                                                    <li>منتج رائع</li>
                                                                    <li>أفضل منتج</li>
                                                                    <li>أمان 100%</li>
                                                                    <li>معلومات اخرى</li>
                                                                </ul><!-- .features-list end -->
                                                                <h5 class="price">سعر القطعة: <span>$190.00</span> <span>$220.00</span></h5>
                                                                <form class="add-item-counter">
                                                                    <a class="decrease-btn" href="#">-</a>
                                                                    <input type="text" value="1">
                                                                    <a class="increase-btn" href="#">+</a>
                                                                </form><!-- .add-item-counter end -->
                                                                <ul class="offer-meta">
                                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                                </ul><!-- .offer-meta end -->
                                                            </div><!-- .offer-details -->

                                                        </div><!-- .col-md-7 end -->
                                                    </div><!-- .row end -->

                                                </div><!-- .slide-wrap end -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="slide-wrap">

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="single-offer-slider">
                                                                <div class="offer-preview">
                                                                    <span class="sale-badge-2">عرض!</span>
                                                                    <div class="prev">
                                                                        <img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg">
                                                                    </div><!-- .prev end -->
                                                                </div><!-- .offer-preview end -->
                                                                <ul class="offer-thumbs">
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-2.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-3.jpg"></li>
                                                                </ul><!-- .offer-thumbs -->
                                                            </div><!-- .single-offer-slider end -->

                                                        </div><!-- .col-md-5 end -->
                                                        <div class="col-md-7">

                                                            <div class="offer-details">
                                                                <div class="section-title">
                                                                    <h4>منتج رقم 3</h4>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div><!-- .rating end -->
                                                                </div><!-- .section-title end -->
                                                                <p>
                                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                                </p>
                                                                <ul class="features-list">
                                                                    <li>منتج مميز</li>
                                                                    <li>منتج مبتكر</li>
                                                                    <li>منتج رائع</li>
                                                                    <li>أفضل منتج</li>
                                                                    <li>أمان 100%</li>
                                                                    <li>معلومات اخرى</li>
                                                                </ul><!-- .features-list end -->
                                                                <h5 class="price">سعر القطعة: <span>$190.00</span> <span>$220.00</span></h5>
                                                                <form class="add-item-counter">
                                                                    <a class="decrease-btn" href="#">-</a>
                                                                    <input type="text" value="1">
                                                                    <a class="increase-btn" href="#">+</a>
                                                                </form><!-- .add-item-counter end -->
                                                                <ul class="offer-meta">
                                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                                </ul><!-- .offer-meta end -->
                                                            </div><!-- .offer-details -->

                                                        </div><!-- .col-md-7 end -->
                                                    </div><!-- .row end -->

                                                </div><!-- .slide-wrap end -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="slide-wrap">

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="single-offer-slider">
                                                                <div class="offer-preview">
                                                                    <span class="sale-badge-2">عرض!</span>
                                                                    <div class="prev">
                                                                        <img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg">
                                                                    </div><!-- .prev end -->
                                                                </div><!-- .offer-preview end -->
                                                                <ul class="offer-thumbs">
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-2.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-3.jpg"></li>
                                                                </ul><!-- .offer-thumbs -->
                                                            </div><!-- .single-offer-slider end -->

                                                        </div><!-- .col-md-5 end -->
                                                        <div class="col-md-7">

                                                            <div class="offer-details">
                                                                <div class="section-title">
                                                                    <h4>منتج رقم 4</h4>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div><!-- .rating end -->
                                                                </div><!-- .section-title end -->
                                                                <p>
                                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                                </p>
                                                                <ul class="features-list">
                                                                    <li>منتج مميز</li>
                                                                    <li>منتج مبتكر</li>
                                                                    <li>منتج رائع</li>
                                                                    <li>أفضل منتج</li>
                                                                    <li>أمان 100%</li>
                                                                    <li>معلومات اخرى</li>
                                                                </ul><!-- .features-list end -->
                                                                <h5 class="price">سعر القطعة: <span>$190.00</span> <span>$220.00</span></h5>
                                                                <form class="add-item-counter">
                                                                    <a class="decrease-btn" href="#">-</a>
                                                                    <input type="text" value="1">
                                                                    <a class="increase-btn" href="#">+</a>
                                                                </form><!-- .add-item-counter end -->
                                                                <ul class="offer-meta">
                                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                                </ul><!-- .offer-meta end -->
                                                            </div><!-- .offer-details -->

                                                        </div><!-- .col-md-7 end -->
                                                    </div><!-- .row end -->

                                                </div><!-- .slide-wrap end -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="slide-wrap">

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="single-offer-slider">
                                                                <div class="offer-preview">
                                                                    <span class="sale-badge-2">عرض!</span>
                                                                    <div class="prev">
                                                                        <img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg">
                                                                    </div><!-- .prev end -->
                                                                </div><!-- .offer-preview end -->
                                                                <ul class="offer-thumbs">
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-1.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-2.jpg"></li>
                                                                    <li><img src="{{URL::to('assets/site')}}/images/files/sliders/single-offer/img-3.jpg"></li>
                                                                </ul><!-- .offer-thumbs -->
                                                            </div><!-- .single-offer-slider end -->

                                                        </div><!-- .col-md-5 end -->
                                                        <div class="col-md-7">

                                                            <div class="offer-details">
                                                                <div class="section-title">
                                                                    <h4>منتج رقم 5</h4>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div><!-- .rating end -->
                                                                </div><!-- .section-title end -->
                                                                <p>
                                                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                                                                </p>
                                                                <ul class="features-list">
                                                                    <li>منتج مميز</li>
                                                                    <li>منتج مبتكر</li>
                                                                    <li>منتج رائع</li>
                                                                    <li>أفضل منتج</li>
                                                                    <li>أمان 100%</li>
                                                                    <li>معلومات اخرى</li>
                                                                </ul><!-- .features-list end -->
                                                                <h5 class="price">سعر القطعة: <span>$190.00</span> <span>$220.00</span></h5>
                                                                <form class="add-item-counter">
                                                                    <a class="decrease-btn" href="#">-</a>
                                                                    <input type="text" value="1">
                                                                    <a class="increase-btn" href="#">+</a>
                                                                </form><!-- .add-item-counter end -->
                                                                <ul class="offer-meta">
                                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                                </ul><!-- .offer-meta end -->
                                                            </div><!-- .offer-details -->

                                                        </div><!-- .col-md-7 end -->
                                                    </div><!-- .row end -->

                                                </div><!-- .slide-wrap end -->
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- .offers-slider end -->

                                <div class="offers-thumbs-slider">
                                    <ul class="owl-carousel">
                                        <li>
                                            <div class="slide">
                                                <img src="{{URL::to('assets/site')}}/images/files/sliders/offers-thumbs/img-1.jpg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <img src="{{URL::to('assets/site')}}/images/files/sliders/offers-thumbs/img-2.jpg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <img src="{{URL::to('assets/site')}}/images/files/sliders/offers-thumbs/img-3.jpg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <img src="{{URL::to('assets/site')}}/images/files/sliders/offers-thumbs/img-4.jpg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <img src="{{URL::to('assets/site')}}/images/files/sliders/offers-thumbs/img-1.jpg">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <img src="{{URL::to('assets/site')}}/images/files/sliders/offers-thumbs/img-2.jpg">
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- .offers-thumbs-slider end -->

                            </div><!-- .col-md-8 end -->
                        </div><!-- .section-content end -->

                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-inner end -->

        </div><!-- .parallax-section end -->

        <!-- === Recent News =========== -->
        <div class="flat-section recent-news">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="section-title wow fadeIn">
                            <h3>آخر <span class="colored">الأخبار</span></h3>
                        </div><!-- .section-title end -->

                    </div><!-- .col-md-12 end -->
                    <div class="section-content">
                        <div class="col-md-6">
                            <div class="entry wow fadeIn" data-wow-delay="0.5s">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="{{URL::to('assets/site')}}/images/files/blog/img-1.jpg" alt="">
                                    </a>
                                </div><!-- .entry-image end -->
                                <div class="entry-title">
                                    <h4><a href="#">مجموعة صيف 2016</a></h4>
                                </div><!-- .entry-title end -->
                                <div class="entry-meta">
                                    <ul>
                                        <li>بواسطة <a href="#">Admin</a></li>
                                        <li>15 سبتمبر, 2016</li>
                                    </ul>
                                </div><!-- .entry-meta end -->
                                <div class="entry-content">
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. 
                                    </p>
                                    <p>
                                        ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي
                                    </p>
                                </div><!-- .entry-content end -->
                            </div><!-- .entry end -->
                        </div><!-- .col-md-6 end -->
                        <div class="col-md-6">
                            <div class="entry entry-small wow fadeIn" data-wow-delay="0.65s">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="{{URL::to('assets/site')}}/images/files/blog/img-2.jpg" alt="">
                                    </a>
                                </div><!-- .entry-image end -->
                                <div class="entry-title">
                                    <h4><a href="#">مجموعة صيف 2016</a></h4>
                                </div><!-- .entry-title end -->
                                <div class="entry-meta">
                                    <ul>
                                        <li>بواسطة <a href="#">Admin</a></li>
                                        <li>15 سبتمبر, 2016</li>
                                    </ul>
                                </div><!-- .entry-meta end -->
                                <div class="entry-content">
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز.
                                    </p>
                                </div><!-- .entry-content end -->
                            </div><!-- .entry entry-small end -->
                            <div class="entry entry-small wow fadeIn" data-wow-delay="0.8s">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="{{URL::to('assets/site')}}/images/files/blog/img-3.jpg" alt="">
                                    </a>
                                </div><!-- .entry-image end -->
                                <div class="entry-title">
                                    <h4><a href="#">مجموعة شتاء 2016</a></h4>
                                </div><!-- .entry-title end -->
                                <div class="entry-meta">
                                    <ul>
                                        <li>بواسطة <a href="#">Admin</a></li>
                                        <li>15 سبتمبر, 2016</li>
                                    </ul>
                                </div><!-- .entry-meta end -->
                                <div class="entry-content">
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز.
                                    </p>
                                </div><!-- .entry-content end -->
                            </div><!-- .entry entry-small end -->
                        </div><!-- .col-md-6 end -->
                    </div><!-- .section-content end -->

                </div><!-- .row end -->
            </div><!-- .container end -->

        </div><!-- .flat-section end -->

        <!-- === Our Products =========== -->
        <div class="flat-section our-products">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="section-title wow fadeIn">
                            <h3><span class="colored">منتجاتنا</span> المختلفة</h3>
                        </div><!-- .section-title end -->

                    </div><!-- .col-md-12 end -->
                    <div class="section-content">
                        <div class="col-md-12">

                            <ul class="op-tabs wow fadeIn" data-wow-delay="0.2s">
                                <li><a href="#op-tab1">الكل</a></li>
                                <li><a href="#op-tab2">كراسي</a></li>
                                <li><a href="#op-tab3">أجهزة كهربية</a></li>
                                <li><a href="#op-tab4">مراتب</a></li>
                                <li><a href="#op-tab5">ملابس</a></li>
                                <li><a href="#op-tab6">منتجات أخرى</a></li>
                            </ul><!-- .op-tabs -->

                            <div class="op-tab-container wow fadeIn" data-wow-delay="0.6s">
                                <div class="row">
                                    <div id="op-tab1" class="op-tab-content">

                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-3.jpg" alt="">
                                                    <span class="sale-badge-1">عرض!</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">
                                                        $190.00
                                                        <span>$220.00</span>
                                                    </h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-1.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-1.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-2.jpg" alt="">
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">اسم المنتج</a></h5>
                                                    <h5 class="price">$140.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-3.jpg" alt="">
                                                    <span class="sale-badge-1">عرض!</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">
                                                        $190.00
                                                        <span>$220.00</span>
                                                    </h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->

                                    </div><!-- .op-tab-content end -->
                                    <div id="op-tab2" class="op-tab-content">

                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-1.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-2.jpg" alt="">
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">اسم المنتج</a></h5>
                                                    <h5 class="price">$140.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-3.jpg" alt="">
                                                    <span class="sale-badge-1">عرض!</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">
                                                        $190.00
                                                        <span>$220.00</span>
                                                    </h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->

                                    </div><!-- .op-tab-content end -->
                                    <div id="op-tab3" class="op-tab-content">

                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-3.jpg" alt="">
                                                    <span class="sale-badge-1">عرض!</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">
                                                        $190.00
                                                        <span>$220.00</span>
                                                    </h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-1.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->

                                    </div><!-- .op-tab-content end -->
                                    <div id="op-tab4" class="op-tab-content">

                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-3.jpg" alt="">
                                                    <span class="sale-badge-1">عرض!</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">
                                                        $190.00
                                                        <span>$220.00</span>
                                                    </h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->

                                    </div><!-- .op-tab-content end -->
                                    <div id="op-tab5" class="op-tab-content">

                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-1.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-2.jpg" alt="">
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">اسم المنتج</a></h5>
                                                    <h5 class="price">$140.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->

                                    </div><!-- .op-tab-content end -->
                                    <div id="op-tab6" class="op-tab-content">

                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-3.jpg" alt="">
                                                    <span class="sale-badge-1">عرض!</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">
                                                        $190.00
                                                        <span>$220.00</span>
                                                    </h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->
                                        <div class="col-md-3">

                                            <div class="product-box">
                                                <div class="product-preview">
                                                    <img src="{{URL::to('assets/site')}}/images/files/sliders/featured-products/img-4.jpg" alt="">
                                                    <span class="new-badge-1">جديد</span>
                                                    <ul class="product-meta">
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                                    </ul><!-- .product-meta end -->
                                                </div><!-- .product-preview end -->
                                                <div class="product-content">
                                                    <h5><a href="#">أسم المنتج</a></h5>
                                                    <h5 class="price">$84.00</h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!-- .rating end -->
                                                </div><!-- .product-content end -->
                                            </div><!-- .product-box end -->

                                        </div><!-- .col-md-3 end -->

                                    </div><!-- .op-tab-content end -->
                                </div><!-- .row end -->
                            </div><!-- .op-tab-container end -->

                        </div><!-- .col-md-12 end -->
                    </div><!-- .section-content end -->

                </div><!-- .row end -->
            </div><!-- .container end -->

        </div><!-- .flat-section end -->

        <!-- === Our Brands =========== -->
        <div class="flat-section our-brands">

            <div class="container">
                <div class="row">

                    <div class="section-content">
                        <div class="col-md-12">

                            <div class="brands-slider wow fadeIn" data-wow-delay="0.2s">
                                <ul class="owl-carousel">
                                    <li>
                                        <div class="slide">
                                            <a href="#"><img src="{{URL::to('assets/site')}}/images/files/brands/img-1.png" alt=""></a>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <a href="#"><img src="{{URL::to('assets/site')}}/images/files/brands/img-2.png" alt=""></a>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <a href="#"><img src="{{URL::to('assets/site')}}/images/files/brands/img-3.png" alt=""></a>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <a href="#"><img src="{{URL::to('assets/site')}}/images/files/brands/img-4.png" alt=""></a>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <a href="#"><img src="{{URL::to('assets/site')}}/images/files/brands/img-1.png" alt=""></a>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <a href="#"><img src="{{URL::to('assets/site')}}/images/files/brands/img-2.png" alt=""></a>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <a href="#"><img src="{{URL::to('assets/site')}}/images/files/brands/img-3.png" alt=""></a>
                                        </div><!-- .slide end -->
                                    </li>											
                                </ul>
                            </div><!-- .brands-slider end -->

                        </div><!-- .col-md-12 end -->
                    </div><!-- .section-content end -->

                </div><!-- .row end -->
            </div><!-- .container end -->

        </div><!-- .flat-section end -->

    </div><!-- #content-wrap -->

</section><!-- #content end -->

@stop