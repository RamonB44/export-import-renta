@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Estructura de venta para siscont</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight"><button class="btn btn-danger">Vaciar datos existentess</button></div>
                        <div class="p-2 bd-highlight"><button class="btn btn-primary">Exportar datos</button></div>
                        <div class="p-2 bd-highlight"><select class="form-control" name="cbo_table" id="cbo_table"><option value="m_quimi">Quimicos</option><option value="m_quimi">Diarios</option></select></div>
                    </div>
                    <hr>
                    <small><h5><label for="">Vista previa</label></h5></small>
                    <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">V.Origen</th>
                                <th scope="col">V.Numero</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Origen</th>
                                <th scope="col">Numero</th>
                                <th scope="col">Fecha Doc.</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">B. Imponible</th>
                                <th scope="col">...</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>...</td>
                              </tr>
                            </tbody>
                            <tfoot >

                            </tfoot>
                </table>
                    <div class="d-flex justify-content-end">
                    <a class="btn btn-success text-white" href="{{ route('getdata') }}">Descargar Excel</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
