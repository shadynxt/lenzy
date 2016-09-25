@extends('site.layout')

@section('title') 
استرجاع كلمه المرور-{{$main->site_title}}
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

        <h2>صفحة استرجاع كلمة المرور</h2>


        <div class="make-ads-box">

            <div class="row">

                <div class="col-md-8 col-sm-6 col-xs-12 pull-right">
                    <div class="login-form">
                        <h3>استرجع كلمه السر</h3>

                        <form action="{{URL::to('site/resetpass')}}" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">البريد الألكتروني</label>
                                <input type="email" name="email" class="form-control" placeholder="البريد الألكتروني">
                            </div>
                      

                            <div class="form-btn">
                                <button type="submit" class="btn btn-primary">استرجاع</button>
                            </div>
                        </form>

              
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>



@stop