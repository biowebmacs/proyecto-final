<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="container">
  <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>Post </th>
                <th>Author</th>
                <th>Email</th>
                <th>Contenido</th>
                <th>Status</th>
                <th>Date</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM comments ";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                           
                                <td> <?php echo $row['comment_post_id']?> </td>
                                <td> <?php echo $row['comment_author']?> </td>
                                <td> <?php echo $row['comment_email']?> </td>
                                <td > <?php echo $row['comment_content']?> </td>
                                <td> <?php echo $row['comment_status']?> </td>
                                <td> <?php echo $row['comment_date']?> </td>
                                <td> 
                                  <a href="comments_u.php?id=<?php echo $row['comment_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i></a>
                                  <a href="comments_a.php?id=<?php echo $row['comment_id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>

              </tbody>   
              </table>
	 </div>
</div>
<?php include('footer.php'); ?>