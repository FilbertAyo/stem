@extends('layouts.landing')

@section('title', 'Sign Up | ' . config('app.name'))
@section('page', 'signup')

@section('content')
  <main>
    <!-- ===== SignUp Form Start ===== -->
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
      <!-- Bg Shapes -->
      <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h j k" />

      <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
        <!-- Bg Border -->
        <span class="rc h r s zd/2 od zg gh"></span>
        <span class="rc h r q zd/2 od xg mh"></span>


        <form class="sb" method="POST" action="{{ route('register') }}" id="register-form">
          @csrf
          <div class="wb">
            <label class="rc kk wm vb" for="name">Full name</label>
            <input
              type="text"
              name="name"
              id="name"
              value="{{ old('name') }}"
              placeholder="Full name"
              required
              autocomplete="name"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            />
            @error('name')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="wb">
            <label class="rc kk wm vb" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              value="{{ old('email') }}"
              placeholder="you@example.org"
              required
              autocomplete="email"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            />
            @error('email')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="wb">
            <label class="rc kk wm vb" for="role">Login as</label>
            <select
              name="role"
              id="role"
              required
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            >
              <option value="" disabled {{ old('role') ? '' : 'selected' }}>Select Identity</option>
              @foreach ($roles as $role)
                <option value="{{ $role }}" {{ old('role') === $role ? 'selected' : '' }}>
                  {{ ucfirst($role) }}
                </option>
              @endforeach
            </select>
            @error('role')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="wb">
            <label class="rc kk wm vb" for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="**************"
              required
              autocomplete="new-password"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            />
            @error('password')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="wb">
            <label class="rc kk wm vb" for="password_confirmation">Confirm Password</label>
            <input
              type="password"
              name="password_confirmation"
              id="password_confirmation"
              placeholder="**************"
              required
              autocomplete="new-password"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            />
          </div>

          <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
            Sign Up
          </button>

          <div
            id="register-loading-indicator"
            class="mt-6"
            style="display: none; align-items: center; justify-content: center; gap: 0.75rem;"
            role="status"
            aria-live="polite"
          >
            <span class="register-spinner" aria-hidden="true"></span>
            <span class="sr-only">Creating your account...</span>
          </div>

          <p class="sj hk xj rj ob">
            Already have an account?
            <a class="mk" href="{{ route('login') }}"> Sign In </a>
          </p>
        </form>
      </div>
    </section>
    <!-- ===== SignUp Form End ===== -->
  </main>
@endsection

@push('head')
  <style>
    @keyframes register-spin {
      to {
        transform: rotate(360deg);
      }
    }
    .register-spinner {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 9999px;
      border: 3px solid rgba(0, 119, 182, 0.25);
      border-top-color: #0077b6;
      animation: register-spin 0.75s linear infinite;
      display: inline-block;
    }
    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0;
    }
  </style>
@endpush

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var registerForm = document.getElementById('register-form');
      var loadingIndicator = document.getElementById('register-loading-indicator');
      if (!registerForm || !loadingIndicator) {
        return;
      }
      registerForm.addEventListener('submit', function () {
        loadingIndicator.style.display = 'flex';
        var submitButton = registerForm.querySelector('button[type="submit"]');
        if (submitButton) {
          submitButton.disabled = true;
          submitButton.dataset.originalText = submitButton.textContent;
          submitButton.textContent = 'Processing...';
        }
      });
    });
  </script>
@endpush
