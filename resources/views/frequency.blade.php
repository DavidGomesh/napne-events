@extends('layouts/layout')

@section('content')

<input type="hidden" id="activity-id" value="{{ $activity->activity_id }}">
<input type="hidden" id="activity-type" value="{{ $activity->type }}">

<div class="container text-center pt-5 mt-5 mb-3">
    <img class="img-fluid border rounded mb-3" width="600px" tabindex="1" src="{{ asset('img/event-logo.jpeg') }}" alt="Logo do evento. Na parte superior em destaque o nome do evento, II Seminário de Educação com Inclusão: construindo saberes e práticas inclusivas, ilustrado por quatro desenhos simbólicos: à direita, Libras e Autismo, à esquerda Deficiência Física e Deficiência Visual.">
    <h3>{{ $activity->description }}</h3>
    {{-- <p><a class="btn btn-success mt-4" href="/registry">Inscrever-se</a></p> --}}
</div>

<div class="container mb-5">
    <div class="justify-content-center">
        <label class="fw-bold" for="name">Nome completo</label>
        <input type="text" class="form-control" id="name" required aria-label="Nome completo. Será usado no controle de frequência e no certificado.">
        <div class="form-text">Informe o seu nome para assinar a frequência.</div>
        <div class="form-text">O nome deve ser o mesmo usado na inscrição do evento.</div>
    </div>

    <div class="text-center">
        <button id="btn-find" class="btn btn-success">Buscar participante</button>
    </div>
</div>

{{-- <code>{{ $activity }}</code> --}}

@section('scripts')
<script>
    // const host = 'https://napne-events-api.000webhostapp.com'
    const host = 'http://localhost:8000'

    $('#btn-find').click(function (){
        const activityId = $('#activity-id').val()
        const activityType = $('#activity-type').val()
        const participantName = $('#name').val()
        tryRegisterFrequency(activityId, activityType, participantName)
    })

    function tryRegisterFrequency(activityId, activityType, participantName){
        Swal.fire({
            title: 'Aguarde!',
            text: 'Buscando participante...',
            icon: 'info',
            showConfirmButton: false,
            allowOutsideClick: false,
        })

        $.ajax({
            url: host + `/api/participants/name/${participantName}`,
            method: 'GET',
            success: participant => {
                if (!participant.accredited) return Swal.fire(
                    'Participante não credenciado!',
                    'O participante foi encontrado mas não está credenciado!',
                    'error'
                )

                if (activityType != 'workshop') {
                    registerFrequency(activityId, participant.participant_id)
                    return
                }
                
                $.ajax({
                    url: host + `/api/subscriptions/activity/${activityId}/participant/${participant.participant_id}`,
                    method: 'GET',
                    success: r => registerFrequency(activityId, participant.participant_id),
                    error: xhr => {
                        if (xhr.status == 404) {
                            Swal.fire(
                                'Participante não inscrito!',
                                'O participante não está inscrito nessa oficina!',
                                'error'
                            )
                        } else {
                            Swal.fire(
                                'Algum erro ocorreu!',
                                'Erro: ' + (xhr.responseJSON.message || xhr.responseJSON.error),
                                'error'
                            )
                        }
                    }
                })
            },
            error: xhr => {
                if (xhr.status == 404) {
                    Swal.fire(
                        'Participante não encontrado!',
                        'O nome deve ser o mesmo usado na inscrição do evento. Fale com um monitor se precisar de ajuda!',
                        'error'
                    )
                } else {
                    Swal.fire(
                        'Algum erro ocorreu!',
                        'Erro: ' + (xhr.responseJSON.message || xhr.responseJSON.error),
                        'error'
                    )
                }
            }
        })
    }

    function registerFrequency(activityId, participantId) {
        $.ajax({
            url: host + `/api/frequencies`,
            method: 'POST',
            data: {
                activityFk: activityId,
                participantFk: participantId,
            },
            success: r => Swal.fire({
                title: 'Frequência registrada!', 
                text: `Frequência registrada com sucesso!`, 
                icon: 'success',
                allowOutsideClick: false,
            }).then(result => { if (result.isConfirmed) window.location.href = '/#schedule' }),
            error: xhr => {
                Swal.fire(
                    'Algum erro ocorreu!',
                    'Erro: ' + (xhr.responseJSON.message || xhr.responseJSON.error),
                    'error'
                )
            }
        })
    }

</script>
@endsection

@endsection