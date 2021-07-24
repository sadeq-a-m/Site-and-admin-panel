@extends('components.panel')

@section('content')


    <div class="form-group col-10 m-2">
        <h2 class="m-2">افزودن نقش کاربری</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="RoleUser">نقش کاربری :</label>
                <input type="text" id="RoleUser" class="form-control" placeholder="نام نقش کاربری را وارد کنید"/>
            </div>
            <div class="form-group">
                <h3 class="">مجوز ها و دسترسی ها</h3>
                <label for="Access-level-1"> اجازه حذف/اضافه کاربران</label>
                <input type="checkbox" class="m-1" id="Access-level-1"/>

                <label for="Access-level-1"> دسترسی به مطالب و مقالات سایت</label>
                <input type="checkbox" class="m-1" id="Access-level-1"/>

                <label for="Access-level-1"> اجازه ویرایش طرح های گرافیکی سایت</label>
                <input type="checkbox" class="m-1" id="Access-level-1"/>

                <label for="Access-level-1"> دسترسی به اطلاعات کاربران</label>
                <input type="checkbox" class="m-1" id="Access-level-1"/>

                <label for="Access-level-1"> اجازه ویرایش طرح های گرافیکی سایت</label>
                <input type="checkbox" class="m-1" id="Access-level-1"/>

                <label for="Access-level-1"> اجازه ویرایش طرح های گرافیکی سایت</label>
                <input type="checkbox" class="m-1" id="Access-level-1"/>
            </div>
            <button class="btn btn-primary form-control">ثبت</button>
        </form>
    </div>
@endsection
