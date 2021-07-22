@extends('components.panel')


@section('content')




    <div class="forms col-8">
        <form action="{{route('panel.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="Name">نام: </label>
                <input  name="name" type="text" id="Name" class="form-control" placeholder="لطفا نام کاربر را وارد کنید">
                @if($errors->has('name'))
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="Email">ایمیل: </label>
                <input  name="email" type="email" id="Email" class="form-control" placeholder="لطفا ایمیل کاربر را وارد کنید">
                @if($errors->has('email'))
                    <p style="color: red">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="Password">رمز عبور: </label>
                <input name="password" type="password" id="Password" class="form-control" placeholder="لطفا رمز ورود کاربر را وارد کنید">
                @if($errors->has('password'))
                    <p style="color: red">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="form-group">
                <select class="form-group" name="role">

                    @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="ارسال" class="btn btn-primary form-control">
            </div>
        </form>
    </div>

@endsection
