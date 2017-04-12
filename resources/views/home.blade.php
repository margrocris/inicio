@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Mi correo es {{ auth()->user()->email }}
                    <br>
                    Mi nombre de usuario es {{ auth()->user()->nickname }}
                    <br>
                    La ultima actualizacion fue {{ auth()->user()->updated_at }}
                    <br>
                    El apelido paterno de la persona es {{ auth()->user()->person->fLastName }}
                    <br>
                    Mi edad es {{ auth()->user()->person->age }} anios
                    <br>
                    Mi genero es {{ auth()->user()->person->genero }}
                    <br>
                    Soy {{ auth()->user()->person->mayor }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                <div class="panel-body">

                    <li>
                        <a href="{{ route('admin.getCreateUser') }}">Crear usuarios</a>
                    </li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
