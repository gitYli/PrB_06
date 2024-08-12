{{--<!DOCTYPE html>--}}
{{--<html lang="en" data-bs-theme="dark">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Title</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<main class="login-form">--}}
{{--    <div class="cotainer">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card">--}}
{{--                    <h3 class="card-header text-center">Login</h3>--}}
{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('login.custom') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group mb-3">--}}
{{--                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>--}}
{{--                            </div>--}}
{{--                            <div class="form-group mb-3">--}}
{{--                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>--}}
{{--                                @if ($errors->has('emailPassword'))--}}
{{--                                    <span class="text-danger">{{ $errors->first('emailPassword') }}</span>--}}
{{--                                @endif--}}
{{--                            </div>--}}

{{--                            <div class="form-group mb-3">--}}
{{--                                <div class="checkbox">--}}
{{--                                    <label>--}}
{{--                                        <input type="checkbox" name="remember"> Remember Me--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="d-grid mx-auto">--}}
{{--                                <button type="submit" class="btn btn-dark btn-block">Signin</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}
<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.html" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link active">Contact</a></li>
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
                                <img id="logo" src="../images/logo.png" alt="Panorama-Q logo" height="57">
                            </a>
                        </div>
                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>
                        <form method="post" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required autofocus>
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                        <label for="password" class="form-label">Password</label>
                                        @if ($errors->has('emailPassword'))
                                            <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex gap-2 justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="rememberMe">
                                            <label class="form-check-label text-secondary" for="rememberMe">
                                                Keep me logged in
                                            </label>
                                        </div>
                                        <a href="#!" class="link-primary text-decoration-none">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="m-0 text-secondary text-center">Don't have an account? <a href="#!" class="link-primary text-decoration-none">Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container ">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="https://github.com/gitYli"><i class="bi bi-github"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-linkedin"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter-x"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
        </ul>
    </footer>
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
</body>
</html>
