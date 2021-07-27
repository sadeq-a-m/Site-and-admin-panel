@extends('components.panel')



@section('content')


    <form action="{{route('update.categore' , $categore->id)}}" class="col-9" method="post">

        @csrf
        @method('PUT')


        <div class="form-group mt-2">
            <h2>افزودن عنوان</h2>



            <label for="category">عنوان:</label>
            <input type="text"  name="title" id="category" class="form-control" placeholder="عنوان مورد نظر خود را وارد کنید" value="{{$categore->title}}">
            @if($errors->has('title'))
                <p style="color: red">{{ $errors->first('title') }}</p>
            @endif




            <button class="btn btn-primary form-control mt-2">ثبت عنوان</button>
        </div>
    </form>


@endsection
