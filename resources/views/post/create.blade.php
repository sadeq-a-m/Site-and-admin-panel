@extends('components.panel')


@section('content')





    <div class="forms col-8">

    <form action="#" method="post">





        <div class="form-group">
            <label for="Title">عنوان مقاله: </label>
            <input type="text" id="Title" class="form-control">

        </div>



        <div class="form-group">
            <label for="Upload">انتخاب عکس به عنوان عکس اصلی مقاله:</label>
            <input type="file" id="Upload" class="form-control" value="upload image"/>
        </div>




        <div class="form-group">
            <label for="Text">متن مقاله: </label>
            <textarea id="Text" class="form-control" cols="50" rows="10"></textarea>
        </div>






        <div class="form-group">
            <select class="form-group">
                <option value="Scientific">علمی</option>
                <option value="News">خبری</option>
                <option value="Economic">اقتصادی</option>
                <option value="Sports">ورزشی</option>
                <option value="IT">فناوری اطلاعات</option>
                <option value="artistic">هنری</option>
            </select>
        </div>





        <div class="form-group">
            <button class="form-control btn btn-primary">ثبت مقاله</button>
        </div>
    </form>


    </div>





@endsection