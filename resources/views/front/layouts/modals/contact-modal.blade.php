<div id="contact-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h2 id="myModalLabel" class="text-center">¿En que podemos ayudarte?</h2>
				<p class="text-center">Completa nuestro formulario y nos pondremos en contacto muy pronto</p>
			</div>
			<div class="modal-body">

				{!! Form::open(['route' => 'front.index.form', 'method' => 'POST', 'class' => 'form-horizontal col-sm-12', 'form' => '2']) !!}

				{{ Form::hidden('type', 'modal') }}

				<div class="form-group">

					{!! Form::label('name', 'Nombre')!!}

					{!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Tu nombre...']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('email', 'E-mail')!!}
					{!! Form::text('email', null, ['required', 'class'=>'form-control', 'placeholder'=>'E-mail...']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('message', 'Mensaje') !!}
					{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => '¿En que podemos ayudarte?']) !!}
				</div>

				<div class="form-group text-center">
					{!! Form::submit('Enviar', ['class' => 'btn btn-highlight btn-lg']) !!}
					{!! Form::button('Cancelar', ['class' => 'btn btn-lg btn_transparent', 'data-dismiss' => 'modal']) !!}
				</div>

				{{ Form::close() }}

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>