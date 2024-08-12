<!DOCTYPE HTML>
<html lang="ar" data-bs-theme="light">
<head>
    <link rel="icon" type="image/png" href="images/logo-black.png">
    <title>بانوراما القصيم للبرمجه و التصميم</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            text-align: right;
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #343a40;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            width: 50px;
            transition: transform 0.3s ease;
        }
        .navbar-brand img:hover {
            transform: scale(1.1);
        }
        .nav-link {
            color: #343a40;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .main-content h1 {
            font-weight: 700;
            color: #007bff;
            margin-bottom: 30px;
        }
        .main-content p {
            font-size: 1.1rem;
            color: #6c757d;
        }
        section {
            padding: 60px 0;
        }
        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #343a40;
            position: relative;
            display: inline-block;
        }
        h2::after {
            content: '';
            width: 50px;
            height: 3px;
            background-color: #007bff;
            position: absolute;
            bottom: -10px;
            left: 0;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            margin-top: 60px;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #0056b3;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo-black.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">خدماتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#work">عملائنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">تواصل معنا</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container main-content text-center mt-5">
    <h1>بانوراما القصيم للبرمجة والتصميم</h1>
    <p>نقدم لعملائنا أفضل الحلول والخدمات الرقميـة المتكامـــــــــــــــلـة</p>

    <section id="services">
        <article id="services">
            <h1>خدماتنا</h1><br>
            <h2 class="major">البرمجة من الصفر

            </h2>
            <span class="image main"><img src="images/pic01_7.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm" /></span>
            <p>
                نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر
            </p><br>
            <h2 class="major">سكريبت الجمعيات الخيرية</h2>
            <span class="image main"><img src="images/pic01_6.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                سكريبت متكامل لمواقع الجمعيات الخيريه وفق ضوابط المركز السعودي للحوكمة

            </p>
            <br>
            <h2 class="major">برنامج قمة للنداء الآلي</h2>
            <span class="image main"><img src="images/pic01.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm" /></span>
            <p>
                هو نظام تبليغ عن الحالات الطارئه
                للمنشآت الصحية أو غيرها من
                الأماكن التي تحتاج سرعة إستجابة
                يتم النداء عن طريق :
                <br>
                * السماعات الداخلية للمنشأة
                <br>
                * الإتصال المباشر بالفريق المناوب
                <br>
                *  الرسائل النصية
                <br>
                مع إماكنية التعديل الكامل في
                شفرات نداء الطوارئ
            </p><br>
            <!-- <hr style="border-style: none none dotted;"> -->
            <h2 class="major">برنامج قمة لنقاط البيع</h2>
            <span class="image main"><img src="images/pic01_1.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm" /></span>
            <p>
                * لا يحتاج جــــــهاز
                بمواصفات عاليه
                <br>
                * يعمل على
                الجوال
                <br>
                * قاعدة بيانات
                محمية
                مرفوعة على
                الشبكة
                <br>
                * نسخ احتياطي
                كل 24 ساعه


            </p><br>
            <h2 class="major">منصة بانوراما المتكاملة للاندية الرياضيه</h2>
            <span class="image main"><img src="images/pic01_5.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm" /></span>
            <p>
                تقدم بانوراما القصيم للبرمجة منصة متكاملة لادارة الانديه الرياضيه تشتمل على الآتي :

                <br>
                * موقع الكتروني

                <br>
                * تطبيقين جوال للموقع ايفون و اندرويد
                <br>
                * متجر الكتروني
                <br>
                * تطبيقين جوال للمتجر ايفون و اندرويد
                <br>
                * نظام المراسلات الالكترونيه
                <br>
                * منصة تذاكر


            </p> <br>
            <h2 class="major">نظام قمة للمحاسبة</h2>
            <span class="image main"><img src="images/pic01_2.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                هو نظام يمكن مكاتب المحاسبه من ادارة جميع اعمالها مثل :

                <br>
                * الحسابات
                <br>
                * القيود اليوميه																		   <br>
                * ميزان المراجعه
                <br>
                * القوائم الماليه
                <br>
                وغيرها من المهام المحاسبيه

            </p> <br>
            <h2 class="major">نظام قمة للمحاماه</h2>
            <span class="image main"><img src="images/pic01_3.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                هو نظام يمكن مكاتب المحاماه من ادارة جميع اعمالها مثل :

                <br>
                * تقديم الدعاوي

                <br>
                * ادراة المحاميين و توكيل القضايا لهم															   <br>
                * خط سير لمتابعة كل قضيه

            </p>
            <br>	<h2 class="major">منصة بانوراما لإدارة المشاريع الهندسية
            </h2>
            <span class="image main"><img src="images/pic01_4.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                تقدم بانوراما القصيم للبرمجه منصة متكاملة لإدارة المكاتب الهندسيه الكبيره تشتمل على الآتي :

                <br>
                * خط سير كامل للمشاريع الهندسية بكامل تفاصيلها


                <br>
                *  ادارة الموظفين و اجازاتهم و رواتبهم واقاماتهم
                <br>
                * نظام اشعارات مخصص لكل بند من البنود اعلاه
                <br>
                * ادارة السجلات و تراخيص المحلات

                <br>
                * ادارة الموادر البشريه
                <br>
                * ادارة متكامله لسيارات المكتب الهندسي


            </p>
        </article>
    </section>

    <section id="work">
        <article id="work">
            <h1>عملائنا</h1>
            <h2 class="major">مستشفى بريدة المركزي</h2>
            <span class="image main"><img src="images/pic02_3.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>صرح طبي عريق بالقصيم منطقة بريده
                أنجز مستشفى بريدة المركزي أحد مكونات تجمع القصيم الصحي , أكثر من 12 ألف عملية جراحية حتى نهاية الربع الثالث " يناير- سبتمبر" خلال 9 أشهر ، من العام الحالي 2023م ، توزعت على مختلف الأقسام بالمستشفى
            </p><br>
            <h2 class="major">اركال للاستشارات الهندسية</h2>
            <span class="image main"><img src="images/pic02.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>أركال للإستشارات الهندسيه المتخصص في تصميم المخططات المعماريه بأحدث الأساليب العصريه وتصميم المخططات الإنشائيه تماشيا مع الأكواد العالميه بالإضافة لجميع الأعمال المساحيه والكروكيات التنظيميه وأعمال مكافحة الحريق والأمن والسلامه.</p><br>
            <h2 class="major">نادي الرائد الرياضي</h2>
            <span class="image main"><img src="images/pic02_1.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                رؤيتنا أن نكون ناديًا رائدًا يعزز النمو المستدام في المجال الرياضي محلياً ودولياً ورسالتنا توفير بيئة رياضية محفّزة في مختلف الألعاب الرياضية، وخلق بيئة جاذبة للاستثمار، و تفعيل المسؤولية الاجتماعية، وتعزيز الإستدامة المهنية والمالية وذلك لتحقيق تطلعات الشركاء والتوجهات المستقبلية للمملكة
            </p><br>
            <h2 class="major">مخابز وحلويات الأرياف</h2>
            <span class="image main"><img src="images/pic02_4.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>

                مخابز وحلويات الأرياف.. 40 عاماً من التميز والنجاح 11 فرعاً حول المملكة تقدم أفضل المنتجات
                <br>
                بدأت قصة شركة مخابر وحلويات الأرياف عام 1985 ميلادي على يد المؤسس رجل الأعمال فهد المحيميد، من حلم إلى كيان عريق يملك خبرة ممتدة ومحفوفة بالعراقة والأصالة، كانت هذه العلامة التجارية شريكة في الكثير من اللحظات السعيدة للمجتمع مما جعل لهذه العلامة ولاء عاليا من قبل عملائها، حتى أصبحت لا تكتمل الأفراح لسنوات طويلة إلا بصحبة منتجات مخابز وحلويات الأرياف، وكان لدى المؤسس الأستاذ فهد المحيميد بعد نظر في استثماره، حيث حرص على أن لا يخدم قطاعاً واحداً فقط، بل قدم منتجات نوعية في قطاعات متعددة مثل:
                <br>*
                الحلويات الشرقية من الكنافة والبقلاوة وغيرها.


                <br>*
                الحلويات الغربية من الكيكات الفاخرة، والكثير من الوصفات المبتكرة والمستوحاة من المطبخ الأوروبي وغيرها.


                <br>*
                الشوكولاتة الفاخرة بأعلى مستوى وألذ حشوة.


                <br>*
                المعجنات والمقليات الطازجة، والمخبوزات التي هي خيار دائم لأصحاب المنازل.



            </p>

            <br>
            <h2 class="major">النادي العربي</h2>
            <span class="image main"><img src="images/pic02_5.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                النادي العربي الرياضي بعنيزة, في محافظة عنيزة بمنطقة القصيم وسط المملكة العربية السعودية تأسس سنة 1958, ويحمل النادي شعارا باللون الأحمر والأبيض. يُلقب النادي العربي بفارس عنيزة، وهو نادي رياضي يضم العديد من الألعاب الرياضية أبرزها كرة القدم وكرة اليد وكرة السلة. ويقع مقر النادي في محافظة عنيزة بمنطقة القصيم
            </p>

            <br>
            <h2 class="major">نادي الصقر</h2>
            <span class="image main"><img src="images/pic02_7.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                تاسس نادي الصقر عام 1401هـ على يد مجموعة من اهالي مركز البصر وحينها تم ترشيح الاستاذ عبد العزيز بن عبد الرحمن السويد كاول رئيس للنادي, ثم تعاقب على ادارة النادي احد عشر رئيسا كان اخرهم الرئيس الحالي الاستاذ فهد بن عبد العزيز المحيميد.حقق النادي اول بطولاته على مستوى منطقة القصيم العام 1432هـ وفي العام 1442هـ حقق النادي ذات البطولة للمرة الثانية . وفي نفس العام حقق نادي الصقر تاج بطولاتة : درع المملكة العربية السعودية الاندية الدرجة الثالثة, بقيادة رئيس النادي الاستاذ فهد بن عبدالعزيز المحيميد, وعلى اثرها تأهل لاول مرة في تاريخه لدوري الدرجة الثانية لكرة القدم .
            </p>

            <br>
            <h2 class="major">نادي السر </h2>
            <span class="image main"><img src="images/pic02_8.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                نسعى بنادي السر الرياضي للتميز الرياضي والإداري عبر عمل مؤسسي لتحقيق أهدافنا وطموحاتنا التي تلبي تطلعات أصحاب المصلحة.
                <br>وأن نكون متميزين في مختلف المجالات الرياضية ونموذجاً في التطوير المؤسسي

                <br>
                التميز روح الفريق الاستدامة الشراكة الشفافية التمكين


                <br>ولتحقيق التميز المؤسسي تحسين المنافسة الرياضية تعزيز الاستدامة المالية زيادة مشجعي النادي تحسين البنية تفعيل التكامل و الشراكات المجتمعية


            </p>

            <br>
            <h2 class="major">نادي التقدم</h2>
            <span class="image main"><img src="images/pic02_6.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                كانت بدايات النادي بسيطة باجتهادات ألهالي المذنب في عام 1968م، حيث تولى رئاسته إدارته بداح البداح - رحمه هللا تعالى -حتى جاءت الموافقة الكريمة على اعتماد نادي التقدم الرياضي في محافظة المذنب لممارسة كافة أنشطته الرياضية والثقافية واالجتماعية عام 1972 م ويتولى رئاسة مجلس إدارته عثمان بن محمد الدخيل - رحمه الله تعالى - وتتعاقب بعده اإلدارات لوقتنا الحالي.
            </p>
            <br>
            <h2 class="major">حاضنة الجمعيات</h2>
            <span class="image main"><img src="images/pic02_9.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                حاضنة للجمعيات الأهلية الناشئة هدفها دراسة الاحتياجات بمنطقة القصيم ودعم الافكار ورعايتها ودعم الجمعيات من خلال سبل الاستدامة المالية وتنفيذ افكارها، وحل مشكلة الصعوبات والعوائق التي تواجهها، وكيفية حلها ، ومعرفة الاحتياجات بهدف مساعدتها لتأسيس هذه الجمعية.
            </p>
            <br>
            <h2 class="major">كليات عنيزة</h2>
            <span class="image main"><img src="images/pic02_10.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                تعد كليات عنيزة من الكليات الناشئة في المملكة؛ إذ انطلقت مسيرتها في العام الجامعي 1437/1436 ه بدعم سخي من حكومة خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعود، وسمو ولي عهده الأمين، حفظهما الله، ورعاية كريمة من وزارة التعليم، تحقيقا للتوجهات المستقبلية للمملكة في مجال التعليم، والبحث العلمي؛ لتوفير تعليم متميز لأبناء المملكة وبناتها في منطقة القصيم

            </p>
            <br>
            <h2 class="major">جمعية تجهيز</h2>
            <span class="image main"><img src="images/pic02_11.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                جمعية خيرية تهتم بشؤون المسلم بعد موته، وتوعية المجتمع بأحكام الجنائز من خلال تقديم عمل خيري متقن للمجتمع من خلال الاهتمام برعاية شؤون الموتى، تجهيزا، وتكفينا، ودفنا، وتدريب وتأهيل المغسلين، وتوعية المجتمع بالمفهوم الشرعي للتعامل مع الجنائز.

            </p>
            <br>
            <h2 class="major">مكتب المحامي عبدالرحمن الجمعة</h2>
            <span class="image main"><img src="images/pic02_12.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                مكتب عبدالرحمن محمد الجمعة محامون ومستشارون وموثقون هو مكتب مرخص له بمزاولة المحاماة بموجب ترخيص المحاماة رقم 39389 وتاريخ 1/7/1439 وترخيص التوثيق رقم 1767 /40 وتاريخ 1/9/1440هـ الصادرين من وزارة العدل بالمملكة العربية السعودية


            </p>
            <br>
            <h2 class="major">مكتب القصيم للزواج</h2>
            <span class="image main"><img src="images/pic02_13.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>
            <p>
                مكتب القصيم للزواج القصيم بريده حي السالميه شرق مسجد الجارالله الجامع
                المكتب له حوالي 16سنه زوج كثير من الرجال على مستوى المملكه دخولك وتعرفك بالمكتب انت بالطريق الصحيح وانتبه لنفسك من المتطفلين على الزواج في برامج التواصل الذينا ليسو مختصين بالزواج وإنما هدفهم اخذ أموال الناس بالباطل المكتب معروف لدى الجميع ومنهم الجهات المختصه .
            </p>
            <br>


        </article>
    </section>

    <section id="about">
        <h1>من نحن</h1>
        <span class="image main"><img src="images/pic03.jpg" alt="" class="img-fluid rounded mb-4 shadow-sm"/></span>

        <p>
            إيمانًا منا بأهمية البرمجة و العالم الرقمي في حياتنا كنا نحن بانوراما القصيم، من الرواد في هذه المجالاتي التي تسعى للارتقاء بمجال التصميم والبرمجة لتكون من كبرى الصروح بالمملكة والشرق الأوسط في تصميم وبرمجة المواقع وتطبيقات الجوال والبرامج الإدارية والمحاسبية .
        </p>
        <p>
            نهدف دائمًا لإرضاء كافة العملاء لدينا من خلال تقديم مجموعة من الخدمات المميزة. نسعى لخلق وتنمية جسور التعاون والشراكة وتبادل الخبرات بين المبرمجين في مختلف تخصصاتهم، ونستهدف إعداد برامج متميزة تلبي الاحتياجات الحقيقية للمجتمع وسوق العمل مع تطويرها المستمر. ندرب المبرمجين حديثي التخرج لنرتقي بـالمستويات المهارية في جميع مجالات البرمجة من الأنشطة الأساسية لخدمة المجتمع المدني.
        </p>
        <p>
            رسالتنا هي خلق مجتمع واعِ فكريًا و متطور علميًا، قادرًا على مواكبة العالم الرقمي بأسهل الطرق وأبسطها.
        </p>
    </section>

    <section id="contact" class="text-start">
        <h2>اترك لنا رسالتك</h2>
        <form action="/q" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">الاسم</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">البريد الالكتروني</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">الرسالة</label>
                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ارسال</button>
            <button type="reset" class="btn btn-secondary">مسح</button>
        </form>
    </section>
</div>

<!-- Footer -->
<footer class="footer">
    <p>&copy; تم التصميم بواسطة <a href="#">بانوراما القصيم للبرمجة والتصميم</a>. 2024 - 2014</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
