
@extends('components.panel')

@section('content')



    <div class="table-responsive col-9 m-3">
        <table class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th>نقش های موجود</th>
                <th>سطح دسترسی</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>مدیرکل</td>
                <td>دسترسی کامل</td>
                <td><button class="btn btn-danger">حذف</button></td>
                <td><button class="btn btn-warning">ویرایش</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>مدیر سایت</td>
                <td>دسترسی به ویرایش کامل سایت</td>
                <td><button class="btn btn-danger">حذف</button></td>
                <td><button class="btn btn-warning">ویرایش</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>ادمین</td>
                <td>دسترسی به مقاله ها و مطالب</td>
                <td><button class="btn btn-danger">حذف</button></td>
                <td><button class="btn btn-warning">ویرایش</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>کاربر</td>
                <td>استفاده از سایت</td>
                <td><button class="btn btn-danger">حذف</button></td>
                <td><button class="btn btn-warning">ویرایش</button></td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection

