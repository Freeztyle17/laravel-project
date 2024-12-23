<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online House Rental</title>
    <!-- Stylesheets -->
    <!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <style>
        html, body {
  font-family: 'Open Sans', sans-serif;
  height: 100%;
}
body {
  background: #FFFFFF;
  height: 100%;
}



    .state-overview .symbol, .state-overview .value {
    display: inline-block;
    text-align: center;
}

.state-overview .value  {
    float: right;

}

.state-overview .value h1, .state-overview .value p  {
    margin: 0;
    padding: 0;
    color: #c6cad6;
}

.state-overview .value h1 {
    font-weight: 300;
}

.state-overview .symbol i {
    color: #fff;
    font-size: 50px;
}

.state-overview .symbol {
    width: 40%;
    padding: 25px 15px;
    -webkit-border-radius: 4px 0px 0px 4px;
    border-radius: 4px 0px 0px 4px;
}

.state-overview .value {
    width: 58%;
    padding-top: 21px;
}

.state-overview .terques {
    background: #6ccac9;
}

.state-overview .red {
    background: #ff6c60;
}

.state-overview .yellow {
    background: #f8d347;
}

.state-overview .blue {
    background: #57c8f2;
}




    </style>

</head>
<body >
<section id="sidebar" > 
  <div class="white-label" style="background-color: black;">
  </div> 
  <div id="sidebar-nav" style="background-color: black;"> 
    <div class="col-md-12" style="margin-top:30px; padding-bottom:30px;">
    <div class="profileimg">
      <img  title="Profile Image" style="    width: 120px; height:100px; margin-bottom: 20px; margin-left:22px;" src="{{asset('profile')}}/{{Illuminate\Support\Facades\Auth::user()->profile_img}}" alt="">
      <a href="#" id="profile" style="padding-left: 40px;">Profile img</a>    <br>
      <span style="color:white; margin-left:24px">{{Illuminate\Support\Facades\Auth::user()->adminrelation->first_name}}</span> <span style="color:red">{{Illuminate\Support\Facades\Auth::user()->adminrelation->last_name}}</span>
      </div>
    </div>
    <ul>
      <li class="active"><a href="{{route('admin_dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li><a href="{{route('tenet_info')}}"><i class="fa fa-info"></i> Tenant Info</a></li>
      <li><a href="{{route('advisor_info')}}"><i class="fa fa-info"></i> Advisor Info</a></li>
      <li><a href="{{route('advisor_upgrade')}}"><i class="fa fa-thumbs-up"></i> Advisor Upgradation</a></li>
      <li><a href="{{route('admin_profile')}}"><i class="fa fa-user"></i> Profile</a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
  </div>
</section>
<section id="content">
  <div id="header">
    <div class="header-nav" style="background-color: blue;">
      <div class="menu-button">
        <!-- <i class="fa fa-navicon"></i> -->
      </div>
      <div class="nav">
        <ul >
          <li class="nav-settings">
          @php
            $count = \App\RegisterAdvisor::all()->where('is_recived','=',1)->where('is_upgrated','=',0)->count();
          @endphp
            <a href="{{route('advisor_upgrade')}}"><div title="Notification" class="font-icon"><i class="fa fa-bell-o" aria-hidden="true"></i><span style="float: left; margin-right: 5px; margin-top: 3px;" class="badge badge-light">{{$count}}</span></div></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
<div class="content" style="margin-top:5%">
  <div class="row state-overview">
        <div class="col-lg-6 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="fa fa-user"></i>
                </div>
                <div class="value">
                    <h3 class="count">{{App\User::all()->where('role_id_fk','=',2)->count()}}</h3>
                    <p>Total Tenant</p>
                </div>
            </section>
        </div>
        <div class="col-lg-6 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="fa fa-user"></i>
                </div>
                <div class="value">
                    <h3 class="count">{{App\User::all()->where('role_id_fk','=',3)->count()}}</h3>
                    <p>Total Advisor</p>
                </div>
            </section>
        </div>
        <div class="col-lg-6 col-sm-6">
            <section class="panel">
                <div class="symbol red">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="value">
                    <h3 class=" count2">{{App\AdvisorPost::all()->count()}}</h3>
                    <p>Total Post</p>
                </div>
            </section>
        </div>
    </div>
  

<!-- Model For Profile img -->

	
  <div class="modal fade" id="profilepicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
	<!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/login.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Profile</strong> <a
              class="green-text font-weight-bold"><strong> Picture</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
		  <form action="{{route('profile_picture')}}" method="post" autocomplete="off" enctype="multipart/form-data">
      @csrf
          @if ($errors->any())
              <div class="alert alert-danger alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                @foreach ($errors->all() as $error)
                  <div class="glyphicon glyphicon-warning-sign">&nbsp</div><b>{{ $error }}</b>
                  <br />
                @endforeach
              </div>
            @endif
          <div class="md-form pb-3">
            <input type="file" autocomplete="off" name="img" >
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit"  class="btn btn-success btn-block btn-rounded z-depth-1">Upload Profile Picture</button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
		  </form>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
 <!-- Model For Post -->

<!--====== Javascripts & Jquery ======-->
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<!-- smodel script -->
<script>
$('#profile').on('click', function() {
    //  alert("hello"); 
     $('#profilepicture').modal('show');  
 });
</script>
</body>
</html>