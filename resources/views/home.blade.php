@extends('front')

@section('content')
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Bem vindo ao SUAP POO</h1>
        <p class="lead">Essa página é a avaliação final para a disciplina de Programação Orientada a Objetos. O função
            dessa página é criar chamados para seus respectivos setores.</p>
            <p class="lead">Acesse as listas  das tabelas no topo do site!</p>
    </div>

    <div class="container">
        <div class="fronte">
            <div class="row mbr-justify-content-center">
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="{{ route('novoSetor') }}" style="color: black; text-decoration: none;">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-calendar fa"></span>
                            </div>

                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                    Criar
                                    <span>Setor</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Crie os setores responsáveis pelo chamado</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 mbr-col-md-10">
                    <a href="{{ route('novaSituacao') }}" style="color: black; text-decoration: none;">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-calendar fa"></span>
                            </div>

                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                    Criar
                                    <span>Situação</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Crie que tipo de situações o chamado
                                    estará no momento</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 mbr-col-md-10">
                    <a href="{{ route('novoChamado') }}" style="color: black; text-decoration: none;">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-globe fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                    Criar
                                    <span>Chamado</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Crie um chamado solicitando um serviço
                                    para um setor</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
