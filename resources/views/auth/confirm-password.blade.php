@extends('layouts.landing')

@section('title', 'Confirm Password | ' . config('app.name'))
@section('page', 'confirm-password')

@section('content')
  <main>
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
      <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h j k" />

      <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
        <span class="rc h r s zd/2 od zg gh"></span>
        <span class="rc h r q zd/2 od xg mh"></span>

        <p class="sj hk xj rj ob">
          This is a secure area of the application. Please confirm your password before continuing.
        </p>

        <form class="sb mt-6" method="POST" action="{{ route('password.confirm') }}">
          @csrf

          <div class="wb">
            <label class="rc kk wm vb" for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="**************"
              required
              autocomplete="current-password"
              class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
            />
            @error('password')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
            Confirm
          </button>
        </form>
      </div>
    </section>
  </main>
@endsection
