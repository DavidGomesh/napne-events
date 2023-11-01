@extends('layouts/layout')

@section('content')

<div class="container py-5">

    @if ($event->permission_registration == 'yes' || ($event->permission_registration == 'date' && $event->start_registration <= now() && $event->end_registration >= now()))
        <div class="text-center mt-5 mb-4">
            <img class="img-fluid border rounded" width="600px" src="{{ asset('img/event-logo.jpeg') }}" alt="Logo do evento. Na parte superior em destaque o nome do evento, II Seminário de Educação com Inclusão: construindo saberes e práticas inclusivas, ilustrado por quatro desenhos simbólicos: à direita, Libras e Autismo, à esquerda Deficiência Física e Deficiência Visual.">
        </div>

        <form id="form-listener" class="row needs-validation" novalidate>
            @include('registry/personal-data')

            <div class="col-12 mb-4">
                <fieldset>
                    <legend title="Possui deficiência?"></legend>
                    <label class="form-label fw-bold">Pessoa com deficiência?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="has-disability-check" id="has-disability" value="1" required>
                        <label class="form-check-label" for="has-disability">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="has-disability-check" id="has-not-disability" value="0" required checked>
                        <label class="form-check-label" for="has-not-disability">Não</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12 mb-4 d-none" id="div-assistance">
                <fieldset>
                    <legend title="Quais dos atendimentos abaixo necessita?"></legend>
                    <label class="form-label fw-bold">Quais dos atendimentos abaixo necessita?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="assistance" id="interprete" value="Tradutor e Intérprete de Libras">
                        <label class="form-check-label" for="interprete">Tradutor e Intérprete de Libras</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="assistance" id="guia-assinatura" value="Guia para assinatura">
                        <label class="form-check-label" for="guia-assinatura">Guia para assinatura</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="assistance" id="prog-braille" value="Programação em Braille">
                        <label class="form-check-label" for="prog-braille">Programação em Braille</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="assistance" id="guia-vidente" value="Guia vidente">
                        <label class="form-check-label" for="guia-vidente">Guia vidente</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="assistance" id="audiodescricao" value="Audiodescrição">
                        <label class="form-check-label" for="audiodescricao">Audiodescrição</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="assistance" id="nenhum-apoio" value="Nenhum" checked>
                        <label class="form-check-label" for="nenhum-apoio">Nenhum</label>
                    </div>
                </fieldset>
            </div>

            <div class="col-12 mb-4">
                <fieldset>
                    <legend title="Ocupação"></legend>
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
                </fieldset>
            </div>

            <div class="col-12 mb-5">
                <fieldset>
                    <legend title="Workshops"></legend>
                    <label class="form-label fw-bold">Workshops</label>

                    @foreach ($workshops as $w)
                        @php
                            $vacancies = $w->vacancies - $w->amount_subscriptions != 0;
                        @endphp
                        <div class="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="workshop"
                                    id="{{ $w->activity_id }}" value="{{ $w->activity_id }}" {{ !$vacancies ? 'disabled' : '' }}>
                                <label class="form-check-label {{ !$vacancies ? 'text-secondary' : '' }}" for="{{ $w->activity_id }}">
                                    {{ $w->description }} ({{ $w->vacancies - $w->amount_subscriptions }} vagas)
                                </label>
                            </div>
                        </div>
                    @endforeach
                </fieldset>
            </div>
        </form>

        <div class="d-flex justify-content-center mb-5">
            <button class="btn btn-success" id="btn-subscribe">Inscrever-se</button>
        </div>

        @section('scripts')
            <script src="{{ asset('js/registry-listener.js') }}"></script>
        @endsection
    @else
        <div class="p-5 mt-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-center text-md-start">Desculpe...</h1>
                <p class="col-md-8 fs-4 text-center text-md-start">Nesse momento o evento não está aceitando inscrições.</p>
                <div class="text-center text-md-start">
                    <a class="btn btn-primary btn-lg" href="/" type="button">Página inicial</a>
                </div>
            </div>
        </div>
    @endif
</div>

@endsection