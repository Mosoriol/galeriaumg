@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="p-3 mb-2 bg-info text-white rounded-top text-center">Gestor de Proyectos</h1>

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
                          <th>Acciones</th>

                </tr>

              </thead>
              <tbody>
                @foreach($proyectos as $proyecto)

                <tr>
                  
                  <td>{{ $proyecto->titulo }}</td>
                  <td>{{ $proyecto->categoriaproyectos->nombre }}</td>
                  <td><img src="storage/{{ $proyecto->portada }}" class="w-50"></td>
                  <td>{{ $proyecto->descripcion }}</td>

                    <td>
                      <a href="{{ url('galeria/'.$proyecto->id) }}">

                        <button class="btn btn-success">Galeria</button><br>

                      </a>

                       <a href="{{ url('proyecto/'.$proyecto->id).'/edit' }}">

                        <button class="btn btn-primary">Editar</button><br>

                      </a>

                      <form method="post" action="{{ route('eliminar-proyecto' , ['proyectos' => $proyecto->id]) }}">
                        
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit" >Eliminar</button>

                      </form>

                    </td>

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