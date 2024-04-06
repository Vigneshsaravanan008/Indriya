@section("meta-title")
<title>Indriya | {{@$product->name}} </title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{@$product->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset(@$image_path) }}"
                                        alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{ Auth::guard('admin')->user()->name }}</h3>

                                <p class="text-muted text-center">Admin</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Email</b> <span
                                            class="float-right">{{ Auth::guard('admin')->user()->email }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone Number</b> <span
                                            class="float-right">{{ Auth::guard('admin')->user()->phone_number }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Current Ipaddress</b> <span class="float-right">{{ $ipaddress }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Theme</b> <span class="float-right">
                                            @if(Auth::guard('admin')->user()->is_dark_mode)
                                                <i class="fas fa-moon fa-flip-vertical toogle_checkbox" data-id="1" style="color: #ffffff;"></i>
                                            @else
                                                <i class="fas fa-sun toogle_checkbox" data-id="0" style="color: #696108;"></i>
                                            @endif
                                        </span>
                                    </li>
                                </ul>

                                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#profile"
                                            data-toggle="tab">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                            data-toggle="tab">Settings</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="profile">
                                        <form class="form-horizontal" wire:submit="updateProfile">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" wire:model="name" class="form-control"
                                                        id="inputName" placeholder="Name">
                                                        @error('name')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" wire:model="email" class="form-control"
                                                        id="inputEmail" placeholder="Email">
                                                        @error('email')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone
                                                    Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" wire:model="phone_number" class="form-control"
                                                        id="inputName2" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience"
                                                    class="col-sm-2 col-form-label">Image
                                                @if ($image_path != null)
                                                    <a href="{{ asset(@$image_path) }}" class="ml-2"
                                                        target="_blank"><i class="fas fa-eye"></i></a>
                                                @endif
                                            </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" wire:model="image" class="custom-file-input"
                                                                id="exampleInputFile">
                                                            <label class="custom-file-label"
                                                                for="exampleInputFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="button" wire:click="updateProfile" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal" wire:submit="updatePassword">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">New
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                                                        placeholder="Password">
                                                        @error('password')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputConfirmpassword"  class="col-sm-2 col-form-label">Old
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" wire:model="confirm_password" id="inputConfirmpassword"
                                                        placeholder="confirm password">
                                                        @error('confirm_password')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@push("script")
<script>
    Livewire.on('dismiss', function(data) {
        (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
        setTimeout(() => {
            location.reload();
        }, 1500);
    });

    $(document).ready(function(){
        $(".toogle_checkbox").on('click',function(){
            if($(this).data("id")==1)
            {
                $("body").addClass("remove-mode");
            }else{
                $("body").addClass("dark-mode");
            }
            @this.setToggle();
        })
    })
</script>
@endpush