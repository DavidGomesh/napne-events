<!DOCTYPE html>
<html lang="pt-br" class="m-0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Inscrição de Participante</title>
</head>

<body class="p-3 m-0 h-100">
    <div class="container bg-white rounded p-3 h-100">
        @include('layouts/header')
        @yield('content')
    </div>

    <script>
        // const findParticipant = () => {
        //     Swal.fire({
        //         title: 'Aguarde!',
        //         text: 'Buscando dados...',
        //         icon: 'info',
        //         showConfirmButton: false,
        //         allowOutsideClick: false,
        //     })

        //     const name = $('#name').val()
        //     $.ajax({
        //         url: '/api/participants/name/' + name,
        //         success: p => {
        //             $('#search-name').addClass('d-none')
        //             $('#name-found').removeClass('d-none')

        //             $('#found-name').val(p.name)
        //             $('#email').val(p.email)
        //             $('#institution').val(p.institution)
        //             $('#profession').val(p.profession)

        //             Swal.close()
        //         },
        //         error: xhr => {
        //             if (xhr.status == 404) {
        //                 Swal.fire(
        //                     'Participante não encontrado!',
        //                     'Informe o nome completo exatamente como foi cadastrado na inscrição do evento!',
        //                     'error'
        //                 )
        //             } else {
        //                 Swal.fire(
        //                     'Erro inesperado!',
        //                     xhr.responseJSON.message, 
        //                     'error'
        //                 )
        //             }
        //         }
        //     })
        // }

        // $('#btn-search-part').on('click', findParticipant)
        // $('#name').keypress(event => {
        //     if (event.which === 13) {
        //         event.preventDefault();
        //         findParticipant()
        //     }
        // })

    </script>

</body>

</html>
