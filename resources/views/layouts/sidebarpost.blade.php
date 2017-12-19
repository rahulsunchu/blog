<div class="row sidebartop">
  <div class="col-md-9 ">
    <div  id="moodlepartner">
      <div  style="text-align: center;">
        <p><span style="display: inline-block;"><img class="img-responsive" style="width: 89px; height: 70px;  border-radius: 100px; border: 4px none rgba(255,255,255,0.01);" src="http://eabyas.in/wp-content/uploads/2014/05/box_logo.png" alt="photo"></span></p>
        <h3 class="box-title" style="margin: 5px 0 20px 0; font-size: 23px; line-height: 23px; text-transform: capitalize; font-weight: bold; letter-spacing: 0px; color: #000000; font-family: Open Sans;">Official Moodle Partner</h3>
        <div class="box-content"></div>
      </div>
      <p>eAbyas is an experienced Educational Technology company providing E-learning, Student Management and other wide range of advance E-learning tools to Institutes, Corporates and Training Providers.<br>
        eAbyas has been offering effective open source solutions and became a <b>Certified Moodle Partner</b> in India</p>
        <p class="text-center"><a href="http://eabyas.in/wp-content/uploads/2014/12/moodle-partner_new.png"><img class=" size-medium wp-image-1776 aligncenter" src="http://eabyas.in/wp-content/uploads/2017/07/moodle-partner_new.png" alt="moodle-partner_new" width="300" height="60"><br>
        </a></p>

      </div>
    </div>
    <div class="sidebar-module4 col-md-3">
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
  </div><!-- /.blog-sidebar -->  
