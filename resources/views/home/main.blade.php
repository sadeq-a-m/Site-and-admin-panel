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


            <div class="search-modal">
                <form action="#">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-primary p-3 fas fa-search input-group-text"></button>
                        </div>
                        <input type="text" class="form-control" placeholder="عبارت مورد نظر را جستجو کنید"/>
                        <div class="input-group-prepend">
                            <button class="btn btn-primary p-3 fas fa-times input-group-text close-search"></button>
                        </div>
                    </div>
                </form>
            </div>

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

    <!-- Site landing section codes -->
    <div class="middle">
        <div class="svg-patern">
            <img src="../site/image/wave.svg" alt="svg-header" />
        </div>
        <div class="row landing">
            <div class="row landing-img">
                <img src="../site/image/home-background.svg" alt="men-programer"/>
            </div>
            <div class="row landing-text">
                <h1>پروگیران <br/>مرجع آموزش برنامه نویسی</h1>
                <div class="landing-btn">
                    <button class="btn btn-primary">مشاوره رایگان</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Codes of the main part of the site -->
    <div class="main-content">
        <main>

            <!-- Site service section codes -->
            <div class="row services">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 box">
                    <div class="service-icon">
                        <img src="https://img.icons8.com/nolan/128/money-circulation.png" alt="icon-money"/>
                    </div>
                    <div class="txt-box">
                        <p>صرف کمترین هزینه</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 box">
                    <div class="service-icon">
                        <img src="https://img.icons8.com/nolan/128/google-classroom.png" alt="icon-teachers"/>
                    </div>
                    <div class="txt-box">
                        <p>اساتید مجرب</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 box">
                    <div class="service-icon">
                        <img src="https://img.icons8.com/nolan/128/technical-support.png" alt="icon-support"/>
                    </div>
                    <div class="txt-box">
                        <p>مشاوره رایگان</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 box">
                    <div class="service-icon">
                        <img src="https://img.icons8.com/nolan/128/communication.png" alt="icon-ask $ question"/>
                    </div>
                    <div class="txt-box">
                        <p>پرسش و پاسخ</p>
                    </div>
                </div>
            </div>

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