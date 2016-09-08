<div class="callme-container">
	<div class="icon-container">
		<div class="icon">
			<i class="fa fa-phone"></i>
		</div>
	</div>
	<div class="action-container">
		<div class="action">
			<span>¿Te llamamos?</span>

			<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>

			{!! Form::open(['route' => 'front.index.callme', 'method' => 'POST', 'data-toggle' => 'validator']) !!}
			
			{!! Form::number('phone', null, ['required', 'class' => 'field', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduce tu teléfono y un agente se pondrá en contacto contigo']) !!}

			{!! Form::submit('', ['class' => 'hidden-xs hidden-md hidden-lg']) !!}

			{!! Form::close() !!}

		</div>
	</div>
</div>