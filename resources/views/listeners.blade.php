@extends('layouts/layout')

@section('content')
    <div class="container py-5">
        <div class="table-responsive mt-5 mb-4">
            <table class="table table-striped table-hover" id="table-listeners">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th class="text-center">Credenciado</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listeners as $l)
                        <tr>
                            <th class="fw-normal">{{ $l->name }}</th>
                            <th class="fw-normal text-center">
                                <button id="btn-accredited-{{ $l->participant_id }}" class="btn btn-success {{ $l->accredited ? '' : 'd-none' }}">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    Sim
                                </button>
                                <button id="btn-accredit-{{ $l->participant_id }}" class="btn btn-danger {{ $l->accredited ? 'd-none' : '' }} btn-accredit" participant-id="{{ $l->participant_id }}" name="{{ $l->name }}">
                                    <i class="fa-solid fa-circle-xmark text-white"></i>
                                    Não
                                </button>
                            </th>
                            <th class="text-center">
                                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal-listener-{{ $l->participant_id }}">
                                    <i class="fa-solid fa-circle-info"></i>
                                    Info
                                </button>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($listeners as $l)
        <div class="modal fade" id="modal-listener-{{ $l->participant_id }}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-listener-{{ $l->participant_id }}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-listener-{{ $l->participant_id }}Label">Participante</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingInput" placeholder="something" value="{{ $l->name }}" disabled>
                                    <label for="floatingInput">Nome</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingInput" placeholder="something" value="{{ $l->email }}" disabled>
                                    <label for="floatingInput">E-mail</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingInput" placeholder="something" value="{{ $l->has_disability ? 'Sim' : 'Não' }}" disabled>
                                    <label for="floatingInput">Pessoa com deficiência</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingInput" placeholder="something" value="{{ $l->assistance_needed ?? 'Nenhum' }}" disabled>
                                    <label for="floatingInput">Atendimento necessário</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="floatingInput" placeholder="something" value="{{ $l->profession ?? 'Nenhuma' }}" disabled>
                                    <label for="floatingInput">Ocupação</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    @section('scripts')
        <script>
            $('.btn-accredit').click(function (){
                const participantId = $(this).attr('participant-id')
                const name = $(this).attr('name')
                tryAccredit(participantId, name)
            })

            function tryAccredit(participantId, name) {
                const needAsk = [
                    '00f9f174-f6d8-4a28-a5b2-57f6e8a754f0',
                    '02101f95-0324-4f82-b8ce-880512e08b8c',
                    '09d432fe-7003-4414-bf17-883c4f357477',
                    '0cd87e0c-6e8c-4140-90a1-91f3f6257241',
                    '0e55188d-b656-46d2-be3d-3aadad6e0876',
                    '19d4851e-80cb-471f-8da2-778505fbc3fa',
                    '223db03a-1c84-4071-8205-83852bedf151',
                    '26521783-37b2-403d-81ac-4e4eb56d08fc',
                    '3b3fb4f7-8ad5-4bc8-b97f-506015c8c65b',
                    '3dee4515-bb11-49d6-80f3-1035677afb03',
                    '3e055284-d290-4d57-8866-db5efea7566e',
                    '408b1274-22bc-4bef-bccf-aeb78442c4b6',
                    '41fe8031-0de4-43d0-92d2-4f201f3f205f',
                    '49162413-2228-40e4-b431-4a523024ae15',
                    '49493994-f91f-4d81-a1c9-26f7ab577391',
                    '533347f3-0667-4b0f-91be-e412a65939f6',
                    '55a59bb7-2acf-4fcf-906d-07cea52076ab',
                    '565101ec-bd2c-4dae-bd91-a88d3245cea0',
                    '59c7cbd5-709c-4e06-ae08-d13418822f13',
                    '62321987-bba1-4676-826b-b620ea0f4546',
                    '6252032a-b2ec-4dfd-b804-d9b33c6508fd',
                    '63ca94c6-c7b5-441f-a3f9-546347afb5ab',
                    '64cefaa1-6e40-4fa8-be38-554ee7c768a6',
                    '6666cce3-c42d-4c55-af86-b6a2a9528da2',
                    '727b4462-5b0a-4db2-9848-05163339d739',
                    '73de0708-c3e4-4c5b-a0d5-c4b47f6f27ef',
                    '7d07d8ad-2eb7-4cf6-9383-fb6be64ddbd7',
                    '7db9e152-7ad6-4333-8e1e-b33d603102ee',
                    '7f52ac65-7199-4763-bce3-7a998638bccb',
                    '8ca3568f-ef2b-4173-8c82-43bdbe2a6b1a',
                    '8e4f1b00-451f-47d9-8004-f993f00961a3',
                    '8e7c82bd-d10b-4c42-8099-d14d916baef1',
                    '9414143b-e4d9-41db-9d95-9271c2379227',
                    '98cb037d-be48-4f36-98d4-88f9cc88c14e',
                    '99199776-d428-4918-a7b5-418a59424c0a',
                    '9a4e0f67-d355-40eb-b5f2-aa73bdcf11de',
                    '9bbecd35-8f24-45a3-bc89-47ffdbdc6536',
                    'a37c4350-2048-4528-8f75-333a8e34354b',
                    'a3dac3a0-ff7f-482c-8088-0cd4d174d2c8',
                    'ac0d023a-e9eb-4587-85f5-8709abc5970d',
                    'ae451dfc-93ef-4f5e-8c59-6d0f83474404',
                    'b22a46dc-6990-405e-8efb-fc74ffc7f6b5',
                    'b6abad41-9874-40db-88ea-f93f50cc8935',
                    'c0acac4e-b2db-453d-b79d-07eb60eb4b8d',
                    'c6daf930-d454-4ff7-ae93-387975040a23',
                    'c8cc8bff-df6f-4e13-8fab-6d1334129844',
                    'd6a2a4e0-9a27-4b30-968a-fd655e8da04e',
                    'd80b94d0-0721-4411-b1ef-466617ff3f8c',
                    'ed2cf3a4-fe71-44f3-85dd-09bff18e184f',
                    'f2b75af9-0c0d-4a8e-8faa-f8b42434fbf9',
                    'f4ae3b51-9202-492a-9a37-76d97077c348',
                    'f69d7c0c-34b9-4b09-8ce4-7e4ce89a292c',
                    'f8d435cf-a365-4113-b3d2-33f70ea723f3',
                    'f9326a74-2419-4b2d-b9a0-8d1572c8a2de',
                    'ffd49964-46e2-4d9e-9d15-a5964470195d',
                ]

                const workshops = {
                    '1eb84740-6f33-4482-9ce2-214629d435fe': 'Audiodescrição na sala de aula',
                    '5b5644dc-352f-401e-9824-fa8351a1ec34': 'Multiplano',
                    'adf7e087-df1f-4c9c-bdf9-d594c845c9be': 'Libras',
                    'afb088a1-601d-4b9f-86b0-cf9ee37bd3a0': 'Desenho Universal de Aprendizagem',
                    'd6f7a6f2-0ea5-4f05-8498-4a4d48050f3a': 'Práticas inclusivas e recursos acessíveis para estudantes com Transtorno do Espectro Autista',
                    'ddfc563d-8698-4876-ae74-cb1bc0fd5ec1': 'Metodologia para Desenvolver a Aprendizagem e Incluir',
                }

                if (!needAsk.includes(participantId)){
                    accredit(participantId, name)
                    return
                }

                Swal.fire({
                    title: 'O participante se increveu em alguma oficina?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim',
                    cancelButtonText: 'Não'
                }).then(result => {

                    if (!result.value) {
                        accredit(participantId, name)
                        return
                    }

                    Swal.fire({
                        title: 'Selecione a oficina que o participante se inscreveu:',
                        input: 'select',
                        inputOptions: workshops,
                        inputDirection: 'row',
                        inputValidator: result => !result && 'Você precisa selecionar uma opção!',
                        showCancelButton: true,
                        confirmButtonText: 'Confirmar',
                        cancelButtonText: 'Cancelar'
                    }).then(result => {
                        if (result.isConfirmed) {

                            Swal.fire({
                                title: 'Aguarde!',
                                text: 'Confirmando inscrição...',
                                icon: 'info',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                            })

                            $.ajax({
                                url: 'https://napne-events-api.000webhostapp.com/api/subscriptions',
                                method: 'POST',
                                data: {
                                    participantFk: participantId,
                                    activityFk: result.value
                                },
                                success: () => accredit(participantId, name),
                                error: xhr => {
                                    Swal.fire(
                                        'Algum erro ocorreu!',
                                        'Erro: ' + (xhr.responseJSON.message || xhr.responseJSON.error),
                                        'error'
                                    )
                                }
                            })
                        }
                    })
                })
            }

            function accredit(participantId, name) {
                Swal.fire({
                    title: `Credenciar ${name}?`,
                    text: 'Esta ação não pode ser desfeita!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim',
                    cancelButtonText: 'Não'
                }).then(result => {

                    if (result.value) {
                        Swal.fire({
                            title: 'Aguarde!',
                            text: 'Realizando credenciamento...',
                            icon: 'info',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                        })

                        $.ajax({
                            url: `https://napne-events-api.000webhostapp.com/api/participants/${participantId}/accredit`,
                            method: 'PATCH',
                            success: () => {
                                Swal.fire('Credenciado!', `${name} foi credenciado(a)!`, 'success');
                                $('#btn-accredited-' + participantId).removeClass('d-none')
                                $('#btn-accredit-' + participantId).addClass('d-none')
                            },
                            error: xhr => {
                                Swal.fire(
                                    'Algum erro ocorreu!',
                                    'Erro: ' + (xhr.responseJSON.message || xhr.responseJSON.error),
                                    'error'
                                )
                            }
                        })
                    }
                })
            }
        </script>

        <script>
            new DataTable('#table-listeners')
        </script>
    @endsection

@endsection