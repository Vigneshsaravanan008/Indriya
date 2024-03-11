@section("meta-title")
<title>Indriya | PageManagement</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Page Management</h1>
                        <div class="float-left">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Page Management</li>
                        </ol> 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right mb-3">
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-lg"><i class="fas fa-plus"></i></button>
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
                            {{-- <div class="card-header">
                                <div class="row p-2">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" wire:model.live="customerName" class="form-control"
                                                placeholder="Enter Customer Name">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="email" class="form-control" wire:model.live="customerEmail"
                                                placeholder="Enter Customer Email">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="email" class="form-control" wire:model.live="customerPhoneNo" id="customer_phone_no"
                                                placeholder="Enter Customer PhoneNumber">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Page</th>
                                            <th>Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($pagemanagements as $key => $pagemanagement)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{$pagemanagement->title}}</td>
                                                <td>{{ $pagemanagement->url }}</td>
                                                <td>
                                                    <button class="btn btn-primary"
                                                        wire:click="editPageManagement({{ $pagemanagement->id }})"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-danger delete"
                                                        data-value="{{ $pagemanagement->id }}"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No Pagemanagements</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $pagemanagements->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div wire:ignore.self class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $model_title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="addPageManagement" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title" id="title" placeholder="Enter Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Url">URL</label>
                                    <input type="text" class="form-control @error('url') is-invalid @enderror"
                                        wire:model="url" id="url" placeholder="Enter url">
                                    @error('url')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Title">Meta Title</label>
                                    <input type="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                                        wire:model="meta_title" id="exampleMetaTitle" placeholder="Enter Meta Title">
                                    @error('meta_title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Keyword">Meta Keyword</label>
                                    <textarea class="form-control @error('meta_keyword') is-invalid @enderror" rows="3" wire:model="meta_keyword"
                                    placeholder="Enter Meta Keyword"></textarea>
                                    @error('meta_keyword')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Description">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="3" wire:model="meta_description"
                                    placeholder="Enter Meta Description"></textarea>
                                    @error('meta_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">OG Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('og_image') is-invalid @enderror"
                                                wire:model="og_image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('og_image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="addPageManagement" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="edit_modal_form" class="edit_model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $model_title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="updatePageManagement" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" wire:model="id" />
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title" id="title" placeholder="Enter Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Url">URL</label>
                                    <input type="text" class="form-control @error('url') is-invalid @enderror"
                                        wire:model="url" id="url" placeholder="Enter url">
                                    @error('url')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Title">Meta Title</label>
                                    <input type="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                                        wire:model="meta_title" id="exampleMetaTitle" placeholder="Enter Meta Title">
                                    @error('meta_title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Keyword">Meta Keyword</label>
                                    <textarea class="form-control @error('meta_keyword') is-invalid @enderror" rows="3" wire:model="meta_keyword"
                                    placeholder="Enter Meta Keyword"></textarea>
                                    @error('meta_keyword')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Description">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="3" wire:model="meta_description"
                                    placeholder="Enter Meta Description"></textarea>
                                    @error('meta_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">OG Image
                                        @if ($image_url != null)
                                            <a href="{{ $image_url }}" target="_blank">View</a>
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('og_image') is-invalid @enderror"
                                                wire:model="og_image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('og_image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="updatePageManagement" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('dismissmodal', function(data) {
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
                location.reload();
            }, 1500);
        });

        Livewire.on('delete', function(data) {
            if (data.parameter == "200") {
                Swal.fire({
                    title: "Deleted!",
                    text: "Pagemanagement has been deleted.",
                    icon: "success"
                });
            } else {
                toastr.error(data.message);
            }
        });
        Livewire.on('message', function(data) {
            if (data.parameter == 200) {
                $("#edit_modal_form").modal('show');
            } else {
                toastr.error(data.message);
            }
        });

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
                    @this.deletePageManagement(value);
                }
            });
        })
    </script>
@endpush
