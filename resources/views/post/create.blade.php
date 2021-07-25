@extends('components.panel')


@section('content')





    <div class="forms col-8">

    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf






        <div class="form-group">
            <label for="Title">عنوان مقاله: </label>
            <input type="text" id="Title" class="form-control" name="title">
            @if($errors->has('title'))
                <p style="color: red">{{ $errors->first('title') }}</p>
            @endif

        </div>



        <div class="form-group">
            <label for="Upload">انتخاب عکس به عنوان عکس اصلی مقاله:</label>
            <input type="file" id="Upload" class="form-control" value="upload image" name="image_post"/>
            @if($errors->has('image-post'))
                <p style="color: red">{{ $errors->first('image-post') }}</p>
            @endif
        </div>




        <div class="form-group">
            <label for="Text">متن مقاله: </label>
            <textarea id="Text" class="form-control" cols="50" rows="10" name="description"></textarea>

            @if($errors->has('description'))
                <p style="color: red">{{ $errors->first('description') }}</p>
            @endif
        </div>






        <div class="form-group">
            <select class="form-group" multiple name="categores[]">


                <option value="Scientific">علمی</option>
                <option value="News">خبری</option>
                <option value="Economic">اقتصادی</option>
                <option value="Sports">ورزشی</option>
                <option value="IT">فناوری اطلاعات</option>
                <option value="artistic">هنری</option>


            </select>

            @if($errors->has('categores'))
                <p style="color: red">{{ $errors->first('categores') }}</p>
            @endif
        </div>





        <div class="form-group">
            <button class="form-control btn btn-primary">ثبت مقاله</button>
        </div>
    </form>


    </div>





@endsection