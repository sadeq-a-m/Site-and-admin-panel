@extends('components.panel')


@section('content')





    <div class="forms col-8">

        <form action="{{route('episode.store')}}" method="post" enctype="multipart/form-data">
            @csrf




            <input type="hidden" name="post_id" value="{{$post}}">


            <div class="form-group">
                <label for="Title">عنوان قسمت : </label>
                <input type="text" id="Title" class="form-control" name="episode_title">
                @if($errors->has('episode_title'))
                    <p style="color: red">{{ $errors->first('episode_title') }}</p>
                @endif

            </div>




            <div class="form-group">
                <label for="Upload">انتخاب عکس به عنوان عکس اصلی مقاله:</label>
                <input type="file" id="Upload" class="form-control" value="upload image" name="episode_video"/>
                @if($errors->has('episode_video'))
                    <p style="color: red">{{ $errors->first('episode_video') }}</p>
                @endif
            </div>





            <div class="form-group">
                <button class="form-control btn btn-primary">ثبت مقاله</button>
            </div>
        </form>


    </div>





@endsection
