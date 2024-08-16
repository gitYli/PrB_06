<!DOCTYPE HTML>
<html lang="ar" dir="rtl" data-bs-theme="dark">
<head>
    <link rel="icon" type="image/png" href="images/logo-color.png">
    <title>بانوراما القصيم للبرمجة و التصميم</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        @media (min-width: 992px) {
            .w-lg-65 {
                width: 60%;
            }
        }
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            display: none;
        }
        .scroll-to-top.show {
            display: block;
        }
        /**{*/
        /*    color: #f5912c;*/
        /*}*/
        /*.display-color{*/
        /*    color: #7e2619;*/
        /*}*/
    </style>
</head>
<body>

<div class="container py-3">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#services">خدماتنا</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#work">عملائنا</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#about">من نحن</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#contact">تواصل معنا</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" onclick="toggleTheme()"><i id="theme" class="nav-link bi bi-sun-fill"></i></a>
            </nav>

            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <img src="/images/logo-color.png" alt="logo" width="50px" height="50px">
            </a>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-3 fw-normal display-color text-primary">بانوراما القصيم للبرمجة والتصميم</h1><br>
            <p class="fs-5 text-body-secondary">نقدم لعملائنا أفضل الحلول والخدمات الرقمية المتكاملة</p>
        </div>
    </header>

    <section id="services" class="text-center py-5">
        <h2 class="display-4 display-color mt-3 text-primary"><strong>خدماتنا</strong></h2>
        <div class="">
            @foreach($services as $service)
                <img src="{{ url('images/'.$service->Services_img) }}" class="rounded img-fluid w-lg-65 my-4 shadow-sm" alt="{{ $service->Services_name }}">
                <div class="">
                    <h5 class="display-6">{{ $service->Services_name }}</h5>
                    <span class="fs-5 text-body-secondary" style="white-space: pre-wrap">{{ $service->Services_description }}</span>
                </div>
            @endforeach
        </div>
    </section>

    <section id="work" class="text-center py-5">
        <h2 class="display-4 display-color mt-3 text-primary"><strong>عملائنا</strong></h2>
        <div class="">
            @foreach($clients as $client)
                <img src="{{ url('images/'.$client->Client_img) }}" class="rounded img-fluid w-lg-65 my-4 shadow-sm" alt="{{ $client->Client_name }}">
                <div class="">
                    <h5 class="display-6">{{ $client->Client_name }}</h5>
                    <span class="fs-5 text-body-secondary" style="white-space: pre-wrap">{{ $client->Client_description }}</span>
                </div>
            @endforeach
        </div>
    </section>

    <section id="about" class="text-center py-5">
        <h2 class="display-4 display-color mt-3 text-primary"><strong>من نحن</strong></h2>
        <img src="images/pic03.jpg" alt="About Us" class="img-fluid rounded w-lg-65 my-4 shadow-sm"/>
        <p class="fs-5 text-body-secondary">
            إيمانًا منا بأهمية البرمجة و العالم الرقمي في حياتنا كنا نحن بانوراما القصيم، من الرواد في هذه المجالات
            التي تسعى للارتقاء بمجال التصميم والبرمجة لتكون من كبرى الصروح بالمملكة والشرق الأوسط في تصميم وبرمجة
            المواقع وتطبيقات الجوال والبرامج الإدارية والمحاسبية.
        </p>
        <p class="fs-5 text-body-secondary">
            نهدف دائمًا لإرضاء كافة العملاء لدينا من خلال تقديم مجموعة من الخدمات المميزة. نسعى لخلق وتنمية جسور التعاون
            والشراكة وتبادل الخبرات بين المبرمجين في مختلف تخصصاتهم، ونستهدف إعداد برامج متميزة تلبي الاحتياجات الحقيقية
            للمجتمع وسوق العمل مع تطويرها المستمر. ندرب المبرمجين حديثي التخرج لنرتقي بـالمستويات المهارية في جميع
            مجالات البرمجة من الأنشطة الأساسية لخدمة المجتمع المدني.
        </p>
        <p class="fs-5 text-body-secondary">
            رسالتنا هي خلق مجتمع واعٍ فكريًا ومطور علميًا، قادرًا على مواكبة العالم الرقمي بأسهل الطرق وأبسطها.
        </p>
    </section>

    <section id="contact" class="py-5">
        <h2 class="display-4 text-center display-color my-3 text-primary"><strong>اترك لنا رسالتك</strong></h2>
        <form action="/" method="POST" class="mx-md-5 px-md-5">
            @csrf
            @if(session()->has('message-success'))
                <div class="alert alert-success">
                    {{ session('message-success') }}
                </div>
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">الاسم</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">البريد الالكتروني</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">الرسالة</label>
                <textarea class="form-control" id="message" rows="4" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ارسال</button>
            <button type="reset" class="btn btn-danger">مسح</button>
        </form>
    </section>


    <footer>
        <div class="d-flex flex-column flex-md-row align-items-center py-3 my-4 border-top">
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://instagram.com/palqassim/"><i class="bi bi-instagram"></i></a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://tiktok.com/@panorama_alqassim"><i class="bi bi-tiktok"></i></a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://snapchat.com/t/mh05HGb6"><i class="bi bi-snapchat"></i></a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://api.whatsapp.com/send/?phone=9660553172552"><i class="bi bi-whatsapp"></i></a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://facebook.com/palqassim"><i class="bi bi-facebook"></i></a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://x.com/Panorama_Q"><i class="bi bi-twitter-x"></i></a>
            </nav>

            <div class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <span class="mb-3 mb-md-0 text-body-secondary">بانوراما القصيم للبرمجة والتصميم 2024 - 2014 ©</span>
            </div>
        </div>
    </footer>

    <button class="scroll-to-top btn btn-primary" id="scrollToTopBtn">
        <i class="bi bi-arrow-up"></i>
    </button>
</div>

<script type="text/javascript">
    // Get the button
    let mybutton = document.getElementById("scrollToTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.classList.add("show");
        } else {
            mybutton.classList.remove("show");
        }
    };

    // When the user clicks on the button, scroll to the top of the document
    mybutton.onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    let icon = document.getElementById("theme");
    let logo = document.getElementById("logo");

    // function to set a given theme/color-scheme
    function setTheme(themeName) {
        localStorage.setItem('theme', themeName);
        document.documentElement.setAttribute('data-bs-theme', themeName);
    }

    // function to toggle between light and dark theme
    function toggleTheme() {
        if (localStorage.getItem('theme') === 'dark') {
            setTheme('light');
            icon.setAttribute('class', 'nav-link bi bi-moon-stars-fill')
            logo.setAttribute('src', '../images/logo-black.png')
        } else {
            setTheme('dark');
            icon.setAttribute('class', 'nav-link bi bi-sun-fill')
            logo.setAttribute('src', '../images/logo.png')
        }
    }

    // Immediately invoked function to set the theme on initial load
    (function () {
        if (localStorage.getItem('theme') === 'dark') {
            setTheme('dark');
            icon.setAttribute('class', 'nav-link bi bi-sun-fill')
            logo.setAttribute('src', '../images/logo.png')
        } else {
            setTheme('light');
            icon.setAttribute('class', 'nav-link bi bi-moon-stars-fill')
            logo.setAttribute('src', '../images/logo-black.png')
        }
    })();
</script>

</body>
</html>
