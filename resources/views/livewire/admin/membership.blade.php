@section("meta-title")
<title>Indriya | Membership</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Membership</h1>
                        <div class="float-left">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Membership</li>
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
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Gender</th>
                                            <th>Organization</th>
                                            <th>Location</th>
                                            <th>Categories</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($memberships as $key => $membership)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{$membership->first_name}}</td>
                                                <td>{{$membership->last_name}}</td>
                                                <td>{{ $membership->email }}</td>
                                                <td>{{ $membership->phone_number }}</td>
                                                <td>{{ ($membership->gender==1)?"Male":"Female" }}</td>
                                                <td>{{ $membership->organization_name }}</td>
                                                <td>{{ $membership->location }}</td>
                                                <td>{{ $membership->categories }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No Memberships</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $memberships->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
