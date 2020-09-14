<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index1</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <div class="container-fluid bg-light">

        <div class="container">

            <ul class="nav nav-justified py-2 nav-pills">
              
                <?php if(isset($_GET["pagina"])):?>
                    
                    <?php if ($_GET["pagina"]=="registro"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">REGISTRO</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?pagina=registro">REGISTRO</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"]=="ingreso"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">INGRESO</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">INGRESO</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"]=="inicio"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">INICIO</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?pagina=inicio">INICIO</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"]=="salir"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir">SALIR</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">SALIR</a>
                        </li>
                    <?php endif ?>

                <?php endif ?>

            </ul>


        </div>

    </div>
    <!--==================
        Contenido
    =======================-->
    <div class="container-fluid ">

        <div class="container py-5">
            <?php 
                if (isset($_GET["pagina"])) {
                   
                    if ($_GET["pagina"]=="registro" ||
                        $_GET["pagina"]=="ingreso" ||
                        $_GET["pagina"]=="inicio" ||
                        $_GET["pagina"]=="salir" ) {
                       
                            include "paginas/".$_GET["pagina"].".php";
                   }else {
                    include "paginas/error404.php";
                   }
                }else{
                    include "paginas/registro.php";
                }
                
            ?>
        </div>

    </div>
</body>

</html>