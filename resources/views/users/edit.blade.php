@extends('components.panel')


@section('content')




    <div class="forms col-8">
        <form enctype="multipart/form-data" action="{{route('panel.update' , $user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">نام: </label>
                <input  name="name" type="text" id="Name" class="form-control" placeholder="لطفا نام کاربر را وارد کنید" value="{{$user->name}}">
                @if($errors->has('name'))
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="Email">ایمیل: </label>
                <input  name="email" type="email" id="Email" class="form-control" placeholder="لطفا ایمیل کاربر را وارد کنید" value="{{$user->email}}">
                @if($errors->has('email'))
                    <p style="color: red">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="form-group">
                <select class="form-group" name="role" >


                    @foreach($roles as $role)
                        <option  value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach

                </select>
            </div>



            <div class="form-group mt-2">
                <label for="Upload">اپلود تصویر:</label>
                <input type="file" id="Upload" class="form-control" name="img_user" value="upload image"/>
            </div>


            @if($user->image != null)


                <img src='/storage/users/{{$user->image}}' alt="" width="100px">

            @endif





            <div class="form-group">
                <input type="submit" value="ارسال" class="btn btn-primary form-control">
            </div>
        </form>
    </div>

@endsection

