<div id="commentform{{$post->id}}" class="panel-body" >
                    <form class="form-horizontal" method="POST" action="/comment/store/{{$post->id}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <div id='id25' class="row">
                                <label for="body" class="pull-left">Comment</label>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <input id="commentblock" class="form-control" name="body" placeholder="Your Comment Here!"  required>
                                    </div>
                                    <div id='subbutton' class="col-md-6 ">
                                        <button  type="submit" class="class1 btn btn-primary btn-sm pull-right">
                                        Submit Comment
                                        </button>
                                    </div>
                                 </div>
                        </div>
                    </form>
    <section class="comments">
              @foreach($comments as $com)
                @if($com->id == $post->id )
                        @if($com->user_id == Auth::user()->id)
                                <article class="comment">
                                <a class="comment-img" href="#non">
                                  <img  @if(!empty($post->profilepic)) src="{{ $post->profilepic }}" @else src="/img/profilepic.jpg" @endif alt="" width="50" height="50">
                                </a>
                                <div class="comment-body">
                                  <div class="text">
                                    <div id="commentshow{{$com->comment_id}}">
                                            <p >{{$com->body}}</p>
                                            
                                    </div>
                                  
                                                  <form class="form-horizontal" method="POST" action="/comment/edit/{{$com->comment_id}}">
                                                     {{ csrf_field() }}
                                                <div id="commentedit{{$com->comment_id}}" class="form-group" style='display: none;'>
                                                    <input id="commentedit{{$com->comment_id}}" type='text' class=" form-control" value="{{$com->body}}" name='body' autofocus>
                                                    <button  type="submit" class="class1 btn btn-primary btn-sm pull-right" >Submit edited</button>
                                                    <button data-id={{$com->comment_id}} type='button' class='class2 commenteditbtn btn btn-danger btn-sm pull-right'>Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                  <div class="row commentsetting">
                                                    <form class="form-horizontal" method="POST" action="/comment/delete/{{$com->comment_id}}">
                                                 {{ csrf_field() }}
                                                 &nbsp;
                                                    <button data-id={{$com->comment_id}} type="button" class="commenteditbtn class1 btn btn-primary btn-sm pull-right" ><span class="fa fa-edit"></span>Edit</button>
                                                 <button type='submit' data-toggle="confirmation" data-title="Confirm delete?" data-placement="left" class='class2 btn btn-danger btn-sm pull-right'><span class="fa fa-trash"></span>Delete</button>
                                                </form>

                                        </div>
                                  <p class="attribution">by <a href="#non">{{$com->name}}</a> at {{$com->created_at}} @if($com->edited) <span style="color: #171010;">Edited @endif</p>
                                </div>
                              </article>
                        @else
                              <article class="comment">
                                <a class="comment-img" href="#non">
                                  <img  @if(!empty($post->profilepic)) src="{{ $post->profilepic }}" @else src="/img/profilepic.jpg" @endif alt="" width="50" height="50">
                                </a>
                                <div class="comment-body">
                                  <div class="text">
                                    <p>{{$com->body}}</p>
                                  </div>
                                  <p class="attribution">by <a href="#non">{{$com->name}}</a> at {{$com->created_at}}</p>
                                </div>
                              </article>
                              
                      @endif
                @endif
              @endforeach

    </section>
                        
              </div>