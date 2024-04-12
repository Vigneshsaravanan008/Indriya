@section("meta-title")
<title>Indriya | Gallery</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Gallery</h1>
                        <div class="float-left">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Gallery</li>
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
                                <form wire:submit="uploadGallery">
                                @csrf
                                    <div class="row p-2">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="file"
                                                    class="custom-file-input  @error('image') is-invalid @enderror"
                                                    wire:model="image" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    Logo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <select
                                                    class="form-control page_type select2 @error('type') is-invalid @enderror"
                                                    wire:model="type">
                                                    <option value="">Select Page</option>
                                                    <option value="1">Home Page</option>
                                                    <option value="2">Aboutus Page</option>
                                                    <option value="3">Campaign Page</option>
                                                    <option value="4">Event Page</option>
                                                    <option value="5">Contactus Page</option>
                                                    <option value="6">Blog Page</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Page</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($gallery as $key => $image)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <img src="{{asset($image->document_path)}}" width="200px" height="100px"/></td>
                                            <td>{{$image->document_name}}</td>
                                            <td>{{($image->page==1?"Home Page":($image->page==2?"Aboutus Page":($image->page==3?"Campaign Page":($image->page==4?"Event Page":($image->page==5?"Contactus Page":"Blog Page")))))}}</td>
                                            <td>
                                                <label class="switch_box">
                                                    <input type="checkbox" class="checkbox" data-id="{{$image->id}}" {{($image->status==1)?"checked":""}}>
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="{{url($image->document_path)}}" target="_blank" class="btn btn-warning"><i
                                                        class="far fa-eye"></i></a>
                                                <button class="btn btn-danger delete"
                                                        data-value="{{ $image->id }}"><i
                                                            class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No Galleries</td>
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
    </div>
</div>
@push('script')
<script>
    Livewire.on('calljs', function(data) {
        setTimeout(() => {
            $(".select2").select2();
            $('.summernote').summernote('focus');
        }, 1000);
    });

    Livewire.on('dismissmodal', function(data) {
        (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
    });

    Livewire.on('delete', function(data) {
        if (data.parameter == "200") {
            Swal.fire({
                title: "Deleted!",
                text: "ProductCategory has been deleted.",
                icon: "success"
            });
        } else {
            toastr.error(data.message);
        }
    });

    $(".page_type").on('click change', function(e) {
        @this.setType(e.target.value);
        setTimeout(() => {
            $(".select2").select2();
        }, 1000);
    })

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

    $(document).ready(function(){
        $(".checkbox").on('click',function(){
            var value=$(this).data('id');
            @this.statusGallery(value);
        })
    });
</script>
@endpush