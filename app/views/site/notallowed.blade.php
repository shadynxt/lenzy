@extends('site.layout')

@section('title') 
 السلع الممنوعه-{{$main->site_title}}
@stop
@section('desc') 
{{$main->site_desc}}
@stop
@section('key') 
{{$main->site_comment}}
@stop
@section('content')

<div class="section_section" style="float: left; margin-left: 150px;">
<div class="comm_text">
<br />
<h1 class="green">السلع الممنوعة</h1>
السلع الموضحة هي السلع الممنوعة في الموقع. السلع الممنوعه هي سلع ممنوعه على جميع المعلنين ليس هناك استثناء لإحد. إضافة سلعه مخالفة من السلعة الموضحة يؤدي إلى إيقاف عضوية المعلن وحذف إعلانه.<br />
<br />

السلع الممنوعة هي :
<ul class="user_menu" >
<li>جميع السلع الممنوعة حسب قوانين المملكة العربية السعودية.</li>
<li>
التقسيط و المنتجات البنكية. هذه السلع ممنوعه حتى لوكانت تعتبر شرعية.</li>

<li> الأدوية والمنتجات الطبية والصحية‫.‬ هذه السلع ممنوعه حتى لو كان مسموح بها في قوانين وزارة الصحة وحتى لو كانت سلع موصى بها من الوازرة.</li>
<li>التسويق الشبكي‫.‬ يمنع نهائيا اي نوع من التسويق الشبكي مهما كان نوعه او صفته أو طريقته</li>
<li> الأسلحة بمافيها  الصواعق والمسدسات و الرشاشات واسلحة الحماية الشخصية و مستلزماتها</li>
<li> المنتجات الجنسية بكافة أشكالها وأنواعها‫.‬</li>
<li> الأسهم و إدارة المحافظ والعملات وتسويقها وجميع مايتعلق بذلك</li>

<li> أجهزة الليزر وأجهزة التجسس مثلا كاميرات التجسس</li>
<li>المواقع والمنتديات والخدمات الإلكترونية والإيميلات وبيع العضويات والبرامج.</li>
<li> بيع أي سلعه مجانية. مثال على ذلك الإيميلات.</li>
<li> السلع التي فيها إعتداء على حقوق الملكية الفكرية مثلا البرامج المنسوخة والأفلام المنسوخة.</li>
<li> أساور الطاقه</li>
</ul>


إذا كان لديك إعتراض على  اي من  السلع المعروضة أعلاه نرجو مراسلتنا وذكر سبب الإعتراض. نحن نرحب في جميع الشكاوي والإقتراحات التي من شأنها تطوير الموقع للأفضل.  نعتذر عن توضيح سبب منع أي من السلع  المذكورة أعلاه.
<br />
<br /><br />
<h1 class="green">الإعلانات الممنوعه</h1>
القائمة التالية تحتوي على أغلب أساليب وطرق الإعلانات الممنوعه في الموقع. إضافة إعلان تنطبق عليه بعض هذه الأساليب سيؤدي الى إيقاف العضوية وحذف الإعلان.<br />


<ul class="user_menu" >
<li>جميع الإعلانات التي لاتتعلق بالبيع والشراء</li>
<li>طرح مواضيع في الموقع. </li>
<li>الإعلان لأجل إضافة إقتراح او مناقشة مشكلة مع الإدارة في الموقع‫.‬ الإعلانات مخصصة للبيع والشراء فقط‫.‬ إضافة إعلانات عن إقتراحات لتطوير الموقع في المعروضات يلحق الضرر بإعلانات المعلنين في الموقع‫.‬ أفضل طريقة للإقتراح أو الشكوى هي الإتصال بنا عبر نموذج اتصل بنا‫.‬</li>
<li>الإعلان غير مكتمل التفاصيل.</li>
<li>إعلان ضعيف الجودة‫.‬</li>
<li>ضعف تواصل المعلن مع الاعضاء المهتمين بالسلعه المعروضة‫.‬ مثلا معلن يعلن بيع سياره ثم لايقوم بالرد على الاتصالات او الرد على الرسائل الخاصة‫.‬</li>

<li>الإعلان في قسم خطأ‫.‬ مثلا الإعلان عن طلب سياره في المعروضات‫.‬ أو مثلا إعلان عن بيع أثاث في قسم حراج السيارات‫.‬ او  مثلا الإعلان عن جيب شيروكي للبيع في قسم فورد‫.‬</li>
<li>إضافة إعلان ولديك عضوية أخرى محظورة. يجب أولا مناقشة الحظر معنا قبل إضافة إي اعلان جديد.</li>
<li>إضافة صورة ليست لنفس السلعه إذا كانت السلعة سيارة حتى لو كان لغرض التوضيح.</li>
<li>إضافة صور لسلعة أخرى غير المعروضة. مثلا معلن يعلن عن بيع جوال مستعمل ثم يعرض صورة لجوال مستعمل اخر من نفس النوع.</li>
<li>إي إعلان يحتوي على إشارة لأي أمر عنصري بكافة أشكاله..</li>
<li>إي إعلان يحتوي على معلومات خطأ سواء كان الخطأ مقصود أو غير مقصود‫.‬ مثلا معلن يعلن عن سياره ويذكر انها لم تتعرض لحادث ثم بعد ذلك يثبت أن السياره قد تعرضت لحادث‫.‬ يجب على المعلن عدم إضافة أي معلومة عن السلعه إلا التي هو متأكد منها‫.‬</li>
<li>إضافة إعلان بغرض التشهير. إذا كانت لديك شكوى ضد معلن لدينا نرجو مراسلتنا وتوضيح المشكلة. إذا كانت لديك مشكلة مع جهة لاعلاقه لنا بها نرجو الشكوى لدى الجهة المسؤولة عن ذلك.</li>
<li>إضافة عنوان إعلان مخالف لمحتوى الإعلان‫.‬ مثلا معلن يكتب في العنوان‫:‬ كامري 2011 ثم في الإعلان يعلن عن  طلب كامري 2011‫.‬ الزائر عندما يرى العنوان سيعتقد ان هناك عرض عن كامري 2011</li>
<li>نسخ إعلان لمعلن آخر او جزء منه.</li>
<li>الإعلانات العامة  التي  لايتم تحديد السلعه بعينها مثل‫:‬ الإعلان بعنوان ‫(‬يوجد لدينا اراضي للبيع‫)‬ او مثلا الإعلان بعنوان يوجد في معرضنا سيارات للبيع‫.‬ الصحيح هو الإعلان عن السلعه ذاتها مثلا يوجد لدينا ارض للبيع مساحة كذا وكذا في حي كذا وكذا بمدينة الرياض مثلا‫.‬ او يوجد لدينا سياره موديل كذا وكذا‫.‬</li>
<li>إعلانات التبرع وطلب المساعدة. نظام الدوله يمنع التبرع والعمل الخيري خارج النطاق القانوني المحدد المخصص لذلك.</li>
<li>الإعلانات عن مساهمات وإشتراكات.</li>
<li>طلب الواسطة والمساعدات سواء كانت مشروعه أو غير مشروعه. الموقع للسلع فقط</li>
<li>الإعلانات التي تحتوي على سوء إستغلال سلطة. </li>


</ul>

	
	
<br />
<br /><br />


</div>
</div>






@stop