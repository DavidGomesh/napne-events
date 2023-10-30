
$(document).ready(() => {

    $('input[name=has-disability-check]').change(function () {
        const isChecked = $(this).attr('id') == 'has-disability';
        $('#div-assistance').toggleClass('d-none', !isChecked);
    })

    $('input[name=assistance]').change(function () {
        if ($(this).attr('id') == 'nenhum-apoio') {
            $('input[name=assistance]').not(this).prop('checked', false)
        } else {
            $('#nenhum-apoio').prop('checked', false)
        }
    })
    
    $('input[name=profession]').change(function () {
        const isChecked = $(this).attr('id') == 'other-profession';
        $('#div-other-profession').toggleClass('d-none', !isChecked);
    })
    
    $('input[name=workshop]').change(function () {
        $('input[name=workshop]').not(this).prop('checked', false)
    })
    
    $('#btn-subscribe').click(trySubscribe)

    function trySubscribe() {
        const workshopId = $('input[name=workshop]:checked').val()
        if (workshopId) {
            return $.ajax({
                url: `/api/activities/${workshopId}/has-vacancies`,
                method: 'GET',
                success: r => {
                    if (!r.hasVacancies) {
                        return Swal.fire(
                            'Oficina sem vagas',
                            'A oficina selecionada ficou sem vagas!',
                            'error'
                        )
                    }
                    subscribe()
                }
            })
        }
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

        const hasDisability = $('input[name=has-disability-check]:checked').val()
        const assistanceNeeded = (() => {
            const checkAssis = $('input[name=assistance]:checked')
            return hasDisability == '1' ? (checkAssis.length == 0 ? 'Nenhum' : checkAssis.toArray().reduce(
                (acc, input) => acc + $(input).val() + ', ', ''
            ).trim().replace(/,$/, '')) : undefined
        })()

        const profession = (() => {
            const radioProf = $('input[name=profession]:checked')
            return radioProf.attr('id') != 'other-profession' ? radioProf.val().trim() :(
                $('#input-other-profession').val() || 'Nenhuma'
            )
        })()

        const workshopId = $('input[name=workshop]:checked').val()

        Swal.fire({
            title: 'Aguarde!',
            text: 'Cadastrando inscrição...',
            icon: 'info',
            showConfirmButton: false,
            allowOutsideClick: false,
        })
        
        $.ajax({
            url: '/api/participants',
            method: 'POST',
            data: {
                name, email, hasDisability, assistanceNeeded, profession, workshopId, role: 'listener'
            },
            success: r => {
                Swal.fire({
                    title: 'Inscrição realizada!',
                    text: (() => {
                        const message = {
                            0: 'Sua inscrição foi realizada com sucesso!',
                            1: 'Sua inscrição no evento foi realizada, mas não foi possível inscrevê-lo na oficina selecionada, pois as vagas se esgotaram.',
                        }
                        if (r.workshop) {
                            return r.subscribed ? message[0] : message[1]
                        }
                        return message[0]

                    })(),
                    icon: 'success',
                    allowOutsideClick: false,
                }).then(
                    result => { if (result.isConfirmed) window.location.href = '/#schedule' }
                )
            },
            error: xhr => {
                Swal.fire(
                    'Algum erro ocorreu!',
                    xhr.responseJSON.message,
                    'error'
                )
            },
        })
    }
})
