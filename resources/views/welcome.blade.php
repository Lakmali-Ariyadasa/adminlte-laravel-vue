<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Mulish:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFFFFF;
                color: #031430;
                font-family: 'Mulish', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                z-index:1;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 54px;
            }
            .links > a {
                color: #24044c;
                background: #fff;
                padding: 5px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border-radius: 15px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="font-family: math;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
            <div class="title m-b-md">
                    UI and UX
                </div>
<img class="img-fluid" src="{{ url('assets/images/home.png') }}"  style="width:100%; height:100%;object-fit:cover;opacity:0.9">
</div>
        </div>
    </body>
</html>