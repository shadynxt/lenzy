@extends('site.layout')


@section('title') 

اضافة اعلان-{{$main->site_title}}
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


            {{ Form::open(array('url'=>'site/create' , 'files'=>true , 'id'=>'formads'))}}

            <div class="rows" style="margin-bottom: 20px;">

                {{ Form::select('ad_type'  , array('1'=>'اعلان جديد' , '2'=>'طلب أو استفسار') ,null, array('class'=>'forma form-control'))}}

            </div>
            <div class="rows" style="margin-bottom: 20px;" >
                <input type="text"  class="title form-control" name="ad_title" required placeholder="عنوان الإعلان"   />
            </div>
            <span class="tag_title" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>


            <div class="rows " style="margin-bottom: 20px;">

                {{ Form::select('city_id'  , $city ,null, array('class'=>'forma city_id form-control' , 'id'=>'city_id' ))}}

            </div>
            <div class="rows" style="margin-bottom: 20px;">
                {{ Form::select('section_id'  ,  $section  ,null,  array('class'=>'forma section section_id form-control' , 'id'=>'section_id' , 'required'=>'required'))}}

            </div>

            <div class="rows" style="margin-bottom: 20px;">
                {{Form::select('subsection_id' , [] , null , array('class'=>'form-control subsection_id'))}}

            </div>
            <div class="rows company" style="margin-bottom: 20px;">

                {{ Form::select('make_id'  ,  $make  ,null,  array('class'=>'forma section make_id form-control' , 'id'=>'make_id'))}}

            </div>
            <div class="rows company" style="margin-bottom: 20px;">
                {{ Form::select('model_id'  ,  []  ,null,  array('class'=>'forma section model_id form-control' , 'id'=>'model_id'))}}


            </div>
            <div class="rows company" style="margin-bottom: 20px;">

                {{ Form::select('year_id'  ,  $year  ,null,  array('class'=>'forma section year_id form-control' , 'id'=>'year_id'))}}

            </div>

            <div class="rows aqar" style="margin-bottom: 20px;">

                {{ Form::select('aqar_type'  ,  array(''=>'نوع العقار' ,'1'=>'ارض للبيع' , '2'=>'شقه للايجار ' ,'3'=>'شقه للبيع' ,'4'=>'فيلا للبيع ' ,'5'=>'فيلا للايجار' ,'6'=>'عماره للايجار' ,'7'=>'محل للتقبيل' ,'8'=>'محل للايجار','9'=>'مزرعه للبيع','10'=>'استراحه للايجار','11'=>'استراحه للبيع ','12'=>'بيت للبيع ','13'=>'بيت للايجار','14'=>'دور للايجار'  )  ,null,  array('class'=>'forma section form-control'))}}

            </div>
            <span class="tag_aqar" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>


            <span class="tag_google" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>

            <div class="rows" style="margin-bottom: 20px;">
                <input  class="thetags form-control" type="text" name="ad_tags"  placeholder="الكلمات الدليلية" />
            </div>
            <span class="tags" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>

            <div class="rows" style="margin-bottom: 20px;">
                <input  class="cotact form-control" type="text" name="ad_contact"  placeholder="وسيلة الإتصال هاتف أو بريد إلكتروني"  />
            </div>
            <span class="tags2" style="color:red; font-family:Tahoma;font-weight:normal;font-size:14px;"></span>


            <div class="rows" style="margin-bottom: 20px;">
                {{ Form::select('allow_comment'  ,  array('1'=>'السماح بالتعليقات' , '2'=>'عدم السماح للتعليقات ')  ,null,  array('class'=>'forma section make_id form-control' , 'id'=>'make_id'))}} <br /> <br />


                @if(Auth::check())
                @if(Auth::User()->admin == 0)
                {{ Form::select('ad_status'  ,  array('1'=>'تثبيت' , '2'=>'عدم التثبيت ')  ,null,  array('class'=>'forma section make_id form-control' , 'id'=>'make_id'))}}
                @endif
                @endif
            </div>

            <div id="imagesSRC" hidden=""></div>
            <div class="rows" style="margin-bottom: 20px;">
                <label>تفاصيل الإعلان : </label>
                <textarea id="details" name="description" required='required' class="form-control" style="height: 200px;"></textarea>

            </div>


            <h2 class="block-head">تحميل الصور</h2>
            <div class="rows upbox" style="margin-bottom: 20px;">

                <div class="info">
                    هل تعلم أن الصور تؤدي للبيع بمعدل أعلى بكثير؟ يمكنك إضافة  صور واضحة وأصلية. انواع الملفات المدعومة: jpg, png, gif.
                </div>


            </div>




            <br />


            {{ Form::token() }}
            {{ Form::close() }}







            <form action="" id="uploadForm" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    {{ Form::file('image',  array( 'id'=>'imageUpload' , 'class'=>'upup3'  , 'required'=>'required'))}} 
                    <img id="progImage" style="display:none;" width="50" height="50" src="{{URL::to('/assets/admin/img/loading.gif')}}">
                    <div class="imglink" id="showImages">

                    </div>
                </div>
            </form>


            <div style="text-align: center;">
                {{ Form::submit('اضافه الاعلان' , array('class'=>'btn btn-danger' , 'form'=>'formads'))}}


            </div>
        </section>

    </div>


</div>


@stop