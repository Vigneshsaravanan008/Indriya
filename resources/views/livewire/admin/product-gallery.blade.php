@section("meta-title")
<title>Indriya | ProductGallery</title>
@endsection
@section("stylesheets")
<style>
    body {
        background: #EEE;
        font-family: 'Roboto', sans-serif;
    }

    .dropzone {
        width: 98%;
        margin: 1%;
        border: 2px dashed #3498db !important;
        border-radius: 5px;
        transition: .2s;
    }

    .dropzone.dz-drag-hover {
        border: 2px solid #3498db !important;
    }

    .dz-message.needsclick img {
        width: 50px;
        display: block;
        margin: auto;
        opacity: .6;
        margin-bottom: 15px;
    }

    span.plus {
        display: none;
    }

    .dropzone.dz-started .dz-message {
        display: inline-block !important;
        width: 120px;
        float: right;
        border: 1px solid rgba(238, 238, 238, 0.36);
        border-radius: 30px;
        height: 120px;
        margin: 16px;
        transition: .2s;
    }

        /* span.text {
            display: none;
        } */

    span.plus {
        display: block;
        font-size: 70px;
        color: #AAA;
        line-height: 110px;
    }
</style>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Product</h1>
                        <div class="float-left">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">ProductGallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                {{-- <div id="dropzone">`
                    <form action="#" class="dropzone needsclick" id="demo-upload">
                        <div class="dz-message needsclick">
                            <span class="text">
                                <img src="http://www.freeiconspng.com/uploads/------------------------------iconpngm--22.png"
                                    alt="Camera" />
                                Drop files here or click to upload.
                            </span>
                            <span class="plus">+</span>
                        </div>
                    </form>
                </div> --}}
                    {{-- <div id="dropzone">
                        <form action="#" method="POST" enctype="multipart/form-data" x-on:change="$wire.uploadGallery()" class="dropzone needsclick" id="demo-upload">
                            <div class="dz-message needsclick">
                                <span class="text">
                                    <img src="{{asset("admin-assets/dist/img/camera.png")}}"
                                        alt="Camera" />
                                    Drop files here or click to upload.
                                </span>
                                <span class="plus">+</span>
                            </div>
                        </form>
                    </div> --}}
                    <form wire:submit="submit"> 
                        <livewire:dropzone
                            wire:model="photos"
                            :rules="['image','mimes:png,jpeg','max:10420']"
                            :multiple="true" />
                        <button type="submit">Submit</button>
                    </form> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($galleries as $key => $gallery)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{asset($gallery->document_path)}}</td>
                                            <td>{{$gallery->document_image}}</td>

                                            <td>
                                                <a href="{{url($gallery->document_path)}}" class="btn btn-warning"><i
                                                        class="far fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No Galleries</td>
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
            setTimeout(() => {
                location.reload();
            }, 1500);
        });
</script>
@endpush