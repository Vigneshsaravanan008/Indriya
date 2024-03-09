<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form>
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email"
                    value="{{ old('email') }}" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    wire:model="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary btn-block" wire:click="loginForm">Sign In</button>
                </div>
            </div>
        </form>

        {{-- <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div> --}}

        {{-- <p class="mb-1">
            <a href="{{ route('auth.forget-password') }}">I forgot my password</a>
        </p>

        <p class="mb-0">
            <a href="{{ route('auth.register') }}" class="text-center">Register a new membership</a>
        </p> --}}
    </div>
</div>
@push('script')
    <script>
        Livewire.on('checkPassword', function(data) {
            toastr.error(data.message);
        });
    </script>
@endpush
