@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Usuarios</div>

                <div class="panel-body">

                    {!! Form::open(['route' => 'admin.postCreateUser', 'method' => 'POST']) !!}

                    <div class="form-group">
                        {!! Form::label('id', 'Carnet de Indentidad', ['class' => 'col-lg-3 control-label']) !!}
                        {!! Form::text('id') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('nickname', 'Usuario', ['class' => 'col-lg-3 control-label']) !!}
                        {!! Form::text('nickname', old('nickname'), ['class' => 'col-lg-7 control-label']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('type', 'Tipo', ['class' => 'col-lg-3 control-label']) !!}
                        {!! Form::select('type', [
                            'admin' => 'administrador',
                            'user'  => 'usuario',
                            'guest' => 'invitado'
                        ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Correo electronico', ['class' => 'col-lg-3 control-label']) !!}
                        {!! Form::email('email', old('email')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Contrasena', ['class' => 'col-lg-3 control-label']) !!}
                        {!! Form::password('password', old('password')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Guardar datos') !!}
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
