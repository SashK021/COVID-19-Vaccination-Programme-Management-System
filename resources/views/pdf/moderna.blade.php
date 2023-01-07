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

<h2 style = "text-align:center">Total Moderna Vacciantions</h2>
<h3>Total Vaccinations: {{$mod}}</h3>
<h3>Date: {{$myTime}}</h3>
  

<table id="customers">
  <tr>
  <th>NIC</th>
  <th>Full Name</th>
  <th class="text-center" colspan="2">First Dose </th>
  <th class="text-center" colspan="2">Second Dose</th>
  <th class="text-center" colspan="2">Third Dose</th>
  <th class="text-center" colspan="2">Fourth Dose</th>
  </tr>
@foreach($report as $reports)
    <tr>
        <td>{{$reports->NIC}}</td>
        <td>{{$reports->Fname}}&nbsp;{{$reports->Mname}}&nbsp;{{$reports->Lname}}</td>
        <td>{{$reports->Dose_type1}}</td>
        <td>{{$reports->Dose1_Date}}</td>
        <td>{{$reports->Dose_type2}}</td>
        <td>{{$reports->Dose2_Date}}</td>
        <td>{{$reports->Dose_type3}}</td>
        <td>{{$reports->Dose3_Date}}</td>
        <td>{{$reports->Dose_type4}}</td>
        <td>{{$reports->Dose4_Date}}</td>     
    </tr>
@endforeach
</table>

</body>
</html>
