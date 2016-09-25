@extends('site.layout')

@section('title') 
تسجيل مستخدم جديد-{{$main->site_title}}
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

        <h2>صفحة التسجيل</h2>


        <div class="make-ads-box">
            <p class="our-register">التسجيل معنا يمكنك من البيع والشراء والتفاعل مع الاعضاء سجل معنا الان <span
                    class="free"> </span></p>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 pull-right col-border">
                    <div class="register-form">
                        <h3>تسجيل حساب جديد</h3>

                        <form action="{{URL::to('site/createuserrigster')}}" method="post">


                            <div class="form-group">
                                <label for="exampleInputEmail1">الأسم</label>
                                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1"
                                       placeholder="الأسم">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">بريدك الالكتروني</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="بريدك الالكتروني">
                            </div>
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input type="password" name="password" class="form-control" placeholder="كلمة السر">
                            </div>
                            <div class="form-group">
                                <label>تأكيد كلمة السر</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="تأكيد كلمة السر">
                            </div>


                            <button type="submit" class="btn btn-success">تسجيل جديد</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 pull-right">
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
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>


@stop