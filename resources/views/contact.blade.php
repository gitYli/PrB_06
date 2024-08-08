<!DOCTYPE HTML>
<html>
<head>
    <link rel="icon" type="image/png" href="images/logo.png">
    <title>بانوراما القصيم للبرمجه و التصميم</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<style>
    .test {
        background-color: #802617;
        padding: 10%;
        border-radius: 4px;
    }
    .message {
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding: 1em;
        max-width: 25ch;
        margin: 1em;
    }
    .tooltip {
        /* triangle dimension */
        --b: 2em; /* base */
        --h: 1em; /* height */

        --p: 100%; /* triangle position (0%:left 100%:right) */
        --r: 1.2em; /* the radius */
        --c: #248af3;

        border-radius: var(--r);
        clip-path: polygon(0 100%,0 0,100% 0,100% 100%,
        min(100%,var(--p) + var(--b)/2) 100%,
        var(--p) calc(100% + var(--h)),
        max(0%  ,var(--p) - var(--b)/2) 100%);
        background: var(--c);
        border-image: conic-gradient(var(--c) 0 0) fill 0/
    var(--r) calc(100% - var(--p) - var(--b)/2) 0 calc(var(--p) - var(--b)/2)/
    0 0 var(--h) 0;
        margin-left: 7em;
    }

    .tooltip-left {
        /* triangle dimension */
        --b: 2em; /* base */
        --h: 1em; /* height */

        --p: 0%; /* triangle position (0%:left 100%:right) */
        --r: 1.2em; /* the radius */
        --c: #248af3;

        border-radius: var(--r);
        clip-path: polygon(0 100%,0 0,100% 0,100% 100%,
        min(100%,var(--p) + var(--b)/2) 100%,
        var(--p) calc(100% + var(--h)),
        max(0%  ,var(--p) - var(--b)/2) 100%);
        background: var(--c);
        border-image: conic-gradient(var(--c) 0 0) fill 0/
    var(--r) calc(100% - var(--p) - var(--b)/2) 0 calc(var(--p) - var(--b)/2)/
    0 0 var(--h) 0;
        margin-right: 7em;
    }


    body {
        margin: 0;
        min-height: 100vh;
        display: grid;
        gap: 20px;
        place-content: center;
        text-align: center;
        background: #f2f2f2;
    }
</style>
<body>
@foreach($users as $value)
<!-- Wrapper -->
<div id="wrapper">
    <!-- Main -->
    <div class="test">
        <h2 class="major">هلا <span>{{ $value->name }}</span></h2>
        <div class="tooltip message">
            {{ $value->comment }}
        </div>
        <div class="tooltip-left message">
            {{ $value->comment }}
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; تم التصميم بواسطة<a href=""> بانوراما القصيم للبرمجة والتصميم</a>.</p>2024 - 2014
    </footer>
</div>@endforeach

<!-- BG -->

<div id="bg"></div>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

