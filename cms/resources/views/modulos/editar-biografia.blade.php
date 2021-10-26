@extends('plantilla')

@section('content')
<script src="http://galeriaumg.test/cms/public/vendors/ckeditor/ckeditor.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editar biografía: {{ $biografias->titulo }}</h1>
            
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

            <form method="post" action="{{ route('actualizar-biografia', ['biografias' =>$biografias->id]) }}" enctype="multipart/form-data">

              @csrf
              @method('put')

              <h2>Título:</h2>
              <input type="text" class="form-control" name="titulo" value="{{$biografias->titulo}}">

              <h2>Categoria:</h2>
              <select class="form-control" name="id_categoriab">
                
                <option value="{{ $biografias->id_categoriab}}">Actual: {{$biografias->categoriab->nombre }} </option>

                @foreach($categoriasb as $categoriab)

                <option value="{{ $categoriab->id }}">{{ $categoriab->nombre }} </option>

                @endforeach

              </select>

              <h2>Portada actual:</h2>

              <img src="http://galeriaumg.test/cms/public/storage/{{$biografias->portada }}" class="w-25">

              <input type="file" name="portadaNueva">

              <h2>Descripción:</h2>
              <textarea  name="descripcion"  class="ckeditor"  id="editor1" rows="10" cols="80" >{!! $biografias->descripcion!!}</textarea>

               <h2>Video:</h2>
              <input type="text" class="form-control" name="linkvideo" value="{{$biografias->linkvideo}}">

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