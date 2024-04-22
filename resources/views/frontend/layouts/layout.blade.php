<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('frontend.layouts.header')

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

</head>
<body>

    @include('frontend.layouts.navbar')

    </main>

        @yield('content')
    
    </main>


    <script>

        $(document).ready(function() {
            $(window).scroll(function(){
                var navContainer = $('.navbar-container'),
                    navLink = $('a[id="navA"]'),
                    navLogo = $('.navbar-logo'),
                    scroll = $(window).scrollTop();

                if (scroll >= 100) {
                    navContainer.css({
                        "background-color": "#fff",
                        "padding": "12px 0 12px 0",
                        "border-bottom": "1px solid rgba(0, 0, 0, 0.2)",
                        "transition": "padding 1s, background-color 1s ",
                    });

                    navLink.css({
                        "color": "#000",
                    });

                    navLogo.css({
                        "width": "40px",
                        "height": "40px",
                        "transition": "width 1s, height 1s ",
                    })
                    
                } else {
                    navContainer.css({
                        "background-color": "transparent",
                        "padding": "22px 0 12px 0",
                        "border-bottom": "none",
                    });

                    navLink.css({
                        "color": "#fff",
                    });

                    navLogo.css({
                        "width": "70px",
                        "height": "70px",
                    })
                }
            });
        });

    </script>

  </body>
</html>
