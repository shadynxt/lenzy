@extends('site.layout')

@section('title') 
{{ $a->ad_title}}-{{$main->site_title}}
@stop
@section('desc') 
{{ $a->ad_title}}
@stop
@section('key') 

<?php if (!empty($a->ad_tags)) { ?>

    <?php
    $var = $a->ad_tags;
    $tags = explode(' ', $var);
    foreach ($tags as $tag) {
        $tag = trim($tag);
        echo "$tag , ";
    }
    ?>
<?php } ?>

@stop


@section('content')
<section id="product-page" class="down">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                    <div class="big-image">
                        <div class="loader"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>

                        <?php $img = json_decode($a->image); ?>

                        <div  id='ex1'>
                            <img  onmousemove="Coordinates(event)" onmouseleave="myOverFunction()" id="product-img" src="{{URL::to('assets/admin/img/tmp/'.$img[0])}}"  />


                        </div>
                    </div>
                    <div id="imgs">

                        <div id="owl-demo4" class="owl-carousel">


                            @foreach(json_decode($a->image) as $img3 )


                            <div class="mythumb">
                                <img class="thump-img" src="{{URL::to('assets/admin/img/tmp/'.$img3)}}" />
                            </div>
                            @endforeach




                        </div>


                    </div>
                </div>
                <!-- end of col 6 -->
     <style>
#here{position: relative;overflow: hidden; }
.dir{direction: ltr !important}
#here img{position: relative;top:0;left:100%;max-width:1250px }
</style>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
<div class="dir">
                    <div id="here"></div>
</div>
                    <a href="#" class="product-name">{{$a->ad_title}}</a>
                    <div id="product-info">
                        <a href="{{URL::to('site/fav/'.$a->id)}}" id="addfav"><i class="fa fa-heart"></i> اضف للمفضلة</a>
                        <a href="{{URL::to('site/addtocart/'.$a->id)}}" id="addcart"><i class="fa fa-shopping-cart"></i> اضف للسلة</a>
                        <a href="{{URL::to('site/addtocompare/'.$a->id)}}" id="compare"><i class="fa fa-arrows-h"></i> اضف للمقارنة </a>
                        <div id="share">
                            مشاركة :
                        </div>
                        <a href="#" id="price">{{$a->price}} ريال </a>
                    </div>
                    <!-- end of info -->
                </div>
                <!-- end of col 6 -->
                <div style="padding:35px 0" class="clearfix"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right ">
                    <div class="product-name">نبذة عن المنتج </div>
                    <p id="product-detials">
                        {{$a->description}}
                    </p>
                </div>
                <!-- end of col 6 -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  ">
                    <div class="product-name">منتجات مميزة </div>
                    <div id="owl-demo3" class="owl-carousel">

                        @foreach($admake  as  $productrandom)
                        <div class="item">
                            <article>
                                <div class="inner">
                                    <a href="">
                                        <?php $img = json_decode($productrandom->image); ?>
                                        <img src="{{URL::to('assets/admin/img/tmp/'.$img[0])}}" />
                                    </a>
                                    <a href="{{URL::to('site/product/'.$productrandom->id)}}" class="title">{{$productrandom->ad_title}}</a>
                                    <span>{{$productrandom->price}} ريال</span>
                                </div>
                            </article>
                        </div>

                        @endforeach

                    </div>
                    <!-- end of owl-demo2 -->
                </div>
                <!-- end of col 6 -->
            </div>
            <!-- end of col 12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</section>




@stop