@guest
@include('auth.login') 
@else
@include ('layouts.head')
@include ('layouts.nav2')
@include ('layouts.header')
<div class="container ">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 blog-main">
      <div class="post-preview">
        @if($all === 0)
          <?php $i=0; ?>
          @foreach ($posts as $post )
            @if($i < 5) 
              <div class='postdiv'>
              @include('posts.viewpost')
              </div> 
            @endif
            <?php $i++; ?>
          @endforeach
      @elseif($all === '10')
          <?php $i=0; ?>
          @foreach ($posts as $post )
            @if($i > 5 and $i < 10)  
              <div class='postdiv'>
              @include('posts.viewpost')
              </div> 
            @endif
            <?php $i++; ?>
          @endforeach
      @elseif($all === '15')
          <?php $i=0; ?>
          @foreach ($posts as $post )
            @if($i > 10 and $i < 15)  
              <div class='postdiv'>
              @include('posts.viewpost')
              </div> 
            @endif
            <?php $i++; ?>
          @endforeach
      @elseif($all === 'all')
          @foreach ($posts as $post )
              <div class='postdiv'>
              @include('posts.viewpost')
              </div> 
          @endforeach
      @endif
            </div>

            <div class="clearfix">
              @if($all === 0 and $i > 6)
              <a class="btn btn-primary pull-right" href="/index/10">Next (5) Posts &rarr;</a>
              @elseif($all === '10' and $i > 11 ) 
              <a class="btn btn-primary pull-right" href="/index/15">Next (5) Posts &rarr;</a>
              <a class="btn btn-primary pull-right" href="/index"> Previous (5) Posts </a>
              @elseif($all == '15' and $i > 16)
              <a class="btn btn-primary pull-right" href="/index/all">All Posts &rarr;</a>
              @elseif($all == '15' and ($i>10 or $i < 15))
              <a class="btn btn-primary pull-right" href="/index/10">&larr; Previous (5) Posts </a>

              @elseif($all === 'all' )
              <a class="btn btn-primary pull-right" href="/index/15">&larr; Previous (5) Posts </a>
              @endif
            </div>
          </div>
          @include('layouts.sidebar')
        </div>
      </div>
      <br>
      <br>
      
      @include ('layouts.footer')
      @endguest


