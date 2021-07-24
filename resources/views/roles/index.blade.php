
@extends('components.panel')

@section('content')



    <div class="table-responsive col-9 m-3">
        <table class="table table-striped">





            <thead>
            <tr>


                <th>شناسه</th>
                <th>نقش های موجود</th>
                <th>حذف</th>
                <th>ویرایش</th>


            </tr>
            </thead>





            <tbody>


            @foreach($roles as $role)
            <tr>


                <td>1</td>
                <td>{{$role->name}}</td>



                <td>

                    <form action="{{route('edit.role' , $role->id)}}" method="get">
                        @csrf

                        <button class="btn btn-warning">ویرایش</button>
                    </form>


                </td>

                <td>

                    <form action="{{route('destroy.role' , $role->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">حذف</button>
                    </form>


                </td>






            </tr>
            @endforeach
            </tbody>



        </table>
    </div>


@endsection

