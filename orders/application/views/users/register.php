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
					Create Account
				</div>
				<div class="card-block">
				<?php echo form_open_multipart('users/register');?>

	<fieldset class="form-group">
		<label for="fname">First Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
	</fieldset>	

	<fieldset class="form-group">
		<label for="lname">Last Name</label>
			<input type="text" class="form-control" name="lname" placeholder="Your Surname">
	</fieldset>
	<fieldset class="form-group">
		<label for="email">Email</label>
			<input type="email" class="form-control" name="kupa" placeholder="email">
	</fieldset>

	<fieldset class="form-group">
		<label for="dob">Date Of Birth</label>
			<input type="text" class="form-control" name="dob" placeholder="Date Of Birth dd/mm/year">
	</fieldset>



	<fieldset class="form-group">
		<label for="username">Username</label>
			<input type="username" class="form-control" name="username" placeholder="Username">
	</fieldset>	

	<fieldset class="form-group">
		<label for="title">Password</label>
			<input type="password" class="form-control" name="password" placeholder="password">
	</fieldset>

	<fieldset class="form-group">
			<label for="title">Confirm Password</label>
				<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
		</fieldset>

		<fieldset class="form-group">
			<label for="title">Phone Number</label>
				<input type="text" class="form-control" name="phone" placeholder="Phone Number shld start with country code  e.g  +263774914150">
		</fieldset>
			
		<fieldset class="form-group">
			<label for="title">country</label>
				<input type="text" class="form-control" name="country" placeholder="country">
		</fieldset>

		<fieldset class="form-group">
			<label for="title">City</label>
				<input type="text" class="form-control" name="city" placeholder="City">
		</fieldset>

		<fieldset class="form-group">
			<label for="title">Gender</label>
				<input type="text" class="form-control" name="gender" placeholder="Gender on F and M Strictly not female or Male">
		</fieldset>

		<fieldset class="form-group">
			<label for="image">Upload Image</label>
				<input type="file" name="userfile" class="form-control" size="20" >
		</fieldset>

				<button  type="submit" name="submit" class="btn btn-success btn-lg float-sm-right">Create Account</button>
				<p><br></p>
				<p><br></p>
				</div>
				<div class="card-footer text-muted">
					<a href="#">Physmach Technologies</a>
				</div>
		</div>
	    </div>
     </main>
