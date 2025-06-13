
<!DOCTYPE html>
<html lang="ar">


<!-- Mirrored from harmash.com/algorithms/algorithms-parameters/ex-5.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 16:18:33 GMT -->
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

    <title>التعامل مع الباراميترات في الخوارزميات - التمرين الخامس</title>

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
                <ul><li id="method_img"><img src="../algo-icon.png"></li>
<li class="title">دروس تمهيدية</li>
<li><a href="../algorithms-introduction/index.html">مفهوم الخوارزميات</a></li>
<li><a href="../algorithms-environment-setup/index.html">تجهيز بيئة العمل</a></li>
<li><a href="../algorithms-the-print-method/index.html">دالة الطباعة <span class="en">Print</span></a></li>
<li><a href="../algorithms-concatenation/index.html">الدمج أثناء الطباعة</a></li>
<li><a href="../algorithms-variables/index.html">المتغيرات</a></li>
<li class="title">الحلقات و الشروط</li>
<li><a href="../algorithms-loops/index.html">الحلقات و أنواعها</a></li>
<li><a href="../algorithms-for-loop/index.html">الحلقة <span class="en">For</span></a></li>
<li><a href="../algorithms-while-and-do-while-loops/index.html">الحلقتين <span class="en">While</span> و <span class="en">Do While</span></a></li>
<li><a href="../algorithms-setting-conditions/index.html">جمل الشرط</a></li>
<li><a href="../algorithms-operators/index.html">العوامل</a></li>
<li><a href="../algorithms-nested-loops/index.html">الحلقات المتداخلة</a></li>
<li class="title">إدخال بيانات من المستخدم</li>
<li><a href="../algorithms-the-read-method/index.html">دالة الإدخال <span class="en">Read</span></a></li>
<li><a href="../algorithms-calculate-the-factorial/index.html">حساب قيمة الـ <span class="en">Factorial</span> للعدد</a></li>
<li><a href="../algorithms-calculate-the-power/index.html">حساب قيمة الـ <span class="en">Power</span> للعدد</a></li>
<li class="title">المصفوفات</li>
<li><a href="../algorithms-arrays-types/index.html">المصفوفات و أنواعها</a></li>
<li><a href="../algorithms-one-dimensional-arrays/index.html">تعريف مصفوفة ذات بعد واحد</a></li>
<li><a href="../algorithms-one-dimensional-arrays-length/index.html">حجم المصفوفة ذات البعد الواحد</a></li>
<li><a href="../algorithms-working-with-one-dimensional-arrays/index.html">التعامل مع مصفوفة ذات بعد واحد</a></li>
<li><a href="../algorithms-two-dimensional-arrays/index.html">تعريف مصفوفة ذات بعدين</a></li>
<li><a href="../algorithms-two-dimensional-arrays-length/index.html">حجم المصفوفة ذات البعدين</a></li>
<li><a href="../algorithms-working-with-two-dimensional-arrays/index.html">التعامل مع مصفوفة ذات بعدين</a></li>
<li class="title">الدوال</li>
<li><a href="../algorithms-methods/index.html">تعريف دوال جديدة</a></li>
<li><a href="index.html">التعامل مع الباراميترات</a></li>
<li><a href="../algorithms-recursion/index.html">تعريف دوال تستدعي نفسها</a></li>
<li class="title">أكتب الكود كالمحترفين</li>
<li><a href="../algorithms-write-less-code/index.html">تقليص حجم الكود</a></li>
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
                <h1><span class="session">Algorithms</span>التعامل مع الباراميترات في الخوارزميات - التمرين الخامس</h1>
<article>
	<h3>المطلوب</h3>
	<p>أكتب دالة إسمها <code data-enlighter-language="java">FindAll</code>, عند إستدعائها تعطيها باراميترين, الباراميتر الأول عبارة عن مصفوفة تحتوي على أعداد صحيحة, الباراميتر الثاني عبارة عن عدد صحيح.<br>
    مهمة الدالة هي معرفة كم عنصر في المصفوفة يملك نفس قيمة هذا العدد.<br>
	إذاً ستقوم الدالة بمقارنة جميع قيم عناصر المصفوفة مع قيمة هذا العدد. و كل عنصر تجد قيمته تساوي قيمة هذا العدد, ستعرض <span class="word">index</span> العنصر الذي وجدت فيه القيمة.</p>
	<p>في البرنامج, قم بإنشاء مصفوفة ذات بعد واحد إسمها <code data-enlighter-language="java">Numbers</code> تحتوي على قيم أولية.<br>
	ثم أطلب من المستخدم إدخال أي عدد.<br>
	في الأخير قم باستدعاء الدالة <code data-enlighter-language="java">FindAll</code> لطباعة <span class="word">index</span> كل عنصر في المصفوفة يحتوي على نفس قيمة هذا العدد.</p>
	<br>
	<h3>إرشادات</h3>
	<p><a target="_blank" href="ex-5-pic-1.png"><img src="ex-5-pic-1.png" alt=""/></a></p>
	<br>
	<div class="example-box">
	    <h4>النتيجة المطلوبة</h4>
		<p>لنفترض أن المصفوفة تحتوي على نفس القيم الموضوعة في الصورة السابقة, و بحثنا عن العدد <span class="number">1</span>.</p>
	    <div class="image-box">
		    <a target="_blank" href="ex-5-pic-2.png"><img src="ex-5-pic-2.png" alt=""/></a>
		</div>
		<p>لنفترض أن المصفوفة تحتوي على نفس القيم الموضوعة في الصورة السابقة, و بحثنا عن العدد <span class="number">5</span>.</p>
	    <div class="image-box">
		    <a target="_blank" href="ex-5-pic-3.png"><img src="ex-5-pic-3.png" alt=""/></a>
		</div>
	</div>
	<div class="example-box">
	    <h4>الخوارزمية</h4>
	    <div class="image-box">
		    <a target="_blank" href="ex-5-pic-4.png"><img src="ex-5-pic-4.png" alt=""/></a>
		</div>
	</div>
	<div class="example-box">
	    <h4>كود الجافا</h4>
		<pre data-enlighter-language="java">
import java.util.Scanner;
 
public class Parameters {
 
/* ------------------------------- هنا قمنا بتعريف الدالة ------------------------------ */
 
    public static void FindAll (int[] a, int b)
    {
 
        int found = 0;
 
        for ( int i=0; i&lt;a.length; i++ )
        {
            if ( a[i] == b )
            {
                System.out.print(b+ " is exist at index number: " +i+ "\n");
                found++;
            }
        }
 
        if( found == 0 )
        {
            System.out.print(b+ " is not exist \n");
        }
 
    }
 
/* --------------------------- من هنا يبدأ البرنامج بالتنفيذ --------------------------- */
 
    public static void main(String[] args)
    {
 
        Scanner input = new Scanner(System.in);
 
        int[] Numbers = {2, 7, 5, 6, 9, 14, 0, 5, 12, 5};
        int x;
 
        System.out.print("Find all: ");
        x = input.nextInt();
 
        FindAll(Numbers, x);
 
    }
 
}
		</pre>
	</div>
	<div class="example-box">
	    <h4>شرح الكود</h4>					
	    <div class="explaining-box">
	    	<ul>
				<br>
				<pre data-enlighter-language="java" data-enlighter-lineoffset="7">
	public static void FindAll (int[] a, int b)
	{
	
		int found = 0;
	
		for ( int i=0; i&lt;a.length; i++ )
		{
			if ( a[i] == b )
			{
				System.out.print(b+ " is exist at index number: " +i+ "\n");
				found++;
			}
		}
	
		if( found == 0 )
		{
			System.out.print(b+ " is not exist \n");
		}
	
	}
				</pre>
				<li><p>هنا أنشأنا الدالة <code data-enlighter-language="java">FindAll()</code> و حددنا أن نوعها <code data-enlighter-language="java">void</code> لأنها لن ترجع قيمة, و وضعنا لها باراميترين, الأول مصفوفة نوعها <code data-enlighter-language="java">int</code> و الثاني متغير نوعه <code data-enlighter-language="java">int</code>.</p></li>
				<li><p>إذاً, عند إستدعاء هذه الدالة يجب أن نمرر لها مصفوفة و قيمة من النوع <code data-enlighter-language="java">int</code>.</p></li>
				<li><p>في السطر <span class="number">10</span>, قمنا بتجهيز المتغير <code data-enlighter-language="java">found</code> و أعطيناه القيمة <span class="number">0</span> كقيمة أولية لأننا سنستخدمه لتخزين عدد المرات التي تم فيها إيجاد قيمة المتغير <code data-enlighter-language="java">b</code> بداخل المصفوفة <code data-enlighter-language="java">a</code>.</p></li>
				<li><p>من السطر <span class="number">12</span> إلى السطر <span class="number">19</span>, أنشأنا الحلقة <code data-enlighter-language="java">for</code> للمرور على جميع عناصر المصفوفة كالتالي:</p></li>
				<ul type="square">
					<li><p>في كل دورة من دورات الحلقة سيتم مقارنة قيمة عنصر من عناصر المصفوفة مع قيمة المتغير <code data-enlighter-language="java">b</code> المراد البحث عنها.</p></li>
					<li><p>في حال وجود عنصر في المصفوفة يملك نفس قيمة المتغير <code data-enlighter-language="java">b</code>, سيتم طباعة رقم <span class="word">index</span> العنصر, ثم إضافة <span class="number">1</span> على قيمة المتغير <code data-enlighter-language="java">found</code>.</p></li>
				</ul>
				<li><p>من السطر <span class="number">21</span> إلى السطر <span class="number">24</span>, سيتم فحص قيمة المتغير <code data-enlighter-language="java">found</code>, في حال بقيت <span class="number">0</span> فهذا يعني أنه لم يتم إيجاد القيمة التي تم البحث عنها في المصفوفة, لذلك سيتم طباعة أنه لم يتم إيجاد القيمة المراد البحث عنها.</p></li>
				<br><br>
				<pre data-enlighter-language="java" data-enlighter-lineoffset="30">
	public static void main(String[] args)
	{
	
		Scanner input = new Scanner(System.in);
	
		int[] Numbers = {2, 7, 5, 6, 9, 14, 0, 5, 12, 5};
		int x;
	
		System.out.print("Find all: ");
		x = input.nextInt();
	
		FindAll(Numbers, x);
	
	}
				</pre>
				<li><p>في السطر <span class="number">35</span>, قمنا بإنشاء المصفوفة <code data-enlighter-language="java">Numbers</code> و حددنا نوعها <code data-enlighter-language="java">int</code> و أعطيناها قيم عشوائية مباشرةً عند إنشائها.</p></li>
				<li><p>في السطر <span class="number">36</span>, قمنا بتعريف المتغير <code data-enlighter-language="java">x</code> لتخزين العدد الذي سيدخله المستخدم.</p></li>
				<li><p>في السطرين <span class="number">38</span> و <span class="number">39</span>, طلبنا من المستخدم إدخال العدد الذي يريد البحث عنه في المصفوفة و وضعناه في المتغير <code data-enlighter-language="java">x</code>.</p></li>
				<li><p>في السطر <span class="number">41</span>, قمنا باستدعاء الدالة <code data-enlighter-language="java">FindAll()</code> و مررنا لها المصفوفة التي تحتوي على الأعداد العشوائية و العدد الذي أدخله المستخدم حتى تبحث عن العدد الذي أدخله المستخدم في المصفوفة, ثم تطبع له نتيجة البحث.</p></li>
			</ul>
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
    <li><a href="../index.html"><span>»</span>الخوارزميات</a></li>
    <li><a href="../../sql/index.html"><span>»</span>قواعد البيانات</a></li>
    <li><a href="../../python/index.html"><span>»</span>لغة بايثون</a></li>
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


<!-- Mirrored from harmash.com/algorithms/algorithms-parameters/ex-5.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 16:18:36 GMT -->
</html>