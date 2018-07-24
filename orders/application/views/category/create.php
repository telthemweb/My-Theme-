<p><br></p>
<p><br></p>
<style type="text/css">
	form{
		padding: 9px;
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
					Create a Category
				</div>
				<div class="card-block">
				<?php echo form_open_multipart('category/create');?>
					
				<fieldset class="form-group">
					<label for="description">Name</label>
  					<input type="text" class="form-control" name="name" placeholder="Category Name" >
				</fieldset>
				
				<button  type="submit" name="submit" class="btn btn-default btn-lg float-sm-right">Create</button>
			</form>
			</div>
			
				<p><br></p>
				<p><br></p>
				</div>
				<div class="card-footer text-muted">
					<a href="#">Physmach Technologies</a>
				</div>
		</div>
	    </div>
     </main>