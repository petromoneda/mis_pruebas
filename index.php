<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lab de Física</title>
    <?php wp_head(); ?>

</head>
<body>
    <!-------------------------------------------- Menu------------------------------->

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laboratorio de Física</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Blog</a>
                    <a class="nav-link" href="#">Contacto</a>
                </div>
                <form class="position-absolute end-0 me-2 d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit"> Search </button>
                </form>
            </div>
        </div>
    </nav>

    <!--------------------------------------------Fin Menu------------------------------->
    <!---------------------------------------Blog---------------------------------------->
    <div class="container" data-bs-theme="dark">
        <h2 class="my-5 text-center text-primary">Mi Blog personal</h2>
        <hr>
        <div class="row"> <!--sistema de columnas principal-->
        
        <div class="col-lg-9"><!-----------------------------EntradaS-------------------->
            <div class="card-body"><!--Entrada-->
            <a href="single.html">
                <h2>Titulo de la Entrada</h2>
            </a>
            <p class="small mb-0">Fecha: 30-09-2024</p>
            <p class="small mb-0">Autor: LabdeFisica</p>
            <p class="small ">
                Categorias: <a href="">Animales</a>  / <a href="">Comidas</a>
                Etiquetas: <a href="">azul</a> / <a href="">verde</a>
            </p>
            <img src="img/1200.jpg" alt="" class="img-fluid mb-3" />
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro
                quo magni nemo, doloribus, quod, eos labore eveniet soluta commodi
                facere in iure. Nobis perspiciatis exercitationem facilis, ex
                velit consequatur delectus.
            </p>
            <a href="single.html" class="btn btn-primary mb-2">Mas info...</a>
            </div>          <!--Fin Entrada-->
            <div class="card-body"><!--Entrada-->
                <a href="single.html">
                    <h2>Titulo de la Entrada</h2>
                </a>
                <p class="small mb-0">Fecha: 30-09-2024</p>
                <p class="small mb-0">Autor: LabdeFisica</p>
                <p class="small ">
                    Categorias: <a href="">Animales</a>  / <a href="">Comidas</a>
                    Etiquetas: <a href="">azul</a> / <a href="">verde</a>
                </p>
                <img src="img/1200.jpg" alt="" class="img-fluid mb-3" />
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro
                    quo magni nemo, doloribus, quod, eos labore eveniet soluta commodi
                    facere in iure. Nobis perspiciatis exercitationem facilis, ex
                    velit consequatur delectus.
                </p>
                <a href="single.html" class="btn btn-primary mb-2">Mas info...</a>
                </div>          <!--Fin Entrada-->
            <div class="card-body mt-2"><!--paginación-->
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Anterior</span>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div><!--Fin paginación-->
            
        </div><!----------------------------------Fin EntradaS----------------------->
        <!----------------------------------Aside-------------------------------------------->
        <div class="col-lg-3">
            <div class="card-body">
                <h4>Publicidad</h4>
                <hr>
                <img src="img/600.jpg" alt="" class="img-fluid">
            </div>
            
        </div><!----------------------------------Fin Aside------------------------------>
        </div><!--Fin sistema de columnas principal-->
    </div>

    <!---------------------------------------Fin Blog---------------------------------------->
    <footer class="container-fluid py-4 text-center bg-dark text-secondary" data-bs-theme="dark">
        <h5>Lorem ipsum dolor sit amet consectetur.</h5>
    </footer>
    
<?php wp_footer();?>
</body>
</html>
