<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <link rel="stylesheet" href="{{asset('/style/index.css')}}">
    <script src="https://kit.fontawesome.com/99b8225ddb.js" crossorigin="anonymous"></script>
    <title>index</title>
</head>
<body>

<div class="control-panel">

    <div class="main-content">
        <!-- Header menu for faster management of the control panel -->
{{--       @include('components.data_user')--}}
        <header>
            <nav>
                <ul>
                    <li class="cogs"><a href="#"><i class="fas fa-cogs"></i></a></li>
                    <li><a href="#"><span>{{auth()->user()->name}}</span><img src="/storage/users/{{auth()->user()->image}}" class="user-image" alt="user image" style=""></a></li>
                    <li><a href="#"><i class="fas fa-bell"></i><sup class="label bg-danger">3</sup></a></li>
                    <a href="#" class="bars"><i class="fas fa-bars"></i></a>
                </ul>
            </nav>
        </header>

        <!-- The main part of the control panel -->
        <main>

            <aside class="setting bg-dark">
                <ul class="">
                    <li><a href="#">تنظیم 1</a></li>
                    <li><a href="#">تنظیم 1</a></li>
                    <li><a href="#">تنظیم 1</a></li>
                    <li><a href="#">تنظیم 1</a></li>
                    <li><a href="#">تنظیم 1</a></li>
                </ul>
            </aside>

            <!-- The main part of the control panel -->
            <div class="page-content"  dir="rtl">

                @yield('content')

            </div>

        </main>
    </div>

    <!-- Main menu Control Panel  -->
    <div class="navbar bg-dark" dir="rtl">
        <div class="menu-nav bg-dark">
            <h2>کنترل پنل</h2>
            <div class="times">
                <i class="fas fa-times"></i>
            </div>
{{--            @include('components.sidbar-data-user')--}}
            <div class="user-panel">
                <div class="user-img">


                    <img src="/storage/users/{{auth()->user()->image}}"/>
                </div>
                <div class="user-name">
                    <span>{{auth()->user()->name}}</span><br/>
                    <span class="fas fa-circle">آنلاین</span>
                </div>
            </div>
            <div class="search-box">
                <div>
                    <input type="text" placeholder="جستجو"/>
                    <span class="fas fa-search"></span>
                </div>
            </div>
            <nav>
                <ul class="menu">
                    <li class="title"><a href="index.html"><span class="fa fa-tachometer"></span><span class="text"> داشبورد <small class="label">جدید</small></span></a></li>
                    <li><a href="#"><span class="fa fa-layer-group"></span><span class="text"> لایه های صفحه </span></a></li>
                    <li><a href="#"><span class="fa fa-th"></span><span class="text"> ویجت ها</span></a></li>
                    <li><a href="#"><span class="fa fa-chart-bar"></span><span class="text"> نمودارها</span></a></li>
                    <li><a href="#" class="arrowEl"><span class="fa fa-users"></span><span class="text"> مدیریت کاربران <span class="arrow">></span></span></a>
                        <div class="submenu1">
                            <a href="{{route('panel.create')}}"><span class="fas fa-circle"> ثبت کاربر</span></a>
                            <a href="{{route('panel.users')}}"><span class="fas fa-circle"> لیست کاربران</span></a>
                            <a href="#"><span class="fas fa-circle"> دسترسی کاربران</span></a>
                        </div>
                    </li>
                    <li><a href="#" class="arrowEl"><span class="fa fa-edit"></span><span class="text"> فرم ها <span class="arrow">></span></span></a>
                        <div class="submenu1">
                            <a href="login.html"><span class="fas fa-circle"> ورود</span></a>
                            <a href="maghale.html"><span class="fas fa-circle"> ثبت مقاله</span></a>
                            <a href="edit-maghale.html"><span class="fas fa-circle"> ویرایش مقاله</span></a>
                        </div>
                    </li>
                    <li><a href="#"><span class="fa fa-table"></span><span class="text"> جداول </span></a></li>
                    <li><a href="#"><span class="fa fa-calendar"></span><span class="text"> تقویم</span></a></li>
                </ul>
            </nav>
        </div>
    </div>

</div>


<script src="{{asset('/script/script.js')}}"></script>
</body>
</html>
