@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div classclassName="card">
                    <div class="card-header"> Edición de los datos de cabecera para el documento de <span style="font-weight:bold"> {{$task->name}}</span></div>

                    <form style="margin-top:15px" method="POST" action="{{route('content.updateCant', $task)}} ">
                        {{ csrf_field() }} {{ method_field('PUT')}}
                        <div class="form-row">

                            <input id="name" name="name" type="hidden" value={{$task->name}}>

                            <div class="form-group col-md-6">
                                <label for="nameCreador">Preparador</label>                                
                                <input type="text" class="form-control" placeholder="Nombre del Preparador" name="nameCreador" value="{{ $task->nameCreador}}">                            
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="ContentCant">Cantidad de contenidos a cargar</label>                               
                                <br>        
                                <input                                
                                    type="number"
                                    min="2" 
                                    max="20"
                                    name="ContentCant"
                                    value="{{ $task->ContentCant}}"
                                    class="form-control"
                                    required
                                />
                            </div>

                            <div class="form-group col-md-6" align="center">
                                <label for="fecha_emision">Fecha de emisión</label>
                                <br>                                
                                <input 
                                    id="fecha_emision" 
                                    name="fecha_emision" 
                                    class="form-control datepicker"
                                    value="{{old('fecha_emision', date("Y-m-d\TH:i:s", strtotime($task->fecha_emision)))}}" 
                                    type="datetime-local" 
                                    min="2020-01-01T00:00"
                                >
                            </div>

                            <div class="form-group col-md-6" align="center">
                                <label for="valido_hasta">Válido Hasta</label>
                                <br>
                                <input 
                                    id="valido_hasta" 
                                    name="valido_hasta" 
                                    class="form-control datepicker"
                                    value="{{old('valido_hasta', date("Y-m-d\TH:i:s", strtotime($task->valido_hasta)))}}" 
                                    type="datetime-local" 
                                    min="2021-01-01T00:00"
                                >
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp; GUARDAR Y PASAR A LOS CONTENIDOS</button>
                            <a href="{{url()->previous()}}" class="btn btn-primary btn-danger"><i class="fa fa-window-close"></i></span>&nbsp;&nbsp; Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>    

@endsection
