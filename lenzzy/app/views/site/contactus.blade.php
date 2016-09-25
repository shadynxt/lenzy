@extends('site.layout')

@section('title') 
اتصل بنا-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')









<section id="latest" class="down">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2> اتصل بنا </h2>
                <!--    <ul>
                        <li id="new" class="active">الاحدث</li>
                        <li id="price">حسب السعر</li>
                        <li id="sec-tion">حسب القسم</li>
                    </ul>  -->
                <div id="holdereffect" class="holdereffect">
                    <form action="{{URL::to('site/send')}}" method="post">
                        <input  type="mail" style="margin-bottom: 20px;" name="email" class="the_title form-control"  placeholder="بريدك الإلكتروني" required />
                        <input type="text" style="margin-bottom: 20px;" name="subject" class="the_title form-control"  placeholder="عنوان الرسالة" required />
                        <textarea style="margin-bottom: 20px; height: 200px;" name="message" class="the_replay form-control" placeholder="هنا يكتب نص الرسالة" required ></textarea>
                        <input type="submit" name="send" value="ارسال" class="the_submit btn btn-danger" />
                    </form>


                    <div class="clearfix"></div>
                </div>
                <!-- end of holdereffect -->
            </div>
            <!-- end of col 12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</section>







@stop