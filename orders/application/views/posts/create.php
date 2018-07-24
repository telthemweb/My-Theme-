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
					Create a Blog
				</div>
				<div class="card-block">
				<?php echo form_open_multipart('posts/create');?>
				<fieldset class="form-group">
					<label for="title">Add Title</label>
  					<input type="text" class="form-control" name="title" placeholder="Add Title">
				</fieldset>	
				<fieldset class="form-group">
					<label for="description">Description</label>
  					<textarea id="editor1" class="form-control" name="body" placeholder="body" ></textarea>
				</fieldset>
				<fieldset class="form-group">
					<label for="Catigory">Catigory</label>
  					<select name="catigory_id" class="form-control">
							<?php foreach ($category as $cat) {?>
								<option value="<?php echo $cat['c_id']; ?>"><?php echo $cat['name']; ?></option>
							<?php } ?>
							</select>
				</fieldset>

				<fieldset class="form-group">
					<label for="image">Upload Image</label>
  					<input type="file" name="userfile" class="form-control" size="20" >
				</fieldset>
				<button  type="submit" name="submit" class="btn btn-primary btn-lg float-sm-right">Create Post</button>
				<p><br></p>
				<p><br></p>
				</div>
				<div class="card-footer text-muted">
					<a href="#">Physmach Technologies</a>
				</div>
		</div>
	    </div>
     </main>
