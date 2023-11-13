@extends('layouts/layout')

@section('content')

<div class="container py-5">
    <div class="text-center mt-5 mb-4">
        <img class="img-fluid border rounded" width="600px" src="{{ asset('img/event-logo.jpeg') }}" alt="Logo do evento. Na parte superior em destaque o nome do evento, II Seminário de Educação com Inclusão: construindo saberes e práticas inclusivas, ilustrado por quatro desenhos simbólicos: à direita, Libras e Autismo, à esquerda Deficiência Física e Deficiência Visual.">
    </div>

    <form id="form-listener" class="row needs-validation" novalidate>
        <div class="col-12 col-sm-6 mb-4">
            <div class="">
                <label class="fw-bold" for="name">Nome completo</label>
                <input type="text" class="form-control" id="name" required aria-label="Nome completo. Será usado no controle de frequência e no certificado.">
                <div class="form-text">Será usado no certificado.</div>
            </div>
        </div>
        
        <div class="col-12 col-sm-6 mb-4">
            <div class="">
                <label class="fw-bold" for="email">E-mail</label>
                <input type="email" class="form-control" id="email" required aria-label="E-mail. Para onde o certificado será enviado.">
                <div class="form-text">Para onde o certificado será enviado.</div>
            </div>
        </div>
    </form>

    <div class="d-flex justify-content-center mb-5">
        <button class="btn btn-success" id="btn-subscribe">Inscrever-se</button>
    </div>

    @section('scripts')
        <script>  
            $(document).ready(() => {

                $('#name, #email').keydown(event => {
                    if (event.which === 13) {
                        trySubscribe()
                    }
                })

                $('#btn-subscribe').click(trySubscribe)

                function trySubscribe() {
                    subscribe()
                }

                function subscribe() {
                    $('#form-listener').addClass('was-validated')

                    const name = $('#name').val()
                    const email = $('#email').val()

                    if (!name) {
                        $('#name').focus()
                        $('#name').attr('aria-label', 'Preencha o nome completo. Será usado no controle de frequência e no certificado.')
                        return
                    }
                    
                    if (!email || !email.includes('@')) {
                        $('#email').focus()
                        $('#email').attr('aria-label', 'Preencha o e-mail corretamente. Para onde o certificado será enviado.')
                        return
                    }

                    Swal.fire({
                        title: 'Aguarde!',
                        text: 'Cadastrando inscrição...',
                        icon: 'info',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    })

                    // Save in another server
                    $.ajax({
                        url: 'https://napne-events-api.000webhostapp.com/api/participants',
                        method: 'POST',
                        data: {
                            name, email, role: 'monitor'
                        },
                        success: r => {
                            Swal.fire({
                                title: 'Inscrição realizada!',
                                text: 'Sua inscrição foi realizada com sucesso!',
                                icon: 'success',
                                allowOutsideClick: false,
                            }).then(
                                result => { if (result.isConfirmed) window.location.href = '/#schedule' }
                            )
                        },
                        error: xhr => {
                            Swal.fire(
                                'Algum erro ocorreu!',
                                'Erro: ' + (xhr.responseJSON.message || xhr.responseJSON.error),
                                'error'
                            )
                        },
                    })
                }
            })
        </script>
    @endsection
</div>

@endsection
