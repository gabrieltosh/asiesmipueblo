@extends('panel.layouts.layout_panel')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-3"></div>
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Actualizar Noticia</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('news.update',$new->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titulo Noticia</label>
                                        <input type="text" class="form-control" name="title"
                                            placeholder="Titulo Campaña" required value="{{$new->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tipo Recurso</label>
                                        <select name="type" id="type" class="form-control" required>
                                            @if ( $new->type=='video')
                                                <option value="video" selected>Video</option>
                                            @else
                                                <option value="video" >Video</option>
                                            @endif
                                            @if ( $new->type=='image')
                                                <option value="image" selected>Imagen</option>
                                            @else
                                                <option value="image">Imagen</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Recurso</label>
                                        <input id="resource_file" type="file" class="form-control" name="resource_name_file"
                                             >
                                        <input id="resource_text" type="text" class="form-control" name="resource_name_text"
                                            placeholder="Frame Video Facebook" value="{{$new->resource_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fecha de Noticia</label>
                                        <input id="new_date" type="date" class="form-control" name="new_date"
                                        value="{{$new->new_date}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Clase de Noticia</label>
                                        <select name="kind_news" id="kind_news" class="form-control" required>
                                            @if ( $new->type=='ultimo')
                                                <option value="ultimo" selected>Lo ultimo</option>
                                            @else
                                                <option value="ultimo">Lo ultimo</option>
                                            @endif
                                            @if ( $new->type=='destacado')
                                                <option value="destacado" selected>Lo mas destacado</option>
                                            @else
                                                <option value="destacado">Lo mas destacado</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Descripción</label>
                                        <textarea id="summernote" name="description" required>
                                            {{$new->description}}
                                        </textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <div class="col-md-3"></div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
    <script>
        var inputType = document.getElementById("type");
        var inputResourceFile = document.getElementById("resource_file");
        var inputResourceText = document.getElementById("resource_text");

        if(inputType.value=='image'){
            inputResourceText.style.display='none'
            inputResourceFile.style.display='block'
        }
        if(inputType.value=='video'){
            inputResourceText.style.display='block'
            inputResourceFile.style.display='none'
        }
        inputType.addEventListener("change", function() {
            // código que se ejecutará cuando el usuario seleccione una nueva opción
            var valueType = inputType.value;
            if(valueType == 'image'){
                inputResourceText.style.display='none'
                inputResourceFile.style.display='block'
            }
            if(valueType == 'video'){
                inputResourceFile.style.display='none'
                inputResourceText.style.display='block'
            }
        });
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endsection
