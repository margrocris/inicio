@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Usuarios</div>

                <div class="panel-body">

                    <table class="table table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Tipo</th>
                                <th>Correo Electronico</th>
                                <th>Activo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Charlie</td>
                                <td>Usuario</td>
                                <td>cha@hotmail.com</td>
                                <td>Si</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Juan</td>
                                <td>Administrador</td>
                                <td>juanito@hotmail.com</td>
                                <td>No</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
