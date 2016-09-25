@extends('site.layout')

@section('title') 
تعديل بياناتي-{{$main->site_title}}
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

        <h3 class="works-title">تعديل بيانات  الحساب الشخصى</h3>



        <ul class="  nav-edit-profile" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">تعديل البيانات الشخصيه</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">تعديل كلمة السر</a></li>

        </ul>

        <div class="row">
            <div class="col-xs-12">

                <form action="{{URL::to('site/updateinfo/'.Auth::User()->id)}}" method="post" class="form-horizontal edit-profile">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">



                            <div class="make-ads-box">

                                <h3 class="form-price form-title">بياناتى الشخصيه</h3>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-4 col-xs-12 pull-right control-label">الاسم</label>

                                    <div class="col-md-6 col-sm-8 col-xs-12 pull-right">
                                        <input name="first_name" value="{{Auth::User()->first_name}}" placeholder="الاسم" class="form-control input-md"
                                               type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-sm-4 col-xs-12 pull-right control-label">البريد</label>

                                    <div class="col-md-6 col-sm-8 col-xs-12 pull-right">
                                        <input name="email" value="{{Auth::User()->email}}" placeholder="البريد" class="form-control input-md"
                                               type="email">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 col-sm-4 col-xs-12 pull-right control-label">الجوال</label>

                                    <div class="col-md-6 col-sm-8 col-xs-12 pull-right">
                                        <input name="telephone" value="{{Auth::User()->telephone}}" placeholder="الهاتف" class="form-control input-md"
                                               type="text">
                                    </div>
                                </div>

                                <!-- 
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-4 col-xs-12 control-label pull-right">النوع</label>

                                    <div class="col-md-6 col-sm-8 col-xs-12 pull-right">
                                        <label class="radio-inline" for="radios-0">  ذكر
                                        </label>
                                        <input name="radios" id="radios-0" value="1" checked="checked" type="radio">

                                        <label class="radio-inline" for="radios-1">     انثى
                                        </label>
                                        <input name="radios" id="radios-1" value="2" type="radio">


                                    </div>
                                </div>


                            
                                <div class="form-group">
                                    <label class="col-md-3  col-xs-12 control-label pull-right">تاريخ الميلاد</label>

                                    <div class="col-md-2  col-xs-4 pull-right">
                                        <select name="selectbasic" class="form-control">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2  col-xs-4 pull-right">
                                        <select name="selectbasic" class="form-control">
                                            <option value="1"> one</option>
                                            <option value="1"> two</option>
                                            <option value="1"> three</option>

                                        </select>
                                    </div>

                                    <div class="col-md-2  col-xs-4 pull-right">
                                        <select name="selectbasic" class="form-control">
                                            <option value="1">1990</option>
                                            <option value="1">1990</option>
                                            <option value="1">1990</option>
                                        </select>
                                    </div>
                                </div>  -->

                                <div class="form-group">
                                    <label class="col-md-3 col-sm-6 col-xs-6 control-label pull-right">&nbsp;</label>

                                    <div class="col-md-6 pull-right">
                                        <input type="submit" name="" value="حفظ" class="btn btn-success"/>
                                        <input type="reset" name="" value="الغاء" class="btn btn-danger"/>

                                    </div>
                                </div>



                            </div>
                        </div>

                </form>




                <!-- end of tab -->

                <div role="tabpanel" class="tab-pane" id="profile">

                    <form action="{{URL::to('site/updatepass/'.Auth::User()->id)}}" method="post">
                        <div class="make-ads-box">

                            <div class="form-group">
                                <label class="col-md-3 col-sm-4 col-xs-12 pull-right control-label">كلمه المرور</label>

                                <div class="col-md-6 col-sm-8 col-xs-12 pull-right">
                                    <input name="password" placeholder=" كلمه المرور" class="form-control input-md"
                                           type="password">
                                </div>
                            </div>



                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-3 col-sm-4 col-xs-12 pull-right control-label">تأكيد كلمه المرور </label>

                                <div class="col-md-6 col-sm-8 col-xs-12 pull-right">
                                    <input name="password_confirmation" placeholder="تأكيد كلمه المرور" class="form-control input-md"
                                           type="password">
                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-3 col-sm-6 col-xs-6 control-label pull-right">&nbsp;</label>

                                <div class="col-md-6 pull-right">
                                    <input type="submit" name="" value="حفظ" class="btn btn-success"/>
                                    <input type="reset" name="" value="الغاء" class="btn btn-danger"/>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>


                <!-- end of tab -->


            </div>
            <!--/ end of tab -->


        </div>
    </div>
</div>

</section>
@stop