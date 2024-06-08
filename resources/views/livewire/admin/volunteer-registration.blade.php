@section('meta-title')
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
                            <div class="card-header">
                                <div class="row mt-2 p-0 m-0">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" wire:model.live="volunteer_name" class="form-control"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="email" class="form-control" wire:model.live="volunteer_email"
                                                placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="email" class="form-control" wire:model.live="volunteer_number" id="volunteer_number"
                                                placeholder="Enter PhoneNumber">
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-left">
                                        <button class="btn btn-primary" wire:click.prevent="export"><i class="fas fa-file-export">Export</i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>DOB</th>
                                            <th>Phone Number</th>
                                            <th>Blood Group</th>
                                            <th>Volunteer Yes/No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($volunteer_registrations as $key => $volunteer_registration)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $volunteer_registration->name }}</td>
                                                <td>{{ $volunteer_registration->email }}</td>
                                                <td>{{ Carbon\Carbon::parse($volunteer_registration->dob)->format('d-M-Y') }}
                                                </td>
                                                <td>{{ $volunteer_registration->phone_no }}</td>
                                                <td>{{ $volunteer_registration->blood_group }}</td>
                                                <td>{{ $volunteer_registration->volunteer_before }}</td>
                                                <td>
                                                    <a wire:click="view({{ $volunteer_registration->id }})" data-toggle="modal" data-target="#view_modal" class="btn btn-sm btn-primary">View</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No Volunteer Registrations</td>
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
    <div wire:ignore.self class="modal fade" id="view_modal" class="edit_model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Volunteer Registraions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>
                               {{$this->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>Calling Number</td>
                            <td>
                               {{$this->calling_number}}
                            </td>
                        </tr>
                        <tr>
                            <td>WhatsApp Number</td>
                            <td>
                                {{$this->whatsapp_number}}
                            </td>
                        </tr>
                        <tr>
                            <td>Emergency Contact Person Name</td>
                            <td>
                                {{$this->emergency_contact_person_name}}
                            </td>
                        </tr>
                        <tr>
                            <td>Emergency Phone Number</td>
                            <td>
                                {{$this->emergency_phone_no}}
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                {{$this->email}}
                            </td>
                        </tr>
                        <tr>
                            <td>Volunteer Before</td>
                            <td>
                                {{$this->volunteer_before}}
                            </td>
                        </tr> <tr>
                            <td>Volunteer Other Name</td>
                            <td>
                                {{$this->volunteer_other_name}}
                            </td>
                        </tr> <tr>
                            <td>DOB</td>
                            <td>
                                {{$this->dob}}
                            </td>
                        </tr> <tr>
                            <td>Blood Group</td>
                            <td>
                                {{$this->blood_group}}
                            </td>
                        </tr> <tr>
                            <td>City</td>
                            <td>
                                {{$this->city}}
                            </td>
                        </tr> <tr>
                            <td>Other City</td>
                            <td>
                                {{$this->other_city}}
                            </td>
                        </tr> <tr>
                            <td>Skills</td>
                            <td>
                                {{$this->skills}}
                            </td>
                        </tr> <tr>
                            <td>Available Week</td>
                            <td>
                                {{$this->available_week}}
                            </td>
                        </tr><tr>
                            <td>New Team Description</td>
                            <td>
                                {{$this->new_team_description}}
                            </td>
                        </tr><tr>
                            <td>Why Volunteer Description</td>
                            <td>
                                {{$this->why_volunteering_description}}
                            </td>
                        </tr><tr>
                            <td>Suggestion Description</td>
                            <td>
                                {{$this->suggestion_description}}
                            </td>
                        </tr><tr>
                            <td>Image</td>
                            <td>
                                <a href="{{$this->image_url}}" target="_blank">
                                    <img src="{{$this->image_url}}" width="150px" height="150px"/>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
