@extends('layouts.app')

@push('alunos')
    active
@endpush

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #ededed;
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
        <h2 class="text-uppercase text-center mb-4">Editar</h2>
    </header>

    <form action="{{ route('alunos.update', $student->id) }}" method="post" enctype="multipart/form-data">

        @csrf
        {{ method_field('PUT') }}

        @include('students.form')
        
        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
    </form>
</div>
@endsection