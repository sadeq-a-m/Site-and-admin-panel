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
			<tr>

				<td>شناسه</td>
				<td>عنوان موجود</td>

				<td>

					<form method="get" action="#" >
						@csrf


						<button class="btn btn-warning">بروز رسانی</button>
					</form>
				</td>



				<td>
					<form method="post" action="#" >
						@csrf
						@method('DELETE')


						<button class="btn btn-danger">حذف مقاله</button>
					</form>
				</td>

			</tr>
	</table>
</div>



@endsection