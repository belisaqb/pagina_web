<?php 
    require 'db.php';
   

    $data= $database->select("tb_recipes",[
        "[>]tb_recipe_category"=>["id_recipe_category" => "id_recipe_category"],
        "[>]tb_recipe_occasion"=>["id_recipe_occasion" => "id_recipe_occasion"],
        "[>]tb_recipe_complex"=>["id_recipe_complex" => "id_recipe_complex"]
    ],[
        "tb_recipes.id_recipe",
        "tb_recipes.recipe_name",    
        "tb_recipes.is_featured",    
        "tb_recipe_category.recipe_category",
        "tb_recipe_occasion.recipe_occasion",
        "tb_recipe_complex.recipe_complex",
    ]);

    
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

    <title>Admin</title>
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
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-nav-scroll gap-2">
                        <li class="nav-item d-flex me-2">
                            <a class="nav-link align-self-center fw-bold" href="#">Inicio</a>
                        </li>
                        <!--
                        <li class="nav-item d-flex me-2">
                            <a class="nav-link align-self-center fw-bold" href="#">Acerca de</a>
                        </li>
                        <li class="nav-item d-flex me-2">
                            <a class="nav-link align-self-center fw-bold" href="#">Contact</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn-curved nav-link me-2 fw-bold" href="#">Cerrar Sesión</a>
                        </li>    
                        -->                    
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <section class="container">
        <div class=" mt-3">
            <nav>                
                <ol class="breadcrumb ps-2">
                    <li class="align-self-center breadcrumb-item fw-bold">Recetas</li>
                    <li class="align-self-center breadcrumb-item fw-bold active flex-grow-1">Ver lista</li>
                    <li class="circle mx-auto d-flex justify-content-center">
                        <i class="align-self-center fa-solid fa-plus"></i>
                    </li>
                </ol>
            </nav>

            <div>
                <ul class="list-group">
                    <li class="list-group-item header-admin" aria-current="true">
                        <div class="row d-flex justify-content-between px-2 pt-2">

                            <h6 class="col-lg-2 col-sm-6 fw-bold">Nombre</h6>
                            <h6 class="col-lg-2 col-sm-6 fw-bold">Categoría</h6>
                            <h6 class="col-lg-2 col-sm-6 fw-bold">Ocasión</h6>
                            <h6 class="col-lg-2 col-sm-6 fw-bold">Complejidad</h6>
                            <h6 class="col-lg-2 col-sm-6 fw-bold">Destacada</h6>
                            <h6 class="col-lg-1 col-sm-3 fw-bold">Editar</h6>
                            <h6 class="col-lg-1 col-sm-3 fw-bold">Eiminar</h6>
                        </div>
                    </li>                   

                    <?php 
                        $len = count($data);
                        for($i=0; $i<$len; $i++){

                            echo "<li class='list-group-item'>";
                            echo  "<div class='row d-flex justify-content-between px-2 pt-1'>";
                                echo "<p class='col-lg-2 col-sm-6-2 m-0'>".$data[$i]["recipe_name"]."</p>";
                                echo "<p class='col-lg-2 col-sm-6-2 m-0'>".$data[$i]["recipe_category"]."</p>";
                                echo "<p class='col-lg-2 col-sm-6-2 m-0'>".$data[$i]["recipe_occasion"]."</p>";
                                echo "<p class='col-lg-2 col-sm-6-2 m-0'>".$data[$i]["recipe_complex"]."</p>";
                                echo "<p class='col-lg-2 col-sm-6-2 m-0'>".$data[$i]["is_featured"]."</p>";
                                echo "<a class='col-lg-1 col-sm-3 m-0' href='modify_recipe.php?id=".$data[$i]["id_recipe"]."'><i
                                class='align-self-center icon-link fa-solid fa-pen-to-square'></i></a>";
                                echo "<a class='col-lg-1 col-sm-3 m-0' href='delete.php?id=".$data[$i]["id_recipe"]."'><i
                                class='align-self-center icon-link fa-solid fa-trash-can'></i></a>";
                            echo "</div>";
                            echo "</li>";
                        }
                    ?>      

                </ul>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>