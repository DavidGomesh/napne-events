
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
    
    $('#btn-subscribe').click(() => {
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

        const has_disability = $('input[name=has-disability-check]:checked').val()
        const assistance_needed = (() => {
            const checkAssis = $('input[name=assistance]:checked')
            return has_disability == '1' ? (checkAssis.length == 0 ? 'Nenhum' : checkAssis.toArray().reduce(
                (acc, input) => acc + $(input).val() + ', ', ''
            ).trim().replace(/,$/, '')) : undefined
        })()

        const profession = (() => {
            const radioProf = $('input[name=profession]:checked')
            return radioProf.attr('id') != 'other-profession' ? radioProf.val().trim() :(
                $('#input-other-profession').val() || 'Nenhuma'
            )
        })()

        const workshop = $('input[name=workshop]:checked').val()

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
                name, email, has_disability, assistance_needed, profession, workshop, 
                role: 'listener', accredited: 0
            },
            success: _ => {
                Swal.fire({
                    title: 'Inscrição realizada!',
                    text: 'Sua inscrição foi realizada com sucesso!',
                    icon: 'success'
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
    })
})