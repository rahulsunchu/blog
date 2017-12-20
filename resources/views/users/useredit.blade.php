@guest
@include('welcome'); 
@else
@include ('layouts.head')
@include ('layouts.nav')
{{-- @include ('layouts.header') --}}
<br><br>
<br><br>
<div class="container">
  <div class="row centered col-md-6 col-md-offset-3 text-center">

      <div class="panel panel-default ">
        <div class="panel-heading">  <h4 >User Profile</h4></div>
        <form class="form-horizontal" method="POST"  action="/user/update" enctype="multipart/form-data">

          <div class="panel-body classnone">

            <div class="box box-info">

              <div class="box-body ">
               <div class="col-sm-12">
                <div class="col-sm-6">
                  <img alt="Click here to upload image" @if(!empty($user->profilepic)) src="{{$user->profilepic}}" @else src="/img/profilepic.jpg" @endif id="profile-image1" class="img-circle img-responsive"/>
                  <div  align="center"> 
                    <div style="color:#999;" >{{$user->name}}</div>
                    <!--Upload Image Js And Css-->

                    <!--Upload Image Js And Css-->
                  </div>
                </div>
                <div class="col-sm-6">


                 {{ csrf_field() }}                         
                 <input id="profile-image-upload" name="image" type="file" class='submitbtn btn btn-sm' style="display: none;">
                 <span class='clickonimg' >Click on image to upload Profile Pic</span>
                 {{-- <button class="btn btn-sm submitbtn" type="submit"  style="display: none;"> Upload image</button> --}}

               </div>
               <div class="col-sm-4">
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

          <label for="firstname" class="col-sm-6 col-xs-6 tital " >First Name <span style="color:red">*</span></label>
          <div class="col-sm-6 col-xs-6  "><input id="title" class="form-control " name="name" value="{{ $user->name }}" required></div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="lastname" class="col-sm-6 col-xs-6 tital " >Last Name</label>
          <div class="col-sm-6 col-xs-6 "><input id="title" class="form-control" name="lastname" value="{{ $user->lastname}}" ></div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="email" class="col-sm-6 col-xs-6 tital " >Email <span style="color:red">*</span></label>
          <div class="col-sm-6 col-xs-6 "><input id="title" class="form-control" name="email" value="{{$user->email}}" readonly></div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="dob" class="col-sm-6 col-xs-6 tital " >Date Of Birth <span style="color:red">*</span></label>
          <div class="col-sm-6 col-xs-6 " ><input type="date" class="form-control" name="dob" value="{{$user->dob}}" required></div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="designation" class="col-sm-6 col-xs-6 tital " >Designation <span style="color:red">*</span></label>
          <div class="col-sm-6 col-xs-6 "><input  class="form-control" name="designation" value="{{ $user->designation}}" required></div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <label for="dob" class="col-sm-6 col-xs-6 tital " >Highest Education</label>
          <div class="col-sm-6 col-xs-6 "><input  class="form-control" name="edulevel" value="{{$user->edulevel}}" ></div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " >College</label>
          <div class="col-sm-6 col-xs-6 "><input class="form-control" name="college" value="{{$user->college}}" ></div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " >Blood Group</label>
          <div class="col-sm-6 col-xs-6 ">
            <select class="form-control" name="bloodgroup" value="{{$user->bloodgroup}}">
              <option value='{{ $user->bloodgroup }}' selected>{{ $user->bloodgroup }}</option>
              <option value='A Positive'>A Positive</option>
              <option value='A Negative'>A Negative</option>
              <option value='B Positive'>B Positive</option>
              <option value='B Positive'>B Negative</option>
              <option value='AB Positive'>AB Positive</option>
              <option value='AB Positive'>AB Negative</option>
              <option value='O Positive'>O Positive</option>
              <option value='O Negative'>O Negative</option>
            </select>
          </div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " >Phone</label>
          <div class="col-sm-6 col-xs-6 "><input type="tel" class="form-control" name="phone" value="{{$user->phone}}" ></div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
          <label for="dob" class="col-sm-6 col-xs-6 tital " ></label>
          <div class="col-sm-6 col-xs-6 "><span style="color:red">*</span> Indicates required field</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>
           
          <div class="form-group">
            <div class="col-md-6 col-md-offset-5  ">

              <button type="submit" class="btn btn-primary pull-right">
                Submit Post
              </button>
              <span class="pull-right">
                &nbsp;&nbsp;
              </span>
              <a href="/user" class="btn btn-primary pull-right">
                Back
              </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </form>
    </div> 
  </div>

</div>  
</div>

@include ('layouts.footer')

@endguest