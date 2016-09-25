@extends('site.layout')
@section('title') 
المفضلة-{{$main->site_title}}
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
                <h2>قائمة المفضلة</h2>

                <table class="table">
                    <tr class="main">
                        <td>#</td>
                        <td>اسم المنتج </td>
                        <td>القسم </td>
                        <td>السعر </td>
                        <td>حذف </td>
                    </tr>
                    @if(count($products))
                    @foreach($products as $product)
                    <tr>

                        <td class="col-lg-3">{{$product->id}}</td>
                        <td class="col-lg-4"><a href="{{URL::to('site/product/'.$product->ads_id)}}">{{Ads::getAddtitle($product->ads_id)}}</a>





                        </td>
                        <td class="col-lg-2">{{Ads::getSectionName(Ads::getAddtitlesection($product->ads_id))}}</td>
                        <td class="col-lg-1">{{Ads::getAddprice($product->ads_id)}}</td>
                        <td class="col-lg-1">

                            <a href="{{URL::to('site/deletefav/'. $product->id )}}">حذف</a>
                        </td>
                    </tr>

                    @endforeach

                    @else  
     

                    @endif


                </table>
            </div>
            <!-- end of col 12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</section>








@stop