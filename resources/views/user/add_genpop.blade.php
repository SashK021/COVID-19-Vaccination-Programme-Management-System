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
            <li class="nav-item">
              <a class="nav-link" href="{{url('home2_view')}}">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('register_view')}}">Registration</a>
            </li>
            <li class="nav-item">
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
        <span class="subhead">Please fill out the registration form below</span></br>
        <span class="subhead">කරුණාකර පහත ලියාපදිංචි පෝරමය පුරවන්න</span></br>
        <span class="subhead">கீழே உள்ள பதிவு படிவத்தை நிரப்பவும்</span>
      </div>
    </div>
  </div>

@include('user.form')


  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Programme Handlers</h5>
          <ul class="footer-menu">
            <li><a href="#">Divisional Secreterait</a></li>
            <li><a href="#">Ministry of Health</a></li>
            
          </ul>
        </div>
        
        
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <a href="#" class="footer-link">(+94)112 694033</a><br>
          <a href="#" class="footer-link">(+94)112 675011</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://macodeid.com/" target="_blank">C-19VPIMS</a>. All right reserved</p>
    </div>
  </footer>

@include('user.script')
  
</body>
</html>