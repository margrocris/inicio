@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio de Sesion</div>
                <div class="panel-body">

                    @include('partials.errors')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">

                            {!! Form::label(
                                'nickname',
                                'Usuario',
                                ['class' => 'col-md-4 control-label']) !!}

                            {!! Form::text('nickname', old('nickname'), [
                                'class' => 'col-md-4 form-label',
                                'placeholder' => 'Usuario']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label(
                                'password',
                                'Contrasena',
                                ['class' => 'col-md-4 control-label']) !!}


                            {!! Form::password('password', [
                                'class' => 'col-md-4 form-label',
                                'placeholder' => 'Contrasena']) !!}

                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>

                                {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">--}}
                                    {{--Forgot Your Passwordsssss?--}}
                                {{--</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
