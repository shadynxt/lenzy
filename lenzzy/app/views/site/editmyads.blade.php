@extends('site.layout')
@section('title') 
تعديل اعلاناتي-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')

<div id="inner" class="row">

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p04"> 
        <section>



            <div class="warning">
                إستخدامك لنموذج إضافة اعلان جديد معناه قبولك <a style="color:blue;" href="{{URL::to('site/permission')}}">بشروط و معاهدة استخدام الموقع</a> وأيضاً <a style="color:blue;" href="{{URL::to('site/commession')}}">عمولة الموقع</a>
            </div>


            {{ Form::open(array('url'=>'site/updatemyads/'.$ads->id , 'files'=>true , 'id'=>'formads'))}}

            <div class="rows" style="margin-bottom: 20px;">

                {{ Form::select('ad_type'  , array('1'=>'اعلان جديد' , '2'=>'طلب أو استفسار') ,$ads->ad_type, array('class'=>'forma form-control'))}}

            </div>
            <div class="rows" style="margin-bottom: 20px;" >
                <input type="text"  class="title form-control" value="{{$ads->ad_title}}" name="ad_title" required placeholder="عنوان الإعلان"  style="border-radius: 5px;" />
            </div>
            <span class="tag_title" ></span>


            <div class="rows " style="margin-bottom: 20px;">

                {{ Form::select('city_id'  , $city ,$ads->city_id, array('class'=>'forma city_id form-control' , 'id'=>'city_id' ))}}

            </div>
            <div class="rows" style="margin-bottom: 20px;">
                {{ Form::select('section_id'  ,  $section  ,$ads->section_id,  array('class'=>'forma section section_id form-control' , 'id'=>'section_id' , 'required'=>'required'))}}

            </div>
            <div class="rows" style="margin-bottom: 20px;">
                {{Form::select('subsection_id' , [] , $ads->subsection_id , array('class'=>'form-control subsection_id' , 'id'=>'subsection_id'))}}

            </div>
            <div class="rows company" style="margin-bottom: 20px;">




                {{ Form::select('make_id'  ,  $make  ,$ads->make_id,  array('class'=>'forma section make_id make_idd form-control' , 'id'=>'make_id make_idd'))}}

            </div>
            <div class="rows company" style="margin-bottom: 20px;">
                {{ Form::select('model_id'  ,  []  ,$ads->model_id,  array('class'=>'forma section model_id model_idd form-control' , 'id'=>'model_id model_idd'))}}


            </div>
            <div class="rows company" style="margin-bottom: 20px;">

                {{ Form::select('year_id'  ,  $year  ,$ads->year_id,  array('class'=>'forma section year_id form-control' , 'id'=>'year_id'))}}


            </div>

            <div class="rows aqar" style="margin-bottom: 20px;">

                {{ Form::select('aqar_type'  ,  array(''=>'نوع العقار' ,'1'=>'ارض للبيع' , '2'=>'شقه للايجار ' ,'3'=>'شقه للبيع' ,'4'=>'فيلا للبيع ' ,'5'=>'فيلا للايجار' ,'6'=>'عماره للايجار' ,'7'=>'محل للتقبيل' ,'8'=>'محل للايجار','9'=>'مزرعه للبيع','10'=>'استراحه للايجار','11'=>'استراحه للبيع ','12'=>'بيت للبيع ','13'=>'بيت للايجار','14'=>'دور للايجار'  )  ,$ads->aqar_type,  array('class'=>'forma section form-control'))}}

            </div>
            <span class="tag_aqar" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>


            <span class="tag_google" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>

            <div class="rows" style="margin-bottom: 20px;">
                <input  class="thetags form-control" type="text" value="{{$ads->ad_tags}}" name="ad_tags"  placeholder="الكلمات الدليلية"  />
            </div>
            <span class="tags" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>

            <div class="rows" style="margin-bottom: 20px;">
                <input  class="cotact form-control" type="text" value="{{$ads->ad_contact}}" name="ad_contact"  placeholder="وسيلة الإتصال هاتف أو بريد إلكتروني"  />
            </div>
            <span class="tags2" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>


            <div class="rows" style="margin-bottom: 20px;">

                {{ Form::select('allow_comment'  ,  array('1'=>'السماح بالتعليقات' , '2'=>'عدم السماح للتعليقات ')  ,$ads->allow_comment,  array('class'=>'forma section make_id form-control' , 'id'=>'make_id'))}} <br /> <br />
                @if(Auth::check())
                @if(Auth::User()->admin == 0)
                {{ Form::select('ad_status'  ,  array('1'=>'تثبيت' , '2'=>'عدم التثبيت ')  ,$ads->ad_status,  array('class'=>'forma section make_id form-control' , 'id'=>'make_id'))}}
                تثبيت الاعلان (للمديرين فقط )
                @endif
                @endif
            </div>

            <div id="imagesSRC" hidden=""></div>
            <div id="deletedImages" hidden=""></div>
            <div class="rows" style="margin-bottom: 20px;">
                <label>تفاصيل الإعلان : </label>
                <textarea id="details"  class="form-control" style="height:200px;"name="description" required='required'>{{$ads->description}}</textarea>

            </div>


            <h2 class="block-head">تحميل الصور</h2>
            <div class="rows upbox">

                <div class="info">
                    هل تعلم أن الصور تؤدي للبيع بمعدل أعلى بكثير؟ يمكنك إضافة  صور واضحة وأصلية. انواع الملفات المدعومة: jpg, png, gif.
                </div>


            </div>
            <br />
            <br />
            <br />








            {{ Form::token() }}
            {{ Form::close() }}




            <form action="" id="uploadForm" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    {{ Form::file('image',  array( 'id'=>'imageUpload' , 'class'=>'upup3 form-control' ))}} 
                    <img id="progImage" style="display:none;" width="50" height="50" src="{{URL::to('/assets/admin/img/loading.gif')}}">

                    <div class="imglink" id="showImages">
                        @if(json_decode($ads->image))
                        <?php foreach (json_decode($ads->image) as $image) { ?>
                            <div style="float:right;">
                                <img  class="img-icon" src="<?php echo URL::to('') . '/assets/admin/img/tmp/' . $image; ?>" width="150" height="150" />
                                <a href="#" class="deleteImage" for="{{$image}}">delete</a>
                            </div>
                        <?php } ?>

                        @else  


                        @endif
                    </div>
                </div>
            </form>

            <div style="text-align: center;" class="col-lg-12" style="margin-bottom: 20px; margin-top: 50px;">
                {{ Form::submit('تعديل  الاعلان' , array('class'=>'btn btn-info press' , 'form'=>'formads'))}}


            </div>




        </section>

        <script type="text/javascript">
            $(document).ready(function () {




                $.ajax({
                    url: "{{URL::to('site/modajax')}}",
                    type: "POST",
                    data: {make_id: $('.make_idd').val()},
                    dataType: "json"

                }).done(function (data) {

                    $('.model_idd').html('');

                    $('.model_idd').append('<option value="">اختر  الموديل     </option>');
                    for (i = 0; i < data.length; i++) {

                        $('.model_idd').append('<option value="' + data[i].id + '">' + data[i].mod_name + '</option>');
                    }
                }).fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                });





                $.ajax({
                    url: "{{URL::to('site/modpr')}}",
                    type: "POST",
                    data: {id: <?php echo $ads->id ?>},
                    dataType: "json"

                }).done(function (data) {

                    $('.model_id option[value="' + data['model_id'] + '"]').attr("selected", "selected");



                }).fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                });





            });</script>


        <script type="text/javascript">
            $(document).ready(function () {




                $.ajax({
                    url: "{{URL::to('site/modajax2')}}",
                    type: "POST",
                    data: {section_id: $('.section_id').val()},
                    dataType: "json"

                }).done(function (data) {

                    $('.subsection_id').html('');

                    $('.subsection_id').append('<option value="">اختر  القسم الفرعي     </option>');
                    for (i = 0; i < data.length; i++) {

                        $('.subsection_id').append('<option value="' + data[i].id + '">' + data[i].subsection_name + '</option>');
                    }
                }).fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                });





                $.ajax({
                    url: "{{URL::to('site/modpr2')}}",
                    type: "POST",
                    data: {id: <?php echo $ads->id ?>},
                    dataType: "json"

                }).done(function (data) {

                    $('.subsection_id option[value="' + data['subsection_id'] + '"]').attr("selected", "selected");



                }).fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);
                });





            });</script>
    </div>


</div>

@stop