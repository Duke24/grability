@extends('frontend.main')
@section('contenido')

    <div align="center" class="form-horizontal">
        <form method="POST" action="{{url('crearM')}}">
            <input type="hidden"name="action" value="crear">
            <fieldset>
                <h1>Formulario Test</h1>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tamaño de la Matriz</label>
                    <div class="col-md-4">
                        <input id="tamano" name="tamano" type="number"  min="1" max="100" placeholder="Define Matriz" class="form-control input-md"  required>
                        {{$errors->first('tamano')}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Numero de Operaciones</label>
                    <div class="col-md-4">
                        <input id="operaciones" name="operacionse" type="number"  min="1" max="1000" placeholder="Cantidad de Operaciones" class="form-control input-md" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="success">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <div class="col-md-6">
            <div class="form-horizontal">
                <h1>Actualizacion</h1>
                <form method="POST" action="{{url('crearM')}}">
                    <input type="hidden"name="action" value="actualizar">
                    <div class="form-group">
                        <label class="col-md-4">W</label>
                        <div class="col-md-4">
                            <input type="number"  min="-109" max="109"  name="w" id="w" class="form-control">
                            {{$errors->first('w')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">X</label>
                        <div class="col-md-4">
                            <input type="number"  name="x" id="x" class="form-control">
                            {{$errors->first('x')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Y</label>
                        <div class="col-md-4">
                            <input type="number" name="y" id="y" class="form-control">
                            {{$errors->first('y')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Z</label>
                        <div class="col-md-4">
                            <input type="text" name="z" id="z" class="form-control">
                            {{$errors->first('z')}}
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="success">
                            <button  class="btn btn-success">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-horizontal">
                <h1>Consulta</h1>
                <form method="POST" action="{{url('crearM')}}">
                    <input type="hidden"name="action" value="consultar">
                    <div class="form-group">
                        <label class="col-md-3">x1</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                        <label class="col-md-3">x2</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Y1</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                        <label class="col-md-3">Y2</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">z1</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                        <label class="col-md-3">z2</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">

                        <div class="success">
                            <button class="btn btn-warning">Consultar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <pre>Consulta{{var_dump(Session::get('suma'))}}</pre>
    <pre>matriz{{var_dump(Session::get('arreglo'))}}</pre>


@stop