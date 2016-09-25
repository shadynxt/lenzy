                        @foreach(Ads::orderBy('id' , 'desc')->take(8)->get() as $product)
                        <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                            <div class="inner">
                                <a href="{{URL::to('site/product/'.$product->id)}}">
                                    <?php $img = json_decode($product->image); ?>
                                    <img src="{{URL::to('assets/admin/img/tmp/'.$img[0])}}" />
                                </a>

                                <a href="{{URL::to('site/product/'.$product->id)}}" class="title"><?php echo mb_substr($product->ad_title, 0, 20, 'utf-8'); ?></a>
                                <span>{{$product->price}} ريال</span>
                                <div class="info">

                                    @if(Auth::check())



                                    @if(SiteController::countfav($product->id ,Auth::User()->id ) == false)

                                    <a onclick="return false;" href="#" class="like likke{{$product->id}} col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right"  post-id="{{$product->id}}" type-like="like">

                                        <span class="like{{$product->id}}"><i class=" fa fa-heart"></i></span>
                                        <span class="unlike{{$product->id}} hidden"><i class=" fa fa-heart red "></i></span>

                                    </a>
                                    @else 

                                    <a onclick="return false;" href="#" class="like likke{{$product->id}} col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right"  post-id="{{$product->id}}" type-like="unlike">
                                        <span class="unlike{{$product->id}} "><i class=" fa fa-heart red "></i></span>

                                        <span class="like{{$product->id}} hidden"><i class=" fa fa-heart"></i></span>

                                    </a>
                                    @endif
                                    @else  
                                    <a  href="{{URL::to('site/fav/'.$product->id)}}" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right">

                                        <span class="like{{$product->id}}"><i class=" fa fa-heart"></i></span>
                                        <span class="unlike{{$product->id}} hidden"><i class=" fa fa-heart red "></i></span>

                                    </a>

                                    @endif



                                    @if(Auth::check())
                                    <a onclick="return false;" href="#" class="compare  col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right"  post-id="{{$product->id}}" type-like="compare">

                                        <span> <i class=" fa  fa-exchange"></i></span>

                                    </a>
                                    <a onclick="return false;" href="#" class="addcart  col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right"  post-id="{{$product->id}}" type-like="addcart">

                                        <span><i class=" fa fa-shopping-cart"></i></span>

                                    </a>


                                    @else 
                                    <a href="{{URL::to('site/addtocompare/'.$product->id)}}" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right"><span> <i class=" fa  fa-exchange"></i></span></a>
                                    <a href="{{URL::to('site/addtocart/'.$product->id)}}" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right"> <span><i class=" fa fa-shopping-cart"></i></span></a>

                                    @endif
                                    <a href="{{URL::to('site/product/'.$product->id)}}" class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3"> <span><i class=" fa fa-external-link-square"></i></span></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>

                        @endforeach