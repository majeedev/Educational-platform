
<!DOCTYPE html>
<html lang="ar">


<!-- Mirrored from harmash.com/algorithms-and-data-structure/numbers-and-strings-test-1/ex-3-solution-using-python.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 20:33:44 GMT -->
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

    <title>تمارين خوارزميات و هياكل البيانات - التحدي الأول - حل التمرين الثالث بلغة بايثون</title>

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
                <ul><li id="method_img"><img src="../algorithms-and-data-structure.png"></li>
<li class="title">تعرف على الدورة</li>
<li><a href="../overview/index.html">نظرة عامة</a></li>
<li><a href="../how-to-start/index.html">الطريقة الصحيحة للتعلم</a></li>
<li class="title">رسم أشكال هندسية</li>
<li><a href="../drawing-test-1/index.html">التحدي الأول</a></li>
<li><a href="../drawing-test-2/index.html">التحدي الثاني</a></li>
<li><a href="../drawing-test-3/index.html">التحدي الثالث</a></li>
<li><a href="../drawing-test-4/index.html">التحدي الرابع</a></li>
<li><a href="../drawing-test-5/index.html">التحدي الخامس</a></li>
<li><a href="../drawing-test-6/index.html">التحدي السادس</a></li>
<li><a href="../drawing-test-7/index.html">التحدي السابع</a></li>
<li><a href="../drawing-test-8/index.html">التحدي الثامن</a></li>
<li><a href="../drawing-test-9/index.html">التحدي التاسع</a></li>
<li><a href="../drawing-test-10/index.html">التحدي العاشر</a></li>
<li class="title">التعامل مع الأرقام و النصوص</li>
<li><a href="index.html">التحدي الأول</a></li>
<li><a href="../numbers-and-strings-test-2/index.html">التحدي الثاني</a></li>
<li><a href="../numbers-and-strings-test-3/index.html">التحدي الثالث</a></li>
<li class="title">إجراء عمليات حسابية</li>
<li><a href="../math-operations-test-1/index.html">التحدي الأول</a></li>
<li><a href="../math-operations-test-2/index.html">التحدي الثاني</a></li>
<li><a href="../math-operations-test-3/index.html">التحدي الثالث</a></li>
<li><a href="../math-operations-test-4/index.html">التحدي الرابع</a></li>
<li><a href="../math-operations-test-5/index.html">التحدي الخامس</a></li>
<li><a href="../math-operations-test-6/index.html">التحدي السادس</a></li>
<li><a href="../math-operations-test-7/index.html">التحدي السابع</a></li>
<li><a href="../math-operations-test-8/index.html">التحدي الثامن</a></li>
<li><a href="../math-operations-test-9/index.html">التحدي التاسع</a></li>
<li class="title">التعامل مع المصفوفات</li>
<li><a href="../arrays-test-1/index.html">التحدي الأول</a></li>
<li><a href="../arrays-test-2/index.html">التحدي الثاني</a></li>
<li><a href="../arrays-test-3/index.html">التحدي الثالث</a></li>
<li><a href="../arrays-test-4/index.html">التحدي الرابع</a></li>
<li><a href="../arrays-test-5/index.html">التحدي الخامس</a></li>
<li><a href="../arrays-test-6/index.html">التحدي السادس</a></li>
<li class="title">تراكيب البيانات</li>
<li><a href="../data-structure-about-section/index.html">حول هذا القسم</a></li>
<li><a href="../data-structure-test-1/index.html">التحدي الأول</a></li>
<li><a href="../data-structure-test-2/index.html">التحدي الثاني</a></li>
<li class="title">حساب وقت الخوارزميات</li>
<li><a href="../algorithms-complexity/index.html">مفهوم التعقيد ( Complexity )</a></li>
<li><a href="../big-o-notation/index.html">حساب الـ Big-O Notation</a></li>
<li><a href="../choosing-best-algorithms/index.html">إختيار الخوارزمية الأفضل</a></li>
<li><a href="../calculate-execution-time/index.html">عرض مدة تنفيذ الكود</a></li>
<li><a href="../useful-resources/index.html">مصادر مفيدة</a></li>
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
                <h1><span class="session">Algorithms & Data Structure</span>التحدي الأول - حل التمرين الثالث بلغة بايثون</h1>
<article>
    <h3>المطلوب</h3>
	<p>أكتب برنامج يطلب من المستخدم إدخال رقم. بعدها يعرض له إن كان هذا الرقم عبارة عن <span class="word">Palindrome</span> أم لا.<br>
	<span class="inline">الـ <span class="word">Palindrome</span></span> عبارة عن رقم أعداده معكوسة بشكل متساوي من اليمين إلى اليسار و من اليسار إلى اليمين.</p>
	<p><b>أمثلة:</b> الأرقام التالية جميعها تعتبر أرقام <span class="inline"><span class="word">Palindrome</span>:<span> <code>1001</code> - <code>123321</code> - <code>4554</code> - <span class="inline"><code>45654</code>.</span></p>
	<br>
	<div class="example-box">
		<h4>الحل بلغة بايثون</h4>
		<p>الطريقة الأولى لحل التمرين.</p>
		<pre data-enlighter-language="python">
number = int(input('Enter a number: '))

reversedNumber = 0
originalNumber = number

while number != 0:
    remainder = number % 10
    reversedNumber = reversedNumber * 10 + remainder
    number = int(number / 10)

if originalNumber == reversedNumber:
    print(str(originalNumber) + " is a palindrome")

else:
    print(str(originalNumber) + " is not a palindrome")
		</pre>
		<br>
		<p>الطريقة الثانية لحل التمرين و الحصول على نفس النتيجة.</p>
		<pre data-enlighter-language="python">
isPalindrome = True;
n = int(input('Enter a number: '))

nString = str(n) + ""

for i in range(0, int(len(nString) / 2)):

    if nString[i] != nString[len(nString) - i - 1]:
        isPalindrome = False
        break

if isPalindrome:
    print(str(n) + " is a palindrome")

else:
    print(str(n) + " is not a palindrome")
		</pre>
		<br>
		<p>سنحصل على النتيجة التالية إذا قام المستخدم بإدخال الرقم <span class="number">1234</span> عند التشغيل.</p>
		<pre data-enlighter-linenumbers="false">
Enter a number: 1234
1234 is not a palindrome
		</pre>
		<br>
		<p>سنحصل على النتيجة التالية إذا قام المستخدم بإدخال الرقم <span class="number">1234321</span> عند التشغيل.</p>
		<pre data-enlighter-linenumbers="false">
Enter a number: 1234321
1234321 is a palindrome
		</pre>
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
    <li><a href="../../python/index.html"><span>»</span>لغة بايثون</a></li>
    <li><a href="../../java/index.html"><span>»</span>لغة جافا</a></li>
    <li><a href="../../cplusplus/index.html"><span>»</span>لغة ++C</a></li>
    <li><a href="../../swing/index.html"><span>»</span>جافا Swing</a></li>
    <li><a href="../../javafx/index.html"><span>»</span>جافا FX</a></li>
    <li><a href="../index.html"><span>»</span>الخوارزميات و هياكل البيانات</a></li>
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


<!-- Mirrored from harmash.com/algorithms-and-data-structure/numbers-and-strings-test-1/ex-3-solution-using-python.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 20:33:44 GMT -->
</html>