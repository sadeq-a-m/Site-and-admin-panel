@extends('home.main')
@section('content')
    <!-- tags of the main part of the site -->
    <div class="main-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 course-content">
                    <h4>آموزش html و  css پروژه محور</h4><br/>





                    <img src="/storage/posts/{{$posts->image_post}}" width="100px">



                    <!-- description course -->
                    <div class="row container mt-4 description">
                        <h4>توضیحات دوره </h4>
                        <hr/><br/>
                        <div>
                            <p>
                                Vivamus quis mi. Vestibulum suscipit nulla quis orci. Vestibulum dapibus nunc ac augue. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Duis leo.

                                Donec posuere vulputate arcu. Praesent blandit laoreet nibh. Phasellus magna. Phasellus nec sem in justo pellentesque facilisis. Fusce fermentum odio nec arcu.

                                Proin magna. Donec mollis hendrerit risus. Cras non dolor. Praesent adipiscing. Fusce risus nisl, viverra et, tempor et, pretium in, sapien.

                                In turpis. Curabitur blandit mollis lacus. Vestibulum volutpat pretium libero. Quisque malesuada placerat nisl. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.

                                Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Ut non enim eleifend felis pretium feugiat. Phasellus accumsan cursus velit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Donec posuere vulputate arcu.Vivamus quis mi. Vestibulum suscipit nulla quis orci. Vestibulum dapibus nunc ac augue. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Duis leo.

                                Donec posuere vulputate arcu. Praesent blandit laoreet nibh. Phasellus magna. Phasellus nec sem in justo pellentesque facilisis. Fusce fermentum odio nec arcu.

                                Proin magna. Donec mollis hendrerit risus. Cras non dolor. Praesent adipiscing. Fusce risus nisl, viverra et, tempor et, pretium in, sapien.

                                In turpis. Curabitur blandit mollis lacus. Vestibulum volutpat pretium libero. Quisque malesuada placerat nisl. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.

                                Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Ut non enim eleifend felis pretium feugiat. Phasellus accumsan cursus velit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Donec posuere vulputate arcu.
                            </p><br/>
                            Vivamus quis mi. Vestibulum suscipit nulla quis orci. Vestibulum dapibus nunc ac augue. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Duis leo.

                            Donec posuere vulputate arcu. Praesent blandit laoreet nibh. Phasellus magna. Phasellus nec sem in justo pellentesque facilisis. Fusce fermentum odio nec arcu.

                            Proin magna. Donec mollis hendrerit risus. Cras non dolor. Praesent adipiscing. Fusce risus nisl, viverra et, tempor et, pretium in, sapien.

                            In turpis. Curabitur blandit mollis lacus. Vestibulum volutpat pretium libero. Quisque malesuada placerat nisl. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.

                            Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Ut non enim eleifend felis pretium feugiat. Phasellus accumsan cursus velit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Donec posuere vulputate arcu.<br/>
                        </div>
                    </div>


                    @foreach($posts->episode as $episode)


                    <div class="download-box">
                        <div class="row sections">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right">

                                @if($episode->is_free)
                                    <span><i class="fas fa-unlock-alt"></i></span>
                                @else
                                    <span><i class="fa fa-lock"></i></span>

                                @endif
                                <span>{{$episode->episode_title}}</span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                <span><a href="{{route('episode.show' , $episode->id)}}"><i class="fas fa-play"></i></a></span>
                                <span><button type="button" class="btn p-0"><i class="fas fa-file-code"></i></button></span>
                                <span><time>00:08:17</time></span>
                                <span>رایگان</span>
                            </div>
                        </div>
                    </div>


                @endforeach












{{--                    <div class="courses-box container">--}}
{{--                        <h4>دوره های مرتبط</h4>--}}
{{--                        <hr/>--}}
{{--                        <div class="row courses">--}}
{{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="row courses-holder">--}}
{{--                                    <a href="#">--}}
{{--                                        <div class="courses-banner">--}}
{{--                                            <img src="../image/course2.jpg" alt="img-course"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="hr-after-banner">--}}
{{--                                            <hr/>--}}
{{--                                        </div>--}}
{{--                                        <div class="course-txt">--}}
{{--                                            <div class="course-title">--}}
{{--                                                <h5>آموزش مقدماتی MySQL</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="course-teacher">--}}
{{--                                                <i class="fas fa-video"></i>--}}
{{--                                                صادق علیمرادی--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="course-details">--}}
{{--                                            <time><i class="fas fa-clock"></i> 03:45:00</time>--}}
{{--                                            <button class="btn btn-warning">در صف</button>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="row courses-holder">--}}
{{--                                    <a href="#">--}}
{{--                                        <div class="courses-banner">--}}
{{--                                            <img src="../image/course4.jpg" alt="img-course"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="hr-after-banner">--}}
{{--                                            <hr/>--}}
{{--                                        </div>--}}
{{--                                        <div class="course-txt">--}}
{{--                                            <div class="course-title">--}}
{{--                                                <h5>آموزش مقدماتی Javascript</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="course-teacher">--}}
{{--                                                <i class="fas fa-video"></i>--}}
{{--                                                صادق علیمرادی--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="course-details">--}}
{{--                                            <time><i class="fas fa-clock"></i> 03:45:00</time>--}}
{{--                                            <button class="btn btn-success">در صف</button>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="container mt-5 row comment-box">
                        <h4>دیدگاه های شما<span>(23 نظر)</span></h4>
                        <hr/>
                        <div class="row mt-4">
                            <button class="btn btn-info" id="show-comment-box">افزودن دیدگاه جدید<i class="fas fa-plus"></i></button>
                            <div class="row create-new-comment">
                                <input type="text" placeholder="نام" class="mt-3">
                                <input type="email" placeholder="email" class="mt-3">
                                <textarea cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
                                <button class="btn btn-primary mt-3">ارسال دیدگاه</button>
                            </div>
                        </div>
                        <div class="comment-holder mt-4 container">
                            <div class="row mt-4 container">
                                <div>
                                    <img src="../image/1.jpg" alt="user-image">
                                </div>
                                <div class=" mt-3 text-holder">
                                    <div class="row">
                                        <div class="col-6 date-name">
                                            <span>صادق علیمرادی</span>
                                            <date>1399/3/2</date>
                                        </div>
                                        <div class="col-6 thumbs">
                                            <button class="btn">0 <i class="fas fa-thumbs-up"></i></button>
                                            <button class="btn">0 <i class="fas fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>سلام ممنون از دوره جامع و کاربردیتون
                                            امیدوارم این دوره ادامه داشته باشه در سطح پیشرفته</p>
                                    </div>
                                    <div class="row reply-box">
                                        <button class="btn btn-info reply-comment">پاسخ</button>
                                        <div class="row create-reply-comment">
                                            <input type="text" placeholder="نام" class="mt-3">
                                            <input type="email" placeholder="email" class="mt-3">
                                            <textarea cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
                                            <button class="btn btn-primary mt-3">ارسال دیدگاه</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-holder mt-4 container">
                            <div class="row mt-4 container">
                                <div>
                                    <img src="../image/1.jpg" alt="user-image">
                                </div>
                                <div class=" mt-3 text-holder">
                                    <div class="row">
                                        <div class="col-6 date-name">
                                            <span>صادق علیمرادی</span>
                                            <date>1399/3/2</date>
                                        </div>
                                        <div class="col-6 thumbs">
                                            <button class="btn">0 <i class="fas fa-thumbs-up"></i></button>
                                            <button class="btn">0 <i class="fas fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>سلام ممنون از دوره جامع و کاربردیتون
                                            امیدوارم این دوره ادامه داشته باشه در سطح پیشرفته</p>
                                    </div>
                                    <div class="row reply-box">
                                        <button class="btn btn-info reply-comment">پاسخ</button>
                                        <div class="row create-reply-comment">
                                            <input type="text" placeholder="نام" class="mt-3">
                                            <input type="email" placeholder="email" class="mt-3">
                                            <textarea cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
                                            <button class="btn btn-primary mt-3">ارسال دیدگاه</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-holder mt-4 container">
                            <div class="row mt-4 container">
                                <div>
                                    <img src="../image/1.jpg" alt="user-image">
                                </div>
                                <div class=" mt-3 text-holder">
                                    <div class="row">
                                        <div class="col-6 date-name">
                                            <span>صادق علیمرادی</span>
                                            <date>1399/3/2</date>
                                        </div>
                                        <div class="col-6 thumbs">
                                            <button class="btn">0 <i class="fas fa-thumbs-up"></i></button>
                                            <button class="btn">0 <i class="fas fa-thumbs-down"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>سلام ممنون از دوره جامع و کاربردیتون
                                            امیدوارم این دوره ادامه داشته باشه در سطح پیشرفته</p>
                                    </div>
                                    <div class="row reply-box">
                                        <button class="btn btn-info reply-comment">پاسخ</button>
                                        <div class="row create-reply-comment">
                                            <input type="text" placeholder="نام" class="mt-3">
                                            <input type="email" placeholder="email" class="mt-3">
                                            <textarea cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
                                            <button class="btn btn-primary mt-3">ارسال دیدگاه</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 course-detail">
                    <button class="btn btn-warning mt-5">افزودن به سبد خرید</button>
                    <div class="detail mt-5">
                        <h4>میزان پیشرفت دوره</h4>
                        <div class="progress"><span>100%</span></div>
                        <div class="row">
                            <div class="col-6"><span>73 شرکت کننده</span></div>
                            <div class="col-6"><span>23 نظر<span></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><span>تاریخ انتشار<span></div>
                            <div class="col-6"><span>1397-6-13<span></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><span>وضعیت دوره<span></div>
                            <div class="col-6"><span>تکمیل شده<span></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><span>تعداد جلسات<span></div>
                            <div class="col-6"><span>112<span></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><span>مدت زمان<span></div>
                            <div class="col-6"><span>46:07:21<span></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><span>حجم کل<span></div>
                            <div class="col-6"><span>8.3 گیگابایت<span></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><span>سطح</span></div>
                            <div class="col-6"><span>تمام سطوح</span></div>
                        </div>
                        <div class="mt-2">
                            <butoon class="btn btn-success">سوالات</butoon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
