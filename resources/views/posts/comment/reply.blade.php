






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

                            <input id="rep_post_id" type="hidden" value="{{$post_id}}" name="post_id">
                            <input id="parent_id" type="hidden" name="parent_id" value="{{$comment->id}}" />
                            <textarea id="rep_comment" rows="8" cols="80"  name="comment" cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
                            <button class="btn btn-primary mt-3">ارسال دیدگاه</button>
                        </form>

                    </div>
                </div>


                @include('posts.comment.reply' , ['comments' => $comment->replies])
                <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

                <script>
                    jQuery(document).ready(function() {

                        $('#ajaxSubmit').click(function (e){
                                e.preventDefault()       ;


                                $.ajaxSetup({

                                    headers : {

                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }

                                });

                                $.ajax({

                                    url : '{{ route('reply.add')}}' ,
                                    method : 'POST' ,
                                    dataType: 'JSON',
                                    data : {comment : $("#rep_comment").val() ,
                                        post_id : $("#rep_post_id").val() ,
                                        parent_id : $("#parent_id").val()} ,

                                    success : function (result){
                                        window.location.reload();

                                    }


                                })   ;

                            } ,
                        )



                    })  ;
                </script>


            </div>
        </div>
    </div>









@endforeach



