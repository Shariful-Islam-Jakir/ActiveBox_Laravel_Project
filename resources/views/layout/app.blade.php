<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tittle')</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!--Main-CSS-->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="css/responsive.css">
    
  </head>
  <body>
    
    <header class="ActiveBox_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4">
                    <div class="ActiveBox_logo">
                        <a href=""><img src="{{ asset('image/ActiveBox logo.png') }}"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-8">
                    <nav class="ActiveBox_Menu">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Features</a></li>
                            <li><a href="">Works</a></li>
                            <li><a href="">Our Team</a></li>
                            <li><a href="">Testimonials</a></li>
                            <li><a href="">Download</a></li>
                        </ul>
                    </nav>
                    <div class="ActiveBox_Menu_Icon">
                         <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Header End-->

    @yield('content')

    <!--Footer Section-->

    <div class="Footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ActiveBox_Footer_Tittle">
                        <p>@ Copy Right 2026</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ActiveBox_Footer_Icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!---Fontawesome--->
    <script src="https://kit.fontawesome.com/c9c243d52a.js" crossorigin="anonymous"></script>
  </body>
</html>