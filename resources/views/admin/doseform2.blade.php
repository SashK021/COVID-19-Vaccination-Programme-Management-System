<main>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Dose Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Report</li>
                            <li class="breadcrumb-item active">Update Dose</li>
                        </ol>
    
  @if(session()->has('message'))

  <div class = "alert alert-success">
  <button type = "button" class = "close" data-dismiss = "alert">x</button> 
  {{session()->get('message')}}
  </div>

  @endif


  <div class="wrapper">
    <div class="title">
      Update Dosage
    </div>
    <form class = "f" action = "{{url('editDose2', $data->id)}}" method = "POST" enctype="multipart/form-data">
      @csrf
    <div class="form">
    <div class="text-center">
    <button type="button" class="btn btn-outline-secondary" style = "margin-bottom:20px;">1</button>
    <button type="button" class="btn btn-outline-secondary text-dark" style = "margin-bottom:20px;">2</button>
    <button type="button" class="btn btn-outline-secondary" style = "margin-bottom:20px;">3</button>
    <button type="button" class="btn btn-outline-secondary" style = "margin-bottom:20px;">4</button>
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
       <div class="inputfield">
        <input type="submit" value="Update" class="btn">
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
       <div class="inputfield">
        <input type="submit" value="Update" class="btn">
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