<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('/site/bootstrap/css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('/site/style/homepage.css')}}">

    <script src="https://kit.fontawesome.com/99b8225ddb.js" crossorigin="anonymous"></script>
    <title>home</title>
</head>
<body>


<div class="row home-page" dir="rtl">

    <!-- Codes in the top menu section of the site -->
    <div class="wrapper">
        <header>

            <!-- Menu codes on large devices -->

            @include('home.sidbar')


            @include('home.search')

            <!-- Menu codes on small devices -->
            <div class="minimaize">
                <a href="#"><h2>پروگیران</h2></a>
                <div class="icon-holder">
                    <div class="icons">
                        <div class="search-min"><a href="#"><i class="fas fa-search"></i></a></div>
                        <div class="shop-min"><a href="#"><i class="fas fa-user"></i></a></div>
                        <div class="login-min"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                    </div>
                    <div class="hamburger">
                        <div class="lines line1"></div>
                        <div class="lines line2"></div>
                        <div class="lines line3"></div>
                    </div>
                </div>
            </div>

            <div class="menu-modal-min">
                <div>
                    <a href="#"><i class="fas fa-times close-menu"></i></a>
                    <nav>
                        <ul>
                            <li><a href="#">صفحه اصلی</a></li>
                            <li><a href="#">دوره های آموزشی</a></li>
                            <li><a href="#">مقالات</a></li>
                            <li><a href="#">همکاری</a></li>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">تماس با ما</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>
    </div>

    @yield('head')


    <!-- Codes of the main part of the site -->
    <div class="main-content">
        <main>



            <!-- Site courses section codes -->

            @yield('content')

            <!-- Codes section of how the site works -->
            @include('home.about')

        </main>
    </div>

    <!-- Site section footer codes -->
    <footer class="footer">
        @include('home.footer')
    </footer>

</div>



<script src="{{asset('site/script/homepage.js')}}"></script>
</body>
</html>
