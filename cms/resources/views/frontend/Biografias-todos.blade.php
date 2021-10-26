     @extends('welcome')
     @section('content')

        
     <div class="row" id="articulos">
        <div class="container-fluid" >

            <h1 class="text-center text-info bg-info width=25px"><b>Biografias</b></h1>

            <hr>

            <ul>
            @foreach($biografias as $biografia)

                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-8">

                    <img src="storage/{{ $biografia->portada }}" class="img-thumbnail">
                    <h1>{!! $biografia->titulo !!}</h1>

                    <p class="max-height: 200px;">{!! $biografia->titulo!!}</p>

                    <a href="{{ url('Biografia/'.$biografia->id) }}">
                        
                    <button class="btn btn-default">Leer Biografía</button>
                    </a>

                    <hr>

                </li>

                @endforeach

               


            </ul>



        </div>

                       </div>


        @endsection

