<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prueba de ">
    <meta name="author" content="Wilson Acevedo Samaniego">

    <title>Prueba de Grability</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::style('css/modern-business.css')}}
    {{ HTML::style('css/font-awesome.min.css')}}

    {{ HTML::script('js/html5shiv.js')}}
    {{ HTML::script('js/respond.min.js')}}




</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Home Grability</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('crearM')}}">Coding Challenge</a>
                </li>
                <li>
                    <a href="doc/Prueba.pdf" target="_blank">Code Refactoring </a>
                </li>
                <li>
                    <a href="doc/Prueba.pdf" target="_blank">Documentacion</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill"><img src="img/one.jpg"  width="100%"></div>
            <div class="carousel-caption">
                <h2>Análisis</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill"><img src="img/two.jpg"  height="100%" width="100%"></div>
            <div class="carousel-caption">
                <h2>Diseño</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill"><img src="img/three.jpg" width="100%" ></div>
            <div class="carousel-caption">
                <h2>Producción</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
@section("contenido")

@show
<!-- Page Content -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
