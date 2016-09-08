@extends('admin.layouts.app')

@section('title', 'Lista de usuarios')

@section('content')

<a href="{{ route('admin.users.create') }}" class="btn btn-info">Nuevo usuario</a>

<hr>
<div class="table-responsive">
	<table class="table table-striped table-hover"> 
		<thead> 
			<tr> 
				<th>ID</th> 
				<th>Nombre</th> 
				<th>Email</th>
				<th>Tipo</th> 
				<th class="text-right">Acción</th> 
			</tr> 
		</thead> 
		<tbody>

			@foreach($users as $user)
			<tr> 
				<td scope="row">{{ $user->id }}</td> 
				<td>{{ $user->name }}</td> 
				<td>{{ $user->email }}</td>
				<td>
					@if($user->type == "admin")
					<span class="label label-danger">{{ $user->type }}</span>
					@else
					<span class="label label-primary">{{ $user->type }}</span>
					@endif
				</td> 
				<td class="text-right">
					<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-wrench"></a> 
					<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('Seguro que quieres borrar el usuario - {{ $user->name }} - ?')" class="btn btn-danger" title="Borrar"><span class="glyphicon glyphicon-remove-circle"></span></a>
				</td> 
			</tr>
			@endforeach 

		</tbody> 
	</table>
</div>

<div class="text-center">
	{!! $users->render() !!}
</div>

@endsection