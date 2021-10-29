
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$inicio->nombre}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/icono.jpg">

    <link rel="stylesheet" href="http://galeriaumg.test/cms/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://galeriaumg.test/cms/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://galeriaumg.test/cms/public/css/style.css">
    <link rel="stylesheet" href="http://galeriaumg.test/cms/public/css/fonts.css">
    <link rel="stylesheet" href="http://galeriaumg.test/cms/public/css/cssFancybox/jquery.fancybox.css">

    <script src="http://galeriaumg.test/cms/public/js/jquery-2.2.0.min.js"></script>
    <script src="http://galeriaumg.test/cms/public/js/bootstrap.min.js"></script>
    <script src="http://galeriaumg.test/cms/public/js/jquery.fancybox.js"></script>
    <script src="http://galeriaumg.test/cms/public/js/animatescroll.js"></script>
    <script src="http://galeriaumg.test/cms/public/js/jquery.scrollUp.js"></script>
    <script src="http://galeriaumg.test/cms/public/js/script.js"></script>

</head>

<body>

    <div class="container-fluid">
        <div class="container" >

@include('frontend.menu')
@yield('content')

@if(Request::url() =='http://galeriaumg.test/cms/public')

<div class="row">
    <div class="container">

            <div id="slide" class="col-lg-12 col-md-8 col-sm-12 col-xs-8">
                
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

        <div class="text-center">
            
            

        <iframe width="1080" height="720" src="https://www.youtube.com/embed/8MIS_Sspido" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
        <div class="row" id="articulos">
            <div class="container">


            <h1 class="text-center text-info bg-success w-50" ><b>Proyectos realizados.</b></h1>

            <hr>

            <ul>
            @foreach($proyectos as $proyecto)

                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <img src="storage/{{ $proyecto->portada }}" class="img-thumbnail">

                    <h1>{{ $proyecto->titulo }}</h1>

                    <p>{{ $proyecto->titulo }}</p>

                    <a href="{{ url('Proyecto/'.$proyecto->id) }}">

               
                
               <button class="btn btn-default">Leer mas</button>
                
        

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
            <div class="container">

            <h1 class="text-center text-info bg-info width=25px"><b>Biografías de egresados.</b></h1>

            <hr>

            <ul>
            @foreach($biografias as $biografia)
                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <img src="storage/{{ $biografia->portada }}" class="img-thumbnail">
                    <h1>{!!$biografia->titulo !!}</h1>
                    <p>{!!$biografia->titulo !!}</p>
                    <a href="{{ url('Biografia/'.$biografia->id) }}">
                    <button class="btn btn-default">Leer Más</button>
                    </a>

                    <hr>

                </li>

                @endforeach


            </ul>



        </div>

            <div class="row">
                
                <center><a href="{{ url('Biografias-todos')}}"><button class="btn btn-primary btn-lg">Ver Todas las biografías</button></a></center>
                
            </div>
            </div>


    <footer class="row" id="contactenos">

        <div class="container" >

            <hr>
            
            <h1 class="text-center"><b>Contacto</b></h1>

            <hr>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.3388724810866!2d-91.14779937833035!3d15.029361359344435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858bfe1d54d57481%3A0xd0c5e2aaae9fa64e!2sColegio%20Evang%C3%A9lico%20Metodista%20Utatl%C3%A1n!5e0!3m2!1ses-419!2sgt!4v1633752761931!5m2!1ses-419!2sgt" width="700" height="480" style="border:5;" allowfullscreen="" loading="lazy"></iframe>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fluid-jumbotron">

                    <h4 class="blockquote-reverse text-primary">
                        <ul>
                          <li><span class="glyphicon glyphicon-phone"></span>{{$inicio->telefono}}</li>
                          <li><span class="glyphicon glyphicon-map-marker"></span>{{$inicio->direccion}}</li>
                          <li><span class="glyphicon glyphicon-envelope"></span>{{$inicio->email}}</li>    
                        </ul>      
                    </h4>
        
                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="formulario" >

                <ol>
                    <li>
                        <a href="http://www.facebook.com/Ingenier%C3%ADa-en-Sistemas-UMG-Quich%C3%A9-118488006220391" target="_blank">
                        <i class="fa fa-facebook" style="font-size:24px;"></i>  
                        </a>
                    </li>

                    <li>
                        <a href="http://www.instagram.com/sistemasquiche/?hl=es-la" target="_blank">  
                        <i class="fa fa-instagram" style="font-size:24px;"></i>  
                        </a>
                    </li>
            
                   
                </ol>

                <form method="post" novalidate>

                        @csrf
                        <input type="text" name="nombre" class="form-control"  placeholder="Nombres">
    
                        <input type="email" name="email" class="form-control" placeholder="Correo electronico">

                        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Contenido del Mensaje" class="form-control"></textarea>

                     
                        <input type="submit" class="btn btn-default" value="Enviar">

                </form>
                                

            </div>


          
 

      </div>

        </footer>

        @endif

 
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
    </div>
    </div>
    </div>
    </div>
    <footer class="row" id="contactenos">



        <div class="container-static">
 <br>
 <br>
  <hr>
            
            <h1 class="text-center"><b>Seminario de tecnologías de la información 2021, Santa Cruz del Quiché</b></h1>

           

        </div>
    </footer>


<script src="http://galeriaumg.test/cms/public/js/slide.js"></script>
</body>
</html>


