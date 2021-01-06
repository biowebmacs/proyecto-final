<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="col-md-9">
  <div class="row">

    <div class="col-md-9" >
			<div class="card card-body">
				<form method="POST" action="users_a.php?ac=1">
					<div class="form-group">
						<label for="user_id"> <strong>user_id </strong></label>
						<p><input type="text" name="user_id" class="form-control" ></p>
						<label for="username"> <strong>username</strong></label>
						<p><input type="text" name="username" class="form-control" ></p>
						<label for="user_password"> <strong>user_password </strong></label>
						<p><input type="password" name="user_password" class="form-control" ></p>
						<label for="user_firstname"> <strong>user_firstname </strong></label>
						<p><input type="textarea" name="user_firstname" class="form-control" ></p>
            <label for="user_lastname"> <strong>user_lastname </strong></label>
            <p><input type="text" name="user_lastname" class="form-control" ></p>
            <label for="user_email"> <strong>user_email </strong></label>
						<p><input type="email" name="user_email" class="form-control" ></p>
            <label for="user_image"> <strong>user_image</strong></label>
						<p><input type="text" name="user_image" class="form-control" ></p>
            <label for="user_role"> <strong>user_role </strong></label>
						<p><input type="text" name="user_role" class="form-control" ></p>
            <label for="randSalt"> <strong>randSalt</strong></label>
						<p><input type="text" name="randSalt" class="form-control" ></p>
            <label for="token"> <strong>token</strong></label>
						<p><input type="text" name="token" class="form-control" ></p>
						<input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	 </div>
</div>
<?php include('footer.php'); ?>