@extends('site.layout')
@section('title') 
المقارنة-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')
<section id="cart-page" class="down" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>المقارنة</h2>
                <table class="table">
                    <tr class="main">
                        <td>بيانات</td>
                        <td>اسم المنتج </td>
                        <td>اسم المنتج  </td>
                        <td>اسم المنتج  </td>

                    </tr>
                    <tr>
                        <td class="col-lg-2"><div style="padding-top:90px">صورة</div></td>


                        @foreach($products as $image)
                        <td class="col-lg-3"><?php
                            $img = Ads::getAddimage($image->ads_id);
                            $imgx = json_decode($img);
                            ?> 
                            <a href="{{URL::to('site/product/'.$image->ads_id)}}"><img src="{{URL::to('assets/admin/img/tmp/'.$imgx[0])}}" /></a>
                        </td>

                        @endforeach


                    </tr>

                    <tr>


                        <td class="col-lg-2">السعر</td>

                        @foreach($products as $price)
                        <td class="col-lg-3">{{Ads::getAddprice($price->ads_id)}} ريال

                        </td>

                        @endforeach


                    </tr>

                    <tr>
                        <td class="col-lg-2">النوع</td>
                        @foreach($products as $name)
                        <td class="col-lg-3">{{Ads::getAddtitle($name->ads_id)}} 

                        </td>

                        @endforeach

                    </tr>


                    <tr>
                        <td class="col-lg-2">القسم</td>
                        @foreach($products as $section)
                        <td class="col-lg-3">{{Ads::getSectionName(Ads::getAddtitlesection($section->ads_id))}} 

                        </td>

                        @endforeach

                    </tr>




                    <tr>
                        <td class="col-lg-2">حالة التوفر	</td>

                        @foreach($products as $type)
                        <td class="col-lg-3"><?php $type = Ads::getAddtype($type->ads_id); ?>
                            @if($type == 1)
                            متوفر

                            @else  
                            غير متوافر حاليا

                            @endif

                        </td>

                        @endforeach



                    </tr>



                    <tr>
                        <td class="col-lg-2">الوصف	</td>

                        @foreach($products as $compare)
                        <td class="col-lg-3"><?php
                            $com = Ads::getAdddesc($compare->ads_id);
                            $commm = mb_substr($com, 0, 100, 'utf-8');
                            ?>
                            {{$commm}}

                        </td>

                        @endforeach



                    </tr>

                <!--    <tr>
                        <td class="col-lg-2">التقييم 	</td>
                        <td class="col-lg-3">
                            <div class="mystar">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>							
                            </div>
                        </td>
                        <td class="col-lg-3">
                            <div class="mystar">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>							
                            </div>							 

                        </td>
                        <td class="col-lg-3">

                            <div class="mystar">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>							
                            </div>	

                        </td>

                    </tr>  -->


                    <tr>
                        <td class="col-lg-2">شراء 	</td>



                        @foreach($products as $namex)
                        <td class="col-lg-3"> 
                            <a class="btn-success" href="{{URL::to('site/addtocart/'.$namex->ads_id)}}">شراء</a>
                        </td>

                        @endforeach


                    </tr>



                    <tr>
                        <td class="col-lg-2">حذف 	</td>


                        @foreach($products as $namexx)
                        <td class="col-lg-3"> 
                            <a class="btn-danger" href="{{URL::to('site/deletecompare/'.$namexx->id)}}">حذف</a>
                        </td>

                        @endforeach


                    </tr>




                </table>
            </div>
            <!-- end of col 12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</section>



@stop