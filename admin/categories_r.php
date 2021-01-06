<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="col-md-9">
  <div class="row">
    <div class="col-md-9"> 
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>Categoria</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM categories";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['cat_title']?> </td>
                                <td> 
                                  <a href="categories_u.php?id=<?php echo $row['cat_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i></a>
                                  
                                  <a href="categories_a.php?id=<?php echo $row['cat_id']."&ac=3" ?>" class="btn btn-danger"> 
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