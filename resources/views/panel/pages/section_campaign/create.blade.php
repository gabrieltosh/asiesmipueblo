@extends('panel.layouts.layout_panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Secciones de Campaña</h1>
          </div>
          <div class="col-sm-6">
            <a href="{{route('section_campaign.index')}}" style="width: 100px" type="button" class="btn btn-block btn-default btn-sm float-right">Cancelar</a>
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
                <h3 class="card-title">Crear Seccion de Campaña</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('section_campaign.store') }}">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre Seccion" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" name="description" class="form-control"  placeholder="Descripción" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Prioridad</label>
                    <input type="number" name="priority" class="form-control"  placeholder="Prioridad" required>
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
