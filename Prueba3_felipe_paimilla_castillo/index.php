<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compras</title>
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    
    <header class="header">
        <h1>Votacion <span style="font-size: 2.5rem;">en linea</span></h1>   
        <?PHP
                    include_once "conexion.php";
                    
                    $sql = "SELECT nombre,apellido_p FROM votantes  ORDER BY rut DESC LIMIT 1";
                    $result = $conn->query($sql);
                    if ($result -> num_rows  > 0) {
                        while($row = $result->fetch_assoc()) {
                                echo ("<a class='usuario'>Bienvenido ".$row["nombre"]." ".$row["apellido_p"]."</a>");            
                        }
                    }else {
                        echo "<a class='usuario' href='votante.html'>registrese aqui </a>";
                    }                       
                ?>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Inicio</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="conteo.php">Conteo</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="votacion.php">subir voto</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="candidatos.html">subir candidato</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="votante.html">ingresar votante</a>
        
    </nav>

    <main class="contenedor">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/presidente.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Robin Machuca</h2>
                    <p>En su presente conferencia declaro que le regalara un auto a todos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/presidenta.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Martina Telarovas</h2>
                    <p>En su presente conferencia declaro que le dara una casa a todo el mundo</p>
                </div>
            </div>
             <div class="carousel-item">
                <img class="d-block w-100" src="img/presidente1.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Miento Garcia</h2>
                    <p>En su presente conferencia declaro que le regalara un perro a todos</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
            </div>
        </div>
    </div>     
    <h1 style="margin-top: 40px; margin-bottom: 40px;">Panel de control</h1>
        <div class="dashboard">
                <a href="votante.html">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="190" height="190" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 11h6m-3 -3v6" />
                            </svg>
                            <br>
                            <strong class="producto__nombre">ingresar votante</strong>
                        </p>
                </a>
                <a href="votacion.php">
                        <p>     
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive"  width="190" height="190" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="3" y="4" width="18" height="4" rx="2" />
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                            <line x1="10" y1="12" x2="14" y2="12" />
                            </svg>
                            <br>
                            <strong class="producto__nombre">ingresar votacion</strong>
                        </p>
                </a>
                <a href="candidatos.html">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-friends"  width="190" height="190" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="7" cy="5" r="2" />
                            <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />
                            <circle cx="17" cy="5" r="2" />
                            <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4" />
                            </svg>
                            <br>
                            <strong class="producto__nombre">ingresar candidato</strong>
                        </p>
                </a>    
            </div>
    </main>
    </body>
    <footer class="footer">
        <p class="footer__texto">Felipe Paimilla - Todos los derechos Reservados 2022.</p>
    </footer>

</html>