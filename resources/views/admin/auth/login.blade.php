<x-admin-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="auth-header">
        <a href="#"><img src="{{ asset('images/logo/logo-dark.png') }}" alt="img" style="height: 50px;"></a>
    </div>
    <div class="card my-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="mb-0"><b>Login</b></h3>
            </div>

            <form method="POST" action="{{ route('admin.login.store') }}">
                @csrf
                <input type="hidden" name="admin_login" value="1">
                <div class="form-group mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="d-flex mt-1 justify-content-between">
                    <div class="form-check">
                        <input
                            class="form-check-input input-primary"
                            type="checkbox"
                            id="customCheckc1"
                            name="remember"
                            value="1"
                            {{ old('remember', true) ? 'checked' : '' }}
                        >
                        <label class="form-check-label text-muted" for="customCheckc1">Keep me sign in</label>
                    </div>
                    <h5 class="text-secondary f-w-400">
                        <a href="{{ route('password.request') }}" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </h5>
                </div>
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </form>


        </div>
    </div>

</x-admin-guest-layout>

