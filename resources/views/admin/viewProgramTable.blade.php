<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Vaccination Programmes</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">All Vaccination Programmes</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Vaccination Programmes
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple"  CELLPADDING="20" CELLSPACING="2" WIDTH="300">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Programme Name</th>
                                            <th class="text-center">Venue</th>
                                            <th class="text-center" colspan="2">Date</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                    @foreach($report as $reports)
                                        <tr>
                                            <td>{{$reports->program_name}}</td>
                                            <td>{{$reports->program_venue}}</td>
                                            <td>{{$reports->program_date}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>