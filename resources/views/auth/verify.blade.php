@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-180">
                <div class="card-header">{{ __('Подтвердите вашу почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Вам было отправлено письмо на почту!') }}
                        </div>
                    @endif

                    {{ __('Пожалуйста подтвердите вашу почту, чтобы в будущем вы не имели проблем с доступом в нашу аптеку') }}
                    {{ __('Если вы не получили письмо') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('запросите новое') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
