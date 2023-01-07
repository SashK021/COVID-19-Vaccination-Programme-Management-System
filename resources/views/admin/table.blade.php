<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Vaccination Reports</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Reports</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Vaccination Reports
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple"  CELLPADDING="20" CELLSPACING="2" WIDTH="300">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NIC</th>
                                            <th class="text-center">Full Name</th>
                                            <th class="text-center" colspan="2">First Dose </th>
                                            <th class="text-center" colspan="2">Second Dose</th>
                                            <th class="text-center" colspan="2">Third Dose</th>
                                            <th class="text-center" colspan="2">Fourth Dose</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Mobile</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Division</th>
                                            <th class="text-center" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                

                                    
                                    <tbody>
                                    @foreach($report as $reports)
                                        <tr>
                                            <td>{{$reports->NIC}}</td>
                                            <td>{{$reports->Fname}}&nbsp;{{$reports->Mname}}&nbsp;{{$reports->Lname}}</td>

                                            <td>{{$reports->Dose_type1}}</td>
                                            <td TD WIDTH="100">{{$reports->Dose1_Date}}</td>


                                            <td>{{$reports->Dose_type2}}</td>
                                            <td>{{$reports->Dose2_Date}}</td>


                                            <td>{{$reports->Dose_type3}}</td>
                                            <td>{{$reports->Dose3_Date}}</td>


                                            <td>{{$reports->Dose_type4}}</td>
                                            <td>{{$reports->Dose4_Date}}</td>

                                            <td>{{$reports->Email}}</td>
                                            <td>{{$reports->MNumber}}</td>
                                            <td>{{$reports->Address}}</td>
                                            <td>{{$reports->Division}}</td>
                                            <td><a class="btn btn-primary btn-sm" href="{{url('dose_view', $reports->id)}}">Update Dose</td>
                                            <td><a class="btn btn-primary btn-sm" href="{{url('update_view', $reports->id)}}">Update Details</td>
                                            
                                            
            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


                <script>
    window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("datatablesSimple");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'Vaccine Card.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 1 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>