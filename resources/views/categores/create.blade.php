@extends('components.panel')



@section('content')


<form action="#" class="col-9" method="post">
	<div class="form-group mt-2">
		<h2>افزودن عنوان</h2>
		<label for="category">عنوان:</label>
		<input type="text" id="category" class="form-control" placeholder="عنوان مورد نظر خود را وارد کنید">
		<button class="btn btn-primary form-control mt-2">ثبت عنوان</button>
	</div>
</form>


@endsection
