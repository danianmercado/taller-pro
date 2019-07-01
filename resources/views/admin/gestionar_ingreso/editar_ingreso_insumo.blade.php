@extends('admin.template.app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3">

            <form action="{{route('admin.ingreso_insumo.modificar',[$ingreso_insumo->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Ingrese la cantidad</span>
                        <div class="row">

                            <div class="col s12 input-field">
                                <select name="id_producto">
                                    <option value="{{$ingreso_insumo->insumo->id}}" disabled selected>{{$ingreso_insumo->id_producto}}</option>
                                    @foreach($insumos as $insumo)
                                        @if ($insumo->Tipo_producto=='I')
                                            <option value="{{$insumo->id}}">{{$insumo->Nombre}}</option>
                                        @endif
                                    @endforeach
                                </select>

                            </div>

                            <div class="col s12 input-field">
                                <select name="id_almacen">
                                    <option value="{{$ingreso_insumo->id_almacen}}">{{$ingreso_insumo->id_almacen}}</option>
                                    @foreach($almacenes as $almacen)
                                        <option value="{{$almacen->id}}">{{$almacen->id}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col s12 input-field">
                                <textarea  id="Cantidad" name="Cantidad" type="text" class="materialize-textarea"></textarea>
                                <label for="Cantidad">Cantidad:</label>
                                {!! $errors->first('Cantidad','<span class="help-block red-text">Esta información es obligatoria.') !!}
                            </div>




                            <div class="row">
                                <div class="col s12 right-align">
                                    <a href="{{route('admin.insumo.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
                                    <button class="btn positive-primary-color" type="submit">registrar</button>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </form>


        </div>
    </div>
@endsection
