@extends('admin.layout')
@section('content')
<h3 class="page-title">
    <small> </small>
    تعديل  المنتج    </h3>
<div class="col-md-12">

    <ul class="page-breadcrumb breadcrumb">
        <li class="btn-group">

            <ul class="dropdown-menu pull-right" role="menu">


                <li class="divider">
                </li>

            </ul>
        </li>
        <li>
            <i class="fa fa-home"></i>
            <a href="#">
                الرئيسيه
            </a>
            <i class="fa fa-angle-left"></i>
        </li>
        <li>
            <a href="#">
                المنتج
            </a>
            <a href="#">
                تعديل  
            </a>
        </li>

    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>

<div style="min-height: 1200px;">
    <div id="tab_1-1" class="tab-pane active">
        {{ Form::open(array('url'=>'ads/update/'. $a->id , 'files'=>true , 'id'=>'forma'))}}
        <div class="form-group col-lg-12">
            <label class="control-label"> اسم المنتج  </label>
            <input type="text" name="ad_title"  value="{{$a->ad_title}}" placeholder="مثال :منتج  جديد" class="form-control"/>
        </div>
        <div class="form-group col-lg-12">
            <label class="control-label">     القسم    </label>
            {{Form::select('section_id' , $section , $a->section_id , array('class'=>'form-control'))}}
        </div>






        <div class="form-group col-lg-12">
            <label class="control-label">     حاله المنتج    </label>
            {{Form::select('ad_type' , array('1'=>'متوافر'  , '2'=>'غير متوافر حاليا') , $a->ad_type , array('class'=>'form-control'))}}
        </div>

        <div class="form-group col-lg-12">
            <label class="control-label">     نوع  المنتج    </label>
            {{Form::select('star' , array('1'=>'عادي'  , '2'=>'مميز  ') , $a->star , array('class'=>'form-control'))}}
        </div>



        <div class="form-group col-lg-2">
            <label class="control-label"> وقت العرض ان وجد </label>
            <input type="number" name="ad_time" value="{{$a->ad_time}}" placeholder="مثال :   6 يوم " class="form-control"/>
        </div>

        <div class="form-group col-lg-2">
            <label class="control-label">سعر المنتج </label>
            <input type="number" name="price" value="{{$a->price}}" placeholder="مثال :  600 ريال " class="form-control"/>
        </div>

        <div class="form-group col-lg-12">
            <label class="control-label">  كلمات دليلية  </label>
            <input type="text" name="ad_tags" value="{{$a->ad_tags}}" placeholder="مثال :منتج جديد ,  قريبا بالاسواق , عرض خاص" class="form-control"/>
            <p class="help-block" style="color:red" >الكلمات الدليلية تقوي من ظهور منتجك في محركات البحث  </p>

        </div>

        <div class="form-group col-lg-12">
            <label class="control-label col-md-3"> وصف المنتج</label>

            <div class="col-md-9">
                <textarea  class="ckeditor form-control" placeholder="مثال :  منتج ذات جوده عالية و متوافر بجميع الفروع" name="description"  rows="12" data-error-container="#editor2_error">{{$a->description}}</textarea>
                <script>

                    CKEDITOR.replace('description');
                </script>

            </div>
        </div>





        <div id="imagesSRC" hidden=""></div>
        <div id="deletedImages" hidden=""></div>




        <div class="margiv-top-10">

        </div>
    </div>

    {{ Form::token() }}
    {{ Form::close()}}


    <form action="" id="uploadForm" method="post" enctype="multipart/form-data">
        <div class="form-group col-lg-12">
            {{ Form::file('image',  array( 'id'=>'imageUpload' ))}} 
            <p class="help-block" style="color:red" >يمكنك رفع صور كثيره </p>
            <div id="showImages">

                @if(count(json_decode($a->image)))
                <?php foreach (json_decode($a->image) as $image) { ?>
                    <div style="margin-bottom: 20px; float: right;" >
                        <img src="<?php echo URL::to('') . '/assets/admin/img/tmp/' . $image; ?>" width="50" height="50"  />
                        <a href="#" class="deleteImage" for="{{$image}}">مسح</a>
                    </div>
                <?php } ?>

                @else  

                @endif
            </div>
        </div>
    </form>
    <div class="form-group col-lg-2">
        {{ Form::submit('تعديل ' , array('class'=>'btn green' , 'form'=>'forma'))}}
    </div>
</div>
</div>

@stop
