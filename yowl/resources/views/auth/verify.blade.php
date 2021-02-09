@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifie ton adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification à été envoyé sur votre boite mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de poursuivre, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                    {{ __('Si vous n'avez pas reçu le mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander une autre') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
