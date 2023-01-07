<div class="wrapper">
    <div class="title">
      Update Dosage
    </div>
    <form class = "f" enctype="multipart/form-data">
      @csrf
    <div class="form">
       <div class="inputfield">
          <label>NIC</label>
          <input type="text" class = "input" name = "NIC" placeholder = "Enter your NIC" require="">
       </div>  

       <!--First Dose-->
       <h1>First Dose</h1>
       <hr><br>
        <div class="inputfield">
          <label>Dose Type</label>
          <div class="custom_select">
            <select name = "doseType1">
            <option value="">--Select Dose--</option>
              <option value="moderna">Moderna</option>
              <option value="sinopharm">Sinopharm</option>
              <option value="pfizer">Pfizer</option>
              <option value="not_vaccinated">Not Vaccinated</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Number of Doses</label>
          <div class="custom_select">
            <select name = "doseNum1">
            <option value="1">1</option>
              <option value="0">0</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Date of Dose</label>
          <input type="date"  class = "input datepicker"  name = "dose1" placeholder = "Enter your e-mail address" require="">
       </div>

       <!--Second Dose-->
       <h1>Second Dose</h1>
       <hr><br>
        <div class="inputfield">
          <label>Dose Type</label>
          <div class="custom_select">
            <select name = "doseType2">
            <option value="">--Select Dose--</option>
              <option value="moderna">Moderna</option>
              <option value="sinopharm">Sinopharm</option>
              <option value="pfizer">Pfizer</option>
              <option value="not_vaccinated">Not Vaccinated</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Number of Doses</label>
          <div class="custom_select">
            <select name = "doseNum2">
            <option value="2">2</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Date of Dose</label>
          <input type="date"  class = "input datepicker"  name = "dose2" placeholder = "Enter your e-mail address" require>
       </div> 

       <!--Third Dose-->
       <h1>Third Dose</h1>
       <hr><br>
        <div class="inputfield">
          <label>Dose Type</label>
          <div class="custom_select">
            <select name = "doseType3">
            <option value="">--Select Dose--</option>
              <option value="moderna">Moderna</option>
              <option value="sinopharm">Sinopharm</option>
              <option value="pfizer">Pfizer</option>
              <option value="not_vaccinated">Not Vaccinated</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Number of Doses</label>
          <div class="custom_select">
            <select name = "doseNum3">
            <option value="3">3</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="4">4</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Date of Dose</label>
          <input type="date"  class = "input datepicker"  name = "dose3" placeholder = "Enter your e-mail address" require>
       </div> 

      <!--Fourth Dose-->
       <h1>Fourth Dose</h1>
       <hr><br>
        <div class="inputfield">
          <label>Dose Type</label>
          <div class="custom_select">
            <select name = "doseType4">
            <option value="">--Select Dose--</option>
              <option value="moderna">Moderna</option>
              <option value="sinopharm">Sinopharm</option>
              <option value="pfizer">Pfizer</option>
              <option value="not_vaccinated">Not Vaccinated</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Number of Doses</label>
          <div class="custom_select">
            <select name = "doseNum4">
            <option value="4">4</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Date of Dose</label>
          <input type="date"  class = "input datepicker"  name = "dose4" placeholder = "Enter your e-mail address" require="">
       </div> 

      <div class="inputfield">
        <input type="submit" value="Update" class="btn">
      </div>
    </div>
</form>
</div>





























<!--
<x-app-layout>

</x-app-layout>
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        @include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
