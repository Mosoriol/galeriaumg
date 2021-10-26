@extends('plantilla')

@section('content')

<script src="http://galeriaumg.test/cms/public/vendors/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="p-3 mb-2 bg-info text-white rounded-top text-center">Crear nueva biografía</h1>
            
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

              <h2>Título</h2>
              <input type="text" name="titulo" class="form-control">

              <h2>Categoría</h2>

              <select name="id_categoriab" class="form-control">

              <option value="">Seleccionar..</option>

              @foreach($categoriasb as $categoriab)

              <option value="{{ $categoriab->id }}">{{ $categoriab->nombre }}</option>

              @endforeach

              </select>

              <h2>Portada</h2>
              <input type="file" name="portada">

              <h2>Descripcion de la biografía</h2> <textarea class="ckeditor"  name="descripcion"
                id="editor1" rows="10" cols="80"></textarea>

              <h2>Link de video</h2>


              <input type="text" name="linkvideo" class="form-control">

              <br>

              <button type="submit" class="btn btn-primary">Crear biografía</button>

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