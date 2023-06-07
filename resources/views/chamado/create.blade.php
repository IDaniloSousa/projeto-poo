@extends('front')

@section('content')
    <h1>Criar Chamado</h1>
    <form method ="post" action="{{route('novoChamado')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome do chamado</label>
            <input type="text" class="form-control" name="title" placeholder="Digite o nome do chamado">
            <label for="exampleFormControlInput1" class="form-label">Descrição do Chamado</label>
            <input type="text" class="form-control" name="description" placeholder="Descreva o que deseja pedir no chamado">
            <label for="exampleFormControlInput1" class="form-label">Prazo Término</label>
            <input type="date" class="form-control" name="fim_date" placeholder="">

            <label for="exampleFormControlInput1" class="form-label">Setor</label>

            {{-- Tentando colocar chave estrangeira --}}
            <select class="form-control" name="setor_id">
            @foreach ($setores as $setor)
                    <option value="{{ $setor->id }}">{{ $setor->description }}</option>
                @endforeach
            </select>

            <label for="situacao" class="form-label">Situação</label>
            <select class="form-control" name="situacao_id">
                @foreach ($situacoes as $situacao)
                    <option value="{{ $situacao->id }}">{{ $situacao->description }}</option>
                @endforeach
            </select>
            {{--Fim--}}


        </div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>

    </form>
@endsection
