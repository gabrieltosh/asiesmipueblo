@extends('panel.layouts.layout_panel')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Crear Noticia</h1>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('news.index') }}" style="width: 100px" type="button"
                            class="btn btn-block btn-default btn-sm float-right">Cancelar</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

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
                                <h3 class="card-title">Crear Campaña</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('campaign.detail.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titulo Noticia</label>
                                        <input type="text" class="form-control" name="title"
                                            placeholder="Titulo Campaña" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tipo Recurso</label>
                                        <select name="type" id="type" class="form-control" required>
                                            <option value="video">Video</option>
                                            <option value="image">Imagen</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Recurso</label>
                                        <input id="resource_file" type="file" class="form-control" name="resource_name_file"
                                             >
                                        <input id="resource_text" type="text" class="form-control" name="resource_name_text"
                                            placeholder="Frame Video Facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fecha de Noticia</label>
                                        <input id="campaign_date" type="date" class="form-control" name="campaign_date"
                                             >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Clase de Noticia</label>
                                        <select name="section_id" id="section_id" class="form-control" required>
                                            <option value="ultimo">Lo ultimo</option>
                                            <option value="destacado">Lo mas destacado</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Descripción</label>
                                        <textarea id="summernote" name="description" required>
                                        </textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Crear</button>
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
