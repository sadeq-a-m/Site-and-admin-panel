@extends('home.main')




@section('head')



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



@endsection


@section('content')









<div class="courses-box container">
    <h3>جدیدترین دوره های آموزشی</h3>
    <div class="container Separator"></div>
    <div class="row courses">



        @if($posts->count()   == 0 )

           <h1>موردی یافت نشد </h1>

        @else


        @foreach($posts    as      $post)


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="row courses-holder">
                <a href="{{route('posts.show' , $post->id)}}">
                    <div class="courses-banner">
                        <img src="/storage/posts/{{$post->image_post}}" alt="img-course"/>
                    </div>
                    <div class="hr-after-banner">
                        <hr/>
                    </div>
                    <div class="course-txt">
                        <div class="course-title">
                            <h5>{{$post->title}}</h5>
                        </div>
                        <div class="course-teacher">
                            <i class="fas fa-video"></i>
                            {{$post->user->name}}
                        </div>
                    </div>
                    <div class="course-details">
                        <time><i class="fas fa-clock"></i>{{\Hekmatinasser\Verta\Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::now())}}</time>
                        <button class="btn btn-warning">در صف</button>
                    </div>
                </a>
            </div>
        </div>


        @endforeach

        @endif








    </div>
</div>

@endsection
