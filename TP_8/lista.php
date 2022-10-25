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
    <link rel="stylesheet" href="estilo.css">
    <title>Versión Tabla</title>
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
                <a class="nav-link" href="./agregar/index.html"><i class="bi bi-send-plus"></i> Agregar Prendas</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <h2 class="titulo">Lista de Prendas</h2>
    <p class="texto">Stock disponible.</p>

    <!--TABLA-->

    <table class="table table-dark table-striped">
        <tr>
            <th>ID</th>
            <th>IMAGEN</th>
            <th>TIPO DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
            <th>EDITAR</th>
            <th>BORRAR</th>
        </tr>
            <?php
            // 1) Conexion

                $conexion=mysqli_connect("127.0.0.1", "root", ""); //Conexión con el servidor
                mysqli_select_db($conexion, "tienda"); //conexión con la base de datos

            // 2) Preparar la orden SQL
            // Sintaxis SQL SELECT
            // SELECT * FROM nombre_tabla
            // => Selecciona todos los campos de la siguiente tabla
            // SELECT campos_tabla FROM nombre_tabla
            // => Selecciona los siguientes campos de la siguiente tabla

                $consulta= "SELECT*FROM ropa";

            // 3) Ejecutar la orden y obtenemos los registros
                
                $datos= mysqli_query ($conexion, $consulta);

            // 4) Mostrar los datos del registro
            while ($fila =mysqli_fetch_array($datos)) { ?>
                <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><img src="data:image/png;base64, <?php echo base64_encode($fila['imagen'])?>" alt="" width="100px" height="100px"></td>
                <td><?php echo $fila['tipo_de_prenda']; ?></td>
                <td><?php echo $fila['marca']; ?></td>
                <td><?php echo $fila['talle']; ?></td>
                <td><?php echo $fila['precio']; ?></td>
                <td><a href="./agregar/modificar.php?id=<?php echo $fila['id'];?>">Editar</a></td>
                <td><a href="./agregar/borrar.php?id=<?php echo $fila['id'];?>">Borrar</a></td>
                </tr>
            <?php } ?>
    </table>
    

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>