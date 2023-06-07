@extends('front')

@section('content')
    <h1>Atualização de Setor</h1>
    <form method="post" action="{{ route('atualizarSetor', $setor->id) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Setor</label>
            <input type="text" class="form-control" value="{{ $setor->description }}" name="description" placeholder="Digite um nome para o setor">
        </div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </form>
@endsection
