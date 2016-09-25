<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
Route::get('/tags/{name?}', ['as' => 'tags', 'uses' => 'SiteController@getTags']);
Route::get('/', array('uses' => 'SiteController@getIndex'));
Route::post('like', 'SiteController@likeajax');
Route::post('addcart', 'SiteController@addcart');
Route::post('compare', 'SiteController@compare');
Route::post('addinfo', 'SiteController@addinfo');

Route::post('unlike', 'SiteController@unlikeajax');
Route::get('searchads', 'SiteController@getSearchads');

/*
  Route for admin
 */
//   facebook login  start  // 
Route::get('site', array('before' => 'auth', 'uses' => 'SiteController@getIndex'));
Route::get('oauth/facebook', array('before' => 'guest', 'uses' => 'HomeController@facebookLogin'));
Route::controller('home', 'HomeController');
//   facebook login  end   // 

Route::controller('bank', 'BankController');

Route::controller('baner', 'BanerController');
Route::controller('mess', 'MessageController');
Route::controller('years', 'YearsController');
Route::controller('point', 'PointController');
Route::controller('subsection', 'SubsectionController');
Route::controller('letter', 'NewsletterController');
Route::controller('order', 'OrderController');
Route::controller('paypal', 'Paypal');



Route::get('/admin', array(
    'as' => 'dashboard-admin',
    'uses' => 'Dashboard@getIndex'
));
/*
  Route for main settings            ######################################################################################
 */
Route::get('/الاعدادات العامه', array(
    'as' => 'mainsettings',
    'uses' => 'Mainsettings@getIndex'
));
Route::controller('main', 'Mainsettings');


Route::post('main', 'Mainsettings@postEdit');


/*
  Route for User Controller    ######################################################################################
 */

Route::get('/#!&&اضافه مستخدمين &rtf_m=12574698221359545223262_tdg_251', array(
    'as' => 'adduser',
    'uses' => 'UserController@getAdd'
));

Route::get('/#!&&تسجيل خروج  &rtf_m=12574698221359545223262_tdg_251', array(
    'as' => 'logout',
    'uses' => 'UserController@getLogout'
));

Route::group(array('before' => 'csrf'), function() {
    Route::post('create', 'UserController@postCreate');
});


Route::get('/#!&&عرض المستخدمين &rtf_m=12574698221359545223262_tdg_251854548656#', array(
    'as' => 'showuser',
    'uses' => 'UserController@getIndex'
));
Route::get('/#!&&مسح  المستخدمين &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deleteuser',
    'uses' => 'UserController@getDelete'
));
Route::get('/#!&&تعديل  المستخدمين &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'edituser',
    'uses' => 'UserController@getEdit'
));

Route::get('/#!&&بحث عن  المستخدمين &rtf_m=12574698221359545223262_tdg_251854548656#', array(
    'as' => 'search',
    'uses' => 'UserController@getSearch'
));

Route::controller('users', 'UserController');


Route::group(array('before' => 'csrf'), function() {

    Route::post('updatedata', 'UserController@postUpdatedata');
});
/*
  Route for Ads Controller ######################################################################################
 */

Route::get('/#!&&عرض اعلاناتا &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showads',
    'uses' => 'AdsController@getIndex'
));

Route::get('/#!&&مسح   اعلانات  &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deleteads',
    'uses' => 'AdsController@getDelete'
));
Route::get('/#!&&مسح   الاعلانات المبلغ عتها   &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletereportsads',
    'uses' => 'AdsController@getDeletereports'
));
Route::get('/#!&&عرض   الاعلانات المبلغ عتها   &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'showreportsads',
    'uses' => 'AdsController@getShowreportsads'
));

Route::get('/#!&&تبليغ  اعلاناتا &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showreports',
    'uses' => 'AdsController@getReport'
));


Route::controller('ads', 'AdsController');
Route::controller('comm', 'CommentController');

/*
  Route for Comment Controller ######################################################################################
 */
Route::get('/#!&&عرض التعليقات  &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showcomm',
    'uses' => 'CommentController@getIndex'
));

Route::post('/#!&&بحث  التعليقات  &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'searchcomm',
    'uses' => 'CommentController@postSearchcomm'
));

Route::get('/#!&&مسح  تعليقات &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletecomm',
    'uses' => 'CommentController@getDelete'
));
Route::controller('comment', 'CommentController');
Route::get('/#!&&عرض التعليقات المبلغ عنها   &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showreportcomment',
    'uses' => 'CommentController@getReport'
));
Route::get('/#!&&مسح   التعليقات المخالفه  &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletereportcomm',
    'uses' => 'CommentController@getDeletereportcomm'
));

Route::get('/#!&&عرض سبب  مخالفه التعليق    &rtf_m=12574698221359545223262_tdg_251854548656{id}#%&&@!!#', array(
    'as' => 'showreportaddition',
    'uses' => 'CommentController@getShowreportcomms'
));






/*
  Route for Section Controller ######################################################################################
 */

Route::get('/#!&&عرض الاقسام &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showsection',
    'uses' => 'SectionController@getIndex'
));

Route::get('/#!&&اضافه قسم  الاقسام &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'addsection',
    'uses' => 'Sectioncontroller@getAdd'
));

Route::get('/#!&&مسح   اقسام  &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletesection',
    'uses' => 'Sectioncontroller@getDelete'
));
Route::get('/#!&&تعديل   اقسام  &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'editsection',
    'uses' => 'Sectioncontroller@getEdit'
));

Route::controller('section', 'SectionController');

Route::group(array('before' => 'csrf'), function() {
    Route::post('createsection', 'Sectioncontroller@postCreate');
});

/*
  Route for Make Controller ######################################################################################
 */
Route::get('/#!&&عرض  الماركات  &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showmake',
    'uses' => 'MakeController@getIndex'
));

Route::get('/#!&&اضافه   الماركات  &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'addmake',
    'uses' => 'MakeController@getAdd'
));
Route::controller('make', 'MakeController');

Route::group(array('before' => 'csrf'), function() {
    Route::post('createmake', 'MakeController@postCreate');
});
Route::get('/#!&&تعديل   ماركات   &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'editmake',
    'uses' => 'MakeController@getEdit'
));
Route::get('/#!&&مسح    ماركات   &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletemake',
    'uses' => 'MakeController@getDelete'
));
/*
  Route for Mod Controller ######################################################################################
 */
Route::get('/#!&&عرض  الموديلات   &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showmod',
    'uses' => 'ModController@getIndex'
));

Route::get('/#!&&اضافه    موديل   &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'addmod',
    'uses' => 'ModController@getAdd'
));
Route::controller('mod', 'ModController');

Route::group(array('before' => 'csrf'), function() {
    Route::post('createmod', 'ModController@postCreate');
});
Route::get('/#!&&تعديل   موديلات    &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'editmod',
    'uses' => 'ModController@getEdit'
));
Route::get('/#!&&مسح    ماركات   &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletemod',
    'uses' => 'ModController@getDelete'
));

/*
  Route for Country Controller ######################################################################################
 */
Route::get('/#!&&عرض  الدول   &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showcountry',
    'uses' => 'CountryController@getIndex'
));

Route::get('/#!&&اضافه    دوله    &rtf_m=12574698221359545223262_tdg_251854254545462548656#%&&@!!#', array(
    'as' => 'addcountry',
    'uses' => 'CountryController@getAdd'
));

Route::group(array('before' => 'csrf'), function() {
    Route::controller('country', 'CountryController');
    Route::post('createcountry', 'CountryController@postCreate');
});
Route::get('/#!&&تعديل   دول     &rtf_m=1257469822135_rtg_9545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'editcountry',
    'uses' => 'CountryController@getEdit'
));

Route::get('/#!&&مسح    دوله    &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletecountry',
    'uses' => 'CountryController@getDelete'
));

/*
  Route for City Controller ######################################################################################
 */

Route::get('/#!&&عرض  المدن    &rtf_m=12574698221359545223262_tdg_251854548656#%&&@!!#', array(
    'as' => 'showcity',
    'uses' => 'CityController@getIndex'
));

Route::get('/#!&&اضافه    مدينه     &rtf_m=12574698221359545223262_tdg_251854254545462548656#%&&@!!#', array(
    'as' => 'addcity',
    'uses' => 'CityController@getAdd'
));
Route::controller('cityx', 'CityController');

Route::group(array('before' => 'csrf'), function() {
    Route::controller('city', 'CityController');
    Route::post('createcity', 'CityController@postCreate');
});
Route::get('/#!&&تعديل    مدينه      &rtf_m=1257469822135_rtg_9545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'editcity',
    'uses' => 'CityController@getEdit'
));

Route::get('/#!&&مسح    مدينه     &rtf_m=12574698221359545223262_tdg_251854548656#{id}_ssl_rt_85ssl', array(
    'as' => 'deletecity',
    'uses' => 'CityController@getDelete'
));

/*
 * 
 * 
 * 
 * 
 * 
  Route for Site Controller ######################################################################################
 * 
 * 
 * 
 * 
 * 
 */

Route::controller('site', 'SiteController');
Route::get('/رئيسيه-حراج ', array(
    'as' => 'showharaj',
    'uses' => 'SiteController@getIndex'
));


Route::get('/تسجيل-خروج -حراج', array(
    'as' => 'logoutharaj',
    'uses' => 'UserController@getSitelogout'
));

Route::controller('ads', 'AdsController');
Route::controller('json', 'JsonController');





