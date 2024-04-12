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