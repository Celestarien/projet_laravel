<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #2C2F33;
                color: #e36e00;
                font-family: 'Nunito', sans-serif;
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
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                /* color: #636b6f; */
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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
                    <a href="https://github.com/Celestarien/easysoun_laravel">GitHub</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    E@sySound <br>
                    <audio controls="controls">
                        <source src="../../public/storage/musique_par_defaut/perceval-kaamelott-ouais-cest-pas-faux.mp3" type="audio/mp3" />
                        Votre navigateur n'est pas compatible
                    </audio>

                </div>

                <div class="links">
                    <!-- <a href="{{ url('/presentation') }}">Présentation</a>
                    <a href="{{ url('/contact') }}">Contact</a> -->
                </div>
            </div>
        </div>
    </body>
</html>