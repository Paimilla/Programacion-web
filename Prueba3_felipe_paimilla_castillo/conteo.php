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
            $sql = "SELECT nombre,apellido_p FROM votantes ORDER BY rut DESC LIMIT 1";
            $result = $conn->query($sql);
            if ($result -> num_rows  > 0) {
                while($row = $result->fetch_assoc()) 
                {
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
        <div class='gridcat'>
            <div class='producto'>                                           
                <?PHP
                    include_once "conexion.php";
                    $sql = "SELECT nombre,apellido_p FROM candidatos";
                    $result = $conn->query($sql);
                    $contador = 0;
                    if ($result -> num_rows  > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
                            echo ("<h1 style='margin-top: 45px;  font-size: 4rem;'>".$row["nombre"]. " ".$row["apellido_p"]." </h1>");  
                            $contador= $contador + 1;
                        }
                    }else
                    {
                            echo "0 results";
                    } 
                ?> 
            </div>
        </div>
        <div class='gridcat'>
            <div class='producto'>    
            <?PHP
                for ($i=1; $i <= $contador; $i++) 
                { 
                    $sql = "SELECT count(codigocandidato) FROM votacion WHERE codigocandidato = $i";
                    $result = $conn->query($sql);
                    if ($result -> num_rows  > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
                            echo ("<h1 style='margin-top: 45px;  font-size: 4rem;'>tiene ".$row["count(codigocandidato)"]." votos totales</h1> ");          
                        }
                    }
                    else{
                        echo "0 results";
                    }
                    
                }
                //crea una tabla de votacion en php
                $sql = "SELECT * FROM votacion";

            ?>
    </main>
    </body>
    <footer class="footer" style="margin-top:80rem">
        <p class="footer__texto">Felipe Paimilla - Todos los derechos Reservados 2022.</p>
    </footer>
</html>