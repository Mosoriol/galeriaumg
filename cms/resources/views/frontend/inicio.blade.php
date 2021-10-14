      @extends('welcome')
      @section('content')
        
        <div class="row">

            <div id="slide" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <ul>

                    @foreach($slide as $sli)
                    <li>
                        <img src="storage/{{ $sli->imagen }}">
                        <div class="slideCaption">
                            <h3>{{ $sli->titulo }}</h3>
                            <p>{{ $sli->descripcion }}</p>
                        </div>
                    </li>
                  @endforeach
                </ul>

                <div id="slideIzq"><span class="fa fa-chevron-left"></span></div>
                <div id="slideDer"><span class="fa fa-chevron-right"></span></div>

            </div>

        </div>

        <div class="row" id="articulos">

            <h1 class="text-center text-info bg-info w-50"><b>PROYECTOS</b></h1>

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
        <div class="row">
                
                <center><a href="{{ url('Proyectos-todos')}}"><button class="btn btn-primary btn-lg">Ver Todos los proyectos</button></a></center>
                
            </div>
<br>

        <div class="row" id="articulos">

            <h1 class="text-center text-info bg-info width=25px"><b>BIOGRAFIAS</b></h1>

            <hr>

            <ul>
            @foreach($proyectos as $proyecto)
                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <img src="#" class="img-thumbnail">
                    <h1></h1>
                    <p></p>
                    <a href="#">
                    <button class="btn btn-default">Leer Más</button>
                    </a>

                    <hr>

                </li>

                @endforeach


            </ul>



        </div>

            <div class="row">
                
                <center><a href="{{ url('Proyectos-todos')}}"><button class="btn btn-primary btn-lg">Ver Todas las biografías</button></a></center>
                
            </div>


    <footer class="row" id="contactenos">

            <hr>
            
            <h1 class="text-center" style="border: 5px solid darkred;" class="btn-lg"><b>CONTÁCTENOS</b></h1>

            <hr>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.3388724810866!2d-91.14779937833035!3d15.029361359344435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858bfe1d54d57481%3A0xd0c5e2aaae9fa64e!2sColegio%20Evang%C3%A9lico%20Metodista%20Utatl%C3%A1n!5e0!3m2!1ses-419!2sgt!4v1633752761931!5m2!1ses-419!2sgt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jumbotron">

                    <h4 class="blockquote-reverse text-primary">
                        <ul>
                          <li><span class="glyphicon glyphicon-phone"></span>  (502) 77550895</li>
                          <li><span class="glyphicon glyphicon-map-marker"></span>  Zona 1 santa cruz del Quiche</li>
                          <li><span class="glyphicon glyphicon-envelope"></span>  umgquiche@correo.com</li>    
                        </ul>      
                    </h4>
        
                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="formulario" >

                <ol>
                    <li>
                        <a href="http://www.facebook.com" target="_blank">
                        <i class="fa fa-facebook" style="font-size:24px;"></i>  
                        </a>
                    </li>

                    <li>
                        <a href="http://www.youtube.com" target="_blank">  
                        <i class="fa fa-youtube" style="font-size:24px;"></i>  
                        </a>
                    </li>
            
                    <li>
                        <a href="http://www.vimeo.com" target="_blank">
                        <i class="fa fa-vimeo" style="font-size:24px;"></i>  
                        </a>
                    </li>
                </ol>

                <form method="post" novalidate>

                        @csrf
                        <input type="text" name="nombre" class="form-control"  placeholder="Nombre">
    
                        <input type="email" name="email" class="form-control" placeholder="Email">

                        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Contenido del Mensaje" class="form-control"></textarea>

                     
                        <input type="submit" class="btn btn-default" value="Enviar">

                </form>
                                

            </div>

        </footer>
         @endsection