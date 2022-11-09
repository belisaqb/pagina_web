<?php 
    $valor = "buenas";    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--GOOGLE FONTS
    Lato-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!--GOOGLE FONTS
    Noto serif-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
        onerror="this.onerror=null;this.href='./css/vendors/bootstrap.min.css';">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./css/main.css">

    <title>Become the Chef</title>
</head>

<body>

    <!--/////////////////////////////////Header////////////////////////////////////-->
    <header>
        <!--//////////////////////////////////////////Header///////////////////////////////////////////-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container gap-3">
                <a class="navbar-brand" href="#"> <img class="img-fluid w-50" src="./imgs/black-logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex mx-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-curved" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-nav-scroll gap-2"
                        style="--bs-scroll-height: 150px;">
                        <li class="nav-item d-flex me-2">
                            <a class="nav-link align-self-center fw-bold" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item d-flex me-2">
                            <a class="nav-link align-self-center fw-bold" href="#">Acerca de</a>
                        </li>
                        <li class="nav-item d-flex me-2">
                            <a class="nav-link align-self-center fw-bold" href="#">Contact</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn-curved nav-link me-2 fw-bold" href="login_user_v2.html">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn-curved nav-link fw-bold" href="register.html">Registrarse</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <div class="container">
            <img class="img-fluid w-100" src="./imgs/two-tortillas.png" alt="Tortillas">
        </div>
    </header>


    <!--/////////////////////////////////////////Destacadas///////////////////////////////////////////-->
    <div class="container my-5 text-center">
        <h1 class="mx-auto mb-5 display-4 fw-bold fst-italic">Recetas destacadas</h1>

        <div class="container mb-3">
            <div class="d-flex justify-content-between">
                <button class="slide-arrow" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <i class="fa-solid fa-circle-arrow-left display-6"></i>
                </button>
                <button class="slide-arrow" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <i class="fa-solid fa-circle-arrow-right display-6"></i>
                </button>
            </div>
        </div>


        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <div class="row mx-auto gy-4">
                        <div class="col-sm-12 col-lg-3 col-md-6 text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3  col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="none">
                    <div class="row mx-auto gy-4">
                        <div class="col-sm-12 col-lg-3  col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row mx-auto gy-4">
                        <div class="col-sm-12 col-lg-3 col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-6  text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time</li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones</li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <!--/////////////////////////////////////////Recetas//////////////////////////////////////////-->
    <section class="container">
        <h2 class="text-center fw-bold fst-italic display-5">Recetas</h2>
        <div class="row">
            <div class="col-lg-3 col-sm-12 mt-5">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="fw-bold lead text-dark accordion-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Categorías
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-egg me-3"></i>Desayunos</a> </li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-glass-water me-3"></i>Bebidas</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-bell-concierge me-3"></i>Entradas</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-utensils me-3"></i>Almuerzos</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-ice-cream me-3"></i>Postres</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-bowl-food me-3"></i>Sopas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="fw-bold lead text-dark accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Ocasiones
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Todas</a> </li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Cumpleaños</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Día del Padre</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Día de la Madre</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Día del niño</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Navidad</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Semana Santa</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-calendar-check me-3"></i>Verano</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="fw-bold lead text-dark accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Complejidad
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-square-check me-3"></i>Fácil</a> </li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-square-check me-3"></i>Intermedio</a></li>
                                    <li class="list-group-item"><a class="list-link" href="#"><i
                                                class="fa-solid fa-square-check me-3"></i>Avanzado</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-9 col-sm-12">
                <div class="my-5 text-center">
                    <div class="row mx-auto gy-5">
                        <div class="col col-sm-12 col-lg-4 col-md-6 text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-md-6 text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-md-6 text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-md-6 text-start">
                            <div class="card-recipe">
                                <img src="./imgs/card.png" class="card-img-top" alt="Pancakes">
                                <div class="card-body d-flex">
                                    <h5 class="align-self-center flex-grow-1 card-title mb-0 p-3 fw-bold fst-italic">
                                        Nombre de la receta</h5>
                                    <a class="align-self-center me-2 arrow-link" href="#">
                                        <i class="fa-solid fa-circle-chevron-right me-1"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa-solid fa-clock me-3"></i>Prep. time
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-utensils me-3"></i>Porciones
                                    </li>
                                    <li class="list-group-item"><i class="fa-solid fa-square-check me-3"></i>Dificultad
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--//////////////////////////////////////////FOOTER/////////////////////////////////////////-->
    <div class="container-fluid d-flex mt-5 pt-5 pb-0 footer-bg">
        <div class="container align-self-center">

            <div class="row mb-3">
                <div class="col-lg-3 col-sm-6 my-4">
                    <img src="./imgs/white-logo.png" alt="Logo">
                </div>
                <div class="col-lg-3 col-sm-6 my-4">
                    <h5 class="fw-bold mb-3">Inicio</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="#" class="text-light text-decoration-none">Recetas destacadas</a></li>
                        <li class="mb-3"><a href="#" class="text-light text-decoration-none">Categorías</a></li>
                        <li class=""><a href="#" class="text-light text-decoration-none">Ocasiones</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 my-4">
                    <h5 class="fw-bold mb-3">Síguenos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="#" class="text-light text-decoration-none"><i
                                    class="fab fa-facebook me-2"></i>Facebook</a></li>
                        <li class="mb-3"><a href="#" class="text-light text-decoration-none"><i
                                    class="fab fa-instagram me-2"></i>Instagram</a></li>
                        <li class=""><a href="#" class="text-light text-decoration-none"><i
                                    class="fab fa-twitter me-2"></i>Twitter</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 my-4">
                    <a class="btn-curved nav-link fw-bold mb-4 me-3" href="#">Registrarse</a>
                    <a class="btn-curved nav-link me-2 fw-bold" href="#">Iniciar Sesión</a>
                </div>
            </div>
            <div class="border-top py-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <small>2022. Become the chef. Todos los derechos reservados</small>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="list-inline text-lg-end">
                            <li class="list-inline-item me-3"><a href="#"
                                    class="text-light text-decoration-none"><small>Términos y condiciones</small></a>
                            </li>
                            <li class="list-inline-item me-3"><a href="#"
                                    class="text-light text-decoration-none"><small>Aviso de Privacidad</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////FOOTER/////////////////////////////////////////-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>