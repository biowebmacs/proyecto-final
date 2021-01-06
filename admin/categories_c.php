<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="col-md-9">
  <div class="row">
    <div class="col-md-9" >
			<div class="card card-body">
				<form method="POST" action="categories_a.php?ac=1">
					<div class="form-group">
						<label for="cat_title"> <strong>Nueva Categoria</strong></label>
						<p><input type="text" name="cat_title" class="form-control" ></p>
						<input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	 </div>
</div>
<?php include('footer.php'); ?>