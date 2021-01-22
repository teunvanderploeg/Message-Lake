@extends('layouts.main')

@section('content')
<div class="w-64 flex shadow-lg mt-32 flex-col bg-cover bg-center justify-content bg-gray-900 p-6 rounded pt-8 pb-8 m-auto">
    <div class="">
        <div class="">
            <div class="">
                <div class="">{{ __('Verify Your Email Address') }}</div>

                <div class="">
                    @if (session('resent'))
                        <div class="" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
