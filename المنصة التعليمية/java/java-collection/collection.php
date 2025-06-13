
<!DOCTYPE html>
<html lang="ar">


<!-- Mirrored from harmash.com/java/java-collection/collection.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 17:01:17 GMT -->
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

    <title>الإنترفيس Collection في جافا</title>

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
                <ul><li id="method_img"><img src="../java-icon.png"></li>
<li class="title">أساسيات اللغة</li>
<li><a href="../java-overview/index.html"><span class="en">Java</span> - نظرة عامة</a></li>
<li><a href="../java-environment-setup/index.html"><span class="en">Java</span> - تهيئة بيئة التطوير</a></li>
<li><a href="../java-basics/index.html"><span class="en">Java</span> - أساسيات لغة جافا</a></li>
<li><a href="../java-basic-syntax/index.html"><span class="en">Java</span> - أسلوب الكتابة</a></li>
<li><a href="../java-start-coding/index.html"><span class="en">Java</span> - أول برنامج لك</a></li>
<li><a href="../java-basic-data-types/index.html"><span class="en">Java</span> - أنواع البيانات</a></li>
<li><a href="../java-variables-type/index.html"><span class="en">Java</span> - المتغيرات</a></li>
<li><a href="../java-methods/index.html"><span class="en">Java</span> - الدوال</a></li>
<li><a href="../java-operators/index.html"><span class="en">Java</span> - العوامل</a></li>
<li><a href="../java-loops/index.html"><span class="en">Java</span> - الحلقات</a></li>
<li><a href="../java-conditions/index.html"><span class="en">Java</span> - الشروط</a></li>
<li><a href="../java-numbers/index.html"><span class="en">Java</span> - الأعداد</a></li>
<li><a href="../java-characters/index.html"><span class="en">Java</span> - الأحرف</a></li>
<li><a href="../java-strings/index.html"><span class="en">Java</span> - النصوص</a></li>
<li><a href="../java-arrays/index.html"><span class="en">Java</span> - المصفوفات</a></li>
<li><a href="../java-date-and-time/index.html"><span class="en">Java</span> - التاريخ و الوقت</a></li>
<li><a href="../java-regular-expressions/index.html"><span class="en">Java</span> - التعابير النمطية</a></li>
<li><a href="../java-exceptions/index.html"><span class="en">Java</span> - الإستثناءات</a></li>
<li class="title">برمجة الكائنات</li>
<li><a href="../java-class-and-object/index.html"><span class="en">Class & Object - Java</span></a></li>
<li><a href="../java-modifiers/index.html"><span class="en">Modifiers - Java</span></a></li>
<li><a href="../java-encapsulation/index.html"><span class="en">Encapsulation - Java</span></a></li>
<li><a href="../java-inheritance/index.html"><span class="en">Inheritance - Java</span></a></li>
<li><a href="../java-overriding/index.html"><span class="en">Overriding - Java</span></a></li>
<li><a href="../java-overloading/index.html"><span class="en">Overloading - Java</span></a></li>
<li><a href="../java-type-casting/index.html"><span class="en">Type Casting - Java</span></a></li>
<li><a href="../java-abstraction/index.html"><span class="en">Abstraction - Java</span></a></li>
<li><a href="../java-interfaces/index.html"><span class="en">Interfaces - Java</span></a></li>
<li><a href="../java-polymorphism/index.html"><span class="en">Polymorphism - Java</span></a></li>
<li><a href="../java-nested-classes/index.html"><span class="en">Nested Classes - Java</span></a></li>
<li><a href="../java-enum/index.html"><span class="en">Enum - Java</span></a></li>
<li class="title">برمجة متقدمة</li>
<li><a href="../java-user-input/index.html"><span class="en">Java</span> - إدخال البيانات</a></li>
<li><a href="../java-files-io/index.html"><span class="en">Java</span> - التعامل مع الملفات</a></li>
<li><a href="../java-serialization/index.html"><span class="en">Java</span> - المزامنة</a></li>
<li><a href="../java-data-structure/index.html"><span class="en">Data Structure - Java</span></a></li>
<li><a href="index.html"><span class="en">Collection - Java</span></a></li>
<li><a href="../java-generics/index.html"><span class="en">Generics - Java</span></a></li>
<li><a href="../java-networking/index.html"><span class="en">Java</span> - الشبكات</a></li>
<li><a href="../java-multithreading/index.html"><span class="en">Java</span> - تعدد المهام</a></li>
<li><a href="../java-jdbc/index.html"><span class="en">Java</span> - قواعد البيانات</a></li>
<li><a href="../java-lambda-expressions/index.html"><span class="en">Lambda Expressions - Java</span></a></li>
<li><a href="../java-next-step/index.html"><span class="en">Java</span> - ما هي خطوتي التالية ؟</a></li>
<li class="title">تعلم المزيد</li>
<li><a href="../../blog/category/%d8%ac%d8%a7%d9%81%d8%a7/index.html"><span class="en">Java</span> - مقالات جافا</a></li>
<li><a href="../../algorithms-and-data-structure/index.html"><span class="en">Java</span> - الخوارزميات و هياكل البيانات</a></li>

<!--<p class="center red b" style="padding-top: 20px; font-size: 14px;">لا زلنا نعمل على إعداد دروس جديدة</p>-->
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
                <h1><span class="session">Java</span>الإنترفيس <code data-enlighter-language="java">Collection</code> في جافا</h1>
<article>
    <h2>مقدمة</h2>
	<p>الإنترفيس<code data-enlighter-language="java">Collection</code> مصمم بشكل عام لاحتواء الأشياء المشتركة في جميع الـ <span class="word">Collection</span>.<br>
	إذاً هو الأساس لأي إنترفيس يمثل <span class="word">Collection</span> حيث أن جميع الـ <span class="word">Collection</span> ترث منه.</p>
	<p>بما أن جميع الـ <span class="word">Collection</span> ترث منه, ننصحك بفهم دواله بشكل جيد لأنها ستمر معك في كل كلاس موجود في الـ <code data-enlighter-language="java">Collection</code>.<br>
	في حال قمت باستدعاء أي دالة فيه بشكل خاطئ سيتم رمي الإستثناء <span class="code red">UnsupportedOperationException</span></p>
</article>
<article>
    <h2>دوال الإنترفيس <code data-enlighter-language="java">Collection</code></h2>
	<p>الجدول التالي يحتوي على دوال الإنترفيس <code data-enlighter-language="java">Collection</code>.</p>
	<table class="list full-width rows-numbers">
	    <tr>
			<th colspan="2">الدالة مع تعريفها</th>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean add(Object o)</code></span>
			تضيف كائن جديد في الكائن الذي قام باستدعائها.<br>
			ترجع <code data-enlighter-language="java">true</code> إذا تمت الإضافة بنجاح.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean addAll(Collection c)</code></span>
			تضيف جميع العناصر الموجودة في الكائن <code data-enlighter-language="java">c</code> بالترتيب في آخر الكائن الذي قام باستدعائها.<br>
			ترجع <code data-enlighter-language="java">true</code> إذا تمت الإضافة بنجاح.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public void clear()</code></span>
			تمسح جميع العناصر الموجودة في الكائن الذي قام باستدعائها.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean contains(Object obj)</code></span>
			ترجع <code data-enlighter-language="java">true</code> إذا كان الكائن الذي قام باستدعائها يحتوي على الكائن الذي نضعه لها كـ <span class="word">Argument</span>.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean containsAll(Collection c)</code></span>
			ترجع <code data-enlighter-language="java">true</code> إذا كان الكائن الذي قام باستدعائها يحتوي على جميع العناصر الموجودة في الكائن <code data-enlighter-language="java">c</code>.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean equals(Object obj)</code></span>
			ترجع <code data-enlighter-language="java">true</code> في حال كان الكائن الذي قام باستدعائها يتطابق مع الكائن الذي نمرره لها كـ <span class="word">Argument</span>.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public int hashCode()</code></span>
			ترجع الـ <span class="word">Hash Code</span> للكائن الذي قام باستدعائها.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean isEmpty()</code></span>
			ترجع <code data-enlighter-language="java">true</code> في حال كان الكائن الذي قام باستدعائها فارغاً.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public Iterator iterator()</code></span>
			ترجع كائن نوعه <code data-enlighter-language="java">Iterator</code> يحتوي على جميع عناصر الكائن الذي قام باستدعائها.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean remove(Object o)</code></span>
			تحذف أول عنصر يتم إيجاده في الكائن الذي قام باستدعائها في حال كان يتطابق مع الكائن الذي نمرره لها كـ <span class="word">Argument</span>.<br>
			ترجع <code data-enlighter-language="java">true</code> إذا تم حذف العنصر بنجاح.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean removeAll(Collection c)</code></span>
			تحذف مجموعة متتالية من العناصر الموجود في الكائن الذي قام باستدعائها في حال كانت تتطابق مع كائن الـ <code data-enlighter-language="java">Collection</code> الذي نمرره لها كـ <span class="word">Argument</span>.<br>
			ترجع <code data-enlighter-language="java">true</code> إذا تم حذف جميع العناصر بنجاح.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public boolean retainAll(Collection c)</code></span>
			تبقي عناصر الكائن الذي قام باستدعائها في حال كانت موجودة في عناصر الكائن <code data-enlighter-language="java">c</code> الذي نمرره لها كـ <span class="word">Argument</span>, و تحذف جميع العناصر الأخرى.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public int size()</code></span>
			ترجع عدد العناصر الموجودة في كائن الـ <code data-enlighter-language="java">Interface</span>.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public Object[] toArray()</code></span>
			ترجع مصفوفة نوعها <code data-enlighter-language="java">Object</code> تحتوي على جميع العناصر الموجودة في الكائن الذي قام باستدعائها.</td>
		</tr>
	    <tr>
		    <td><span class="code-title"><code data-enlighter-language="java">public Object[] toArray(Object array[])</code></span>
			ترجع مصفوفة نوعها <code data-enlighter-language="java">Object</code> تحتوي على جميع عناصر الكائن الذي قام باستدعائها و التي عندها نفس نوع المصفوفة <code data-enlighter-language="java">array</code> التي نمررها لها كـ <span class="word">Argument</span>.</td>
		</tr>
	</table>
</article>
<article>
    <h2>مثال شامل</h2>
	<p>في المثال التالي قمنا بإنشاء ثلاث كائنات من ثلاث كلاسات مختلفة ترث من الإنترفيس <code data-enlighter-language="java">Collection</code>.<br>
	لاحظ أننا استخدمنا الدالة <code data-enlighter-language="java">add()</code> التي ورثتها الكائنات في الأساس من الإنترفيس <code data-enlighter-language="java">Collection</code>.</p>
	<div class="example-box">
		<h4>مثال</h4>
	    <span class="code-title java-file-icon">Main.java</span>
        <pre data-enlighter-language="java">
import java.util.*;               // util هنا قمنا باستدعاء جميع الكلاسات و الإنترفيسات الموجودة في الحزمة
 
public class Main {
 
    public static void main(String[] args) {
 
        // وضعنا فيه ثلاث كائنات o1 إسمه Vector هنا قمنا بإنشاء كائن من الكلاس
        Vector o1 = new Vector();
        o1.add("A");
        o1.add("B");
        o1.add("C");
 
        // وضعنا فيه ثلاث كائنات o2 إسمه HashSet هنا قمنا بإنشاء كائن من الكلاس
        HashSet o2 = new HashSet();
        o2.add("A");
        o2.add("B");
        o2.add("C");
 
        // وضعنا فيه ثلاث كائنات o3 إسمه LinkedList هنا قمنا بإنشاء كائن من الكلاس
        LinkedList o3 = new LinkedList();
        o3.add("A");
        o3.add("B");
        o3.add("C");
 
        // o3 و o2 و o1 هنا قمنا بعرض محتويات الكائنات
        System.out.println("Vector elements:     " + o1);
        System.out.println("HashSet elements:    " + o2);
        System.out.println("LinkedList elements: " + o3);
 
    }
 
}
		</pre>
		<p><span class="point">•</span>سنحصل على النتيجة التالية عند التشغيل.</p>
		<pre data-enlighter-language="java" data-enlighter-linenumbers="false">
Vector elements:     [A, B, C]
HashSet elements:    [A, B, C]
LinkedList elements: [A, B, C] 
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
    <li><a href="../index.html"><span>»</span>لغة جافا</a></li>
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


<!-- Mirrored from harmash.com/java/java-collection/collection.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 17:01:17 GMT -->
</html>