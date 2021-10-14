@extends('plantilla')

@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0 text-dark">Galeria de proyectos:<b>{{ $proyecto->titulo }}</h1>

              <br>

              <form method="post" enctype="multipart/form-data">

                @csrf

                <input type="file" name="imagen" required="">
                <br><br>

                <button type="submit" class="btn btn-primary">Agregar imagen</button>
                

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

	<div class="col-12">

			<div class="card">

					<div class="card-body">
            <div class="row">

              @foreach($galerias as $img)

              <div class="col-md-3">
                
                <img src="http://galeriaumg.test/cms/public/storage/{{ $img->imagen }}" class="w-50">

                    <form method="post" action="{{ url('eliminar-img/'.$img->id) }}">

                      @csrf
                      @method('delete')
                       <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </form>

              </div>
              
              @endforeach

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