@extends('welcome')
@section('content')

	<div class="row">

    <center><img src="http://galeriaumg.test/cms/public/storage/{{ $proyecto->portada }}"></center>

    <h1 class="text-center text-info bg-info" ><b>{{ $proyecto->titulo }}</b></h1>

    <div class="col-12">
          <div class="container">
            <div class="text-center">


        <p style="padding: 15px">{{ $proyecto->descripcion }}</p>

    </div>

</div>
</div>
</div>

<div class="row" id="galeria">
    <div class="container">
            <div class="text-center">

            <hr>

            <h1 class="text-center text-info"><b>GALERÍA DE IMÁGENES</b></h1>

            <hr>

            <ul>

            @foreach($galerias as $img)
                <li>
                    <a rel="grupo" href="http://galeriaumg.test/cms/public//storage/{{ $img->imagen}}">
                    <img src="http://galeriaumg.test/cms/public//storage/{{ $img->imagen}}" class="center">
                    </a>
                </li>
                @endforeach

            </ul>

        </div>
        </div>
</div>



@endsection



