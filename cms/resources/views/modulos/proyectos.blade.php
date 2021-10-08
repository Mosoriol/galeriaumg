@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestor de Proyectos</h1>

            <a href="{{ url('crear-proyecto') }}">
              <button class="btn btn-primary">Agregar nuevo proyecto</button>
            </a>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      	<div class="row">

	<div class="col-12">

			<div class="card">

					<div class="card-body">

            <table class="table table-bordered table-hover table-striped">
              <thead>
                
                <tr>
                  
                  <th>Titulo</th>
                    <th>Categoria</th>
                      <th>Portada</th>
                        <th>Descripcion</th>
                          <th></th>

                </tr>

              </thead>
              <tbody>
                @foreach($proyectos as $proyecto)

                <tr>
                  
                  <td>{{ $proyecto->titulo }}</td>
                  <td>{{ $proyecto->categoriaproyectos->nombre }}</td>
                  <td><img src="storage/{{ $proyecto->portada }}" class="w-50"></td>
                  <td>{{ $proyecto->descripcion }}</td>

                    <td></td>

                </tr>

                @endforeach

              </tbody>

            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

@endsection