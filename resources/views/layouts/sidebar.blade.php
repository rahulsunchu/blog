<div class="sidebarindex col-sm-3 col-lg-3 col-md-3 text-center">
  <div class="sidebar-module1">
      <h3><b>Archives</b></h3>
      <ol class="list-unstyled">
        @foreach($archives as $archive)
        @if(Request::path() !== 'userposts')
        <li><a href="/index/?month={{$archive->month}}&year={{$archive->year}}">{{$archive->month}} {{$archive->year}}</a></li>
        @else
        <li><a href="/userposts/?month={{$archive->month}}&year={{$archive->year}}">{{$archive->month}} {{$archive->year}}</a></li>
        @endif
        @endforeach
      </ol>
    </div>
  <div class="sidebar-module2">
    <h3><b>About</b></h3>
    <div class='about'>
      <div style="text-align: center;">
        <div class="box-content"></div>
      </div>
      <p class='pabout'>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href='http://eabyas.in/'>eAbyas</a> is an experienced Educational Technology company providing E-learning, Student Management and other wide range of advance E-learning tools to Institutes, Corporates and Training Providers.<br>
        eAbyas has been offering effective open source solutions and became a <b style="font-size: 16px;">Certified Moodle Partner</b> in India
          
          </a>
        </p>

      </div>
    </div>
    
    <div class="sidebar-module3">
      <h3><b>Elsewhere</b></h3>
      <ol class="list-unstyled">
        {{-- <li><a href="#">GitHub</a></li> --}}
        <li><a href="https://twitter.com/eabyasinfo?lang=en" target="_blank">Twitter</a></li>
        <li><a href="https://www.facebook.com/eAbyasInfoSolutions" target="_blank">Facebook</a></li>
        <li><a href="https://www.linkedin.com/company/eabyas-info-sol" target="_blank">Linkedin</a></li>

      </ol>
    </div>
        </div><!-- /.blog-sidebar -->