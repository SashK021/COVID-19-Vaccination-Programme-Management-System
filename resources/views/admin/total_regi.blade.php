<!DOCTYPE html>
<html lang="en">
    <head>
    @include('admin.css')
    </head>
    
    
    <body class="sb-nav-fixed">
    <!--navbar -->    
    @include('admin.navbar2')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('home_view')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Vaccination
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('add_genpop2_view')}}">Registration</a>
                                    <!-- <a class="nav-link" href="{{url('dose_view')}}">Add/Update Dose</a> -->
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            <div class="sb-nav-link-icon"><i class="fas fa-square"></i></div>
                                Programmes
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{url('add_program_view')}}">Add Programme</a>
                                            <a class="nav-link" href="{{url('add_viewprogram_view')}}">Manage Programme</a>
                                        </nav>
                                    </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <!--sidebar-->
                            @include('admin.sidebar2')
                             </div>
            
            
                <div id="layoutSidenav_content">
                <h1 class="mt-4" style = "margin-left:20px;" >Print Reports</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item" style = "margin-left:20px;">Home</li>
                            <li class="breadcrumb-item">Reports</li>
                            <li class="breadcrumb-item active">Print Reports</li>
                        </ol>
                        <hr style = "margin:20px; margin-top:1px;">
                </br></br>
                <a class="btn btn-success" href = "{{url('total_regi_pdf_view')}}"><i class="fa fa-print"></i> Print All Registered Users Report</a>
</br></br>
                <a class="btn btn-success" href = "{{url('vaccine_pdf_view')}}"><i class="fa fa-print"></i> Print Total Vaccination Report</a>
                </br></br>
                <a class="btn btn-success" href = "{{url('moderna_pdf_view')}}"><i class="fa fa-print"></i> Print Moderna Vaccination Report</a>
                </br></br>
                <a class="btn btn-success" href = "{{url('sinopharm_pdf_view')}}"><i class="fa fa-print"></i> Print Sinopharm Vaccination Report</a>
                </br></br>
                <a class="btn btn-success" href = "{{url('phizer_pdf_view')}}"><i class="fa fa-print"></i> Print Phizer Vaccination Report</a>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; C19-VIMS 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('admin.script')
    </body>
</html>