



<div class="row maximaize">
    <div class="col-9 section-right">
        <nav>
            <a href="#"><h2>پروگیران</h2></a>
            <ul>
                <li><a href="{{route('index')}}">صفحه اصلی</a></li>
                <li><a href="#">دوره های آموزشی</a></li>
                <li><a href="#">مقالات</a></li>
                <li><a href="#">همکاری</a></li>
                <li><a href="#">درباره ما</a></li>
                <li><a href="#">تماس با ما</a></li>
                @if(Auth::check())
                    <li><a href="{{route('panel.index')}}">پنل</a></li>

                @endif
            </ul>
        </nav>
    </div>





    <div class="col-3 section-left">
        <div class="search"><a href="#"><i class="fas fa-search"></i></a></div>
        <div class="shop"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>

        @if(!Auth::check())

        <div class="login"><a href="{{route('login')}}"><i class="fas fa-user"></i> ثبت نام | ورود</div>

        @endif
    </div>







</div>


