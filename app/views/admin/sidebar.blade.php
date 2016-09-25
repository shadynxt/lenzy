<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
        <li class="sidebar-toggler-wrapper">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search" action="" method="POST">
                <div class="form-container">
                    <div class="input-box">
                        <a href="javascript:;" class="remove"> </a>
                        <input type="hidden" placeholder="Search..."/>
                    </div>
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="start active ">
            <a href="{{URL::route('dashboard-admin')}}"> <i class="fa fa-home"></i> <span class="title"> الرئيسية </span> <span class="selected"> </span> </a>
        </li>



        @if(Auth::check())
        @if(Auth::User()->admin == 0)
        <li>
            <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> اعدادات الموقع </span> <span class="arrow "> </span> </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{URL::route('mainsettings')}}"> <i class="fa fa-bullhorn"></i> الاعدادات العامه </a>
                </li>

            </ul>
        </li>



        <li>
            <a href="javascript:;"> <i class="fa fa-gift"></i> <span class="title"> المستخدمين </span> <span class="arrow"> </span> </a>
            <ul class="sub-menu">
                <li class="tooltips" data-container="body" data-placement="left" data-html="true" >
                    <a href="{{URL::route('adduser')}}" > <span class="title"> <i class="fa fa-bullhorn"></i> اضافه مستخدمين </span> </a>
                </li>
                <li class="tooltips" data-container="body" data-placement="left" data-html="true" >
                    <a href="{{URL::route('showuser')}}" > <span class="title"> <i class="fa fa-bullhorn"></i> عرض   المستخدمين </span> </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> بنرات الموقع </span> <span class="arrow "> </span> </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{URL::to('baner/add')}}"> <i class="fa fa-bullhorn"></i> اضافه بنر </a>
                </li>
                <li>
                    <a href="{{URL::to('baner/index')}}"> <i class="fa fa-bullhorn"></i> عرض البنرات </a>
                </li>

            </ul>

        </li>
        <li>
            <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> الاقسام </span> <span class="arrow "> </span> </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{URL::route('showsection')}}"> اقسام رئيسية</a>
                </li>

                <!--
                <li>
                    <a href="{{URL::to('subsection/index')}}"> اقسام فرعية</a>

                </li>
                
                -->

            </ul>
        </li>

        <!--  
          <li>
              <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> الدول / المدن </span> <span class="arrow "> </span> </a>
              <ul class="sub-menu">
                  <li>
                      <a href="{{URL::route('showcountry')}}"> اضافه  / عرض الدول </a>
                  </li>
                  <li>
                      <a href="{{URL::route('showcity')}}"> اضافه  / عرض المدن </a>
                  </li>
  
              </ul>
          </li>
          <li>
              <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> الماركات / الموديلات </span> <span class="arrow "> </span> </a>
              <ul class="sub-menu">
                  <li>
                      <a href="{{URL::route('showmake')}}"> اضافه  / عرض ماركه </a>
                  </li>
                  <li>
                      <a href="{{URL::route('showmod')}}"> اضافه / عرض موديل </a>
                  </li>
  
              </ul>
          </li>
  
          <li>
              <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> سنه الصنع </span> <span class="arrow "> </span> </a>
              <ul class="sub-menu">
  
                  <li>
                      <a href="{{URL::to('years/index')}}"> اضافه / عرض سنه الصنع </a>
                  </li>
  
              </ul>
          </li>
          
          
        -->

        @else 

        @endif 

        @endif
        <li>
            <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> المنتجات </span> <span class="arrow "> </span> </a>
            <ul class="sub-menu">

                <li>
                    <a href="{{URL::to('ads/add')}}"> اضف منتج </a>
                </li>
                <li>
                    <a href="{{URL::route('showads')}}"> عرض المنتجات </a>
                </li>

            </ul>
        </li>
        <!--
<li>
    <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> التعليقات </span> <span class="arrow "> </span> </a>
    <ul class="sub-menu">
        <li>
            <a href="{{URL::route('showcomm')}}"> عرض  التعليقات </a>
        </li>
        <li>
            <a href="{{URL::route('showreportcomment')}}"> عرض التعليقات المخالفه </a>
        </li>
    </ul>
</li>

        <li>
            <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> البنوك </span> <span class="arrow "> </span> </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{URL::to('bank/add')}}"> اضافه   </a>
                </li>
                <li>
                    <a href="{{URL::to('bank/index')}}"> عرض البنوك  </a>
                </li>
            </ul>
        </li>

        -->


        <li>
            <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span class="title">
                    القائمه البريديه    
                </span>
                <span class="arrow ">
                </span>
            </a>
            <ul class="sub-menu">

                <!--  <li>
                      <a href="{{URL::to('imgsec/index')}}">
                          اقسام المعرض
                      </a>
                  </li> -->
                <li>
                    <a href="{{URL::to('letter/index')}}">
                        عرض القائمه البريدية
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> طلبات الشراء </span> <span class="arrow "> </span> </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{URL::to('order/index')}}"> عرض   الطلبات </a>
                </li>
                <li>
                </li>
            </ul>
        </li>
        <!--
       <li>
           <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> رسائل الاعضاء </span> <span class="arrow "> </span> </a>
           <ul class="sub-menu">
               <li>
                   <a href="{{URL::to('mess/index')}}"> عرض   الرسائل </a>
               </li>
               <li>
               </li>
           </ul>
       </li>
      
       <li>
           <a href="javascript:;"> <i class="fa fa-cogs"></i> <span class="title"> نماذج العموله </span> <span class="arrow "> </span> </a>
           <ul class="sub-menu">
               <li>
                   <a href="{{URL::to('point/index')}}"> عرض   النماذج </a>
               </li>
               <li>
               </li>
           </ul>
       </li>

        -->

        <li>
            <a  href="{{URL::route('logout')}}"> <i class="fa fa-cogs" ></i> <span class="title" > تسجيل خروج </span> </a>

        </li>
        <!-- END SIDEBAR MENU -->
</div>

