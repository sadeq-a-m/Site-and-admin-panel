<div class="container mt-5 row comment-box">
    <h4>دیدگاه های شما<span>(23 نظر)</span></h4>
    <hr/>




    <div class="row mt-4">
        <button class="btn btn-info" id="show-comment-box">افزودن دیدگاه جدید<i class="fas fa-plus"></i></button>
        <div class="row create-new-comment">



           <form method="post" action="{{route('comment.store')}}">
               @csrf

            <input id="post_id" type="hidden" value="{{$posts->id}}" name="post_id">
            <textarea id="comment" rows="8" cols="80"  name="comment" cols="30" rows="10" class="mt-3" placeholder="متن نظر"></textarea>
            <button  id="ajaxSubmit" class="btn btn-primary mt-3">ارسال دیدگاه</button>
           </form>


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

                           url : '{{ route('comment.store')}}' ,
                           method : 'POST' ,
                           dataType: 'JSON',
                           data : {comment : $("#comment").val() , post_id : $("#post_id").val()} ,
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

    @include('posts.comment.reply', ['comments' => $posts->comment, 'post_id' => $posts->id])







</div>

