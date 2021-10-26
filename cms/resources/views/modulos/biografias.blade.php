@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="p-3 mb-2 bg-info text-white rounded-top text-center">Gestor de Biografías</h1>

            <a href="{{ url('crear-biografia') }}">
              <button class="btn btn-primary">Agregar nueva Biografía</button>
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
                  
                  <th>Título</th>
                    <th>Categoria</th>
                      <th>Portada</th>
                        <th>Descripción</th>
                        <th>Video</th>
                          <th>Acciones</th>

                </tr>

              </thead>
              <tbody>
                @foreach($biografias as $biografia)

                <tr>
                  
                  <td>{{ $biografia->titulo}}</td>
                  <td>{{ $biografia->categoriab->nombre}}</td>
                  <td><img src="storage/{{ $biografia->portada }}" class="w-50"></td>
                  <td>{{ $biografia->descripcion }}</td>
                  <td>{{ $biografia->linkvideo }}</td>

                    <td>
                      <a href="{{ url('galeriab/'.$biografia->id) }}">

                        <button class="btn btn-success">Galeria</button><br>

                      </a>

                       <a href="{{ url('biografia/'.$biografia->id).'/edit' }}">

                        <button class="btn btn-primary">Editar</button><br>

                      </a>

                      <form method="post" action="{{ route('eliminar-biografia' , ['biografias' => $biografia->id]) }}">
                        
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