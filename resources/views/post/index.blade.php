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
                <th>فعال و غیر فعال</th>
                <th>فعال</th>
                <th>غیر فعال</th>
                <th>بروزرسانی</th>
                <th>حذف</th>
                <th>قسمت ها </th>
                <th>افزودن قسمت </th>
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


                <th>
                    <input type="checkbox"
                           @if($post->accept   ==  true)

                           checked
                            @endif
                    >
                </th>

                <td>
                    <form method="post" action="{{route('accept_post' ,   $post->id)}}">
                        @csrf
                        @method('PUT')


                        <button class="btn btn-primary"

                                @if($post->accept   ==  1   )
                                disabled
                                @endif

                        >



                            Attach</button>


                    </form>

                </td>


                <td>



                    <form method="post" action="{{route('disable_post'  ,   $post->id)}}">
                        @csrf
                        @method('PUT')


                        <button class="btn btn-danger"

                                @if($post->accept   ==  0   )
                                disabled
                                @endif

                        >



                            deatach</button>


                    </form>
                </td>




                <td>

                    <form method="get" action={{route('posts.edit' ,   $post->id)}} >
                        @csrf


                        <button class="btn btn-warning">بروز رسانی</button>
                    </form>
                </td>



                <td>
                    <form method="post" action={{route('posts.destroy'  ,   $post->id)}} >
                        @csrf
                        @method('DELETE')


                        <button class="btn btn-danger">حذف مقاله</button>
                    </form>
                </td>

                <td><a href="{{route('episode.index')}}">قسمت ها</a> </td>
                <td><a href="{{route('episode.create'  , $post->id)}}"> افزودن قسمت</a> </td>

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
