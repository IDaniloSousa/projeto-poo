@extends('front')

@section('content')
    <h1>Atualização de Situação</h1>
    <form method="post" action="{{ route('atualizarSituacao', $situacao->id) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Situação</label>
            <input type="text" class="form-control" value="{{ $situacao->description }}" name="description" placeholder="Digite um nome para o setor">
        </div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </form>
@endsection
