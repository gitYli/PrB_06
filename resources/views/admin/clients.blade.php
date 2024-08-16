<!DOCTYPE html>
<html dir="rtl" data-bs-theme="dark" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>العملاء</title>
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
            <li class="nav-item"><a href="{{ route('admin.clients') }}" class="nav-link active">العملاء</a></li>
            <li class="nav-item"><a href="{{ route('admin.contact') }}" class="nav-link">الرسائل</a></li>
            <li class="nav-item"><a href="{{ route('signout') }}" class="nav-link">تسجيل الخروج</a></li>
            <li class="nav-item" onclick="toggleTheme()"><i id="theme" class="nav-link bi bi-sun-fill"></i></li>
        </ul>
    </header>
</div>
<div class="container">
    @if(session()->has('message-success'))
        <div class="alert alert-success">
            {{ session('message-success') }}
        </div>
    @endif
    @if(session()->has('message-danger'))
        <div class="alert alert-danger">
            {{ session('message-danger') }}
        </div>
    @endif
        @if(session()->has('message-warning'))
            <div class="alert alert-warning">
                {{ session('message-warning') }}
            </div>
        @endif
</div>

<section class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
                <div class="border rounded-2 shadow-sm overflow-hidden">
                    <form action="/clients" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-1 gy-xl-1 p-3 p-xl-4">
                            <h1 class="form-label">ادخل عميل جديد</h1>
                            <div class="col-12">
                                <label class="form-label" for="Client_name">اسم العميل</label>
                                <input type="text" class="form-control" name="Client_name" id="Client_name"
                                       required>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="Client_img">الصورة</label>
                                <input type="file" class="form-control" name="Client_img" id="Client_img" required>
                                @if ($errors->has('Client_img'))
                                    <span class="text-danger">{{ $errors->first('Client_img') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="Client_description" class="form-label">الوصف</label>
                                <textarea class="form-control" name="Client_description" id="Client_description"
                                          rows="4" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit">ارسال</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-3">
    <div class="row gap-1 m-xl-0 mx-1">
        @foreach($users as $value)
            <div class="col-12 col-lg-4 card shadow-sm p-0 m-xl-0 mb-1">
                <img class="card-img-top" src="{{ url('Images/'.$value->Client_img) }}" alt="Card image"
                     style="width:100%">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">{{ $value->Client_name }}</h4>
                    <span class="card-text" style="white-space: pre-wrap">{{ $value->Client_description }}</span>
                    <div class="d-flex justify-content-between align-items-center mt-auto">
                        <div>
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editModal-{{$value->id}}">تعديل
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal-{{$value->id}}">حذف
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteModal-{{$value->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4>هل انت متأكد من حذف العميل {{ $value->Client_name }}؟</h4>
                            <button type="button" class="btn btn-block btn-primary" style="width: 49%"
                                    data-bs-dismiss="modal">اغلاق
                            </button>
                            <a type="button" class="btn btn-block btn-danger" style="width: 49%"
                               href="{{ url('/clients/delete/' . $value->id ) }}">حذف</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editModal-{{$value->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form action="/clients/edit/{{$value->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <h3 class="form-label">تعديل معلومات العميل: {{ $value->Client_name }}</h3>
                                        <div class="col-12 gy-1 gy-xl-1">
                                            <label class="form-label" for="Client_name">اسم العميل</label>
                                            <input type="text" class="form-control" name="Client_name" id="Client_name"
                                                   value="{{ $value->Client_name }}" required>
                                        </div>
                                        <div class="col-12 gy-1 gy-xl-1">
                                            <label class="form-label" for="Client_img">الصوره</label>
                                            <input type="file" class="form-control" name="Client_img" id="Client_img" required>
                                            @if ($errors->has('Client_img'))
                                                <span class="text-danger">{{ $errors->first('Client_img') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-12 gy-1 gy-xl-1">
                                            <label for="Client_description" class="form-label">الوصف</label>
                                            <textarea class="form-control" name="Client_description" id="Client_description"
                                                      rows="4" required>{{ $value->Client_description }}</textarea>
                                        </div>
                                        <div class="col-12 gy-1 gy-xl-1">
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-lg" type="submit">ارسال</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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

