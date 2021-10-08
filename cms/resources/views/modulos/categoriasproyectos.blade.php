@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="p-3 mb-2 bg-info text-white rounded-top text-center">Categoria proyectos</h1>
            <br>
            <form method="post">

              @csrf
              <div class="row">
                <div class="col-md-8">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre de Categoria" required="">
                  
                </div>

                <div class="col-md-4">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                  

                </div>
                

              </div>
              



            </form>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      	<div class="row">

	<div class="col-8">

			<div class="card">

					<div class="card-body">

            @foreach($categoriasproyectos as $categoriaproyectos)
            <form method="post" action="{{ url('categoriaproyectos/'.$categoriaproyectos->id) }}">

              @csrf
              @method('put')
              

           
            <div class="row">
              <div class="col-md-8">
                <input type="text" name="nombre" value="{{ $categoriaproyectos->nombre }}" class="form-control">
                
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-success">Guardar</button>

              </div>
              
          </form>
          <div class="col-md-2">

            <form method="post" action="{{ url('ctg/'.$categoriaproyectos->id) }}">

              @csrf
              @method('delete')

              <button type="submit" class="btn btn-danger">Eliminar</button>
              

            </form>
            
            </div>

          </div>

          <br>
          @endforeach

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