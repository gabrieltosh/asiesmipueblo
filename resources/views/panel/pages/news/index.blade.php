@extends('panel.layouts.layout_panel')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <p style="font-size:20px"><strong>Noticias</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{route('news.create')}}" style="width: 100px" type="button" class="btn btn-block btn-primary btn-sm float-right">Crear</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Lista de Registros</h3>

                                <!--<div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 10px">#</th>
                                            <th class="text-center">Titulo</th>
                                            <th class="text-center">Tipo Noticia</th>
                                            <th class="text-center">Fecha de Noticia</th>
                                            <th style="width: 40px">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->id }}</td>
                                                <td class="text-center">{{ $item->title }}</td>
                                                <td class="text-center">{{ ucwords($item->kind_news)}}</td>
                                                <td class="text-center">{{$item->new_date}}</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{route('news.files',$item->id)}}" class="btn btn-sm btn-default">
                                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{route('news.edit',$item->id)}}" class="btn btn-sm btn-primary">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default-{{$item->id}}">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                </td>
                                            </tr>
                                            <div class="modal fade" id="modal-default-{{$item->id}}">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h4 class="modal-title">Eliminar Registro</h4>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <p>¿Esta seguto de eliminar el registro?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                      <a href="{{route('news.delete',$item->id)}}" type="button" class="btn btn-danger">Eliminar</a>
                                                    </div>
                                                  </div>
                                                  <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                              </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
