<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="">
            <meta name="keywords" content="">

                <title>

                </title>
                <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
                {{ HTML::script('assets/site/editor/js/jquery-ui-1.8.13.custom.min.js')}}
                <!--  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">  -->

                <!--     <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  -->
                {{ HTML::script('assets/site/editor/js/jquery-1.6.1.min.js')}}
                {{ HTML::script('assets/site/js/code.js')}}
                <!--   start for message alert  -->
                {{ HTML::script('assets/site/js/message.js')}}
                {{ HTML::style('assets/site/style/message.css')}}
                <!--   end  for message alert  -->
                <!--   start for asstes for google map -->
                <script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=ar"></script>
                {{ HTML::script('assets/site/js/jquery-gmaps-latlon-picker.js')}}
                {{ HTML::style('assets/site/style/jquery-gmaps-latlon-picker.css')}}
                <!--  end of google map assets -->



                <script type="text/javascript">
$(document).ready(function () {
    $('.thelogin').hide();
    $('#login-sub').click(function () {
        $('.thelogin').slideDown();
        event.preventDefault();
    });


    $('.make_id').on('change', function () {

        $.ajax({
            url: "{{URL::to('mod/modajax')}}",
            type: "POST",
            data: {make_id: $(this).val()},
            dataType: "json"

        }).done(function (data) {

            $('.model_id').html('');

            $('.model_id').append('<option value="">اختر  الموديل     </option>');
            for (i = 0; i < data.length; i++) {

                $('.model_id').append('<option value="' + data[i].id + '">' + data[i].mod_name + '</option>');
            }
        }).fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    });
    $('.make_idd').on('change', function () {

        $.ajax({
            url: "{{URL::to('mod/modajax')}}",
            type: "POST",
            data: {make_id: $(this).val()},
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
    });




});</script>

                <script>
                    $(function () {
                        $("#tabs").tabs();


                    });</script>

                <script type="text/javascript" charset="utf-8">
                    $().ready(function () {



                        $('.aqar').hide();
                        $('.section').change(function () {
                            var value = $('.section').val();
                            if (value == 2) {
                                $('.aqar').show();
                            } else {
                                $('.aqar').hide();
                            }
                        });
                        $('.company').hide();
                        $('.section').change(function () {
                            var value = $('.section').val();
                            if (value == 1) {
                                $('.company').show();
                            } else {
                                $('.company').hide();
                            }
                        });


                        $('.thetags').focus(function () {
                            $('.tags').html('مثال ( كامري  كورولا  ماكسيما  ألتيما بي_ام_دبليو )');
                        });
                        $('.thetags').blur(function () {
                            $('.tags').html('');
                        });
                        $('.cotact').focus(function () {
                            $('.tags2').html('مثال ( 0551896251)');
                        });
                        $('.cotact').blur(function () {
                            $('.tags2').html('');
                        });
                        $('.google').focus(function () {
                            $('.tag_google').html('مثال ( اختيارك للموقع يتيح لمشتري مرونه اكتر في عمليه الشراء)');
                        });
                        $('.google').blur(function () {
                            $('.tag_google').html('');
                        });
                        $('.title').focus(function () {
                            $('.tag_title').html('مثال ( تحديد نوع الاعلان بدقه يؤدي الي بيع منتجك بسرعه و ظهوره في البحث بشكل سليم)');
                        });
                        $('.title').blur(function () {
                            $('.tag_title').html('');
                        });



                    })


                </script>

                <!-- jQuery and jQuery UI -->
                {{ HTML::style('assets/site/editor/css/smoothness/jquery-ui-1.8.13.custom.css')}}
                <!-- elRTE -->
                {{ HTML::script('assets/site/editor/js/elrte.full.js')}}
                {{ HTML::style('assets/site/editor/css/elrte.full.css')}}
                <!-- elRTE translation messages -->
                {{ HTML::script('assets/site/editor/js/i18n/elrte.ar.js')}}

                <!-- elRTE -->


                {{ HTML::style('assets/site/style/style.css')}}





                </head>
                <body>

                    <div class="wrapper">
                        <header>
                            <div id="slogo"><a href="{{URL::to('/')}}">
                                    {{ HTML::image('assets/site/images/logo.png')}}
                            </div>
                            <ul class="menu">
                                <li>{{ HTML::image('assets/site/images/home-icon.png')}} <a href="{{URL::to('/')}}">الرئيسية</a></li>
                                @if(count($sec))

                                @foreach($sec as $cc)

                                <li>{{ HTML::image($cc->image , null  , array('height'=>'11' , 'width'=>'25'))}} <a href="">{{$cc->section_name}} </a></li>
                                @endforeach
                                @else

                                @endif

                            </ul>

                        </header>


