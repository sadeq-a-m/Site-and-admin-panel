@extends('components.panel')



@section('content')





    <div class="table-responsive table-holder">
        <h2>مدیریت کاربران</h2>
        <table class="table table-bordered" dir="rtl">
            <thead class="table-dark">
            <tr>

                <th>عنوان قسمت</th>
                <th>عکس قسمت</th>
                <th>تاریخ ثبت قسمت</th>
                <th>رایگان یا پولی</th>
                <th>رایگان</th>
                <th>پولی</th>
                <th>بروزرسانی</th>
                <th>حذف</th>

            </tr>
            </thead>
            <tbody>


            @foreach($episodes as $episode)

                <tr>


                    <td>{{$episode->episode_title}}</td>
                    <td><img src="/storage/posts/" width="100px"></td>

                    <td>{{\Hekmatinasser\Verta\Verta::instance($episode->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::now())}}</td>


                    <th>
                        <input type="checkbox"


                               @if($episode->is_free)
                               checked
                               @endif

                        >
                    </th>

                    <td>
                        <form method="post" action="{{route('episode.free' , $episode->id)}}">
                            @csrf
                            @method('PUT')



                            <button class="btn btn-primary"
                                    @if($episode->is_free)
                                    disabled
                                    @endif
                            >




                                Attach</button>


                        </form>

                    </td>


                    <td>



                        <form method="post" action="{{route('episode.buy' , $episode->id)}}">
                            @csrf
                            @method('PUT')


                            <button class="btn btn-danger"
                                    @if($episode->is_free == 0 )
                                    disabled
                                    @endif
                            >




                                deatach</button>


                        </form>
                    </td>




                    <td>

                        <form method="get" action="#" >
                            @csrf


                            <button class="btn btn-warning">بروز رسانی</button>
                        </form>
                    </td>



                    <td>
                        <form method="post" action="#" >
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

