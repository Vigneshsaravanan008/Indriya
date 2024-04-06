@section("meta-title")
<title>Indriya | Product</title>
@endsection
@section("stylesheets")
<style>
    .switch_box {
        position: relative;
        display: inline-block;
        width: 45px;
        height: 25px;
    }

    .switch_box input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 0px;
        bottom: 5px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
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
                            <li class="breadcrumb-item active">Product</li>
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
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($products as $key => $product)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{$product->name}}</td>
                                                <td>
                                                    <label class="switch_box">
                                                        <input type="checkbox" class="checkbox" data-id="{{$product->id}}" {{($product->status==1)?"checked":""}}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary"
                                                        wire:click="editProduct({{ $product->id }})"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-danger delete"
                                                        data-value="{{ $product->id }}"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No Products</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $products->links() }}</li>
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
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="addProduct" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select class="form-control product_category_type select2 @error('product_category_id') is-invalid @enderror"
                                        wire:model="product_category_id">
                                        <option value="">Select Category</option>
                                        @foreach($product_categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_category_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="name" placeholder="Enter Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Slug">Slug</label>
                                    <input type="text"
                                        class="form-control @error('slug') is-invalid @enderror"
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
                                    <textarea class="form-control summernote @error('description_content') is-invalid @enderror" rows="3" wire:model="description_content"
                                        placeholder="Enter Description"></textarea>
                                    @error('description_content')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        wire:model="price" id="price" placeholder="Enter Price">
                                    @error('price')
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
                        <button type="button" wire:click="addProduct" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="edit_modal_form" class="edit_model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="updateProduct">
                    @csrf
                    <input type="hidden" wire:model="id" />
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select class="form-control product_category_type select2 @error('product_category_id') is-invalid @enderror"
                                        wire:model="product_category_id">
                                        <option value="">Select Category</option>
                                        @foreach($product_categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_category_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="name" placeholder="Enter Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Slug">Slug</label>
                                    <input type="text"
                                        class="form-control @error('slug') is-invalid @enderror"
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
                                    <textarea class="form-control summernote_text @error('description') is-invalid @enderror" rows="3" wire:model="description"
                                        placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        wire:model="price" id="price" placeholder="Enter Price">
                                    @error('price')
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
                        <button type="button" wire:click="updateProduct" class="btn btn-primary">Submit</button>
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
                    text: "Product has been deleted.",
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

        $(".product_category_type").on('click change', function(e) {
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
                    @this.deleteProduct(value);
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

        $(document).ready(function(){
            $(".checkbox").on('click',function(){
                var value=$(this).data('id');
                @this.statusProduct(value);
            })
        });
    </script>
@endpush