
@extends('components.panel')


@section('content')
<div class="page-content">
    <div class="table-responsive table-holder">
        <h2>مدیریت کاربران</h2>
        <table class="table table-bordered" dir="rtl">
            <thead class="table-dark">
            <tr>
                <th>شناسه</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>نقش</th>
                <th>تاریخ ثبت نام</th>
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
                <td><button class="btn btn-danger">حذف کاربر</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>mohhamad</td>
                <td>mohammad.rasoul.mohebi@gmail.com‬</td>
                <td>مدیرکل</td>
                <td>2 روز قبل</td>
                <td><button class="btn btn-warning">بروزرسانی</button></td>
                <td><button class="btn btn-danger">حذف کاربر</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
        <div class="">
            <div class="form-group">

            </div>
        </div>
    </div>
</div>

@endsection