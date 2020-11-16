@extends('layouts.app')

@push('instrutores')
    active
@endpush

@section('content')
<div class="box">
	<header class="row mb-4">
		<div class="col"><h2 class="text-uppercase mb-2 mb-md-0">Instrutores</h2></div>
		<div class="col text-center text-md-right"><a href="{{ route('instrutores.create') }}" class="btn btn-success text-uppercase">Cadastrar novo</a></div>
	</header>
	
	<div class="scroll">
		<table class="table">
			<thead>
				<tr class="thead-dark">
					<th scope="col" class="text-center">Matrícula</th>
					<th scope="col">Nome</th>
					<th scope="col">CPF</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			
			<tbody>
				@forelse ($instructors as $instructor)
				<tr>
					<th scope="row" class="text-center">{{ $instructor->id }}</th>
					<td>{{ $instructor->name }}</td>
					<td>{{ $instructor->cpf }}</td>
					<td>
						<a href="" data-toggle="modal" data-target="#modalInstructor_{{ $instructor->id }}" class="btn btn-dark mb-2">Ver</a>
						<a href="{{ route('instrutores.edit', $instructor->id) }}" class="btn btn-primary mb-2">Editar</a>
						<button type="submit" form="delete{{$instructor->id}}" name="delete" value="{{ $instructor->id }}" class="btn btn-danger mb-2" data-toggle="tooltip" title="Deletar Instrutor">Remover</button>
						<form method="post" action="{{ route('instrutores.destroy', $instructor->id) }}" id="delete{{$instructor->id}}" class="form-delete-instructor">
							@csrf
							{{ method_field('DELETE') }}
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<th scope="row" colspan="4" class="text-muted text-center">Nenhum instrutor cadastrado!</th>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>

<!-- MODAL DO INSTRUTOR -->
@foreach ($instructors as $instructor)
<div class="modal fade" id="modalInstructor_{{ $instructor->id }}" tabindex="-1" aria-labelledby="modalInstructor" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Dados do Instrutor</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<span><strong>Matrícula:</strong> {{ $instructor->id }}</span>
				<span><strong>Nome:</strong> {{ $instructor->name }}</span>
				<span><strong>CPF:</strong> {{ $instructor->cpf }}</span>
				<span><strong>Data de Nascimento:</strong> {{ $instructor->birthdate }}</span>
				<span><strong>Sexo:</strong> {{ $instructor->sex }}</span>
				<span><strong>Endereço:</strong> {{ $instructor->address }}</span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<a href="{{ route('instrutores.edit', $instructor->id) }}" class="btn btn-success">Editar</a>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection