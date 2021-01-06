<?php include('superior.php'); ?>
<?php include('menu.php'); ?>

<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           //Conexion de turno
          $conexion = new PDO('mysql: host=localhost ; dbname=cms', 'root', '');
         
          //Atributos de la conexion de turno
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          //Seleccionar caracteres
           $conexion->exec("SET CHARACTER SET utf8");
       
          // Evitar inyecciones
            $usuario = htmlentities(addslashes($_POST["username"]));
            $password = htmlentities(addslashes($_POST["password"]));
         
         // Crear estructura SQL con parametro (:usuario , :password)
             $sql=" SELECT * FROM users WHERE user_id= :usuario";
     
           // Preparar Consulta
             $resultado = $conexion->prepare($sql);
             $contador = 0;
     
           // Unir marcadores (s=tring )
            $resultado->bindValue(":usuario" ,$usuario );
            $resultado->bindValue(":password" ,$password );
            $resultado->execute(array(":usuario"=>$usuario));
     
            // Buscar concindencia de password
            while ($registro=$resultado->fetch(PDO::FETCH_BOTH)){
             if(password_verify($password,$registro["user_password"])){
              $contador++;}
              }
                if($contador=0){  
                  session_start();
                  $_SESSION["usuario"]=$_POST["username"];
                  header("Location: principal.php");
                  } else {
                  header("Location: ../index.php");
                }
            }
?>
<div class="container">
  <div class="row">
    <form method="post">
          <legend>Login</legend>
          <fieldset>
            <div class="mb-3">
              <label for="username" class="form-label">Ingrese su usuario</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Ingrese su contraseña</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="enviar">Entrar</button>
          </fieldset>
        </form>
  <div>     
</div>

<?php include('footer.php'); ?>