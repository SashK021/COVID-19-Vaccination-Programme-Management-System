
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Vaccination Card</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="NIC" value="<?php if(isset($_GET['NIC'])){echo $_GET['NIC'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    <br>

                                <hr>
                                <?php
                                    $con = mysqli_connect("localhost","root","","vaccine1");

                                    if(isset($_GET['NIC']))
                                    {
                                        $NIC = $_GET['NIC'];
                                        
                                        $query = "SELECT * FROM gen_pops WHERE NIC='$NIC' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                            <div class="row" id = "invoice" style = " margin-left: 50px;">
                            <div class="card mt-5">
                            <div class="card-header text-center">
                            <h4>Vaccination Card</h4>
                            </div>
                            <div class="card-body">
                            <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 text-left">
					        <!-- <h4 class = "text-center"><strong>Client</strong> Details</h4> -->
					        <ul class="list-unstyled">
						    <li><strong>Name : </strong> <?= $row['Iname']; ?></li>
						    <!-- <li><strong>NIC : </strong> <?= $row['NIC']; ?></li>
						    <li><strong>Address : </strong> <?= $row['Address']; ?></li>
						    <li><strong>Contact Number : </strong><?= $row['MNumber']; ?></li>
                            <li><strong>Division : </strong> <?= $row['Division']; ?></li> -->
					        </ul>
				            </div>

                            <div class="table-responsive">
				<table class="table table-condensed nomargin">
					<thead>
						<tr>
							<th>Dose Number</th>
							<th>Dose</th>
							<th>Date</th>
                            <th></th>
                            <th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>First Dose</td>
							<td><?= $row['Dose_type1']; ?></td>
							<td style = "margin-left:20px;"><?= $row['Dose1_Date']; ?></td>
                            <td></td>
                            <td></td>
						</tr>
                        <tr>
                            <td>Second Dose</td>
							<td><?= $row['Dose_type2']; ?></td>
							<td style = "margin-left:20px;"><?= $row['Dose2_Date']; ?></td>
                            <td></td>
                            <td></td>
						</tr>
                        <tr>
                            <td>Third Dose</td>
							<td><?= $row['Dose_type3']; ?></td>
							<td style = "margin-left:20px;"><?= $row['Dose3_Date']; ?></td>
                            <td></td>
                            <td></td>
						</tr>
						<tr>
                        <td>Fourth Dose</td>
						<td><?= $row['Dose_type4']; ?></td>
						<td style = "margin-left:20px;"><?= $row['Dose4_Date']; ?></td>
                        <td></td>
                        <td></td>
                        </tr>
					</tbody>
				</table>
			</div>
                                            
                                   <!-- <div class="form-outline">
                                                    <label class="form-label" for="form12">Example label</label>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Name with Initials</label>
                                                    <input type="text" value="<?= $row['Iname']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Email Address</label>
                                                    <input type="text" value="<?= $row['Email']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" value="<?= $row['MNumber']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Address</label>
                                                    <input type="text"  value="<?= $row['Address']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Division</label>
                                                    <input type="text" value="<?= $row['Division']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">First Dose</label>
                                                    <input type="text" value="<?= $row['Dose_type1']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">First Dose</label>
                                                    <input type="date" value="<?= $row['Dose1_Date']; ?>" class="form-control">
                                                </div> -->

                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel panel-default text-center" style = "margin-top:10px; margin-bottom:10px;">
		<div class="panel-body">
			<a class="btn btn-success" id="download" target="_blank"><i class="fa fa-print"></i> PRINT CARD</a>
		</div>
        </div>
            </div>
            
        
    </div>
    
    <script>
    window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'Vaccine Card.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>