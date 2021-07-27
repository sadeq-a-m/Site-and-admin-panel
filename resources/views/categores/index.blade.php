@extends('components.panel')


@section('content')


<div class=" table-responsive col-9">
	<table class="table table-striped mt-3">
		<thead>
			<tr>
				<th>شناسه</th>
				<th>عنوان موجود</th>
				<th>حذف</th>
				<th>ویرایش</th>
			</tr>
		</thead>
		<tbody>


		@foreach($categores as $categore)
			<tr>

				<td>{{$categore->id}}</td>
				<td>{{$categore->title}}</td>

				<td>

					<form method="get" action="#" >
						@csrf


						<button class="btn btn-warning">بروز رسانی</button>
					</form>
				</td>



				<td>
					<form method="post" action="{{route('destroy.categore' , $categore->id)}}" >
						@csrf
						@method('DELETE')


						<button class="btn btn-danger">حذف مقاله</button>
					</form>
				</td>

			</tr>

		@endforeach


	</table>
</div>



@endsection