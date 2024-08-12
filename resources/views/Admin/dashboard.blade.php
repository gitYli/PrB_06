<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">Kodsozluk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<form action="/data" method="post">
    @csrf
    @if(session()->has('message'))
        <div class="alert success">
            {{ session('message') }}
        </div>
    @endif
    <div class="fields">
        <div class="field half">
            <label for="Services_name">العنوان</label>
            <input type="text" name="Services_name" id="Services_name" />
        </div>
        <div class="field half">
            <label for="Services_img">الصوره</label>
            <input type="text" name="Services_img" id="Services_img" />
        </div>
        <div class="field">
            <label for="Services_description">الوصف</label>
            <textarea name="Services_description" id="Services_description" rows="4"></textarea>
        </div>
    </div>
    <ul class="actions">
        <li><input type="submit" value="ارسال" class="primary" /></li>
        <li><input type="reset" value="مسح" /></li>
    </ul>
</form>

@foreach($users as $value)
    <h1>{{ $value->Services_name }}</h1>
    <img src="{{ $value->Services_img }}" alt="">
    <p>{{ $value->Services_description }}</p>
@endforeach
</body>

</html>
