
@extends('components.panel')



@section('content')


    @if ($message= Session::get('user'))

        <div id="alert" class="alert-box-green">
            <div>
                <p>{{$message}}</p>
                <i class="fas fa-times"></i>
            </div>
        </div>
    @endif


    @if ($message= Session::get('userDestroy'))

        <div id="alert" class="alert-box-red">
            <div>
                <p>{{$message}}</p>
                <i class="fas fa-times"></i>
            </div>
        </div>
    @endif



<div class="page-content">
    <div class="table-responsive table-holder">
        <h2>مدیریت کاربران</h2>
        <table class="table table-bordered" dir="rtl">
            <thead class="table-dark">
            <tr>
                <th>شناسه</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>عکس کاربر</th>
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
                @if($user->image != null)
                <td><img src="/storage/users/{{$user->image}}" width="100px"></td>
                @else
                    <td>عکس ندارد.</td>
                @endif


                <td>
                    <ul>

                        @foreach($user->role as $role)

                            <li> {{$role->name}}</li>

                        @endforeach

                    </ul>
                </td>


                <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::now())}}</td>




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
