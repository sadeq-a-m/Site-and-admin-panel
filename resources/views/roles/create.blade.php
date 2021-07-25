@extends('components.panel')

@section('content')


    <div class="form-group col-10 m-2">


        <h2 class="m-2">افزودن نقش کاربری</h2>






        <form action="{{route('store.role')}}" method="post">
            @csrf
            @method('POST')


            <div class="form-group">
                <label for="RoleUser">نقش کاربری :</label>
                <input type="text" id="RoleUser" class="form-control" placeholder="نام نقش کاربری را وارد کنید" name="name"/>
                @if($errors->has('name'))
                    <p style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <button class="btn btn-primary form-control">ثبت</button>
        </form>







    </div>
@endsection
