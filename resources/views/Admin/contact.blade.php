<!DOCTYPE html>
<html dir="rtl" data-bs-theme="dark" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الرسائل</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <style>
        @media (min-width: 992px) {
            .col-lg-4 {
                flex: 0 0 auto;
                width: 33%;
            }
        }
    </style>
</head>

<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('admin.services') }}" class="nav-link" aria-current="page">الخدمات</a></li>
            <li class="nav-item"><a href="{{ route('admin.clients') }}" class="nav-link">العملاء</a></li>
            <li class="nav-item"><a href="{{ route('admin.contact') }}" class="nav-link active">الرسائل</a></li>
            <li class="nav-item"><a href="{{ route('signout') }}" class="nav-link">تسجيل الخروج</a></li>
            <li class="nav-item" onclick="toggleTheme()"><i id="theme" class="nav-link bi bi-sun-fill"></i></li>
        </ul>
    </header>
</div>

<div class="container mt-3">
    <div class="row gap-1 m-xl-0 mx-1">
        @foreach($data as $value)
            <div class="col-12 col-lg-4 card shadow-sm p-0 m-xl-0 mb-1">
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title">الاسم: {{ $value->name }}</h3>
                    <h4 class="card-title">البريد الإلكتروني: {{ $value->email }}</h4>
                    <span class="card-text" style="white-space: pre-wrap">الرسالة: "{{ $value->comment }}"</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script type="text/javascript">
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

