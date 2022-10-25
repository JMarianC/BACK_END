<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Boostrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../estilo.css">
    <title>Tienda de Ropa</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        
        <a class="navbar-brand" href="../index.html">Tienda de Ropa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="bi bi-house-door-fill"></i> Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="lista.php"><i class="bi bi-list-check"></i> Versión Tabla</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./card/Prueba_card.php"><i class="bi bi-card-image"></i> Versión Card</a>
            </li>  
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i> Menu</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="buzo.php">Buzos</a></li>
                <li><a class="dropdown-item" href="nike.php">Nike</a></li>
                <li><a class="dropdown-item" href="mayor_500.php">Mayor a $500</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="bi bi-send-plus"></i> Agregar Prendas</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <?php
    // 6) asignamos a diferentes variables los respectivos valores del array $datos.
    $tipo_de_prenda=$datos["tipo_de_prenda"];
    $marca=$datos["marca"];
    $talle=$datos["talle"];
    $precio=$datos["precio"];
    $imagen=$datos['imagen'];?>

    <h2 class="titulo">Modificar</h2>
    <p class="texto">Ingrese los nuevos datos de la prenda.</p>
    
    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
        <div class="col-lg-3">
            <label>Tipo de prenda</label>
            <input type="text" name="tipo_de_prenda" placeholder="Tipo de Prenda" value="<?php echo "$tipo_de_prenda"; ?>">
        </div>
        <div class="col-lg-3">
            <label>Marca</label>
            <input type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
        </div>
        <div class="col-lg-3">
            <label>Talle</label>
            <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
        </div>
        <div class="col-lg-3">
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
        </div>
        
        <div class="col-lg-12">
            <label>Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
        </div>
        
        <div class="col-6 boton">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
        </div>
        <div class="col-6 boton">
            <button type="submit" name="Cancelar" class="btn btn-danger btn-lg" formaction="../lista.php"><i class="bi bi-x-octagon-fill"></i> Cancelar</button>
        </div>
        
    </form>
    <?php
    // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
    if(array_key_exists('guardar_cambios',$_POST)){

        // 2') Almacenamos los datos actualizados del envío POST
        // a) generar variables para cada dato a almacenar en la bbdd
        // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
        // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $tipo_de_prenda=$_POST['tipo_de_prenda'];
                $marca=$_POST['marca'];
                $talle=$_POST['talle'];
                $precio=$_POST['precio'];
                $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        // 3') Preparar la orden SQL
        // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
        // a) generar la consulta a realizar
            $consulta = "UPDATE ropa SET tipo_de_prenda='$tipo_de_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id =$id";

            // 4') Ejecutar la orden y actualizamos los datos
            // a) ejecutar la consulta
            mysqli_query($conexion,$consulta);

        // a) rederigir a index
        header('location: Prueba_card.php');

    }?>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>
