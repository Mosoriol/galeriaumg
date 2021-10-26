@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="p-3 mb-2 bg-info text-white rounded-top text-center" >Gestor del slider</h1>
            
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

                  <h2 >Título para slide:</h2>
                  <input type="text" name="titulo" class="form-control">
              </div>


              <div class="col-8">

                  <h2 >Descripción:</h2>
                  <input type="text" name="descripcion" class="form-control">
              </div>

              <div class="col-8">

                  <h2 >Imagen</h2>
                  <input type="file" name="imagen" >
              </div>

              <br>
              <br>
                <div class="col-8" class="text-center">
                    <br>
              <br>
              <button type="submit" class="btn btn-success text-center">Agregar al slider</button>
              </div>
              </div>
            </form>

          </div>

<div class="card-body">
  <table class="table table=bordered table-hover table-striped">
    <thead>
      
<tr>
  <th>Título</th>
   <th>Descripción</th>
    <th>Imagen</th>
     <th></th>

</tr>
  </thead>


  <tbody>

    @foreach($slide as $sli)

      <tr>
      <td>{{ $sli->titulo }}</td>
      <td>{{ $sli->descripcion }}</td>
      <td><img src="storage/{{ $sli->imagen }}"class="w-50"></td>

      <td>

        <form method="post" action="{{ url('/slide/'.$sli->id)}}">

          @csrf

          @method('delete')
          

 <button class="btn btn-danger"> <i class="fa fa-trash"></i></button>

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