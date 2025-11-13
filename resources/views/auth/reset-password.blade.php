@extends('layouts.landing')

@section('title', 'Reset Password | ' . config('app.name'))
@section('page', 'reset-password')

@section('content')
  <main>
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
      <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h j k" />

      <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
        <span class="rc h r s zd/2 od zg gh"></span>
        <span class="rc h r q zd/2 od xg mh"></span>

        <form class="sb" method="POST" action="{{ route('password.store') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <div class="wb">
            <label class="rc kk wm vb" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              value="{{ old('email', $request->email) }}"
              placeholder="you@example.org"
              required
              autofocus
              autocomplete="username"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            />
            @error('email')
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
            @error('password_confirmation')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
            Reset Password
          </button>
        </form>
      </div>
    </section>
  </main>
@endsection
