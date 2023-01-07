<!DOCTYPE html>
<html>
<head>
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
<h2 style = "text-align:center">Total Registered Users</h2>
<h3>Total Registrations: {{$mod}}</h3>
<h3>Date: {{$myTime}}</h3>
  
  
<table id="customers">
  <tr>
  <th>NIC</th>
  <th>Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Division</th>
  </tr>
@foreach($report as $reports)
    <tr>
        <td>{{$reports->NIC}}</td>
        <td>{{$reports->Fname}}&nbsp;{{$reports->Mname}}&nbsp;{{$reports->Lname}}</td>
        <td>{{$reports->Email}}</td>
        <td>{{$reports->MNumber}}</td>
        <td>{{$reports->Address}}</td>
        <td>{{$reports->Division}}</td>            
    </tr>
@endforeach
</table>

</body>
</html>
