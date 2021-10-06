@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear usuario</h1>
            
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
            <form method="post" novalidate="">
            @csrf

            <h2>Nombre</h2>
            <input type="text" name="name" class="form-control">

            <h2>Correo electronico</h2>

            <input type="email" name="email" class="form-control @error('email') 
            is-invalid @enderror">

            @error ('email')

            <br>
            <p class="alert alert-danger">El correo ya esta registrado</p>
            @enderror

            <h2>Contraseña</h2>
            <input type="password" name="password" class="form-control">

            <h2>Rol</h2>
            <select name="rol" class="form-control">

              <option value="">Selecione el rol..</option>
              <option value="Administrador">Administrador</option>
              <option value="Editor">Editor</option>

            </select>
            <br>
            <button type="submit" class="btn btn-primary btn-lg">Crear usuario</button>

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