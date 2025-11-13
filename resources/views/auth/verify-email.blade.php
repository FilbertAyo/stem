@extends('layouts.landing')

@section('title', 'Verify Email | ' . config('app.name'))
@section('page', 'verify-email')

@section('content')
  <main>
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
      <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h j k" />

      <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
        <span class="rc h r s zd/2 od zg gh"></span>
        <span class="rc h r q zd/2 od xg mh"></span>

        <p class="sj hk xj rj ob">
          Thanks for signing up! Before getting started, please verify your email address by clicking the link we just sent you. If you didn't receive the email, we will gladly send you another.
        </p>

        @if (session('status') == 'verification-link-sent')
          <p class="mt-4 text-sm font-medium text-green-600">
            A new verification link has been sent to the email address you provided during registration.
          </p>
        @endif

        <div class="tc uf wf ag jq wb mt-8">
          <form class="sb" method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
              Resend Verification Email
            </button>
          </form>

          <form class="sb mt-4" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="mk text-sm underline">
              Log Out
            </button>
          </form>
        </div>
      </div>
    </section>
  </main>
@endsection
