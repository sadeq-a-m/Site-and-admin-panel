@extends('components.panel')



@section('content')


<form action="{{route('store.categore')}}" class="col-9" method="post">

	@csrf


	<div class="form-group mt-2">
		<h2>افزودن عنوان</h2>



		<label for="category">عنوان:</label>
		<input type="text"  name="title" id="category" class="form-control" placeholder="عنوان مورد نظر خود را وارد کنید">
		@if($errors->has('title'))
			<p style="color: red">{{ $errors->first('title') }}</p>
		@endif




		<button class="btn btn-primary form-control mt-2">ثبت عنوان</button>
	</div>
</form>


@endsection
