<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
   

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">C-19</span>VPIMS</a>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link" href="{{url('home2_view')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('register_view')}}">Registration</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('genpop_view')}}">Vaccine Card</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('user_program_view')}}">Programmes</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>



  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/virus.jpg); height: 50%;">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Please enter your NIC number in the search box</span><br>
        <span class="subhead">කරුණාකර ඔබගේ ජාතික හැඳුනුම්පත් අංකය සෙවුම් කොටුවේ ඇතුළත් කරන්න</span><br>
        <span class="subhead">தேடல் பெட்டியில் உங்கள் NIC எண்ணை உள்ளிடவும்</span>

      </div>
    </div>
  </div>

  @include('user.search')

 
  
@include('user.script')
  
</body>
</html>