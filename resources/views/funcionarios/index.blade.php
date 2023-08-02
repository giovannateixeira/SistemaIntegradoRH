@extends('layouts.default')

@section('title', 'Funcionários - SIS ')

@section('content')
     <x-btn-creat/>

    <h1 class="f-2 mb-3">Funcionários</h1>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Departamento</th>
                <th scope="col" width="110">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <th scope="row">1</th>
                <td>Foto</td>
                <td>Giovanna</td>
                <td>Analista de QA</td>
                <td>Sistemas de Informações</td>
                <td> 
                    <a href="" title="Editar" class="btn btn-primary"> <i class="bi bi-pen"></i></a>
                    <a href="" title="Deltar" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                </td>
            </tr>
           
        </tbody>
    </table>
@endsection
