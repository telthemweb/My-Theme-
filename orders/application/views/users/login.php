<p><br></p>
<p><br></p>
<style type="text/css">
	form{
		padding: 9px;
	}
	textarea{
		outline: none;
		height: 400px;
	}
</style>
<div class="blog-header">
	<div class="container">
	  <h1 class="blog-title"><?= $title ?></h1>

	</div>
	</div>
 <main role="main" class="container">
      <?php echo validation_errors(); ?>
<div class="row">
<div class="col-md-12">
<div class="card">
	<div class="card-header text-sm-center">
		Sign In
	</div>
<div class="card-block">
	<?php echo form_open_multipart('users/login');?>

	<fieldset class="form-group">
		<label for="username">Username</label>
			<input type="username" class="form-control" name="username" placeholder="Username">
	</fieldset>	

	<fieldset class="form-group">
		<label for="title">Password</label>
			<input type="password" class="form-control" name="password" placeholder="password">
	</fieldset>

	<button  type="submit" name="submit" class="btn btn-primary btn-lg float-sm-right">sign in</button>
	<p><br></p>
	<p><br></p>
	</div>
	<div class="card-footer text-muted">
		<a href="#">Physmach Technologies</a>
	</div>
		</div>
	    </div>
     </main>
