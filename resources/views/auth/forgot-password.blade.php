@extends('layouts.landing')

@section('title', 'Forgot Password | ' . config('app.name'))
@section('page', 'forgot-password')

@section('content')
  <main>
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
      <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h j k" />

      <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
        <span class="rc h r s zd/2 od zg gh"></span>
        <span class="rc h r q zd/2 od xg mh"></span>

        <div class="sj hk xj rj ob">
          Forgot your password? No problem. Enter your email address and we will send you a password reset link.
        </div>

        @if(session('status'))
          <p class="mt-4 text-sm text-green-600">
            {{ session('status') }}
          </p>
        @endif

        <form class="sb mt-6" method="POST" action="{{ route('password.email') }}">
          @csrf

          <div class="wb">
            <label class="rc kk wm vb" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              value="{{ old('email') }}"
              placeholder="you@example.org"
              required
              autofocus
              autocomplete="email"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            />
            @error('email')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
            Email Password Reset Link
          </button>
        </form>
      </div>
    </section>
  </main>
@endsection
