<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="col-md-8">
  <div class="row">
    <div class="col-md-8" >
			<div class="card card-body">
				<form method="POST" action="posts_a.php?ac=1">
					<div class="form-group">
						<label for="post_category_id"> <strong>post_category_id </strong></label>
						<p><input type="text" name="post_category_id" class="form-control" ></p>
						<label for="post_title"> <strong>post_title</strong></label>
						<p><input type="text" name="post_title" class="form-control" ></p>
						<label for="post_author"> <strong>post_author </strong></label>
						<p><input type="text" name="post_author" class="form-control" ></p>
						<label for="post_user"> <strong>post_user </strong></label>
						<p><input type="textarea" name="post_user" class="form-control" ></p>
            <label for="post_content"> <strong>post_content </strong></label>
            <p><input type="text" name="post_content" class="form-control" ></p>
            <label for="post_tags"> <strong>post_tags </strong></label>
						<p><input type="text" name="post_tags" class="form-control" ></p>
            <label for="post_status"> <strong>post_status</strong></label>
						<p><input type="text" name="post_status" class="form-control" ></p>
						<input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>