<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
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
            <li class="nav-item">
              <a class="nav-link" href="{{url('genpop_view')}}">Vaccine Card</a>
            </li>
            <li class="nav-item active">
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
        <span class="subhead">Please find the relevant progam for your area</span><br>
        <span class="subhead">කරුණාකර ඔබේ ප්‍රදේශය සඳහා අදාළ වැඩසටහන සොයා ගන්න</span><br>
        <span class="subhead">உங்கள் பகுதிக்கான தொடர்புடைய திட்டத்தைக் கண்டறியவும்</span>

      </div>
    </div>
  </div>

  @include('user.program_table')

 
  
@include('user.script')
  
</body>
</html>