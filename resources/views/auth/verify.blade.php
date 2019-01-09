@extends('layouts.page')

@section('content')
<div class="container align-middle" style="height:400px; padding-top:5%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark" style="color:white;">
                <div class="card-header" style="border-bottom: 1px solid rgba(255,255,255,.125);">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection