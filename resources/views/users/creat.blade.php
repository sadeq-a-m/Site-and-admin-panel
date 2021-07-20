@extends('components.panel')


@section('content')

    <div class="forms col-8">
        <form action="#" method="post">
            <div class="form-group">
                <label for="Name">نام: </label>
                <input type="text" id="Name" class="form-control" placeholder="لطفا نام کاربر را وارد کنید" required autofocus>
            </div>
            <div class="form-group">
                <label for="Email">ایمیل: </label>
                <input type="email" id="Email" class="form-control" placeholder="لطفا ایمیل کاربر را وارد کنید" required>
            </div>
            <div class="form-group">
                <label for="Password">رمز عبور: </label>
                <input type="password" id="Password" class="form-control" placeholder="لطفا رمز ورود کاربر را وارد کنید" required>
            </div>
            <div class="form-group">
                <select class="form-group">
                    <option value="simple user">کاربر عضو</option>
                    <option value="admin">ادمین</option>
                    <option value="director site">مدیر سایت</option>
                    <option value="director General">مدیرکل</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-primary form-control">
            </div>
        </form>
    </div>

@endsection
