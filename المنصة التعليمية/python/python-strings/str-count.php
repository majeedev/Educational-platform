
<!DOCTYPE html>
<html lang="ar">


<!-- Mirrored from harmash.com/python/python-strings/str-count.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 20:33:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66898688-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-66898688-2');
    </script>

    <!-- web style -->
    <link rel="icon" type="image/x-icon" href="../../template/images/harmash_x.png" />
    <link rel="stylesheet" type="text/css" href="../../template/css/style-2020-6-21.min.css" />

    <!-- jquery -->
    <script src="../../template/js/jquery.min.js"></script>

    <!-- web scripts -->
    <script src="../../template/js/screen-adjustment-2020-6-18.min.js"></script>

    <!-- Include EnlighterJS Styles + MooTools + Initialize EnlighterJS  -->
    <link rel="stylesheet" type="text/css" href="../../template/css/EnlighterJS.min.css" />
    <meta name="EnlighterJS" content="Advanced javascript based syntax highlighting" data-indent="4"
        data-selector-block="pre" data-selector-inline="code" data-theme="Enlighter" />

    <title>python str.count()</title>

    <style>
    #hsoub_ad {
        margin: 10px 0 25px 0;
    }

    #hsoub_ad>div {
        background: white;
        padding: 15px;
        line-height: 34px;
        margin: 0 15px;
        box-shadow: 0 0 10px lightgray;
        border-radius: 5px;
    }

    #hsoub_ad>div>div {
        position: relative;
    }

    #hsoub_ad>div a {
        display: inline-block;
        max-width: 400px;
        width: 100%;
        color: #444;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        font-family: droid_arabic_naskh_regular;
        font-size: 14px;
    }

    .its-ad {
        display: inline-block !important;
        font-size: 14px !important;
        position: absolute !important;
        left: 5px !important;
        color: black !important;
        font-family: droid_arabic_naskh_regular !important;
        font-weight: bold !important;
    }

    #hsoub_ad>div a:hover {
        color: black;
    }
    </style>
</head>

<body>
    <div id="header">
        <ul>
            <li id="menu"><img src="../../template/images/ic_menu.png"></li>
            <li id="library">المكتبة ▾</li>
            <li id="search"><img src="../../template/images/ic_search.png"></li>
            <li id="blog"><a href="../../blog/index.html">مقالات</a></li>
            <li id="home"><a href="../../index.html"><img src="../../template/images/ic_home.png"></a></li>
            <li id="logo" style="float: left;"><a href="../../index.html">HARMASH.COM</a></li>
        </ul>
    </div>
    <div id="container">
        <div id="container_row">
            <div id="side_nav">
                <ul><li id="method_img"><img src="../python-icon.png"></li>
<li class="title">أساسيات اللغة</li>
<li><a href="../python-overview/index.html"><span class="en">Python</span> - نظرة عامة</a></li>
<li><a href="../python-environment-setup/index.html"><span class="en">Python</span> - تهيئة بيئة التطوير</a></li>
<li><a href="../python-basic-syntax/index.html"><span class="en">Python</span> - أسلوب الكتابة</a></li>
<li><a href="../python-variables-types/index.html"><span class="en">Python</span> - أنواع المتغيرات</a></li>
<li><a href="../python-operators/index.html"><span class="en">Python</span> - العوامل</a></li>
<li><a href="../python-conditions/index.html"><span class="en">Python</span> - الشروط</a></li>
<li><a href="../python-loops/index.html"><span class="en">Python</span> - الحلقات</a></li>
<li><a href="../python-numbers/index.html"><span class="en">Python</span> - الأرقام</a></li>
<li><a href="index.html"><span class="en">Python</span> - النصوص</a></li>
<li><a href="../python-lists/index.html"><span class="en">Lists</span> - <span class="en">Python</span></a></li>
<li><a href="../python-tuples/index.html"><span class="en">Tuples</span> - <span class="en">Python</span></a></li>
<li><a href="../python-sets/index.html"><span class="en">Sets</span> - <span class="en">Python</span></a></li>
<li><a href="../python-dictionaries/index.html"><span class="en">Dictionaries</span> - <span class="en">Python</span></a></li>
<li><a href="../python-functions/index.html"><span class="en">Python</span> - الدوال</a></li>
<li><a href="../python-modules/index.html"><span class="en">Modules</span> - <span class="en">Python</span></a></li>
<li><a href="../python-date-and-time/index.html"><span class="en">Python</span> - التاريخ و الوقت</a></li>
<li class="title">برمجة الكائنات</li>
<li><a href="../python-class-and-object/index.html"><span class="en">Python</span> - الكلاس و الكائن</a></li>
<li><a href="../python-inheritance/index.html"><span class="en">Python</span> - الوراثة</a></li>
<li><a href="../python-overriding/index.html"><span class="en">Overriding</span> - <span class="en">Python</span></a></li>
<li><a href="../python-static-methods/index.html"><span class="en">Python</span> - الدوال الثابتة</a></li>
<li><a href="../python-abc/index.html"><span class="en">Python</span> - التجريد</a></li>
<li><a href="../python-polymorphism/index.html"><span class="en">Python</span> - تعدد الأشكال</a></li>
<li class="title">برمجة متقدمة</li>
<li><a href="../python-input/index.html"><span class="en">Python</span> - إدخال البيانات</a></li>
<li><a href="../python-iterators/index.html"><span class="en">Iterators</span> - <span class="en">Python</span></a></li>
<li><a href="../python-regular-expressions/index.html"><span class="en">Python</span> - التعابير النمطية</a></li>
<li><a href="../python-exceptions-handling/index.html"><span class="en">Python</span> - معالجة الأخطاء</a></li>
<li><a href="../python-files-handling/index.html"><span class="en">Python</span> - التعامل مع الملفات</a></li>
<li><a href="../python-pip/index.html"><span class="en">Python</span> - مدير الحزم ( <span class="en">PIP</span> ) </a></li>
<li><a href="../python-database/index.html"><span class="en">Python</span> - قواعد البيانات</a></li>
<li><a href="../python-multithreading/index.html"><span class="en">Python</span> - تعدد المهام</a></li>
<li><a href="../python-next-step/index.html"><span class="en">Python</span> - ما هي خطوتي التالية ؟</a></li>
<li class="title">تعلم المزيد</li>
<!--<li><a href="https://harmash.com/blog/?s=python"><span class="en">Java</span> - مقالات بايثون</a></li>-->
<li><a href="../../algorithms-and-data-structure/index.html"><span class="en">Python</span> - الخوارزميات و هياكل البيانات</a></li>
</ul>
            </div>
            <div id="main">
                <div id="loader_box">
                    <div class="lds-facebook">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                
                <div id="top_ads"></div>

                <div class="next-and-previous-lessons">
                    <a class="next-page">
                        <span class="next-page-text"></span><span class="cursor">»</span>
                    </a>
                    <a class="previous-page">
                        <span class="cursor">»</span><span class="previous-page-text"></span>
                    </a>
                </div>
                <div id="hsoub_ad">
                    <div>
                        <div>
                            <span class="its-ad">إعلان</span>
                            <img style="max-width: 110px;" src="../../ads/hsoub/hsoub2.png">
                        </div>
                        <a rel="nofollow" href="https://academy.hsoub.com/learn/javascript-application-development/">
                            دورة تطوير التطبيقات باستخدام لغة JavaScript
                        </a>
                        <a rel="nofollow" href="https://academy.hsoub.com/learn/front-end-web-development/">
                            دورة تطوير واجهات المستخدم
                        </a>
                        <a rel="nofollow" href="https://academy.hsoub.com/learn/hybrid-mobile-application-development/">
                            دورة تطوير تطبيقات الجوال باستخدام تقنيات الويب
                        </a>
                        <a rel="nofollow" href="https://academy.hsoub.com/learn/php-web-application-development/">
                            دورة تطوير تطبيقات الويب باستخدام لغة PHP
                        </a>
                        <a rel="nofollow" href="https://academy.hsoub.com/learn/ruby-web-application-development/">
                            دورة تطوير تطبيقات الويب باستخدام لغة Ruby
                        </a>
                        <a rel="nofollow" href="https://academy.hsoub.com/learn/computer-science/">
                            دورة علوم الحاسوب
                        </a>
                    </div>
                </div>
                <h1><span class="session">Python</span>الدالة <code data-enlighter-language="python">count()</code></h1>
<article>
	<h3>تعريفها</h3>
	<p>ترجع رقم يمثل عدد المرات التي فيها إيجاد النص الذي تم تمريره مكان الباراميتر <code data-enlighter-language="python">sub</code> في النص الذي قام باستدعائها.</p>
	<br><br>
	<h3>بناؤها</h3>
	<pre data-enlighter-language="python" data-enlighter-linenumbers="False">
count(sub[, start[, end]])
	</pre>
	<br><br>
	<h3>باراميترات</h3>
	<ul class="explain">
		<li><p><code data-enlighter-language="python">sub</code> عبارة عن نص عادي نوعه <code data-enlighter-language="python">str</code> و هو النص الذي نريد البحث عنه.</p></li>
		<li><p><code data-enlighter-language="python">start</code> باراميتر إختياري, يمكنك أن تمرر مكانه عدد صحيح يحدد رقم الخانة التي تريد أن تبدأ بالبحث من عندها.</p></li>
		<li><p><code data-enlighter-language="python">end</code> باراميتر إختياري, يمكنك أن تمرر مكانه عدد صحيح يحدد رقم الخانة التي تريد أن يتوقف البحث عندها.</p></li>
	</ul>
	<p></p>
	<br><br>
	<h3>قيمة الإرجاع</h3>
	<p>ترجع رقم يمثل عدد المرات التي فيها إيجاد النص الذي تم تمريره مكان الباراميتر <code data-enlighter-language="python">sub</code> في النص الذي قام باستدعائها.</p>
	<br>
	<div class="example-box">
	    <h4>مثال</h4>
	    <span class="code-title python-file-icon">Test.py</span>
		<pre data-enlighter-language="python">
# s هنا قمنا بتعريف متغير نصي إسمه
s = "Hello, my name is Mhamad. I'm a full stack developer."

# s في النص الموجود في المتغير 'a' هنا قمنا بطباعة كم مرة يوجد النص
print(s.count('a'))
		</pre>
		<p><span class="point">•</span>سنحصل على النتيجة التالية عند التشغيل.</p>
		<div class="code-box">
			5
		</div>
	</div>
</article>

					<div id="bottom_ads"></div>
    	        	
					<div class="next-and-previous-lessons">
					    <a class="next-page">
					        <span class="next-page-text"></span><span class="cursor">»</span>
					    </a>
					    <a class="previous-page">
					        <span class="cursor">»</span><span class="previous-page-text"></span>
					    </a>
					</div>
    	    	</div><!-- end main -->
			</div><!-- end container_row -->
		</div><!-- end container -->
		
		<div id="footer">

			<div id="donate_for_us">
			    <h3>ترغب بتقديم دعم مادي للموقع</h3>
			    <p>يمكنك التبرع عبر Paypal أو Patreon بالمبلغ الذي تريده</p>
			    <p>
			        <a id="paypal_btn"
			            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=JPFDBADGZSTQL&amp;source=url"
			            target="_blank">تبرع عبر Paypal</a>
			        <a id="patreon_btn" href="https://www.patreon.com/harmashcom" target="_blank">تبرع عبر Patreon</a>
			    </p>
			</div>

			<div id="follow_us">
			    <img class="harmash-logo" src="../../template/images/harmash-logo.png"><br>
			    <a href="https://twitter.com/harmashcom"><img class="twitter" src="../../template/images/twitter.png"></a>
			    <a href="https://www.facebook.com/harmashcom"><img class="facebook" src="../../template/images/facebook.png"></a>
				<a href="http://www.youtube.com/channel/UCoKizUSSJw6Ymu2cpdPtUpA"><img class="youtube" src="../../template/images/youtube.png"></a>
				<a href="https://telegram.me/harmashcom"><img class="telegram" src="../../template/images/telegram.png"></a>
			</div>

			<p id="about"> هرمش هو موقع تعليمي مجاني يهتم بعلوم الكمبيوتر و يقدم إليك المعرفة بشكل مبسّط و مفصّل, و هو المكان المناسب لأي شخص يطمح بأن يصبح مبرمجاً محترفاً و مبدعاً في العالم الرقمي.</p>
			
			<p class="footer-faq"><a href="../../faq/index.html">●&nbsp الأسئلة الشائعة &nbsp</a> <a href="../../ads/index.html">●&nbsp أعلن في الموقع &nbsp</a></p>
			
			<p id="developped_by">تم تطوير الموقع و كتابة جميع الدروس من قبل المبرمج<br>
				<a href="../../MhamadHarmush/index.html" target="_blank">● &nbsp محمد هرموش &nbsp ●</a></p>
			
			<p id="copy_right">جميع الحقوق محفوظة للموقع &nbsp ٢٠٢٠ - ٢٠١٤ ©</p>
			
			<p id="copy_right_details_ar">محتوى الموقع يخضع لرخصة (CC BY-NC-ND 4.0) التي لا تسمح باستخدام الشروحات لأغراض تجارية, إجراء تعديل عليها و نشرها في موقع آخر, وضع الشروحات في تطبيق أو في كتاب إلا في حال أخذ موافقة صريحة من إدارة الموقع.</p>
			
			<p id="copy_right_logo">
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
				<img alt="Creative Commons License" style="border-width:0" src="../../../licensebuttons.net/l/by-nc-nd/4.0/88x31.png" /></a>
			</p>
			
			<p id="copy_right_details_en"><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">© 2020 Harmash. All Content is licensed under CC BY-NC-ND 4.0 unless mentioned otherwise.</a></p>

		</div>
		
		<div id="library_box">
		    <h3>دورات</h3>
<ul>
    <li><a href="../../learn-typing/index.html"><span>»</span>تعلم الطباعة</a></li>
    <li><a href="../../algorithms/index.html"><span>»</span>الخوارزميات</a></li>
    <li><a href="../../sql/index.html"><span>»</span>قواعد البيانات</a></li>
    <li><a href="../index.html"><span>»</span>لغة بايثون</a></li>
    <li><a href="../../java/index.html"><span>»</span>لغة جافا</a></li>
    <li><a href="../../cplusplus/index.html"><span>»</span>لغة ++C</a></li>
    <li><a href="../../swing/index.html"><span>»</span>جافا Swing</a></li>
    <li><a href="../../javafx/index.html"><span>»</span>جافا FX</a></li>
    <li><a href="../../algorithms-and-data-structure/index.html"><span>»</span>الخوارزميات و هياكل البيانات</a></li>
    <li><a href="../../quran/index.html"><span>»</span>القرآن الكريم و الأذكار</a></li>
</ul>

<div style="clear:both; padding:20px 0px;"></div>

<h3>أدوات</h3>
<ul>
	<li><a href="../../web-editor/index.html"><img src="../../template/images/ic-web-editor.png">محرر الويب</a></li>
	<li><a href="../../color-picker/index.html"><img src="../../template/images/ic-color-picker.png">نظام الألوان</a></li>
	<li><a href="../../units-converter/index.html"><img src="../../template/images/ic-units-converter.png">محول الوحدات</a></li>
	<li><a href="../../ip-analyzer/index.html"><img src="../../template/images/ic-ip-analyzer.png">محلل عناوين الشبكات</a></li>
</ul>

<div style="clear:both; padding:10px 0px;"></div>		</div>

		<div id="search_box"></div>
		
		<div id="ads_alert">
		    <div class="white-container">
		        <div>
		            <a class="ads-close-btn" id="ads_close_btn_1">إخفاء الرسالة</a>
		        </div>
		        <div class="red-box">
		            <h3>من فضلك إسمح لنا بعرض الإعلانات</h3>
		            <p>أي قم بإيقاف مانع الإعلانات <b>(Ad Block)</b> عن موقعنا</p>
		        </div>
		        <div class="green-box">
		            <h3>سبب عرض الإعلانات في الموقع</h3>
		            <p>بالنسبة لك فإن عرض الإعلانات في الموقع لا يكلفك أي شيء و لا يضايقك إطلاقاً لأننا لا نعرض إعلانات
		                منبثقة بشكل مفاجئ أو بشكل مخادع ضمن الشرح.</p>
		            <p> بالنسبة لنا فإنه الطريقة الوحيدة التي تمكننا من إبقاء الموقع متاح بشكل مجاني للجميع لأن عرض
		                الإعلانات
		                يساعدنا في تغطية تكاليف الإستضافة التي يجب دفعها بشكل دائما حتى لا يتم إيقاف الموقع.</p>
		        </div>
		        <div class="blue-box">
		            <h3>طريقة إيقاف مانع الإعلانات</h3>
		            <p>إذا كنت لا تعرف كيف توقف مانع الإعلانات <b>(Ad Block)</b> إبحث في
		                جوجل أو يوتيوب عن <span class="word">"How to disable adblock"</span> و سيظهر لك خطوات بسيطة جداً
		                لفعل ذلك.</p>
		            <p style="margin-top: 10px;">نتمنى أن تستفيدوا من موقعنا و أن نقدم لكم مزيد من الدورات المجانية و
		                نعتذر لإزعاجكم بهذا الطلب.
		            </p>
		        </div>
		        <div>
		            <a class="ads-close-btn" id="ads_close_btn_2">إخفاء الرسالة</a>
		        </div>
		    </div>
		</div>

		<script type="text/javascript" src="../../template/js/MooTools-Core-1.6.0.min.js"></script>
		<script type="text/javascript" src="../../template/js/EnlighterJS.min.js"></script>
	</body>


<!-- Mirrored from harmash.com/python/python-strings/str-count.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 20:33:59 GMT -->
</html>