@extends('home.main')
@section('content')
    <!-- tags of the main part of the site -->
    <div class="main-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 course-content">
                    <h4>آموزش html و  css پروژه محور</h4><br/>





                    <img src="/storage/posts/{{$episode->episode_video}}" width="100px">





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
                                    <img src="{{'/site/image/1.jpg'}}" alt="user-image">
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
            </div>
        </div>


@endsection

