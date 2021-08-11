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
            <div class="row maximaize">
                <div class="col-9 section-right">
                    <nav>
                        <a href="#"><h2>پروگیران</h2></a>
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
                <div class="col-3 section-left">
                    <div class="search"><a href="#"><i class="fas fa-search"></i></a></div>
                    <div class="shop"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                    <div class="login"><a href="#"><i class="fas fa-user"></i> ثبت نام | ورود</div>
                </div>
            </div>

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
            <div class="courses-box container">
                <h3>جدیدترین دوره های آموزشی</h3>
                <div class="container Separator"></div>
                <div class="row courses">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course3.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی MySQL</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-warning">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course4.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی Javascript</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-success">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course3.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی MySQL</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-warning">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row courses">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course3.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی MySQL</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-warning">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course4.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی Javascript</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-success">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course3.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی MySQL</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-warning">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row courses">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course3.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی MySQL</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-warning">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course4.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی Javascript</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-success">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row courses-holder">
                            <a href="#">
                                <div class="courses-banner">
                                    <img src="../site/image/course3.jpg" alt="img-course"/>
                                </div>
                                <div class="hr-after-banner">
                                    <hr/>
                                </div>
                                <div class="course-txt">
                                    <div class="course-title">
                                        <h5>آموزش مقدماتی MySQL</h5>
                                    </div>
                                    <div class="course-teacher">
                                        <i class="fas fa-video"></i>
                                        صادق علیمرادی
                                    </div>
                                </div>
                                <div class="course-details">
                                    <time><i class="fas fa-clock"></i> 03:45:00</time>
                                    <button class="btn btn-warning">در صف</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Codes section of how the site works -->
            <div class="row container site-works">
                <div class="col-lg-4 hidden-md">
                    <img src="../site/image/4.jpg" alt="men-programer"/>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 container txt-box">
                    <div class="row">
                        <h2>آکادمی پروگیران شامل چه بخش هایی میشود؟</h2><br/>
                        <h4>دوره‌های آموزشی</h4>
                        <p>محلی برای به اشتراک گذاشتن دوره‌های آموزشی ویدیویی است. در این بخش شما می‌توانید به‌عنوان دانشجو در دوره‌های آموزشی باکیفیت شرکت کنید. همچنین می‌توانید به‌عنوان مدرس، دوره‌های آموزشی تولید کنید و به فروش برسانید.</p>
                        <h4>دوره‌های آموزشی</h4>
                        <p>محلی برای به اشتراک گذاشتن دوره‌های آموزشی ویدیویی است. در این بخش شما می‌توانید به‌عنوان دانشجو در دوره‌های آموزشی باکیفیت شرکت کنید. همچنین می‌توانید به‌عنوان مدرس، دوره‌های آموزشی تولید کنید و به فروش برسانید.</p>
                        <h4>دوره‌های آموزشی</h4>
                        <p>محلی برای به اشتراک گذاشتن دوره‌های آموزشی ویدیویی است. در این بخش شما می‌توانید به‌عنوان دانشجو در دوره‌های آموزشی باکیفیت شرکت کنید. همچنین می‌توانید به‌عنوان مدرس، دوره‌های آموزشی تولید کنید و به فروش برسانید.</p>
                        <h4>دوره‌های آموزشی</h4>
                        <p>محلی برای به اشتراک گذاشتن دوره‌های آموزشی ویدیویی است. در این بخش شما می‌توانید به‌عنوان دانشجو در دوره‌های آموزشی باکیفیت شرکت کنید. همچنین می‌توانید به‌عنوان مدرس، دوره‌های آموزشی تولید کنید و به فروش برسانید.</p>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Site section footer codes -->
    <footer class="footer">

        <div class="container">
            <div class="row about">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 txt-about">
                    <h3>درباره پروگیران</h3>
                    <p>آکادمی پروگیران در سال 1400 با هدف آموزش و ارئه جدیدترین و برترین آموزش های فارسی در زمینه تکنولوژی های حوزه ی IT و برنامه نویسی تاسیس گردید.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 trust-logo">
                    <ul>
                        <li><a href="#"><img src="../site/image/parsian-logo.jpg" alt="logo-parsian"/></a></li>
                        <li><a href="#"><img src="../site/image/nashr-logo.jpg" alt="logo-nashr"/></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="container"/>

        <div class="container">
            <div class="row footer-membership">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 txt-box">
                    <i class="fas fa-envelope-open"></i>
                    <span>از آخرین مقالات و اتفاق های دنیای تکنولوژی با خبر شوید</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 join-box">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-group" placeholder="شماره تلفن خود را وارد کنید"/>
                            <input type="email" class="form-group" placeholder="ایمیل خود را وارد کنید"/>
                            <button class="btn btn-info mt-1">عضویت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr class="container"/>

        <div class="container">
            <div class="row instruction-site">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul>
                        <li><h4>خدمات کاربران</h4></li>
                        <li><a href="#">حریم خصوصی</a></li>
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">دستاوردها</a></li>
                        <li><a href="#">مشاوره</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul>
                        <li><h4>راهنمای خرید</h4></li>
                        <li><a href="#">روش خرید</a></li>
                        <li><a href="#">قوانین خرید</a></li>
                        <li><a href="#">روش های پرداخت</a></li>
                        <li><a href="#">عضویت ویژه چیست؟</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul>
                        <li><h4>راه های کسب درآمد</h4></li>
                        <li><a href="#">چگونه کسب درآمد کنم؟</a></li>
                        <li><a href="#">چگونه مدرس شوم؟</a></li>
                        <li><a href="#">قوانین کسب درآمد</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul>
                        <li><h4>راه های ارتباطی</h4></li>
                        <li><a href="#">تلفن:09351234567</a></li>
                        <li><a href="#">ایمیل:progiran@gmail.com</a></li>
                        <li><a href="#">تلگرام:@progiran</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row copyright">
            <div class="container">
                <span>تمامی حقوق مادی و معنوی متعلق به آکادمی پروگیران میباشد و هرگونه کپی برداری غیر مجاز میباشد</span>
            </div>
        </div>
    </footer>

</div>



<script src="{{asset('site/script/homepage.js')}}"></script>
</body>
</html>