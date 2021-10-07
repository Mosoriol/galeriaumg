@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestor del slider</h1>
            
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

            <form method="post" enctype="multipart/form-data" novalidate="">

              @csrf

              <div class="row">
                
                <div class="col-8">

                  <h2>Titulo slide</h2>
                  <input type="text" name="titulo" class="form-control">
              </div>


              <div class="col-8">

                  <h2>Descripcion</h2>
                  <input type="text" name="descripcion" class="form-control">
              </div>

              <div class="col-8">

                  <h2>Imagen</h2>
                  <input type="file" name="imagen">
              </div>

              <br>
              <br>
                <div class="col-8">
                    <br>
              <br>
              <button type="submit" class="btn btn-primary">Agregar al slide</button>
              </div>
              </div>
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