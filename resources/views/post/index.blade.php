@extends('components.panel')



@section('content')





    <div class="table-responsive table-holder">
        <h2>مدیریت کاربران</h2>
        <table class="table table-bordered" dir="rtl">
            <thead class="table-dark">
            <tr>
                <th>شناسه</th>
                <th>عنوان مقاله</th>
                <th>عکس مقاله</th>
                <th>متن مقاله</th>
                <th>تاریخ ثبت مقاله</th>
                <th>بروزرسانی</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>


            @foreach($posts    as      $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td><img src="/storage/posts/{{$post->image_post}}" width="100px"></td>
                <td>{{$post->description}}</td>
                <td>{{\Hekmatinasser\Verta\Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::now())}}</td>
                <td><button class="btn btn-warning">بروزرسانی</button></td>



                <td>
                    <form method="post" action={{route('posts.destroy'  ,   $post->id)}} >
                        @csrf
                        @method('DELETE')


                        <button class="btn btn-danger">حذف مقاله</button>
                    </form>
                </td>

            </tr>

            @endforeach


            </tbody>
        </table>
        <div class="">
            <div class="form-group">

            </div>
        </div>
    </div>





@endsection
