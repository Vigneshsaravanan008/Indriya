@section('meta-title')
    <title>Indriya | Event - Campains</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Events</h1>
                        <div class="float-left">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Events & Campains</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right mb-3">
                            <button class="btn btn-primary" wire:click.prevent="calljs" data-toggle="modal"
                                data-target="#modal-lg"><i class="fas fa-plus"></i></button>

                            <button class="btn btn-primary" wire:click.prevent="calljs" data-toggle="modal"
                                data-target="#modal-lg"><i class="fas fa-calendar"></i></button>
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
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Event / Campaign</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($events as $key => $event)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ Carbon\Carbon::parse($event->date)->format('d M-Y') }}</td>
                                                <td>{{ $event->post_type == 1 ? 'Event' : 'Campaign' }}</td>
                                                <td>
                                                    <button class="btn btn-primary" wire:click.prevent="calljs"
                                                        wire:click="editEvent({{ $event->id }})"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-danger delete"
                                                        data-value="{{ $event->id }}"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No Events/Campains</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $events->links() }}</li>
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
                <form  wire:submit="addEvent" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title" id="title" placeholder="Enter Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event/Campain Type</label>
                                    <select class="form-control event_type select2 @error('type') is-invalid @enderror"
                                        wire:model="type">
                                        <option value="">Select Type</option>
                                        <option value="1">Event</option>
                                        <option value="2">Campaign</option>
                                    </select>
                                    @error('type')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Slug">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                        wire:model="slug" id="slug" placeholder="Enter Slug">
                                    @error('slug')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                wire:model="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Author Name">Author Name</label>
                                    <input type="text" class="form-control @error('author') is-invalid @enderror"
                                        wire:model="author" id="author" placeholder="Enter Author">
                                    @error('author')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Author Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('author_image') is-invalid @enderror"
                                                wire:model="author_image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('author_image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Short Description">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" rows="3"
                                        wire:model="short_description" placeholder="Enter Short Description"></textarea>
                                    @error('short_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" wire:ignore>
                                    <label for="Description">Description</label>
                                    <textarea class="form-control summernote @error('description') is-invalid @enderror" rows="3" wire:model="description"
                                        placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Location">Location</label>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror"
                                        wire:model="location" id="location" placeholder="Enter Location">
                                    @error('location')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Event Date</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        wire:model="date" id="date" placeholder="Enter Date">
                                    @error('date')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Start Time">Start Time</label>
                                    <input type="time"
                                        class="form-control @error('start_time') is-invalid @enderror"
                                        wire:model="start_time" id="start_time" placeholder="Enter Start Time">
                                    @error('start_time')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="End Time">End Time</label>
                                    <input type="time" class="form-control @error('end_time') is-invalid @enderror"
                                        wire:model="end_time" id="end_time" placeholder="Enter End Time">
                                    @error('end_time')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Meta Title">Meta Title</label>
                                    <input type="text"
                                        class="form-control @error('meta_title') is-invalid @enderror"
                                        wire:model="meta_title" id="meta_title" placeholder="Enter Meta Title">
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
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="3"
                                        wire:model="meta_description" placeholder="Enter Meta Description"></textarea>
                                    @error('meta_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="addEvent" class="btn btn-primary">Submit</button>
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
                <form wire:submit="updateEvent" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" wire:model="id" />
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title" id="title" placeholder="Enter Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event/Campain Type</label>
                                    <select
                                        class="form-control event_type select2 @error('type') is-invalid @enderror"
                                        wire:model="type">
                                        <option value="">Select Type</option>
                                        <option value="1">Event</option>
                                        <option value="2">Campaign</option>
                                    </select>
                                    @error('type')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Slug">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                        wire:model="slug" id="slug" placeholder="Enter Slug">
                                    @error('slug')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image
                                        @if ($image_url != null)
                                            <a href="{{ $image_url }}" target="_blank">View</a>
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                wire:model="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Author Name">Author Name</label>
                                    <input type="text" class="form-control @error('author') is-invalid @enderror"
                                        wire:model="author" id="author" placeholder="Enter author">
                                    @error('author')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Author Image
                                        @if ($author_image_url != null)
                                            <a href="{{ $author_image_url }}" target="_blank">View</a>
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('author_image') is-invalid @enderror"
                                                wire:model="author_image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('author_image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Short Description">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" rows="3"
                                        wire:model="short_description" placeholder="Enter Short Description"></textarea>
                                    @error('short_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" wire:ignore>
                                    <label for="Description">Description</label>
                                    <textarea class="form-control summernote_text summernote @error('description_content') is-invalid @enderror" rows="3" wire:model="description_content"
                                        placeholder="Enter Description"></textarea>
                                    @error('description_content')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Location">Location</label>
                                    <input type="text"
                                        class="form-control @error('location') is-invalid @enderror"
                                        wire:model="location" id="location" placeholder="Enter Location">
                                    @error('location')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Event Date</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        wire:model="date" id="date" placeholder="Enter Date">
                                    @error('date')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Start Time">Start Time</label>
                                    <input type="time"
                                        class="form-control @error('start_time') is-invalid @enderror"
                                        wire:model="start_time" id="start_time" placeholder="Enter Start Time">
                                    @error('start_time')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="End Time">End Time</label>
                                    <input type="time"
                                        class="form-control @error('end_time') is-invalid @enderror"
                                        wire:model="end_time" id="end_time" placeholder="Enter End Time">
                                    @error('end_time')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Meta Title">Meta Title</label>
                                    <input type="text"
                                        class="form-control @error('meta_title') is-invalid @enderror"
                                        wire:model="meta_title" id="meta_title" placeholder="Enter Meta Title">
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
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="3"
                                        wire:model="meta_description" placeholder="Enter Meta Description"></textarea>
                                    @error('meta_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="updateEvent" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
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

        Livewire.on('delete', function(data) {
            if (data.parameter == "200") {
                Swal.fire({
                    title: "Deleted!",
                    text: "Event/Campaign has been deleted.",
                    icon: "success"
                });
            } else {
                toastr.error(data.message);
            }
        });
        Livewire.on('message', function(data) {
            if (data.parameter == 200) {
                $("#edit_modal_form").modal('show');
                $(".summernote_text").summernote("code",data.description);
                setTimeout(() => {
                    $(".select2").select2();
                }, 1000);
            } else {
                toastr.error(data.message);
            }
        });

        $(".event_type").on('click change', function(e) {
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
                    @this.deleteEvent(value);
                }
            });
        })

        $('.summernote').summernote({
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.setContent(contents);
                }
            }
        });
    </script>
@endpush
