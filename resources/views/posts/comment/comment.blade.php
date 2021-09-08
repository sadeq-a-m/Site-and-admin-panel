<div class="container mt-5 row comment-box">
    <h4>دیدگاه های شما<span>(23 نظر)</span></h4>
    <hr/>




    <div class="row mt-4">
        <button class="btn btn-info" id="show-comment-box">افزودن دیدگاه جدید<i class="fas fa-plus"></i></button>
        <div class="row create-new-comment">



           <form method="post" action="{{route('comment.store')}}">
               @csrf

            <input type="hidden" value="{{$posts->id}}" name="post_id">
            <textarea rows="8" cols="80"  name="comment" cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
            <button class="btn btn-primary mt-3">ارسال دیدگاه</button>
           </form>




        </div>
    </div>

    @include('posts.comment.reply', ['comments' => $posts->comment, 'post_id' => $posts->id])







</div>

