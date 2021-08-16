@extends('home.main')


@section('content')









<div class="courses-box container">
    <h3>جدیدترین دوره های آموزشی</h3>
    <div class="container Separator"></div>
    <div class="row courses">





        @foreach($posts    as      $post)



        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="row courses-holder">
                <a href="#">
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








    </div>
</div>

@endsection