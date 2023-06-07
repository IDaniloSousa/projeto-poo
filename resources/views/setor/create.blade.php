@extends('front')

@section('content')
    <h1>Cadastro de Setores</h1>
    <form method ="post" action="{{route('novoSetor')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome do Setor</label>
            <input type="text" class="form-control" name="description" placeholder="Digite um nome para o setor">
        </div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>

    </form>
@endsection
