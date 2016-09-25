@extends('admin.layout')
@section('content')
<div class="tab-pane" id="tab_4">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>نبذه عن القبيله 
            </div>

        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            {{ Form::open(array('url'=>'main/about' , 'files'=>true))}}


            <div class="form-body">







                <div class="form-group">

                    <div class="col-md-9">
                        <textarea id="editor2_error" class="ckeditor form-control" placeholder="مثال :  موقع يهتم بتوفيق بين البائع و المشتري و عرض الاعلانات لبيعها " name="form_bout"  rows="12" data-error-container="#editor2_error">{{$m->form_bout}}</textarea>
                        <script>

                            CKEDITOR.replace('form_bout');
                        </script>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label"> صوره   </label>
                    <td>{{ Form::file('image' , null , array('class'=>'form-control')) }}</td>

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