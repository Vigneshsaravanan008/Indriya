@section('meta-title')
    <title>Indriya | {{ @$product->name }} </title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product/ {{ @$product->name }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link {{ $page == 1 ? 'active' : '' }}"
                                            wire:click="setPage(1)" href="" data-toggle="tab">Product Details</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link {{ $page == 2 ? 'active' : '' }}"
                                            wire:click="setPage(2)" href="" data-toggle="tab">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link {{ $page == 3 ? 'active' : '' }}"
                                            wire:click="setPage(3)" href="" data-toggle="tab">Additional
                                            Information</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    @if ($this->page == 1)
                                        <div class="active tab-pane" id="profile">
                                            <ul class="list-group list-group-unbordered mb-3">
                                                <div>
                                                    <label for="inputName" class="col-sm-2 col-form-label">Image</label>
                                                    <img class="py-3" src="{{ asset(@$product->image) }}"
                                                        width="200px" height="200px" alt="User profile picture">
                                                    <a href="{{ url(@$product->image) }}" target="_blank"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="fas fa-external-link-alt">View</i></a>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputName"
                                                        class="col-sm-2 col-form-label">Product</label>
                                                    <div class="col-sm-10">
                                                        <span class="list-group-item">{{ $product->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Product
                                                        Category</label>
                                                    <div class="col-sm-10">
                                                        <span
                                                            class="list-group-item">{{ $product->productcategory->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Product
                                                        Slug</label>
                                                    <div class="col-sm-10">
                                                        <span class="list-group-item">{{ $product->slug }}</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Product
                                                        Total Stocks</label>
                                                    <div class="col-sm-10">
                                                        <span
                                                            class="list-group-item">{{ $product->total_stocks }}</span>
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    @elseif($this->page == 2)
                                        <div class="active tab-pane" id="settings">
                                            <form class="form-horizontal" wire:submit="uploadGallery">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="Photo" class="col-sm-2 col-form-label">Gallery Image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" wire:model="photo"
                                                            class="form-control @error('photo') is-invalid @enderror"
                                                            id="photo">
                                                        @error('photo')
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
                                                                            <th>Gallery</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @forelse($gallery as $key => $gallery_image)
                                                                            <tr>
                                                                                <td>{{ $key + 1 }}</td>
                                                                                <td>
                                                                                    <img src="{{asset($gallery_image->document_path)}}" width="100px" height="100px"/>
                                                                                    <span>{{$gallery_image->document_image}}</span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-warning"
                                                                                        href="{{url($gallery_image->document_path)}}" target="_blank"><i
                                                                                            class="far fa-eye"></i></a>
                                                                                    <button class="btn btn-danger delete"
                                                                                        data-value="{{ $gallery_image->id }}"><i
                                                                                            class="fas fa-trash-alt"></i></button>
                                                                                </td>
                                                                            </tr>
                                                                        @empty
                                                                            <tr>
                                                                                <td colspan="3" class="text-center">No Galleries</td>
                                                                            </tr>
                                                                        @endforelse
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @else
                                        <div class="active tab-pane" id="settings">
                                            <form class="form-horizontal" wire:submit="updatePassword">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <input type="password" wire:model="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            id="inputPassword" placeholder="Password">
                                                        @error('password')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputConfirmpassword"
                                                        class="col-sm-2 col-form-label">Old
                                                        Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password"
                                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                                            wire:model="confirm_password" id="inputConfirmpassword"
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
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('dismiss', function(data) {
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
                location.reload();
            }, 1500);
        });
    </script>
    <script>
        $(".delete").on('click', function(e) {
            var value = $(this).data('value');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.deleteGallery(value);
                }
            });
        })
    </script>
@endpush
