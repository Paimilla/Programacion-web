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
            if ($result -> num_rows  > 0) 
            {
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
        <form action="subir_votacion.php" method="POST" enctype="multipart/form-data" class="formulario">
            <fieldset>
                <legend>Ingrese Votacion</legend>
                <div class="contenedor-campos">
                    <div class="campo">
                        Ingrese su rut<br>
                        <input class="input-text" type="text" id="rut" name="rut" value="" placeholder="ingrese su Rut"
                            maxlength="12" minlength="12" required=""><br>
                    </div>
                    <div class="campo">
                            ingrese por quien va a votar<br>
                            <select class='input-text' name='voto' id='voto'>
                                <?PHP
                                    include_once "conexion.php";
                                    $sql =  "SELECT nombre, apellido_p FROM candidatos ";
                                    $result = $conn->query($sql);
                                    $i = 0;
                                    if ($result -> num_rows  > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $i= $i+1;
                                        echo(" <option value='".$i."'>".$row["nombre"]. " ".$row["apellido_p"]. "</option>"); 
                                        }
                                    }else {
                                        echo "0 results";
                                    }
                                ?>
                            </select>
                    </div><br>
                </div> <!-- .contenedor-campos -->
                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
    </main>
</body>
<footer class="footer">
    <p class="footer__texto">Felipe Paimilla - Todos los derechos Reservados 2022.</p>
</footer>

</html>