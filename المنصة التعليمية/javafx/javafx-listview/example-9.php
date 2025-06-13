
<!DOCTYPE html>
<html lang="ar">


<!-- Mirrored from harmash.com/javafx/javafx-listview/example-9.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 20:34:22 GMT -->
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

    <title>JavaFX - طريقة ListView لإختيار الألوان في ListView</title>

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
                <ul><li id="method_img"><img src="../javafx-icon.png"></li>
<li class="title">أساسيات المكتبة</li>
<li><a href="../javafx-overview/index.html"><span class="en">JavaFX</span> - نظرة عامة</a></li>
<li><a href="../javafx-application/index.html"><span class="en">JavaFX</span> - بنية التطبيقات</a></li>
<li><a href="../javafx-architecture/index.html"><span class="en">JavaFX</span> - بنية المكتبة</a></li>
<li class="title">عناصر واجهة المستخدم</li>
<li><a href="../javafx-label/index.html"><span class="en">Label - JavaFX</span></a></li>
<li><a href="../javafx-button/index.html"><span class="en">Button - JavaFX</span></a></li>
<li><a href="../javafx-textfield/index.html"><span class="en">TextField - JavaFX</span></a></li>
<li><a href="../javafx-passwordfield/index.html"><span class="en">PasswordField - JavaFX</span></a></li>
<li><a href="../javafx-textarea/index.html"><span class="en">TextArea - JavaFX</span></a></li>
<li><a href="../javafx-togglebutton/index.html"><span class="en">ToogleButton - JavaFX</span></a></li>
<li><a href="../javafx-radiobutton/index.html"><span class="en">RadioButton - JavaFX</span></a></li>
<li><a href="../javafx-checkbox/index.html"><span class="en">CheckBox - JavaFX</span></a></li>
<li><a href="../javafx-choicebox/index.html"><span class="en">ChoiceBox - JavaFX</span></a></li>
<li><a href="../javafx-combobox/index.html"><span class="en">ComboBox - JavaFX</span></a></li>
<li><a href="index.html"><span class="en">ListView - JavaFX</span></a></li>
<li><a href="../javafx-tableview/index.html"><span class="en">TableView - JavaFX</span></a></li>
<li><a href="../javafx-treeview/index.html"><span class="en">TreeView - JavaFX</span></a></li>
<li><a href="../javafx-slider/index.html"><span class="en">Slider - JavaFX</span></a></li>
<li><a href="../javafx-tooltip/index.html"><span class="en">Tooltip - JavaFX</span></a></li>
<li><a href="../javafx-progressbar/index.html"><span class="en">ProgressBar - JavaFX</span></a></li>
<li><a href="../javafx-progressindicator/index.html"><span class="en">ProgressIndicator - JavaFX</span></a></li>
<li><a href="../javafx-hyperlink-and-webview/index.html"><span class="en">Hyperlink + WebView - JavaFX</span></a></li>
<li><a href="../javafx-separator/index.html"><span class="en">Separator - JavaFX</span></a></li>
<li><a href="../javafx-colorpicker/index.html"><span class="en">ColorPicker - JavaFX</span></a></li>
<li><a href="../javafx-datepicker/index.html"><span class="en">DatePicker - JavaFX</span></a></li>
<li><a href="../javafx-filechooser/index.html"><span class="en">FileChooser - JavaFX</span></a></li>
<li><a href="../javafx-htmleditor/index.html"><span class="en">HTMLEditor - JavaFX</span></a></li>
<li><a href="../javafx-contextmenu/index.html"><span class="en">ContextMenu - JavaFX</span></a></li>
<li><a href="../javafx-menubar/index.html"><span class="en">MenuBar - JavaFX</span></a></li>
<li><a href="../javafx-alert/index.html"><span class="en">Alert - JavaFX</span></a></li>
<li class="title">الحاويات</li>
<li><a href="../javafx-group/index.html"><span class="en">Group - JavaFX</span></a></li>
<li><a href="../javafx-pane/index.html"><span class="en">Pane - JavaFX</span></a></li>
<li><a href="../javafx-hbox/index.html"><span class="en">HBox - JavaFX</span></a></li>
<li><a href="../javafx-vbox/index.html"><span class="en">VBox - JavaFX</span></a></li>
<li><a href="../javafx-borderpane/index.html"><span class="en">BorderPane - JavaFX</span></a></li>
<li><a href="../javafx-stackpane/index.html"><span class="en">StackPane - JavaFX</span></a></li>
<li><a href="../javafx-flowpane/index.html"><span class="en">FlowPane - JavaFX</span></a></li>
<li><a href="../javafx-tilepane/index.html"><span class="en">TilePane - JavaFX</span></a></li>
<li><a href="../javafx-scrollpane/index.html"><span class="en">ScrollPane - JavaFX</span></a></li>
<li><a href="../javafx-gridpane/index.html"><span class="en">GridPane - JavaFX</span></a></li>
<li><a href="../javafx-titledpane-and-accordion/index.html"><span class="en">TitledPane + Accordion - JavaFX</span></a></li>
<li><a href="../javafx-anchorpane/index.html"><span class="en">AnchorPane - JavaFX</span></a></li>
<li><a href="../javafx-pagination/index.html"><span class="en">Pagination - JavaFX</span></a></li>
<li class="title">الرسم و التلوين و التحريك</li>
<li><a href="../javafx-class-text/index.html"><span class="en">Text - JavaFX</span></a></li>
<li><a href="../javafx-2d-shapes/index.html"><span class="en">2D Shapes - JavaFX</span></a></li>
<li><a href="../javafx-animations/index.html"><span class="en">Animations - JavaFX</span></a></li>
<li><a href="../javafx-charts/index.html"><span class="en">Charts - JavaFX</span></a></li>
<li><a href="../javafx-scene-builder/index.html"><span class="en">Scene Builder - JavaFX</span></a></li>
<li class="title">تعلم بناء تطبيقات و ألعاب</li>
<li><a href="../javafx-projects/index.html"><span class="en">JavaFX</span> - جميع المشاريع</a></li>
<li><a href="../javafx-who-will-win-the-million-source-code/index.html"><span class="en">JavaFX</span> - من سيربح المليون</a></li>
<li><a href="../javafx-color-picker-source-code/index.html"><span class="en">JavaFX</span> - برنامج إختيار الألوان</a></li>
<li><a href="../javafx-age-calculator-source-code/index.html"><span class="en">JavaFX</span> - برنامج حساب الأعمار</a></li>
<li><a href="../javafx-ip-finder-source-code/index.html"><span class="en">JavaFX</span> - محلل عناوين المواقع</a></li>
<li><a href="../javafx-snake-2d-source-code/index.html"><span class="en">JavaFX</span> - لعبة الأفعى <span class="en">Snake 2D</span></a></li>
<li><a href="../javafx-calculator-source-code/index.html"><span class="en">JavaFX</span> - آلة حاسبة بسيطة</a></li>
<li><a href="../javafx-scientific-calculator-source-code/index.html"><span class="en">JavaFX</span> - آلة حاسبة علمية</a></li>
<li><a href="../javafx-tic-tac-toe-source-code/index.html"><span class="en">JavaFX</span> - لعبة <span class="en">Tic Tac Toe</span></a></li>
<li><a href="../javafx-company-products-manager-source-code/index.html"><span class="en">JavaFX</span> - برنامج إدارة المحتوى</a></li>

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
                <h1><span class="session">JavaFX</span>طريقة إنشاء <code data-enlighter-language="java">ListView</code> لإختيار الألوان</h1>
<article>
	<p>المثال التالي يعلمك طريقة إنشاء <code data-enlighter-language="java">ListView</code> لإختيار الألوان.</p>
	<br>
    <div class="example-box">
		<h4>مثال</h4>
	    <span class="code-title java-file-icon">ColorRectCell.java</span>
        <pre data-enlighter-language="java">
import javafx.scene.control.ListCell;
import javafx.scene.paint.Color;
import javafx.scene.shape.Rectangle;
 
// ListView هنا قمنا بإنشاء كلاس خاص يعطينا شكل مستطيل يمكن وضعه كعنصر في كائن من الكلاس
public class ColorRectCell extends ListCell&lt;String> {
 
    @Override
    public void updateItem(String item, boolean empty) {
 
        // هنا قمنا باستدعاء دالة تحديث شكل العنصر الجاهزة لأننا على أساسها سنضيف مستطيل مربع مكان العنصر
        super.updateItem(item, empty);
 
        // هنا قمنا بتحديد حجم المستطيل
        Rectangle rect = new Rectangle(122, 20);
 
        // عند ربطهما ببعض ListView هنا قمنا بتحديد أن لون المستطيل سيتم أخذه من إسم عنصر كائن
        if (item != null) {
            rect.setFill(Color.web(item));
            setGraphic(rect);
        }
        else {
            setGraphic(null);
        }
 
    }

}

		</pre>
		<br>
	    <span class="code-title java-file-icon">Main.java</span>
        <pre data-enlighter-language="java">
import javafx.application.Application;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.paint.Color;
import javafx.scene.text.Font;
import javafx.stage.Stage;
 
public class Main extends Application {
 
    @Override
    public void start(Stage stage) {
 
        // هنا قمنا بإنشاء جميع الأشياء التي سنضيفها في النافذة
        Label label = new Label();
        ListView&lt;String> listView = new ListView&lt;>();
 
        // يمثل مجموعة العناصر التي ستظهر في القائمة ObservableList هنا قمنا بإنشاء كائن من الكلاس
        ObservableList&lt;String> items = FXCollections.observableArrayList(
            "red", "blue", "green", "yellow", "orange", "brown", "pink", "purple", "gray", "black", "white"
        );
 
        // listView كعناصر للكائن items هنا قمنا بوضع عناصر الكائن
        listView.setItems(items);
 
        // أي إلى مستطيل لونه من إسمه ColorRectCell إلى كائن من الكلاس listView هنا قمنا بتحويل كل عنصر في الـ
        listView.setCellFactory((ListView&lt;String> ol) -> new ColorRectCell());
 
        // هنا قمنا بتحديد حجم الأشياء التي سنضيفها في النافذة
        label.setPrefSize(200, 30);
        listView.setPrefSize(152, 250);
 
        // هنا قمنا بتحديد مكان ظهور الأشياء التي سنضيفها في النافذة
        label.setTranslateX(180);
        label.setTranslateY(110);
        listView.setTranslateX(0);
        listView.setTranslateY(0);
 
        label.setFont(new Font("Arial", 22));
 
        // في النافذة Root Node لأننا ننوي جعله الـ Group هنا قمنا بإنشاء كائن من الكلاس
        Group root = new Group();
 
        // root هنا قمنا بإضافة جميع الأشياء في الكائن
        root.getChildren().add(label);
        root.getChildren().add(listView);
 
        // فيها و تحديد حجمها Node كأول root هنا قمنا بإنشاء محتوى النافذة مع تعيين الكائن
        Scene scene = new Scene(root, 400, 250);
 
        // هنا وضعنا عنوان للنافذة
        stage.setTitle("JavaFX ListView");
 
        // أي وضعنا محتوى النافذة الذي قمنا بإنشائه للنافذة .stage في كائن الـ scene هنا وضعنا كائن الـ
        stage.setScene(scene);
 
        // هنا قمنا بإظهار النافذة
        stage.show();
 
        // listView هنا قمنا بتحديد ماذا سيحدث عند النقر على أي عنصر موجود في الـ
        listView.getSelectionModel().selectedItemProperty().addListener(
            (ObservableValue&lt;? extends String> ov, String old_val, String new_val) -> {
            // label هنا جعلنا إسم العنصر الذي تم إختياره يوضع كنص للكائن
            label.setText(new_val);
            // label هنا جعلنا إسم العنصر الذي تم إختياره يوضع كلون خط للكائن
            label.setTextFill(Color.web(new_val));
        });
 
    }
 
    // هنا قمنا بتشغيل التطبيق
    public static void main(String[] args) {
        launch(args);
    }
 
}
		</pre>
		<p><span class="point">•</span>ستظهر لك النافذة التالية عند التشغيل.</p>
		<div class="image-box">
			<a target="_blank" href="example-9.gif"><img src="example-9.gif" alt="طريقة ListView لإختيار الألوان في javafx"/></a>
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
    <li><a href="../../python/index.html"><span>»</span>لغة بايثون</a></li>
    <li><a href="../../java/index.html"><span>»</span>لغة جافا</a></li>
    <li><a href="../../cplusplus/index.html"><span>»</span>لغة ++C</a></li>
    <li><a href="../../swing/index.html"><span>»</span>جافا Swing</a></li>
    <li><a href="../index.html"><span>»</span>جافا FX</a></li>
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


<!-- Mirrored from harmash.com/javafx/javafx-listview/example-9.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jun 2020 20:34:22 GMT -->
</html>