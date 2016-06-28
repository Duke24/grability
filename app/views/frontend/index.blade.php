@extends('frontend.main')
@section('contenido')



<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" align="center">
                PRUEBA TÉCNICA PARA EL BACKEND DE GRABILITY
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Coding Challenge</h4>
                </div>
                <div class="panel-body">
                    <p>La primera parte de la prueba consiste en un Coding Challenge tomado de Hackerrank.</p>
                    <a href="{{URL::to('crearM')}}" class="btn btn-default">Ver Solucion</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-folder-open-o"></i> Code Refactoring </h4>
                </div>
                <div class="panel-body">
                    <p>El siguiente código muestra el método de un controlador que:</p>
                    <a href="doc/Prueba.pdf" target="_blank" class="btn btn-default">ver solucion</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-file-archive-o"></i> Documentacion</h4>
                </div>
                <div class="panel-body">
                    <p>Documento con toda la documenatcion de la solucion de la prueba para backend de grability</p>
                    <a href="doc/Prueba.pdf" target="_blank" class="btn btn-default">ver Documento</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Tecnologia Que Manejo</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{url('/')}}">
                <img class="img-responsive img-portfolio img-hover" src="img/laravel.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{url('/')}}">
                <img class="img-responsive img-portfolio img-hover" src="img/html.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{url('/')}}">
                <img class="img-responsive img-portfolio img-hover" src="img/css3.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{url('/')}}">
                <img class="img-responsive img-portfolio img-hover" src="img/sql.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{url('/')}}">
                <img class="img-responsive img-portfolio img-hover" src="img/django.jpg" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{url('/')}}">
                <img class="img-responsive img-portfolio img-hover" src="img/bit.jpg" alt="">
            </a>
        </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Datos Personales</h2>
        </div>
        <div class="col-md-6">
            <p><strong>Informacion de Contacto</strong></p>
            <ul>
                <li><strong> Nombre : Wilson Acevedo</strong></li>
                <li><strong>Correo: wacevedos@ucentral.edu.co</strong>
                </li>
                <li>Telefono: <strong>310 2613590 </strong></li>

            </ul>
            <p>En este proyecto, se buscar dar a conocer las diferentes competencias que se maneja y se cononces con el framework de laravel 4.2
            para esto implemento seciones para el manejo de matriz de 3 dimenciones, validaciones en la vista y en controlador, manejo de template
            con blade y sobre todo se busca una oportunidad de seguir aprendiendo</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>El proyecto lo he subido a un repositorio en Bitbucket.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="doc/Prueba.pdf" >Descargar Proyecto</a>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Prueba Backend 2017</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

@stop