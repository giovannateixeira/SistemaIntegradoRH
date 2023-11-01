@extends('layouts.default')

@section('title', ' SISRH - Cadastro de Usuário')

@section('content')
    <h1 class="fs-2 mb-3">Alterar Usuário</h1>

    <form class="row g-3" method="POST" action="{{ route('users.update', $usuario->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('users.partials.form')
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
      </form>
@endsection
