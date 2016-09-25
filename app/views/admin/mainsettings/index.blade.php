@extends('admin.layout')
@section('content')
<div class="tab-pane" id="tab_4">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>الاعدادات العامه للموقع
            </div>

        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            {{ Form::open(array('url'=>'main' , 'files'=>true ,  'class'=>'form-horizontal form-row-seperated'))}}

            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">اسم الموقع</label>
                    <div class="col-md-9">
                        <input type="text" placeholder="اسم الموقع" name="site_title" value="{{$m->site_title}}" class="form-control"/>
                        <span class="help-block">
                            هذا الاسم الذي يكون عنوان الموقع من اعلي 
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">كلمات مفتاحيه </label>
                    <div class="col-md-9">
                        <input type="text" name="site_desc" value="{{$m->site_desc}}" placeholder="مثال : حراج سيارات  و حراج عقارات" class="form-control"/>
                        <span class="help-block">
                            هذه الكلمات تساعد علي الوصول للموقع بسهوله في محركات البحث
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"> وصف قصير للموقع </label>
                    <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" placeholder="مثال :  موقع حراج لبيع و شراء كل شئ بدون اي وسيط" rows="6" name="site_comment"  data-error-container="#editor1_error">{{$m->site_comment}}</textarea>
                        <span class="help-block">
                            هذه الكلمات تساعد علي الوصول للموقع بسهوله في محركات البحث
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"> البريد الالكتروني </label>
                    <div class="col-md-9">
                        <input type="text" name="site_email"  value="{{$m->site_email}}" placeholder="مثال : haraj@jaraj.com" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">  رقم الجوال  </label>
                    <div class="col-md-9">
                        <input type="text" name="site_telephone" value="{{$m->site_telephone}}" placeholder="مثال : 0551896251" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>

                <!--
                <div class="form-group">
                    <label class="control-label col-md-3"> رابط الفيديو الموجود بالموقع </label>
                    <div class="col-md-9">
                        <input type="text" name="vid" value="{{$m->vid}}" placeholder="مثال : " class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label  col-md-3">  عدد الصور للعضويات الفضيه</label>
                    <div class=" col-lg-2 col-md-9">
                        <input type="text" name="site_1" value="{{$m->site_1}}" placeholder="مثال : 0551896251" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">  عدد الصور للعضويات الذهبيه </label>
                    <div class=" col-lg-2 col-md-9">
                        <input type="text" name="site_2" value="{{$m->site_2}}" placeholder="مثال : 0551896251" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">  عدد الصور للعضويات البرونزيه</label>
                    <div class=" col-lg-2 col-md-9">
                        <input type="text" name="site_3" value="{{$m->site_3}}" placeholder="مثال : 0551896251" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  col-md-3">  عدد  الاعلانات  للعضويات الفضيه</label>
                    <div class=" col-lg-2 col-md-9">
                        <input type="text" name="site_ads_1" value="{{$m->site_ads_1}}" placeholder="مثال : 0551896251" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  col-md-3">  عدد الاعلانات للعضويات  الذهبيه </label>
                    <div class=" col-lg-2 col-md-9">
                        <input type="text" name="site_ads_2" value="{{$m->site_ads_2}}" placeholder="مثال : 0551896251" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  col-md-3">  عدد الاعلانات للعضويات البرونزيه</label>
                    <div class=" col-lg-2 col-md-9">
                        <input type="text" name="site_ads_3" value="{{$m->site_ads_3}}" placeholder="مثال : 0551896251" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                
                
                -->
                <div class="form-group">
                    <label class="control-label col-md-3"> رابط الفيس  بوك     </label>
                    <div class="col-md-9">
                        <input type="text" name="site_fb"  value="{{$m->site_fb}}" placeholder="مثال : facebook.com/yourname" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">  رابط التويتر   </label>
                    <div class="col-md-9">
                        <input type="text" name="site_twiter" value="{{$m->site_twiter}}" placeholder="مثال : https://twitter.com/yorname" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">   رابط الانستجرام  </label>
                    <div class="col-md-9">
                        <input type="text" name="site_instgram" value="{{$m->site_instgram}}" placeholder="مثال : http://instagram.com/yourname" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3">   رابط جوجل بلس  </label>
                    <div class="col-md-9">
                        <input type="text" name="site_youtube" value="{{$m->site_youtube}}" placeholder="مثال : https://www.youtube.com/yourname" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>  


                <div class="form-group">
                    <label class="control-label col-md-3">   رابط صوره الاعلان العلوي </label>
                    <div class="col-md-9">
                        <input type="text" name="site_ads_1" value="{{$m->site_ads_1}}" placeholder="مثال : https://www.youtube.com/yourname" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">   الرابط المشار اليه الاعلان </label>
                    <div class="col-md-9">
                        <input type="text" name="site_ads_2" value="{{$m->site_ads_2}}" placeholder="مثال : https://www.youtube.com/yourname" class="form-control"/>
                        <span class="help-block">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">الفيديو التعريفي </label>
                    <td>{{ Form::file('vid_vid' , null , array('class'=>'form-control')) }}</td>

                </div>


                <video width="320" height="240" controls>
                    <source src="{{URL::to($m->vid_vid)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>



                <div class="form-group">
                    <label class="control-label col-md-3"> نبذه عنا</label>

                    <div class="col-md-9">
                        <textarea  class="ckeditor form-control" placeholder="مثال :  يجب اتمام الملف الشخصي و عدم وضع اعلانات مخله" name="site_about"  rows="12" data-error-container="#editor2_error">{{$m->site_about}}</textarea>
                        <script>

                            CKEDITOR.replace('site_about');
                        </script>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3"> سياسه المتجر</label>

                    <div class="col-md-9">
                        <textarea  class="ckeditor form-control" placeholder="مثال :  يجب اتمام الملف الشخصي و عدم وضع اعلانات مخله" name="site_condition"  rows="12" data-error-container="#editor2_error">{{$m->site_condition}}</textarea>
                        <script>

                            CKEDITOR.replace('site_condition');
                        </script>

                    </div>
                </div>

                <!--    <div class="form-group">
                       <label class="control-label col-md-3"> عموله استخدام الموقع</label>
   
                       <div class="col-md-9">
                           <textarea id="editor2_error" class="ckeditor form-control" placeholder="مثال :  موقع يهتم بتوفيق بين البائع و المشتري و عرض الاعلانات لبيعها " name="site_about"  rows="12" data-error-container="#editor2_error">{{$m->site_about}}</textarea>
                           <div id="editor2_error">
                           </div>
                           <span class="help-block">
                           </span>
                       </div>
                   </div>  -->


                <!-- <div class="form-group">
                     <label class="control-label col-md-3"> عن اوتو شو</label>
 
                     <div class="col-md-9">
                         <textarea id="editor2_error" class="ckeditor form-control" placeholder="مثال :  موقع يهتم بتوفيق بين البائع و المشتري و عرض الاعلانات لبيعها " name="site_why"  rows="12" data-error-container="#editor2_error">{{$m->site_why}}</textarea>
                         <div id="editor2_error">
                         </div>
                         <span class="help-block">
                         </span>
                     </div>
                 </div> -->
                <div class="form-group">
                    <label class="control-label col-md-3">حاله الموقع</label>
                    <div class="col-md-9">
                        {{ Form::select('close',  array('1' => 'مفتوح' , '2' => 'مغلق') ,$m->close, array('class'=>'form-control')) }}

                        <span class="help-block">
                            اختر حاله الموقع
                        </span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3"> رساله اغلاق الموقع</label>

                    <div class="col-md-9">
                        <textarea  class="ckeditor form-control" placeholder="مثال :  يجب اتمام الملف الشخصي و عدم وضع اعلانات مخله" name="message"  rows="12" data-error-container="#editor2_error">{{$m->message}}</textarea>
                        <script>

                            CKEDITOR.replace('message');
                        </script>

                    </div>
                </div>


                <div class="form-actions fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green"><i class="fa fa-pencil"></i> تعديل</button> 

                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::token()}}
                {{ Form::close() }}

                <!-- END FORM-->
            </div>
        </div>
    </div>

    @stop