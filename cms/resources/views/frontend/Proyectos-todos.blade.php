     @extends('welcome')
     @section('content')

        
     <div class="row" id="articulos">
        <div class="container">
            <div class="text-center">

            <h1 class="text-center text-info bg-info width=25px"><b>Proyectos</b></h1>

            <hr>

            <ul>
            @foreach($proyectos as $proyecto)
                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <img src="storage/{{ $proyecto->portada }}" class="img-thumbnail">
                    <h1>{{ $proyecto->titulo }}</h1>
                    <p>{{ $proyecto->descripcion }}</p>

                    <a href="{{ url('Proyecto/'.$proyecto->id) }}">
                        
                    <button class="btn btn-default">Leer Más</button>
                    </a>

                    <hr>

                </li>



                @endforeach




            </ul>


            




        </div>
        </div>
        </div>

        @endsection