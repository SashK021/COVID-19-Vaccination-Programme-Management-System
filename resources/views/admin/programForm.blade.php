<div class="container-fluid px-4">
                        <h1 class="mt-4">Add Vaccination Programme</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Add Vaccination Programme</li>
                        </ol>

                        <hr>
<div class="page-section pb-0">
    
  @if(session()->has('message'))
  <div class = "alert alert-success">
  <button type = "button" class = "close" data-dismiss = "alert"></button> 
  {{session()->get('message')}}
  </div>

  @endif


<div class="wrapper">
    <div class="title">
      Add Vaccination Programme
    </div>
    <form class = "f" action = "{{url('upload_program')}}" method="Post" enctype="multipart/form-data">
      @csrf
    <div class="form">
       <div class="inputfield">
          <label>Programme Name</label>
          <input type="text" class = "input" name = "program_name" placeholder = "Enter the name of the programme" required>
       </div>  
       <div class="inputfield">
          <label>Venue</label>
          <input type="text" class = "input" name = "program_venue" placeholder = "Enter the place of the programme" required>
       </div>
       <div class="inputfield">
          <label>Date</label>
          <input type="date"  class = "input datepicker"  name = "program_date" placeholder = "Enter the date of the programme" require="">
       </div>
      <div class="inputfield">
        <input type="submit" value="Add Programme" class="btn">
      </div>
    </div>
</form>
</div>
</div>
</br></br></br></br></br>