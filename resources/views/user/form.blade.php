<div class="colors">
<div class="page-section pb-0">
    
  @if(session()->has('message'))

  <div class = "alert alert-success">
  <button type = "button" class = "close" data-dismiss = "alert">X</button> 
  {{session()->get('message')}}
  </div>

  @endif




<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form class = "f" action = "{{url('upload_user')}}" method="Post" enctype="multipart/form-data">
      @csrf
    <div class="form">
       <div class="inputfield">
          <label>NIC Number</label>
          <input type="text" class = "input" name = "NIC" placeholder = "Enter your NIC" required>
       </div>  
       <div class="inputfield">
          <label>Name with Initials</label>
          <input type="text" class = "input" name = "iname" placeholder = "Enter you name with initials" required>
       </div>  
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class = "input"  name = "fname" placeholder = "Enter your first name" required>
       </div>  
       <div class="inputfield">
          <label>Middle Name/s</label>
          <input type="text" class = "input"  name = "mname" placeholder = "Enter your middle name/s" required>
       </div>  
      <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class = "input"  name = "lname" placeholder = "Enter your last name" required>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class = "input"  name = "email" placeholder = "Enter your e-mail address" required>
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="number" class = "input"  name = "mobileNumber" placeholder = "Enter your mobile number" required>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name = "address" required></textarea>
       </div> 
      <div class="inputfield">
          <label>Division</label>
          <input type="text" class = "input"  name = "division" placeholder = "Enter your division" required>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</form>
</div>
</div>
</div>