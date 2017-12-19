       <div class="col-lg-12 col-md-12 col-sm-12 blog-main">
        <div class="post-preview">  
          <span><a class="comment-img" data-toggle="modal" data-target="#myModal1">
            <img src="/img/profilepic.jpg" alt="" width="50" height="50">
          </a><a class='post-title' href="/post/{{ $post->id }}">{{ $post->title}}</a></span>
          @if($post->user_id == Auth::user()->id)
          <a href="/post/edit/{{ $post->id }}" class="float-right btn btn-default btn-sm pull-right"> <span class="fa fa-edit"></span>Edit Post</a>
          <a href="/post/delete/{{ $post->id }}" id="deletepost" data-toggle="confirmation" data-title="Confirm delete?" class="float-right btn btn-default btn-sm pull-right"> <span class="fa fa-trash"></span>Delete Post</a>
          @endif

          <p class="post-subtitle" >
            {{  $post->subtitle }}
          </p>
          <p class="post-meta">Posted by  
            <a href="#">{{ $post->name }}</a> on
            {{ $post->created_at }} 
            @if(!empty($post->edited_at)) <strong> edited on </strong>{{ $post->edited_at }} @endif

            &nbsp;
            <a id="likebtn{{$post->id}}" data-post={{$post->id}} data-user={{Auth::id()}} class="likebtn"  @if($post->likestatus) style="display: none;" @endif>
              <span class="fa fa-thumbs-o-up"> Like</span>


            </a>
            <a id="unlikebtn{{$post->id}}" data-post={{$post->id}} data-user={{Auth::id()}} class="unlikebtn" @if(!$post->likestatus) style="display: none;" @endif>
              <span class="fa fa-thumbs-o-up"> Liked</span>
            </a> 
            ({{$post->likes}}) likes
            <button data-id={{$post->id}} class="commentbtn float-right btn btn-default btn-sm pull-right">
              <span class="fa fa-comment-o"></span> Comments 
              @foreach($comment_count as $cm)
              @if($cm->id == $post->id)
              ({{$cm->cid}})
              @endif
              @endforeach
            </button>
          {{-- <span class="likesbutton pull-right">
            <span class="fa fa-heart-o"></span>{{$post->likes}}</span>  --}}
          </p>
          @include('comments.show')
          <hr>
