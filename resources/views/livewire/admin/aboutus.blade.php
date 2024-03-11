@section("meta-title")
<title>Indriya | AboutUs</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>About Us</h1>
                        <div class="float-left">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <form class="form-horizontal" wire:submit="updateAboutus">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror"
                                                id="inputTitle" placeholder="Title">
                                                @error('title')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputShortDescription" class="col-sm-2 col-form-label">Short Description</label>
                                        <div class="col-sm-10">
                                            <textarea wire:model="short_description" class="form-control @error('short_description') is-invalid @enderror" placeholder="Short Description">{!!@$short_description!!}</textarea>
                                            @error('short_description')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputShortDescription" class="col-sm-2 col-form-label">Objectives</label>
                                        <div class="col-sm-10" wire:ignore>
                                            <textarea wire:model="objective" id="summernote" class="form-control @error('objective') is-invalid @enderror" placeholder="Objectives">{!!@$objective!!}</textarea>
                                            @error('objective')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputShortDescription" class="col-sm-2 col-form-label">Vission</label>
                                        <div class="col-sm-10">
                                            <textarea wire:model="vission" class="form-control @error('vission') is-invalid @enderror" placeholder="Vission">{!!@$vission!!}</textarea>
                                            @error('vission')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputShortDescription" class="col-sm-2 col-form-label">Mission</label>
                                        <div class="col-sm-10">
                                            <textarea wire:model="mission" class="form-control @error('mission') is-invalid @enderror" placeholder="Mission">{!!@$mission!!}</textarea>
                                            @error('mission')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Image
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
                                    <div class="modal-footer float-right">
                                        <button type="button" wire:click="updateAboutus" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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
    $('#summernote').summernote({
        callbacks: {
            onChange: function(contents, $editable) {
                @this.setObjective(contents);
            }
        }   
    });
</script>
@endpush
