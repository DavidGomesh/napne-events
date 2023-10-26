@extends('layouts/layout')

@section('content')

<form id="form-listener" class="row py-3 needs-validation" novalidate>
    @include('registry/personal-data')

    <div class="col-12 mb-4">
        <label class="form-label fw-bold">Você possui alguma deficiência?</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="has-disability-check" id="has-disability" value="1" required>
            <label class="form-check-label" for="has-disability">Sim</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="has-disability-check" id="has-not-disability" value="0" required checked>
            <label class="form-check-label" for="has-not-disability">Não</label>
        </div>
    </div>

    <div class="col-12 mb-4 d-none" id="div-assistance">
        <label class="form-label fw-bold">Você precisará de algum apoio?</label>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="assistance" id="interprete" value="Intérprete de Libras">
            <label class="form-check-label" for="interprete">Intérprete de Libras</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="assistance" id="guia" value="Guia">
            <label class="form-check-label" for="guia">Guia</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="assistance" id="nenhum-apoio" value="Nenhum" checked>
            <label class="form-check-label" for="nenhum-apoio">Nenhum</label>
        </div>
    </div>

    <div class="col-12 mb-4">
        <label class="form-label fw-bold">Ocupação</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="profession" value="Estudante" id="student" checked>
            <label class="form-check-label" for="student">Estudante</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="profession" value="Professor(a)" id="professor">
            <label class="form-check-label" for="professor">Professor(a)</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="profession" value="Servidor(a)" id="server">
            <label class="form-check-label" for="server">Servidor(a)</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="profession" value="Nenhuma" id="none">
            <label class="form-check-label" for="none">Nenhuma</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="profession" id="other-profession">
            <label class="form-check-label" for="other-profession">Outra</label>
        </div>
        <div class="d-none mt-2" id="div-other-profession">
            <input type="text" class="form-control" id="input-other-profession" placeholder="Sua ocupação">
        </div>
    </div>

    <div class="col-12 mb-4">
        <label class="form-label fw-bold">Workshops</label>

        @foreach ($workshops as $w)
            @php
                $vacancies = $w->vacancies - $w->amount_subscriptions != 0;
            @endphp
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="workshop" 
                        id="{{ $w->activity_id }}" value="{{ $w->description }}" {{ !$vacancies ? 'disabled' : '' }}>
                    <label class="form-check-label {{ !$vacancies ? 'text-secondary' : '' }}" for="{{ $w->activity_id }}">
                        {{ $w->description }} ({{ $w->vacancies - $w->amount_subscriptions }} vagas)
                    </label>
                </div>
            </div>
        @endforeach
    </div>

</form>

<div class="d-flex justify-content-center">
    <button class="btn btn-success" id="btn-subscribe">Inscrever-se</button>
</div>

<script src="{{ asset('js/registry-listener.js') }}"></script>

@endsection
