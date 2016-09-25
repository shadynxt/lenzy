@extends('site.layout')
@section('title') 
دخول الأعضاء-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')










<section class="make-ads wow fadeIn down">
    <div class="container">

        <h2>صفحة الدخول</h2>


        <div class="make-ads-box">
            <p class="our-register">التسجيل معنا يمكنك من البيع والشراء والتفاعل مع الاعضاء سجل معنا الان <span
                    class="free"> <a href="{{URL::to('site/registernew')}}">من هنا</a></span></p>

            <div class="row">

                <div class="col-md-8 col-sm-6 col-xs-12 pull-right">
                    <div class="login-form">
                        <h3>دخول الأعضاء</h3>

                        <form action="{{URL::to('site/login')}}" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">الأسم</label>
                                <input type="text" name="first_name" class="form-control" placeholder="الأسم">
                            </div>
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input type="password" name="password" class="form-control" placeholder="كلمة السر">
                            </div>

                            <div class="form-btn">
                                <button type="submit" class="btn btn-primary">دخول الأعضاء</button>
                                <a href="{{URL::to('site/forgetpass')}}">نسيت كلمة المرور ؟</a>
                            </div>
                        </form>

                        <!--
                                   <a class="form-control btn btn-large btn-primary" href="{{URL::to('site/loginwithfacebook')}}" style="margin-top: 20px;"><i class="fa fa-facebook-square"></i></a>
                                   <a class="form-control btn btn-large btn-danger" href="{{URL::to('site/loginwithgoogle')}}" style="margin-top: 20px;"><i class="fa fa-google-plus-square"></i></a>
                                   <a class="form-control btn btn-large "  href="{{URL::to('site/loginwithtwitter')}}" style="margin-top: 20px; background: #C0DEED;"><i class="fa fa-twitter"></i></a>
                        -->
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>












@stop