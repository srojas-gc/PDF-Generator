@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div classclassName="card">
                    <div class="card-header"> Editar el contenido para el documento de <span style="font-weight:bold"> {{$task->name}}</span></div>

                    <form style="margin-top:15px" method="POST" action="{{route('content.update', $task)}} ">
                        {{ csrf_field() }} {{ method_field('PUT')}}                        

                        @for ($i = 1; $i <= $task->ContentCant; $i++)
                            <div class="form-row">
                                <div class="form-group col-md-12">

                                    @switch($i)

                                        @case(1)                                    
                                            <label for="contenido1">Contenido 1</label>
                                            
                                            {{-- <textarea id="summernote1" class="form-control summernote-sm" name="contenido1" rows="5"> --}}

                                            <textarea  class="ckeditor" name="contenido1" id="contenido1" rows="20" cols="80" placeholder="Contenido de la sección 1">
                                                {{old('contenido1' ,$task->contenido1)}}
                                            </textarea>
                                            @break

                                        @case(2)                                    
                                            <label for="contenido2">Contenido 2</label>
                                            <textarea  class="ckeditor" name="contenido2" id="contenido2" rows="20" cols="80" placeholder="Contenido de la sección 2">
                                                {{old('contenido2' ,$task->contenido2)}}
                                            </textarea>
                                            @break

                                        @case(3)                                    
                                            <label for="contenido3">Contenido 3</label>
                                            <textarea  class="ckeditor" name="contenido3" id="contenido3" rows="20" cols="80" placeholder="Contenido de la sección 3">
                                                {{old('contenido3' ,$task->contenido3)}}
                                            </textarea>
                                            @break  
                                        
                                        @case(4)                                    
                                            <label for="contenido4">Contenido 4</label>
                                            <textarea  class="ckeditor" name="contenido4" id="contenido4" rows="20" cols="80" placeholder="Contenido de la sección 4">
                                                {{old('contenido4' ,$task->contenido4)}}
                                            </textarea>
                                            @break

                                        @case(5)                                    
                                            <label for="contenido5">Contenido 5</label>
                                            <textarea  class="ckeditor" name="contenido5" id="contenido5" rows="20" cols="80" placeholder="Contenido de la sección 5">
                                                {{old('contenido5' ,$task->contenido5)}}
                                            </textarea>
                                            @break

                                        @case(6)                                    
                                            <label for="contenido6">Contenido 6</label>
                                            <textarea  class="ckeditor" name="contenido6" id="contenido6" rows="20" cols="80" placeholder="Contenido de la sección 6">
                                                {{old('contenido6' ,$task->contenido6)}}
                                            </textarea>
                                            @break

                                        @case(7)                                    
                                            <label for="contenido7">Contenido 7</label>
                                            <textarea  class="ckeditor" name="contenido7" id="contenido7" rows="20" cols="80" placeholder="Contenido de la sección 7">
                                                {{old('contenido7' ,$task->contenido7)}}
                                            </textarea>
                                            @break

                                        @case(8)                                    
                                            <label for="contenido1">Contenido 8</label>
                                            <textarea  class="ckeditor" name="contenido8" id="contenido8" rows="20" cols="80" placeholder="Contenido de la sección 8">
                                                {{old('contenido8' ,$task->contenido8)}}
                                            </textarea>
                                            @break

                                        @case(9)                                    
                                            <label for="contenido9">Contenido 9</label>
                                            <textarea  class="ckeditor" name="contenido9" id="contenido9" rows="20" cols="80" placeholder="Contenido de la sección 9">
                                                {{old('contenido9' ,$task->contenido9)}}
                                            </textarea>
                                        @break

                                            @case(10)                                    
                                            <label for="contenido10">Contenido 10</label>
                                            <textarea  class="ckeditor" name="contenido10" id="contenido3" rows="20" cols="80" placeholder="Contenido de la sección 10">
                                                {{old('contenido10' ,$task->contenido10)}}
                                            </textarea>
                                            @break

                                        @case(11)                                    
                                            <label for="contenido11">Contenido 11</label>
                                            <textarea  class="ckeditor" name="contenido11" id="contenido11" rows="20" cols="80" placeholder="Contenido de la sección 11">
                                                {{old('contenido11' ,$task->contenido11)}}
                                            </textarea>
                                            @break

                                        @case(12)                                    
                                            <label for="contenido12">Contenido 12</label>
                                            <textarea  class="ckeditor" name="contenido12" id="contenido12" rows="20" cols="80" placeholder="Contenido de la sección 12">
                                                {{old('contenido12' ,$task->contenido12)}}
                                            </textarea>
                                            @break

                                        @case(13)                                    
                                            <label for="contenido13">Contenido 13</label>
                                            <textarea  class="ckeditor" name="contenido13" id="contenido13" rows="20" cols="80" placeholder="Contenido de la sección 13">
                                                {{old('contenido13' ,$task->contenido13)}}
                                            </textarea>
                                            @break

                                        @case(14)                                    
                                            <label for="contenido14">Contenido 14</label>
                                            <textarea  class="ckeditor" name="contenido14" id="contenido14" rows="20" cols="80" placeholder="Contenido de la sección 14">
                                                {{old('contenido14' ,$task->contenido14)}}
                                            </textarea>
                                            @break

                                        @case(15)                                    
                                            <label for="contenido15">Contenido 15</label>
                                            <textarea  class="ckeditor" name="contenido15" id="contenido15" rows="20" cols="80" placeholder="Contenido de la sección 15">
                                                {{old('contenido15' ,$task->contenido15)}}
                                            </textarea>
                                            @break

                                        @case(16)                                    
                                            <label for="contenido16">Contenido 16</label>
                                            <textarea  class="ckeditor" name="contenido16" id="contenido16" rows="20" cols="80" placeholder="Contenido de la sección 16">
                                                {{old('contenido16' ,$task->contenido16)}}
                                            </textarea>
                                            @break

                                        @case(17)                                    
                                            <label for="contenido17">Contenido 17</label>
                                            <textarea  class="ckeditor" name="contenido17" id="contenido17" rows="20" cols="80" placeholder="Contenido de la sección 17">
                                                {{old('contenido17' ,$task->contenido17)}}
                                            </textarea>
                                            @break

                                        @case(18)                                    
                                            <label for="contenido18">Contenido 18</label>
                                            <textarea  class="ckeditor" name="contenido18" id="contenido18" rows="20" cols="80" placeholder="Contenido de la sección 18">
                                                {{old('contenido18' ,$task->contenido18)}}
                                            </textarea>
                                            @break
                                        
                                        @case(19)                                    
                                            <label for="contenido19">Contenido 19</label>
                                            <textarea  class="ckeditor" name="contenido19" id="contenido19" rows="20" cols="80" placeholder="Contenido de la sección 19">
                                                {{old('contenido19' ,$task->contenido19)}}
                                            </textarea>
                                            @break

                                        @case(20)                                    
                                            <label for="contenido20">Contenido 20</label>
                                            <textarea  class="ckeditor" name="contenido20" id="contenido20" rows="20" cols="80" placeholder="Contenido de la sección 20">
                                                {{old('contenido20' ,$task->contenido20)}}
                                            </textarea>
                                            @break
                                            
                                    @endswitch

                                </div>
                            </div>                            
                        @endfor
                        
                        {{-- @foreach($task->ContentCant as $contenido)
                            
                        @endforeach                         --}}

                        {{-- <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="contenido2">Contenido 2</label>
                                <textarea  class="ckeditor" name="contenido2" id="contenido2" rows="20" cols="80" placeholder="Contenido de la sección 2">
                                    {{old('contenido2',$task->contenido2)}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="contenido3">Contenido 3</label>
                                <textarea  class="ckeditor" name="contenido3" id="contenido3" rows="20" cols="80" placeholder="Contenido de la sección 3">
                                    {{old('contenido3',$task->contenido3)}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="contenido4">Contenido 4</label>
                                <textarea  class="ckeditor" name="contenido4" id="contenido4" rows="20" cols="80" placeholder="Contenido de la sección 4">
                                    {{old('contenido4',$task->contenido4)}}
                                </textarea>
                            </div>
                        </div> --}}

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;&nbsp; GENERAR PDF</button>
                            <a href="{{route('home')}}" class="btn btn-primary btn-danger"><i class="fa fa-window-close"></i></span>&nbsp;&nbsp; CERRAR</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>    

@endsection

@push('scripts')

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}
    {{-- <script src="/js/assets/jquery/jquery.min.js"></script> --}}
    

    <script>
        // $(function () {
        //     $('#summernote1').summernote();
        // });    
    </script>
    {{-- <script>
        $(document).ready(function() {
        $('#summernote1').summernote({
            height: 200
            });
        });
    </script> --}}

@endpush
