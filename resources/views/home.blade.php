@extends('layouts/layout')

@section('content')

<div class="position-fixed bottom-0 end-0 mb-3 me-3">
    <a class="btn btn-success" href="/registry">Inscrever-se</a>
</div>

<div class="container text-center pt-5 mt-5">
    <img class="img-fluid border rounded" width="600px" tabindex="1" src="{{ asset('img/event-logo.jpeg') }}" alt="Logo do evento. Na parte superior em destaque o nome do evento, II Seminário de Educação com Inclusão: construindo saberes e práticas inclusivas, ilustrado por quatro desenhos simbólicos: à direita, Libras e Autismo, à esquerda Deficiência Física e Deficiência Visual.">
    <p><a class="btn btn-success mt-4" href="/registry">Inscrever-se</a></p>
</div>

<div class="container marketing">
    {{-- <hr class="featurette-divider">
    <div id="speakers">
        <h2 class="display-5 fw-normal text-center mb-5">Palestrantes</h2>
        <div class="row">
            @include('speakers/kaciana')
            @include('speakers/nathalia')
            @include('speakers/tereza')
        </div>
    </div> --}}

    <hr class="featurette-divider">
    <div id="about">
        <h2 class="display-3 fw-normal text-center text-lg-start">Sobre o evento</h2>
        <p class="text-justify">O II Seminário de Educação com Inclusão: construindo saberes e práticas inclusivas (II SEI), é um evento organizado pelo Núcleo de Atendimento às Pessoas com Necessidades Educacionais Específicas - NAPNE, do Instituto Federal do Maranhão, campus São Luís - Monte Castelo.<br></p>
        <P class="text-justify">A primeira edição do evento ocorreu no ano de 2022 e possibilitou a estudantes e profissionais internos e externos ao IFMA um momento de muito aprendizado sobre educação inclusiva e sobre práticas inclusivas.</P>
        <p class="text-justify">
            Em 2023, o II SEI ocorrerá novamente de modo presencial, no IFMA - Monte Castelo, e seguirá com a mesma temática, mas com perspectiva e foco diferentes.
            Deficiências e Transtornos, bem como metodologias para a inclusão desse público no contexto educacional, serão as temáticas protagonistas no evento.
            Serão dois dias de muitas reflexões e aprendizados, que terão impactos na escola, na sociedade e principalmente no processo de inclusão de pessoas com deficiência e com transtorno.
        </p>
    </div>

    <hr class="featurette-divider">
    <h2 class="display-3 fw-normal mb-3 text-center text-lg-start">Programação</h2>
    <div id="schedule" class="d-flex flex-column flex-lg-row mb-5">
        <div id="first-day" class="w-100 p-3">
            <h3 class="fs-5 text-center text-lg-start">Dia 06 de dezembro</h3>
            <ul>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Credenciamento</span></div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 8h - 16h</div>
                            <div class=""><span class="fw-bold">Local:</span> Hall de entrada do Campus</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Cerimônia de Abertura</span></div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 9h - 10h</div>
                            <div class=""><span class="fw-bold">Local:</span> Auditório Florise Pérola</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Palestra de abertura:</span> Inclusão Social de Estudantes com Deficiência Intelectual, TEA e TDAH em Sala de Aula do Ensino Médio/Profissional e da Graduação | Prof.ª Dra. Lívia da Conceição Costa Zaquel (UFMA)</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 10h - 11:10h</div>
                            <div class=""><span class="fw-bold">Local:</span> Auditório Florise Pérola</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Intervalo para almoço</span></div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 12h - 14h</div>
                        </div>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Palestra:</span> Capacitismo! Não queremos ser super-heróis, só queremos ser nós mesmos. | Prof.ª Helen Vinhote (IFMA/Maracanã)</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 14h - 16h</div>
                            <div class=""><span class="fw-bold">Local:</span> Auditório Florise Pérola</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Palestra:</span> Relatos de experiências de Estudantes do IFMA Campus São Luís - Monte Castelo</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 16:30h - 18h</div>
                            <div class=""><span class="fw-bold">Local:</span> Auditório Florise Pérola</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="second-day" class="w-100 p-3">
            <h3 class="fs-5 text-center text-lg-start">Dia 07 de dezembro</h3>
            <ul>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Audiodescrição na sala de aula | Esp. Maria Soraia N. C. De Farias (IFMA Campus SJR)</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 8h - 12h</div>
                            <div class=""><span class="fw-bold">Local:</span> a definir</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Multiplano | Esp. Derocy Dias Reis (CAPDV-MA)</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 8h - 12h</div>
                            <div class=""><span class="fw-bold">Local:</span> a definir</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Libras | Esp. Kélcia Taylor (CAS-MA).</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 8h - 12h</div>
                            <div class=""><span class="fw-bold">Local:</span> a definir</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Desenho Universal de Aprendizagem | Ma. Leiliane Pereira Frazão (TAE e Chefe do Departamento de Ações Inclusivas do IFMA/São Luís- Maracanã)</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 8h - 12h</div>
                            <div class=""><span class="fw-bold">Local:</span> a definir</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Práticas inclusivas e recursos acessíveis para estudantes com Transtorno do Espectro Autista | Ma. Fernanda Aline Costa França (SEMED/Paço do Lumiar)</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 8h - 12h</div>
                            <div class=""><span class="fw-bold">Local:</span> a definir</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Metodologia para Desenvolver a Aprendizagem e Incluir | Ma. Ediane Araújo Silva (IFMA/São Luís-Monte Castelo).</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 8h - 12h</div>
                            <div class=""><span class="fw-bold">Local:</span> a definir</div>
                        </div>
                    </div>
                </li>
                <hr>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Mesa redonda:</span> Equidade no contexto escolar: adequações metodológicas | Palestrantes: Prof.ª Ma. Teresa Cristina Lafontaine, Prof.ª Dra.ª Kaciana Nascimento da Silveira Rosa, Prof.ª Ma. Nathalia Rissane Costa Gomes | Mediadora: Prof.ª Regiana Sousa Silva.</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 14h - 16h</div>
                            <div class=""><span class="fw-bold">Local:</span> Auditório Florise Pérola</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Palestra de encerramento:</span> Adaptação Curricular | Ma. Regina Célia da Silva Reis (IFMA/São Luís-Monte Castelo).</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 16h - 17h</div>
                            <div class=""><span class="fw-bold">Local:</span> Auditório Florise Pérola</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Apresentação cultural</span></div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 17h - 18h</div>
                            <div class=""><span class="fw-bold">Local:</span> Auditório Florise Pérola</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection