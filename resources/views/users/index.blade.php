
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
            @foreach($users as $user)
            <tr>

                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>مدیرکل</td>
                <td>{{$user->created_at}}</td>



                <td>

                    <form method="get" action={{route('panel.edit'       ,   $user->id)}} >
                        @csrf


                        <button class="btn btn-warning">بروز رسانی</button>
                    </form>
                </td>


                <td>
                    <form method="post" action={{route('panel.destroy'  ,   $user->id)}} >
                        @csrf
                        @method('DELETE')


                        <button class="btn btn-danger">حذف کاربر</button>
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
</div>

@endsection