@extends('layouts.app')

@push('home')
    active
@endpush

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #ededed;
    }

    p {
        margin-bottom: 3px;
        text-align: center;
    }

    .header {
        margin-bottom: 5rem;
        border-bottom: 8px solid var(--success);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .2);
    }

    .box {
        padding: 2rem;
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        border-radius: 5px;
        background-color: #ffffff;
    }

    .thead-success {
        color: #ffffff;
        background-color: var(--success);
    }

    .modal-body span {
        display: block;
    }

    .scroll {
        overflow: auto;
    }

    .membros {
        list-style: none;
        margin-block-start: 0;
        padding-inline-start: 0;
    }

    .footer {
        margin-top: 5rem;
        border-top: 8px solid var(--success);
        box-shadow: 0 -5px 15px rgba(0, 0, 0, .2);
    }
</style>
@endpush

@section('content')
<div class="box">
    <header>
        <h2 class="text-uppercase text-center mb-4">Exercício Prático de Banco de Dados 1</h2>
    </header>

    <table class="table">
        <thead>
            <tr class="thead-dark">
                <th scope="col">Grupo 7</th>
                <th scope="col">CRUD em MySQL</th>
            </tr>
            <tr class="thead-success">
                <th scope="col">Integrantes</th>
                <th scope="col">Matrículas</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>David dos Santos Machado</td>
                <td>20190022328</td>
            </tr>

            <tr>
                <td>Pedro Raposo Felix de Sousa</td>
                <td>20190004642</td>
            </tr>

            <tr>
                <td>Victor de Oliveira Martins Azevedo</td>
                <td>20190018746</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection