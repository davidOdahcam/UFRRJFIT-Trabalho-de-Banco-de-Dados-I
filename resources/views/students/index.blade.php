@extends('layouts.app')

@push('alunos')
    active
@endpush

@section('content')
<div class="box">
	<header class="row mb-4">
		<div class="col"><h2 class="text-uppercase mb-2 mb-md-0">Alunos</h2></div>
		<div class="col text-center text-md-right"><a href="{{ route('alunos.create') }}" class="btn btn-success text-uppercase">Cadastrar novo</a></div>
	</header>
	
	<div class="scroll">
		<table class="table">
			<thead>
				<tr class="thead-dark">
					<th scope="col" class="text-center">Matrícula</th>
					<th scope="col">Nome</th>
					<th scope="col">Instrutor</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			
			<tbody>
				@forelse ($students as $student)
				<tr>
					<th scope="row" class="text-center">{{ $student->id }}</th>
					<td>{{ $student->name }}</td>
					<td>{{ $student->instructor->name ?? 'Sem instrutor'}}</td>
					<td>
						<a href="" data-toggle="modal" data-target="#modalStudent_{{ $student->id }}" class="btn btn-dark mb-2">Ver</a>
						<a href="{{ route('alunos.edit', $student->id) }}" class="btn btn-primary mb-2">Editar</a>
						<button type="submit" form="delete{{$student->id}}" name="delete" value="{{ $student->id }}" class="btn btn-danger mb-2" data-toggle="tooltip" title="Deletar Aluno">Remover</button>
						<form method="post" action="{{ route('alunos.destroy', $student->id) }}" id="delete{{$student->id}}" class="form-delete-student">
							@csrf
							{{ method_field('DELETE') }}
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<th scope="row" colspan="4" class="text-muted text-center">Nenhum aluno cadastrado!</th>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>

<!-- MODAL DO ALUNO -->
@foreach ($students as $student)
<div class="modal fade" id="modalStudent_{{ $student->id }}" tabindex="-1" aria-labelledby="modalStudent" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Dados do Aluno</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<span><strong>Matrícula:</strong> {{ $student->id }}</span>
				<span><strong>Nome:</strong> {{ $student->name }}</span>
				<span><strong>CPF:</strong> {{ $student->cpf }}</span>
				<span><strong>Instrutor:</strong> {{ $student->instructor->name ?? 'Sem instrutor' }}</span>
				<span><strong>Data de Nascimento:</strong> {{ $student->birthdate }}</span>
				<span><strong>Sexo:</strong> {{ $student->sex }}</span>
				<span><strong>Endereço:</strong> {{ $student->address }}</span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<a href="{{ route('alunos.edit', $student->id) }}" class="btn btn-success">Editar</a>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection
