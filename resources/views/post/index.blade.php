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
            <tr>
                <td>1</td>
                <td>sadeq</td>
                <td>sadeqmoradi1997@gmail.com</td>
                <td>مدیرکل</td>
                <td>2 روز قبل</td>
                <td><button class="btn btn-warning">بروزرسانی</button></td>
                <td><button class="btn btn-danger">حذف مقاله</button></td>
            </tr>


            </tbody>
        </table>
        <div class="">
            <div class="form-group">

            </div>
        </div>
    </div>





@endsection
