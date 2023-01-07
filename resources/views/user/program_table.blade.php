<table id="customers">
  <tr>
  <th>Programme Name </br> වැඩසටහනේ නම </th>
  <th>Programme Venue / වැඩසටහන් ස්ථානය </th>
  <th class="text-center">Date / දිනය </th>
  </tr>

    @foreach($report as $reports)
    <tr>
        <td>{{$reports->program_name}}</td>
        <td>{{$reports->program_venue}}</td>
        <td>{{$reports->program_date}}</td>
    </tr>
    @endforeach 

</table>