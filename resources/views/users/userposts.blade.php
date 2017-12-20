@guest
@include('welcome'); 
@else
@include ('layouts.head')
@include ('layouts.nav2')
@include ('layouts.header')

<div class="container ">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 blog-main">
        <h2>Posts by {{ $username }}</h2>
      <br>
      <div class="post-preview">
        @if($all == 0)
          <?php $i=0; ?>
          @foreach ($posts as $post )
            @if($i < 10)  
              @include('posts.viewpost')
            @endif
            <?php $i++; ?>
          @endforeach
      @elseif($all === '20')
          <?php $i=0; ?>
          @foreach ($posts as $post )
            @if($i > 10 and $i < 20)  
              @include('posts.viewpost')
            @endif
            <?php $i++; ?>
          @endforeach
      @elseif($all === '30')
          <?php $i=0; ?>
          @foreach ($posts as $post )
            @if($i > 20 and $i < 30)  
              @include('posts.viewpost')
            @endif
            <?php $i++; ?>
          @endforeach
      @elseif($all === 'all')
          @foreach ($posts as $post )
              @include('posts.viewpost')
          @endforeach
      @endif
            </div>
            <div class="clearfix">
              @if($all === 0)
              <a class="btn btn-primary pull-right" href="/index/20">Next(10) Posts &rarr;</a>
              @elseif($all === '20')
              <a class="btn btn-primary pull-right" href="/index/30">Next(10) Posts &rarr;</a>
              <a class="btn btn-primary pull-right" href="/index">&larr; Previous(10) Posts </a>
              @elseif($all == '30')
              <a class="btn btn-primary pull-right" href="/index/all">All Posts &rarr;</a>
              @elseif($all === 'all')
              <a class="btn btn-primary pull-right" href="/index/20">&larr; Previous(10) Posts </a>
              @endif
            </div>
          </div>
          @include('layouts.sidebar')
        </div>
      </div>
      <br>
      @include ('layouts.footer')
      @endguest


