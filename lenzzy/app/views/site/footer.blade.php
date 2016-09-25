<footer>
    <div class="footer_top text-center">
        <div class="copyrights">جميع الحقوق محفوظة لمؤسسة عروض حراج للتسويق الالكتروني</div>
    </div>
    <div class="footer_bottom">
        <div class="col-md-4 most most_in">
            <ul>


                @if(count($x))
                @foreach($x  as $xx)
                <li><a href="{{URL::to('site/allcityads/'. $xx->id)}}">

                        {{$xx->city_name}}</a></li>


                @endforeach

                @else



                @endif

            </ul>
        </div>
        <div class="col-md-4 most">
            <ul>
                <li><a href="{{URL::to('site/commession')}}">حساب عمولة الموقع</a></li>
                <li><a href="{{URL::to('site/discount')}}">نظام الخصم</a></li>

                <li><a href="{{URL::to('site/permission')}}">معاهدة إستخدام الموقع</a></li>
            </ul>
        </div>
        <div class="col-md-4 most">
            <ul>
                <li><a href="{{URL::to('site/contactus')}}">اتصل بنا</a></li>
                <li><a href="{{URL::to('site/blacklist')}}">القائمة السوداء</a></li>
                <li><a href="{{URL::to('site/notallowed')}}">قائمة السلع والإعلانات الممنوعة</a> </li>
                <li><a href="#">الانتقال لمنتدى السيارات</a></li>
                <li><a href="#"><i class="fa fa-android"></i> <i class="fa fa-apple"></i> تطبيق حراج</a></li>
            </ul>
        </div>
    </div>
</footer>
<!--/footer-->
<!--javascript files-->

<!--/javascript files-->
</body>
</html>
