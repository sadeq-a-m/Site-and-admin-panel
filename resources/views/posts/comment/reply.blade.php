






@foreach($comments->reverse() as $comment)


    <div class="comment-holder mt-4 container" id="show_comments">
        <div class="row mt-4 container">
            <div>
                <img src="/storage/users/{{$comment->user->image}}" alt="user-image">
            </div>
            <div class=" mt-3 text-holder">
                <div class="row" >
                    <div class="col-6 date-name">
                        <span>{{$comment->user->name}}</span>
                        <date>{{\Hekmatinasser\Verta\Verta::instance($comment->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::now())}}</date>
                    </div>
                    <div class="col-6 thumbs">
                        <button class="btn">0 <i class="fas fa-thumbs-up"></i></button>
                        <button class="btn">0 <i class="fas fa-thumbs-down"></i></button>
                    </div>
                </div>
                <div class="row">
                    <p>{{$comment->comment}}</p>
                </div>




                <div class="row reply-box">
                    <button class="btn btn-info reply-comment">پاسخ</button>
                    <div class="row create-reply-comment">

                        <form method="post" action="{{route('reply.add')}}">
                            @csrf

                            <input type="hidden" value="{{$post_id}}" name="post_id">
                            <input type="hidden" name="parent_id" value="{{$comment->id}}" />
                            <textarea rows="8" cols="80"  name="comment" cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
                            <button class="btn btn-primary mt-3">ارسال دیدگاه</button>
                        </form>
                    </div>
                </div>


                @include('posts.comment.reply' , ['comments' => $comment->replies])

            </div>
        </div>
    </div>









@endforeach



