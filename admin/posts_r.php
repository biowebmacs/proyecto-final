<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="col-md-9">
  <div class="row">
    <div class="col-md-9"> 
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>post_category_id</th>
                <th>post_title</th>
                <th>post_author</th>
                <th>post_user</th>
                <th>post_content</th>
                <th></th>
                <th>post_tags</th>
                <th>post_status</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM posts ";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['post_category_id']?> </td>
                                <td> <?php echo $row['post_title']?> </td>
                                <td> <?php echo $row['post_author']?> </td>
                                <td> <?php echo $row['post_user']?> </td>
                                <td colspan="2"> <?php echo $row['post_content']?> </td>
                                <td> <?php echo $row['post_tags']?> </td>
                                <td> <?php echo $row['post_status']?> </td>
                                <td> 
                                  <a href="posts_u.php?id=<?php echo $row['post_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i>
                                  </a>
                                  
                                  <a href="posts_a.php?id=<?php echo $row['post_id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>
              </tbody>   
            </table>
    </div>
	 </div>
</div>
<?php include('footer.php'); ?>