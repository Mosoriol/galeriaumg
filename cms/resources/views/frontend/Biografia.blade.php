@extends('welcome')
@section('content')
		
	<div class="row">

    <center><img src="http://galeriaumg.test/cms/public/storage/{{ $biografia->portada }}"></center>
            
    <h1 class="text-center text-info bg-info" ><b>{{ $biografia->titulo }}</b></h1>

   

        <div class="container-fluid" >

            <div class="text-justify" class="col-4">

        <p style="padding: 15px" >{!! $biografia->descripcion !!}</p>
        
            </div>


                    <div class="text-center">

                    <iframe width="761" height="521" src="{{ $biografia->linkvideo }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
        
        </div>



</div>

<div class="row" id="galeria">
    <div class="container-fluid" class="max-height: 200px;">
            <div class="text-center">

            <hr>
            
            <h1 class="text-center text-info"><b>GALERÍA DE IMÁGENES</b></h1>

            <hr>

            <ul>

            @foreach($galeriasb as $img)
                <li>
                    <a rel="grupo" href="http://galeriaumg.test/cms/public//storage/{{ $img->imagen}}">
                    <img src="http://galeriaumg.test/cms/public//storage/{{ $img->imagen}}">
                    </a>
                </li>
                @endforeach
            </ul>

        </div>
        </div>
        </div>



@endsection



