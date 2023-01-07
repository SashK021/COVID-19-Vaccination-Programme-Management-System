<div class="container-fluid px-4">
                        <h1 class="mt-4">Update Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Reports</li>
                            <li class="breadcrumb-item active">Update Details</li>
                        </ol>

<div class="page-section pb-0">
    
  @if(session()->has('message'))
  <div class = "alert alert-success">
  {{session()->get('message')}}
  </div>
  @endif


<div class="wrapper">
    <div class="title">
      Update Details
    </div>
    <form class = "f" action = "{{url('update_user',$updateData->id)}}" method="Post" enctype="multipart/form-data">
      @csrf
    <div class="form">
       <div class="inputfield">
          <label>NIC Number</label>
          <input type="text" class = "input" name = "NIC" placeholder = "Enter your NIC" value = "{{$updateData->NIC}}" require>
       </div>  
       <div class="inputfield">
          <label>Name with Initials</label>
          <input type="text" class = "input" name = "iname" placeholder = "Enter your name with initials" value = "{{$updateData->Iname}}" require>
       </div>
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class = "input"  name = "fname" placeholder = "Enter your first name" value = "{{$updateData->Fname}}" require>
       </div>  
       <div class="inputfield">
          <label>Middle Name/s</label>
          <input type="text" class = "input"  name = "mname" placeholder = "Enter your middle name/s" value = "{{$updateData->Mname}}" require>
       </div>  
      <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class = "input"  name = "lname" placeholder = "Enter your last name" value = "{{$updateData->Lname}}" require>
       </div> 

        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class = "input"  name = "email" placeholder = "Enter your e-mail address" value = "{{$updateData->Email}}" require>
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="number" class = "input"  name = "mobileNumber" placeholder = "Enter your mobile number" value = "{{$updateData->MNumber}}" require>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name = "address" require value = "">{{$updateData->Address}}</textarea>
       </div> 
      <div class="inputfield">
          <label>Division</label>
          <input type="text" class = "input"  name = "division" placeholder = "Enter your division" value = "{{$updateData->Division}}" require>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Update" class="btn">
      </div>
    </div>
</form>
</div>
</div>
