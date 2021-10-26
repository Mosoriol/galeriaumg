@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Inicio</h1>
            
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


            <div class="row">
            <div class="col-4 mr-5">

              <h2 class="bg-info">Logo actual:</h2>

              <img src="storage/{{$inicio->logo}}" class="img-responsive">

              @if(auth()->user()->rol == 'Administrador')

              <form method="post" enctype="multipart/form-data">

                 @csrf

                <h3>Cambiar logo</h3>

                <input type="file" name="logo" required="" >
                <br><br>
                <button type="submit" class="btn btn-success">Cambiar</button>
                

              </form>
              @endif

            </div>

            <div class="col-6">

              <h2 class="bg-info">Datos generales:</h2>  

              @if(auth()->user()->rol == 'Administrador')

               <form method="post"> 
                      @csrf

                <h3>Nombre de la página:</h3>
                <input type="text" class="form-control" name="nombre" value="{{$inicio->nombre}}" required="">
                <h3>Teléfonos de universidad:</h3>
                <input type="text" class="form-control" name="telefono" value="{{$inicio->telefono}}" required="">
                <h3>Correos de universidad:</h3>
                <input type="text" class="form-control" name="email" value="{{$inicio->email}}" required="">
                <h3>Dirección de universidad:</h3>
                <input type="text" class="form-control" name="direccion" value="{{$inicio->direccion}}" required="">
                <br><br>
                <button type="submit" class="btn btn-success">Guardar cambios</button>



              </form>

              @else
               <p class="btn-info">Nombre de la página: {{$inicio->nombre}}</p>
                 <p class="btn-info">Teléfonos: {{$inicio->telefono}}</p>
                  <p class="btn-info">Correo: {{$inicio->email}}</p>
                    <p class="btn-info">Dirección: {{$inicio->direccion}}</p>
               @endif


              

            </div>
            </div>

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