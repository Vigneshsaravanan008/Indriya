@section("meta-title")
<title>Indriya | Subscriptions</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Subscriptions</h1>
                        <div class="float-left">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Subscriptions</li>
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
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($subscriptions as $key => $subscription)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $subscription->email }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="2" class="text-center">No Subscriptions</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $subscriptions->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
