<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="col-md-9">
  <div class="row">
    <div class="col-md-9"> 
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>user_id</th>
                <th>username</th>
                <th>user_password</th>
                <th>user_firstname</th>
                <th>user_lastname</th>
                <th></th>
                <th>user_email</th>
                <th>user_image</th>
                <th>user_role</th>
                <th>randSalt</th>
                <th>token</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM users ";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['user_id']?> </td>
                                <td> <?php echo $row['username']?> </td>
                                <td> <?php echo $row['user_password']?> </td>
                                <td> <?php echo $row['user_firstname']?> </td>
                                <td colspan="2"> <?php echo $row['user_lastname']?> </td>
                                <td> <?php echo $row['user_email']?> </td>
                                <td> <?php echo $row['user_image']?> </td>
                                <td> <?php echo $row['user_role']?> </td>
                                <td> <?php echo $row['randSalt']?> </td>
                                <td> <?php echo $row['token']?> </td>
                                <td> 
                                  <a href="users_u.php?id=<?php echo $row['user_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i>
                                  </a>
                                  
                                  <a href="users_a.php?id=<?php echo $row['user_id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>

              </tbody>   
              </table>
    </div>
	 </div>
</div>