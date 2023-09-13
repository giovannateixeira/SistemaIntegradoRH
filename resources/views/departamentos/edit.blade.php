@extends('layouts.default')

@section('title', 'SISRH - Cadastro de Departamento')

@section('content')
    <h1 class="fs-2 mb-3">Alterar Departamento</h1>

    <form class="row g-3" method="POST" action="{{ route('departamentos.update', $departamento->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('departamentos.partials.form')
        <div class="col-13">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <a href="{{ route('departamentos.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
      </form>
@endsection
