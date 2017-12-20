
@include('layouts.head')
@include ('layouts.nav')

@guest
<li><a href="{{ route('login') }}">Login</a></li>
<li><a href="{{ route('register') }}">Register</a></li>
@else
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

                <div class="class3 panel-body">
                    <form class="form-horizontal" method="POST" action="/post/update/{{ $posts->id }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-1 control-label">Title</label>
                            <div class="col-md-11">
                                <input id="title" class="form-control" name="title" value="{{ $posts->title }}" required>
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                            <label for="subtitle" class="col-md-1 control-label" >SubTitle</label>
                            <div class="col-md-11">
                                <input type='text' class="form-control" rows="2" name="subtitle" value="{{ $posts->subtitle }}" required></input>
                            </div>
                        </div> --}}
                        <div class="row form-group">
                            <label for="body" class="col-md-1 control-label">Body</label>
                            <div class="col-md-11">
                                <textarea id="textarea" class="form-control" name="body" rows="16" required>{{ $posts->body }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary pull-right">
                                    Submit Edited Post
                                </button>
                                <span class="pull-right">
                                    &nbsp;&nbsp;
                                </span>
                                <a href="/index" class="btn btn-primary pull-right">
                                    Back
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endguest
@include('layouts.footer')

