<!DOCTYPE html>
<html data-bs-theme="dark" lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>تسجيل الدخول</title>
    <style>
        .form-floating > label {
            left: unset !important;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border- bottom">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('register-user') }}" class="nav-link" aria-current="page">انشاء حساب</a></li>
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link active">تسجيل الدخول</a></li>
            <li class="nav-item" onclick="toggleTheme()"><i id="theme" class="nav-link bi bi-sun-fill"></i></li>
        </ul>
    </header>
</div>

<section class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="text-center mb-3">
                            <a href="#!">
                                <img id="logo" src="../images/logo-color.png" alt="Panorama-Q logo" height="57">
                            </a>
                        </div>
                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">قم بتسجيل الدخول إلى حسابك</h2>
                        <form method="post" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="name@example.com" required autofocus>
                                        <label for="name" class="form-label">إسم المستخدم</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                        <label for="password" class="form-label">كلمة المرور</label>
                                        @if ($errors->has('emailPassword'))
                                            <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <button class="btn btn-primary btn-lg" type="submit">تسجيل الدخول</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="m-0 text-secondary text-center">ليس لديك حساب؟ <a href="{{ route('register-user') }}" class="link-primary text-decoration-none">قم بالتسجيل</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
