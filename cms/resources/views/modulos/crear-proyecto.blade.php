@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear nuevo proyecto</h1>
            
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

            <form method="post" enctype="multipart/form-data">
              @csrf

              <h2>Titulo</h2>
              <input type="text" name="titulo" class="form-control">

              <h2>Categoria</h2>

              <select name="id_categoriaproyectos" class="form-control">

              <option value="">Seleccionar..</option>

              @foreach($categoriasproyectos as $categoriaproyectos)

              <option value="{{ $categoriaproyectos->id }}">{{ $categoriaproyectos->nombre }}</option>

              @endforeach

              </select>

              <h2>Portada</h2>
              <input type="file" name="portada">

              <h2>Descripcion del proyecto</h2> <textarea name="descripcion"
              class="form-control"></textarea>

              <br>

              <button type="submit" class="btn btn-primary">Crear proyecto</button>

            </form>

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