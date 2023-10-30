@extends('layouts/layout')

@section('content')

<div class="position-fixed bottom-0 end-0 mb-3 me-3">
    <a class="btn btn-success" href="/registry">Inscrever-se</a>
</div>

<div class="container text-center pt-5 mt-5">
    <img class="img-fluid border rounded mb-3" width="600px" src="{{ asset('img/acessibility-image.png') }}" alt="Uma imagem que precisa de audiodescrição.">
    <h1>II Seminário de Educação com Inclusão</h1>
    <p class="lead">Construindo saberes e práticas inclusivas.</p>
    <a class="btn btn-success" href="/registry">Inscrever-se</a>
</div>

<div class="container marketing">
    <hr class="featurette-divider">
    <div id="speakers">
        <h2 class="display-5 fw-normal text-center mb-5">Palestrantes</h2>
        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.dmtpalestras.com.br/wp-content/uploads/2021/10/paula-harraca-palestrante-dmtpalestras-1.jpg" alt="Imagem da palestrante tal">
                <h4 class="fw-normal">Druzila Santos Soares</h4>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#speaker-01">Detalhes &raquo;</a></p>
            </div>
            
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://conexaopalestra.com.br/wp-content/uploads/2021/07/aline.jpg" alt="Imagem da palestrante tal">
                <h4 class="fw-normal">Jamanta Souza Pinheiro</h4>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#speaker-02">Detalhes &raquo;</a></p>
            </div>
            
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.dmtpalestras.com.br/wp-content/uploads/2020/07/daniel-hosken-palestrante-dmtpalestras.jpg" alt="Imagem da palestrante tal">
                <h4 class="fw-normal">Aristoclates Gregos Troianos</h4>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#speaker-03">Detalhes &raquo;</a></p>
            </div>
        </div>
    </div>

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
                        <div class="text-start"><span class="fw-bold">Palestra:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 08:00h</div>
                            <div class=""><span class="fw-bold">Palestrante:</span> Fulana de Tal</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Palestra:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 08:00h</div>
                            <div class=""><span class="fw-bold">Palestrante:</span> Fulana de Tal</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Palestra:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 08:00h</div>
                            <div class=""><span class="fw-bold">Palestrante:</span> Fulana de Tal</div>
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
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 08:00h</div>
                            <div class=""><span class="fw-bold">Palestrante:</span> Fulana de Tal</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Oficina:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 08:00h</div>
                            <div class=""><span class="fw-bold">Palestrante:</span> Fulana de Tal</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                        <div class="text-start"><span class="fw-bold">Palestra:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="me-5"><span class="fw-bold">Horário:</span> 08:00h</div>
                            <div class=""><span class="fw-bold">Palestrante:</span> Fulana de Tal</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

  
<div class="modal fade" id="speaker-01" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="speaker-01Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="speaker-01Label">Palestrante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column flex-lg-row align-items-center mb-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.dmtpalestras.com.br/wp-content/uploads/2021/10/paula-harraca-palestrante-dmtpalestras-1.jpg" alt="Imagem da palestrante tal">
                    <div class="w-100 ps-3">
                        <h2 class="fw-medium text-center text-lg-start">Druzila Santos Soares</h2>
                        <p class="text-center text-lg-start">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-center text-lg-start">Currículo Lattes</h4>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo delectus error ea at dolores impedit neque in praesentium vel ullam. Cupiditate reiciendis ea ratione ipsam provident assumenda incidunt magni? Eius!</p>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est esse iusto, vel voluptatem in odit facilis iure neque nostrum ut libero tempore quam ipsum ipsa aliquam error laborum amet id.</p>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, assumenda recusandae aperiam facere temporibus, dolores minima iusto nam officiis molestiae ipsa adipisci tempora dignissimos est! Sint omnis repudiandae esse qui?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="speaker-02" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="speaker-02Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="speaker-02Label">Palestrante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column flex-lg-row align-items-center mb-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://conexaopalestra.com.br/wp-content/uploads/2021/07/aline.jpg" alt="Imagem da palestrante tal">
                    <div class="w-100 ps-3">
                        <h2 class="fw-medium text-center text-lg-start">Jamanta Souza Pinheiro</h2>
                        <p class="text-center text-lg-start">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-center text-lg-start">Currículo Lattes</h4>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo delectus error ea at dolores impedit neque in praesentium vel ullam. Cupiditate reiciendis ea ratione ipsam provident assumenda incidunt magni? Eius!</p>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est esse iusto, vel voluptatem in odit facilis iure neque nostrum ut libero tempore quam ipsum ipsa aliquam error laborum amet id.</p>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, assumenda recusandae aperiam facere temporibus, dolores minima iusto nam officiis molestiae ipsa adipisci tempora dignissimos est! Sint omnis repudiandae esse qui?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="speaker-03" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="speaker-03Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="speaker-03Label">Palestrante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column flex-lg-row align-items-center mb-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.dmtpalestras.com.br/wp-content/uploads/2020/07/daniel-hosken-palestrante-dmtpalestras.jpg" alt="Imagem da palestrante tal">
                    <div class="w-100 ps-3">
                        <h2 class="fw-medium text-center text-lg-start">Aristoclates Gregos Troianos</h2>
                        <p class="text-center text-lg-start">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-center text-lg-start">Currículo Lattes</h4>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo delectus error ea at dolores impedit neque in praesentium vel ullam. Cupiditate reiciendis ea ratione ipsam provident assumenda incidunt magni? Eius!</p>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est esse iusto, vel voluptatem in odit facilis iure neque nostrum ut libero tempore quam ipsum ipsa aliquam error laborum amet id.</p>
                    <p class="text-justify text-lg-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, assumenda recusandae aperiam facere temporibus, dolores minima iusto nam officiis molestiae ipsa adipisci tempora dignissimos est! Sint omnis repudiandae esse qui?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

@endsection