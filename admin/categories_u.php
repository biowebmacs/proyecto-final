<?php include('superior.php'); ?>
<?php include('menu.php'); ?>

<div class="container">
 <div class="row">
    <div class="col-md-9">
	    <?php
			$id=$_GET['id']; 
			$categories = getCategorie($id);
		?>
	   <br>
	  <div class="card card-body">
		<form method="POST" action="categories_a.php?ac=2">
		   <div class="form-group">
		   <label for="cat_id"> <strong>cat_id </strong></label>
			  <p><input type="text" name="cat_id" class="form-control" value="<?php echo $categories['cat_id']; ?>" readonly="readonly"></p>
			  <label for="cat_title"> <strong>Cambiar denominacion </strong></label>
			  <p><input type="text" name="cat_title" class="form-control" value="<?php echo $categories['cat_title']; ?>"></p>
			
			  <input type="submit" name="categorie_Post" class="btn btn-success btn-block" Value="Actualizar">
			</div>
		</form>
	  </div>
	  <br>
	</div >
 </div>
<div>
<?php include('footer.php'); ?>