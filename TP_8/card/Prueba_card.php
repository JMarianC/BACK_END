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
    <title>Versión Card</title>
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
              <a class="nav-link" href="../index.html"><i class="bi bi-house-door-fill"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../lista.php"><i class="bi bi-list-check"></i> Versión Tabla</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Prueba_card.php"><i class="bi bi-card-image"></i> Versión Card</a>
            </li>  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i> Menu</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="buzo_card.php">Buzos</a></li>
                <li><a class="dropdown-item" href="nike_card.php">Nike</a></li>
                <li><a class="dropdown-item" href="mayor500_card.php">Mayor a $500</a></li>
              </ul>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="../agregar/index.html"><i class="bi bi-send-plus"></i> Agregar Prendas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h2 class="titulo">Lista de Prendas</h2>
    <p class="texto">Stock disponible.</p>
    <section>
    <div class="container">
      <div class="row">


        <?php
        // 1) Conexion
            $conexion=mysqli_connect("127.0.0.1", "root", ""); //Conexión con el servidor
            mysqli_select_db($conexion, "tienda"); //conexión con la base de datos

        // 2) Preparar la orden SQL
            $consulta='SELECT * FROM ropa';

        // 3) Ejecutar la orden y obtenemos los registros
            $datos= mysqli_query($conexion, $consulta);

        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($fila = mysqli_fetch_array($datos)) {?>
            <div class="card col-sm-12 col-md-6 col-lg-3" >
                <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($fila['imagen'])?>" alt="" width="100px" height="auto")>
                <div class="card-body">
                    <h3 class="card-title"><?php echo ucwords($fila['marca']) ?></h3>
                    <h5><?php echo ucwords($fila['tipo_de_prenda']) ?></h5>
                    <span>Talle Disponible: <?php echo $fila['talle']; ?></span><br>
                    <span>$ <?php echo $fila['precio']; ?></span>
                    <p class="card-text">Breve descripción de la prenda.</p>
                    <div class="text-center">
                      <a href="#" class="btn btn-primary btn-lg"><i class="bi bi-cart-check"></i> Comprar</a>
                    </div>
                </div>
                <div class="card-body">
                  <div class="text-center"> <!--para c entrar los botones-->
                  <a href="editar.php?id=<?php echo $fila['id'];?>" class="btn btn-outline-info btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>
                  <a href="borrar.php?id=<?php echo $fila['id'];?>" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle"></i> Borrar</a>
                  </div>
                </div>
            </div>

        <?php } ?>

      </div>
    </div>
  </section>


  <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>