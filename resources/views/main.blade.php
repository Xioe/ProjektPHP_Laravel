<!DOCTYPE HTML>
<html>

<head>
    <title>{{ $title ?? "Password Manager"}}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css" media="screen,projection" />

    <!--Custom style -->
    <link type="text/css" rel="stylesheet" href="/css/custom.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
    <div class="container">
        <div class="row">
           <a href="/" >
                <div class="col-12 logo ">
                    <small class="under_title">The best password manager</small>
                </div>
            </a>
        </div>
        <div class="row center">

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Zaloguj</a>

                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Zarejestruj się</a>

            </div>
        @endif
        </div>
    </div>

     @yield('menu')

    <hr />

    @yield('content')

    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/validator.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elems = document.querySelectorAll("select");
            var instances = M.FormSelect.init(elems, {});
        });
    </script>
</body>

</html>
