<?php 

    @include 'config.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuarios</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="style4.css">
    
</head>
<header>
     <nav>
        <a href="index.html" class="Logo"><i class='bx bx-heart-circle'></i></i><span>LOUMRO</span></a>
      
        <i class="fas fa-bars" id="ham-menu"></i>
        <ul id="nav-bar">
          <li>
            <a href="index.html">Inicio</a>
          </li>
          <li>
            <a href="http://localhost/loginsystem/login_form.php">Iniciar sesión</a>
          </li>
          <li>
            <a href="http://localhost/loginsystem/register_form.php">Registrarte</a>
          </li>
          <li>
            <a href="">Sobre mi</a>
            <link rel="stylesheet" href="style3.css">
          </li>
        </ul>
      </nav>
    </header>


<body>

<br>
<div class="shapes"></div>
    <div class="container">
    <table border="1" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Tipo de usuario</th>
                </tr>
            </thead>
            <tbody>
                

		<?php 
		$sql="SELECT * from user_form";
		$result=mysqli_query($conn,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['name'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['user_type'] ?></td>
		</tr>
	<?php 
	}
	 ?>

</tbody>
	</table>

</body>
</html>