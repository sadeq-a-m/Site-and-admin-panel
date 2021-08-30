



<div class="search-modal">



    <form action="{{route('search')}}">
        <div class="input-group">
            <div class="input-group-append">
                <button class="btn btn-primary p-3 fas fa-search input-group-text"></button>
            </div>

            <input type="text" class="form-control" placeholder="عبارت مورد نظر را جستجو کنید" name="search"/>
            <div class="input-group-prepend">
                <button class="btn btn-primary p-3 fas fa-times input-group-text close-search"></button>
            </div>
        </div>
    </form>
</div>
