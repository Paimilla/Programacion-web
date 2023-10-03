<?PHP
    $rut= $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $direccion = $_POST['direccion'];
    $fecha_inscripcion = date("Y-m-d");
    include "conexion.php";
    $validar = "SELECT * FROM candidatos WHERE rut = '$rut'";
    $validando = mysqli_query($conn,$validar);
    if(mysqli_num_rows($validando) > 0){
        echo '<script>
        alert("Oh ah habido un problema, el rut del candidato ingresado ya esta inscrito");
        window.history.go(-1);
        </script>';
        exit;
    }
    $sql="INSERT INTO candidatos(rut,nombre,apellido_p,apellido_m,fecha_incripcion,direccion) VALUES ('$rut','$nombre','$apellido_p','$apellido_m','$fecha_inscripcion','$direccion')";
    ?>
    <!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compras</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        
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
            
        </header>
        <nav class="navegacion">
            <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Inicio</a>
            <a class="navegacion__enlace navegacion__enlace--activo" href="conteo.php">Conteo</a>
            <a class="navegacion__enlace navegacion__enlace--activo" href="votacion.php">subir voto</a>
            <a class="navegacion__enlace navegacion__enlace--activo" href="candidatos.html">subir candidato</a>
            <a class="navegacion__enlace navegacion__enlace--activo" href="votante.html">ingresar votante</a>
        </nav>
        <main class="contenedor">
            <h1 style="padding: 100px; ">
            <?php 
                if ($conn->query($sql) === TRUE)
                    {
                        echo "dato ingresados correctamente :)";
                    }
                else
                    {
                        echo "error al ingresar los datos intentelo denuevo";
                    }
            ?>
            </h1>
        </main>
    </body>
    <footer class="footer">
            <p class="footer__texto">Felipe Paimilla - Todos los derechos Reservados 2022.</p>
        </footer>
    
    </html>
    
   
?>