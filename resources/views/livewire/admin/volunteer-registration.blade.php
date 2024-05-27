@section("meta-title")
<title>Indriya | Volunteer Registrations</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Volunteer Registration</h1>
                        <div class="float-left">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Volunteer Registration</li>
                        </ol> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Volunteer Yes/No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($volunteer_registrations as $key => $volunteer_registration)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{$volunteer_registration->name}}</td>
                                                <td>{{ $volunteer_registration->email }}</td>
                                                <td>{{ $volunteer_registration->phone_number }}</td>
                                                <td>{{ $volunteer_registration->volunteer_before }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Volunteer Registrations</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $volunteer_registrations->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
