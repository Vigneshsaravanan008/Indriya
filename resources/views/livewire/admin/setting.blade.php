@section("meta-title")
<title>Indriya | Setting</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                        <div class="float-left">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Settings</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">General Settings</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            {{-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit="updateSetting">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" id="name"
                                            placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text"
                                            class="form-control @error('email') is-invalid @enderror"
                                            wire:model="email" id="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            wire:model="phone_number" id="phone_number"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Logo Image</label>
                                        @if($logo_path!=null)
                                            <a href="{{asset(@$logo_path)}}" class="ml-2" target="_blank"><i class="fas fa-eye"></i></a>
                                        @endif

                                        <div class="custom-file">
                                            <input type="file" wire:model="logo" class="custom-file-input @error('logo') is-invalid @enderror"
                                                id="logo">
                                            <label class="custom-file-label"
                                                for="logo">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" wire:ignore>
                                        <label>Address</label>
                                        <textarea wire:model="address" class="form-control @error('address') is-invalid @enderror">{!!$address!!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Common Image</label>
                                        @if($common_image_path!=null)
                                            <a href="{{asset(@$common_image_path)}}" class="ml-2" target="_blank"><i class="fas fa-eye"></i></a>
                                        @endif

                                        <div class="custom-file">
                                            <input type="file" wire:model="common_image" class="custom-file-input @error('common_image') is-invalid @enderror"
                                                id="common_image">
                                            <label class="custom-file-label"
                                                for="common_image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Favion Image</label>
                                        @if($favicon_path!=null)
                                            <a href="{{asset(@$favicon_path)}}" class="ml-2" target="_blank"><i class="fas fa-eye"></i></a>
                                        @endif

                                        <div class="custom-file">
                                            <input type="file" wire:model="favicon" class="custom-file-input @error('favicon') is-invalid @enderror"
                                                id="favicon">
                                            <label class="custom-file-label"
                                                for="favicon">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer float-right">
                                <button type="button" wire:click="updateSetting" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">SEO Settings</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit="updateSeo">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text"
                                            class="form-control @error('meta_title') is-invalid @enderror"
                                            wire:model="meta_title" id="meta_title"
                                            placeholder="Enter Meta Title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Meta Keyword</label>
                                        <input type="text"
                                            class="form-control @error('meta_keyword') is-invalid @enderror"
                                            wire:model="meta_keyword" id="meta_keyword"
                                            placeholder="Enter Meta Keyword">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Meta Descriptions</label>
                                        <textarea wire:model="meta_description" class="form-control @error('meta_description') is-invalid @enderror">{!!$meta_description!!}</textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>OG Image</label>
                                        @if($og_image_path!=null)
                                            <a href="{{asset(@$og_image_path)}}" class="ml-2" target="_blank"><i class="fas fa-eye"></i></a>
                                        @endif

                                        <div class="custom-file">
                                            <input type="file" wire:model="og_image" class="custom-file-input @error('og_image') is-invalid @enderror"
                                                id="og_image">
                                            <label class="custom-file-label"
                                                for="og_image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Google TagManager</label>
                                        <textarea wire:model="google_tagmanager" class="form-control @error('google_tagmanager') is-invalid @enderror">{!!$google_tagmanager!!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Google Analytics</label>
                                        <textarea wire:model="google_analytics" class="form-control @error('google_analytics') is-invalid @enderror">{!!$google_analytics!!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer float-right">
                                <button type="button" wire:click="updateSeo" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Social Links</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit="updateSocial">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text"
                                            class="form-control @error('facebook_url') is-invalid @enderror"
                                            wire:model="facebook_url" id="facebook_url"
                                            placeholder="Enter Facebook Url">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text"
                                            class="form-control @error('instagram_url') is-invalid @enderror"
                                            wire:model="instagram_url" id="instagram_url"
                                            placeholder="Enter Instagram Url">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text"
                                            class="form-control @error('twitter_url') is-invalid @enderror"
                                            wire:model="twitter_url" id="twitter_url"
                                            placeholder="Enter Twitter Url">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="modal-footer float-right">
                                <button type="button" wire:click="updateSocial" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
</script>
@endpush