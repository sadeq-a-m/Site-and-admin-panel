@extends('components.panel')



@section('content')





    <div class="table-responsive table-holder">
        <h2>مدیریت کاربران</h2>
        <table class="table table-bordered" dir="rtl">
            <thead class="table-dark">
            <tr>
                <th>شناسه</th>
                <th>عنوان قسمت</th>
                <th>عکس قسمت</th>
                <th>متن قسمت</th>
                <th>تاریخ ثبت قسمت</th>
                <th>رایگان یا پولی</th>
                <th>رایگان</th>
                <th>پولی</th>
                <th>بروزرسانی</th>
                <th>حذف</th>

            </tr>
            </thead>
            <tbody>



                <tr>




                    <td></td>
                    <td></td>
                    <td><img src="/storage/posts/" width="100px"></td>
                    <td></td>
                    <td>{{\Hekmatinasser\Verta\Verta::instance()->formatDifference(\Hekmatinasser\Verta\Verta::now())}}</td>


                    <th>
                        <input type="checkbox"


                               checked

                        >
                    </th>

                    <td>
                        <form method="post" action="#">
                            @csrf
                            @method('PUT')


                            <button class="btn btn-primary"


                                    disabled


                            >



                                Attach</button>


                        </form>

                    </td>


                    <td>



                        <form method="post" action="#">
                            @csrf
                            @method('PUT')


                            <button class="btn btn-danger"


                                    disabled


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




            </tbody>
        </table>
        <div class="">
            <div class="form-group">

            </div>
        </div>
    </div>





@endsection

