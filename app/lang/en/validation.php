<?php

return array(
    /*
      |--------------------------------------------------------------------------
      | Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines contain the default error messages used by
      | the validator class. Some of these rules have multiple versions such
      | as the size rules. Feel free to tweak each of these messages here.
      |
     */

    "accepted" => "The :attribute must be accepted.",
    "active_url" => "The :attribute is not a valid URL.",
    "after" => "The :attribute must be a date after :date.",
    "alpha" => "The :attribute may only contain letters.",
    "alpha_dash" => "The :attribute may only contain letters, numbers, and dashes.",
    "alpha_num" => "The :attribute may only contain letters and numbers.",
    "array" => "The :attribute must be an array.",
    "before" => "The :attribute must be a date before :date.",
    "between" => array(
        "numeric" => "The :attribute must be between :min and :max.",
        "file" => "The :attribute must be between :min and :max kilobytes.",
        "string" => "The :attribute must be between :min and :max characters.",
        "array" => "The :attribute must have between :min and :max items.",
    ),
    "boolean" => "The :attribute field must be true or false.",
    "confirmed" => "The :attribute confirmation does not match.",
    "date" => "The :attribute is not a valid date.",
    "date_format" => "The :attribute does not match the format :format.",
    "different" => "The :attribute and :other must be different.",
    "digits" => "The :attribute must be :digits digits.",
    "digits_between" => "The :attribute must be between :min and :max digits.",
    "email" => "The :attribute must be a valid email address.",
    "exists" => "The selected :attribute is invalid.",
    "image" => "The :attribute must be an image.",
    "in" => "The selected :attribute is invalid.",
    "integer" => "The :attribute must be an integer.",
    "ip" => "The :attribute must be a valid IP address.",
    "max" => array(
        "numeric" => "The :attribute may not be greater than :max.",
        "file" => "The :attribute may not be greater than :max kilobytes.",
        "string" => "The :attribute may not be greater than :max characters.",
        "array" => "The :attribute may not have more than :max items.",
    ),
    "mimes" => "The :attribute must be a file of type: :values.",
    "min" => array(
        "numeric" => "The :attribute must be at least :min.",
        "file" => "The :attribute must be at least :min kilobytes.",
        "string" => "The :attribute must be at least :min characters.",
        "array" => "The :attribute must have at least :min items.",
    ),
    "not_in" => "The selected :attribute is invalid.",
    "numeric" => "The :attribute must be a number.",
    "regex" => "The :attribute format is invalid.",
    "required" => "The :attribute field is required.",
    "required_if" => "The :attribute field is required when :other is :value.",
    "required_with" => "The :attribute field is required when :values is present.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same" => "The :attribute and :other must match.",
    "size" => array(
        "numeric" => "The :attribute must be :size.",
        "file" => "The :attribute must be :size kilobytes.",
        "string" => "The :attribute must be :size characters.",
        "array" => "The :attribute must contain :size items.",
    ),
    "unique" => "The :attribute has already been taken.",
    "url" => "The :attribute format is invalid.",
    "timezone" => "The :attribute must be a valid zone.",
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | Here you may specify custom validation messages for attributes using the
      | convention "attribute.rule" to name the lines. This makes it quick to
      | specify a specific custom language line for a given attribute rule.
      |
     */
    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Attributes
      |--------------------------------------------------------------------------
      |
      | The following language lines are used to swap attribute place-holders
      | with something more reader friendly such as E-Mail Address instead
      | of "email". This simply helps us make messages a little cleaner.
      |
     */
    'attributes' => array(
        /*         * ****************************************** Main settings ******************************************* */
        'site_title' => 'عنوان الموقع',
        'site_desc' => 'وصف الموقع',
        'site_comment' => 'الكلمات المفتاحيه ',
        'site_twiter' => 'رابط التويتر',
        'site_youtube' => 'رابط اليوتيوب',
        'site_instgram' => 'رابط الانستجرام',
        'site_email' => 'البريد الالكتروني',
        'site_telephone' => 'الهاتف',
        'site_condition' => 'شروط الاستخدام',
        'close' => 'حاله الموقع',
        'message' => 'رساله اغلاق الموقع ',
        'site_about' => 'عنا',
        'site_fb' => 'رابط الفيسبوك',
        /*         * ****************************************** users ******************************************* */
        'first_name' => 'الاسم الاول',
        'last_name' => 'الاسم الاخير',
        'age' => 'العمر',
        'email' => 'البريد الالكتروني',
        'password' => 'كلمه السر',
        'telephone' => 'الهاتف',
        'admin' => 'حاله العضو',
        'password_confirmation' => 'تاكيد كلمه السر',
        /*         * ****************************************** Section  ******************************************* */
        'section_name' => 'اسم القسم',
        'image' => ' الصوره او المرفق ',
        /*         * ****************************************** make  ******************************************* */
        'make_name' => 'ماركه السياره ',
        /*         * ****************************************** model  ******************************************* */
        'mod_name' => 'موديل  السياره ',
        'make_id' => 'رقم معرف الماركه  ',
        /*         * ****************************************** country  ******************************************* */
        'country_name' => 'اسم الدوله ',
        /*         * ****************************************** city  ******************************************* */
        'city_name' => 'اسم المدينه  ',
        'country_id' => 'رقم معرف الدوله ',
        /*         * ****************************************** Ads  ******************************************* */
        'ad_title' => 'عنوان الاعلان',
        'ad_type' => 'نوع الاعلان',
        'section_id' => 'القسم',
        'city_id' => 'المدينه',
        'make_id' => 'الماركه',
        'model_id' => 'الموديل',
        'year_id' => 'السنه',
        'lat' => ' اعدادات جوجل في خط الطول',
        'lang' => ' اعدادات جوجل في خط العرض',
        'aqar_type' => 'نوع العقار',
        'ad_tags' => 'كلمات دليليه',
        'ad_status' => 'حاله الاعلان  من المدير',
        'ad_contact' => 'وسيله الاتصال',
        'ad_allow' => '',
        'allow_comment' => 'السماح بالتعليق',
        'ad_paned' => '',
        'description' => 'الوصف',
        /*         * ****************************************** Message  ******************************************* */
        'message_text' => 'نص الرساله',
        'message_title' => 'عنوان الرساله',
        /*         * ****************************************** Reports  ******************************************* */
        'report_comment' => 'نص رساله التبليغ   ',
    ),
);
