@extends('admin.layouts.app')

@section('title', 'Login')

@section('content')

<div class="col-md-4 col-md-push-4">

  {!! Form::open(['url' => '/login', 'method' => 'POST']) !!}
  {{ csrf_field() }}

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
     {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
     {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introduce tu email', 'required'] ) !!}
     @if ($errors->has('email'))
     <span class="help-block">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group">
   {!! Form::label('password', 'Contraseña') !!}
   {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Introduce una contraseña', 'required'] ) !!}
   @if ($errors->has('password'))
   <span class="help-block">
    <strong>{{ $errors->first('password') }}</strong>
  </span>
  @endif
</div>

<div class="form-group">

  {!! Form::checkbox('Recuerdame') !!}
  {!! Form::label('Recuérdame') !!}

</div>


<div class="form-group">
 {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>


{!! Form::close() !!}

</div>
@endsection
