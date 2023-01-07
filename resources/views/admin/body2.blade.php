<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        Total Registrations
                                        <?php
                                    $con = mysqli_connect("localhost","root","","vaccine1");
                                    
                                    $query = "SELECT * FROM gen_pops ORDER BY id";
                                    $query_run = mysqli_query($con, $query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h5>'.$row.'</h5>';
                                    ?>   
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('report_view')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        New Registrations
                                        <?php
                                    $con = mysqli_connect("localhost","root","","vaccine1");
                                    
                                    $query = "SELECT * FROM gen_pops WHERE cast(`created_at` as date) = cast(now() as date)";
                                    $query_run = mysqli_query($con, $query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h5>'.$row.'</h5>';
                                    ?>   
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        Total Vaccinations
                                        <?php
                                    $con = mysqli_connect("localhost","root","","vaccine1");
                                    
                                    $query = "SELECT * FROM gen_pops WHERE dose_type1 <> 'Not vaccinated'";
                                    $query_run = mysqli_query($con, $query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h5>'.$row.'</h5>';
                                    ?>   
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('report_view')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                        To Be Vaccinated
                                        <?php
                                    $con = mysqli_connect("localhost","root","","vaccine1");
                                    
                                    $query = "SELECT * FROM gen_pops WHERE dose_type1 = 'Not vaccinated'";
                                    $query_run = mysqli_query($con, $query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h5>'.$row.'</h5>';
                                    ?>   
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('to_vaccinate_view')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div> -->
                        </div>
                        </div>
                        </div>
                    </div>
                </main>