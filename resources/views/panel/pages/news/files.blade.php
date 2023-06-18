@extends('panel.layouts.layout_panel')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Campañas</h1>
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
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Añadir Imagenes</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('news.files_store', [$id_news]) }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Imagen</label>
                                        <input type="file" class="form-control" name="files[]" required multiple>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Subir</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Images Subidas</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($files as $file)
                                        <div class="col-sm-2 text-center">
                                            <a href="{{ asset('assets/images/news/' . $file->name) }}"
                                                data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                <img src="{{ asset('assets/images/news/' . $file->name) }}"
                                                    class="img-fluid mb-2" alt="white sample" />
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#modal-default-{{ $file->id }}">
                                                Eliminar
                                            </button>
                                        </div>
                                        <div class="modal fade" id="modal-default-{{ $file->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Eliminar Imagen</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>¿Esta seguto de eliminar la Imagen?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Cerrar</button>
                                                        <a href="{{ route('news.files_delete', [$id_news, $file->id]) }}"
                                                            type="button" class="btn btn-danger">Eliminar</a>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
