@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editar proyecto: {{ $proyectos->titulo }}</h1>
            
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

            <form method="post" action="{{ route('actualizar-proyecto', ['proyectos' =>$proyectos->id]) }}" enctype="multipart/form-data">

              @csrf
              @method('put')

              <h2>Título:</h2>
              <input type="text" class="form-control" name="titulo" value="{{$proyectos->titulo}}">

              <h2>Categoria:</h2>
              <select class="form-control" name="id_categoriaproyectos">
                
                <option value="{{ $proyectos->id_categoriaproyectos}}">Actual: {{$proyectos->categoriaproyectos->nombre }} </option>

                @foreach($categoriasproyectos as $categoriaproyectos)

                <option value="{{ $categoriaproyectos->id }}">{{ $categoriaproyectos->nombre }} </option>

                @endforeach

              </select>

              <h2>Portada actual:</h2>

              <img src="http://galeriaumg.test/cms/public/storage/{{$proyectos->portada }}" class="w-25">

              <input type="file" name="portadaNueva">

              <h2>Descripción:</h2>

              <textarea class="form-control" name="descripcion" >{{ $proyectos->descripcion }}</textarea>

              <br>

              <button type="submit" class="btn btn-success">Guardar</button>
              
        

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