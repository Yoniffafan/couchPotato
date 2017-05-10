
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="icon" type="image/jpg" href="http://img4.bp3padang.sch.id/unnamed-ac403-2530_67.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('judul') :: Sistem Informasi Akademik BP3 Padang</title>
  </head>
  <body>

    {{-- <script src="https://use.fontawesome.com/026ffd076e.js"></script> --}}


    <nav class="navbar navbar-findcond">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

		</div>

<div class="collapse navbar-collapse" id="navbar">
  <ul class="nav navbar-nav navbar-right">
    	<li class="active"><a href="/sia/login">SIA<span class="sr-only">(current)</span></a></li>
      <li ><a href="#">E-Learning</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">About</a></li>
  </ul>
</div>
</div>
</nav>


<div id="header" class="">
  <div class="container">
    <div class="row hidden-xs">
      <div class="col-md-1">
        <img src="http://img4.bp3padang.sch.id/unnamed-ac403-2530_67.png" alt=""/>
      </div>
    <div class="col-md-5">
        <h2>BP3 Padang</h2>
        <h3>Sistem Informasi Akademik</h3>
      </div>
      <div class="col-md-6 header-right hidden-sm">

      </div>
    </div>
<div class="container">
  <div class="row">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>

</div>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class="active"><a href="#" class="">Home</a></li>
        <li class=" dropdown">
            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li class=" dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Departments</a>
                </li>
                <li><a href="#">Add New</a></li>
            </ul>
        </li>
        <li><a href="#">Add New</a></li>
        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Managers <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">View Managers</a></li>
                <li><a href="#">Add New</a></li>
            </ul>
        </li>
        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">View Staff</a></li>
                <li><a href="#">Add New</a></li>
                <li><a href="#">Bulk Upload</a></li>
            </ul>
        </li>
        <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HR <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Change Time Entry</a></li>
                <li><a href="#">Report</a></li>
            </ul>
        </li>
    </ul>
    <ul class="nav navbar-nav pull-right">
        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Change Password</a></li>
                <li><a href="#">My Profile</a></li>
            </ul>
        </li>
        <li class=""><a href="#">Logout</a></li>
    </ul>
</div>
  </div>
</div>
    </div>
  </div>
</div>

<div class="container containerstyle">
@yield('isi')
</div>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <br>
    <div class="row">

      <div class="col-md-12">
        <p class="text-right">
Copyright &copy; BP3 Padang <br>
      Jl. Syeh Burhanuddin No.1, Korong Tiram Kenegarian Tapakis, Kec. Ulakan Tapakis
Kab. Padang Pariaman,
Sumatera Barat 25572
<br>
All rights reserved.</p>
      </div>
    </div>
    <span class="divider"></span>
    <div class="row sitemap">
      <div class="col-md-6 col-md-offset-6">
        <ul class="bottom_ul">
          <li><a href="#">bp3padang.com</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Faq's</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
      </div>
    </div>

  </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/logincontrol.js"></script>
{{-- add comment --}}
  </body>
</html>
