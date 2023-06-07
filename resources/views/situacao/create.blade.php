@extends('front')

@section('content')
    <h1>Cadastro de Situações</h1>
    <form method ="post" action="{{route('novaSituacao')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Situação</label>
            <input type="text" class="form-control" name="description" placeholder="Digite a situação">
        </div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>

    </form>
@endsection
