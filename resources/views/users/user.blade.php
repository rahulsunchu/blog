@guest
@include('welcome'); 
@else
@include ('layouts.head')
@include ('layouts.nav')
{{-- @include ('layouts.header') --}}
{{-- <br><br>
<br><br>
<div class="container">
  <div class="row">


    <div class=" centered">

      <div class="panel panel-default">
        <div class="panel-heading">  <h4 >User Profile</h4></div>
        <div class="panel-body classnone">

          <div class="box box-info">

            <div class="box-body">
             <div class="col-sm-4">
               <div  align="center"> <img alt="User Pic" @if(!empty($user->profilepic)) src="{{$user->profilepic}}" @else src="/img/profilepic.jpg" @endif id="profile-image1" class="img-circle img-responsive">

              <div style="color:#999;" >{{$user->name}}</div>
              <!--Upload Image Js And Css-->
              {{ csrf_field() }}                         
              <!--Upload Image Js And Css-->
            </div>
        </div>

        <br>

        <!-- /input-group -->
      </div>
      <div class="col-sm-4">
        <h3 style="color:#00b1b1;">{{$user->name}} </h3></span>
        <span><p>{{ $user->designation }}</p></span>            
      </div>
      @if($user->id === Auth::id())
          <div class="col-sm-4">
            <a href="/user/edit" class='btn btn-primary '>Edit profile</a>
            <br><br><a href="/userposts">Your Posts {{ $postsByUser }}</a>
          </div>
      @else
          <div class="col-sm-4">
            <br><br><a href="/userposts">{{ $user->name }}'s Posts &nbsp; ({{ $postsByUser }})</a>
          </div>
      @endif

      <div class="clearfix"></div>
      <hr style="margin:5px 0 5px 0;">

      <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 ">{{$user->name}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>

      <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> {{$user->lastname}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>

      <div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7"> {{$user->dob}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>

      <div class="col-sm-5 col-xs-6 tital " >Designitation:</div><div class="col-sm-7">{{$user->designation}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>

      @if($user->id === Auth::id())

            <div class="col-sm-5 col-xs-6 tital " >Highest Education:</div><div class="col-sm-7">{{$user->edulevel}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >College:</div><div class="col-sm-7">{{$user->college}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >BloodGroup:</div><div class="col-sm-7">{{$user->bloodgroup}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7">{{$user->phone}}</div>
      <div class="clearfix"></div>
      <div class="bot-border"></div>
      @endif
  

      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>


</div> 
</div>
</div>  
</div>
</div> --}}

<br><br>
<br><br>
<div class="container">
  <div class="row col-md-6 col-md-offset-3">

    <div class="panel panel-default ">
      <div class="panel-heading">  <h4 >User Profile</h4></div>
      {{-- <form class="form-horizontal" method="POST"  action="/user/update" enctype="multipart/form-data"> --}}

        <div class="panel-body classnone">

          <div class="box box-info">

            <div class="box-body ">
             <div class="col-sm-12">
              <div class="col-sm-6">
                <img alt="Click here to upload image" align="center" @if(!empty($user->profilepic)) src="{{$user->profilepic}}" @else src="/img/profilepic.jpg" @endif id="profile-image1" class="img-circle img-responsive"/>
                <div  align="center"> 
                  <div style="color:#999;" >{{$user->name}}</div>
                </div>
              </div>
              <div class="col-sm-6">
                <h3 style="color:#3d596d;">{{$user->name}} </h3>
                <span><p>{{$user->designation}}</p></span>            
              </div>
            </div>

            <br>

            <!-- /input-group -->
          </div>


          <div class="clearfix"></div>

          <hr style="margin:5px 0 5px 0;">

          <br>

          <label for="firstname" class="col-sm-6 col-xs-6 tital " >First Name:</label>
          <div class="col-sm-6 col-xs-6 pull-left">{{$user->name}}</div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="lastname" class="col-sm-6 col-xs-6 tital " >Last Name:</label>
          <div class="col-sm-6 col-xs-6 ">{{ $user->lastname}}</div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="email" class="col-sm-6 col-xs-6 tital " >Email:</label>
          <div class="col-sm-6 col-xs-6 ">{{$user->email}}</div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="dob" class="col-sm-6 col-xs-6 tital " >Date Of Birth:</label>
          <div class="col-sm-6 col-xs-6 " >{{$user->dob}}</div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="designation" class="col-sm-6 col-xs-6 tital " >Designation:</label>
          <div class="col-sm-6 col-xs-6 ">{{ $user->designation}}</div>
@if($user->id === Auth::id())

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " >Highest Education:</label>
          <div class="col-sm-6 col-xs-6 ">{{$user->edulevel}}</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " >College:</label>
          <div class="col-sm-6 col-xs-6 ">{{$user->college}}</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " >Blood Group:</label>
          <div class="col-sm-6 col-xs-6 ">{{$user->bloodgroup}}</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " >Phone:</label>
          <div class="col-sm-6 col-xs-6 ">{{$user->phone}}</div>
      @endif

        </div>
      </div>
      <div class="row"> 
        @if($user->id === Auth::id())
        <div class="col-sm-3 col-md-offset-6">
          <a href="/userposts" class='btn btn-primary '>View Your Posts ({{ $postsByUser }})</a>
        </div>
        <div class="col-sm-3">
          <a href="/user/edit" class='btn btn-primary '>Edit profile</a>
        </div>
        @else
        <div class="col-sm-5 col-md-offset-7" >
          <br><br><a href="/userposts/{{ $user->id }}" class='btn btn-primary '>View {{ $user->name }}'s Posts &nbsp; ({{ $postsByUser }})</a>
        </div>
        @endif
      </div>
      <br>
    </div>

  </div>  
</div>
<br>
@include ('layouts.footer')

@endguest