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
          <p class="lead blog-description">This is a place where our latest updates live.</p>
        </div>
      </div>
  <main role="main" class="container">
<?php echo validation_errors(); ?>    

	<div class="row">
		
		<div class="col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header bg-primary text-sm-center">
					Edit your Post
				</div>
				<div class="card-block">
					
			   <?php echo form_open('/posts/update');?>
				<input type="hidden" name="b_id" value="<?php echo $post['b_id']; ?>">
				
				<fieldset class="form-group">
					<label for="title">Add Title</label>
  					<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="discription">Description</label>
  					<textarea id="editor1" class="form-control" name="body" placeholder="body" ><?php echo $post['body']; ?></textarea>
				</fieldset>
				<fieldset class="form-group">
					<label for="Catigory">Catigory</label>
  					<select name="catigory_id" class="form-control">
							<?php foreach ($category as $cat) {?>
								<option value="<?php echo $cat['c_id']; ?>"><?php echo $cat['name']; ?></option>
							<?php } ?>
							</select>
				</fieldset>
				
					<button  type="submit" name="submit" class="btn btn-primary btn-lg float-sm-right">Update</button>
					<p><br></p>
					<p><br></p>
					</form>
				</div>
				<div class="card-footer text-muted">
					<a href="#">Physmach Technologies</a>
				</div>
			</div>
		</div>
		
	</div>
</main>