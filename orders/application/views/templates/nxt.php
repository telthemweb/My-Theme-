<main role="main" class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 col-sm-6">
			<div class="card">
				<div class="card-header text-sm-center">
					Edit your Post
				</div>
				<div class="card-block">
					
			   <?php echo form_open('/posts/update');?>
				<input type="email" class="form-control" id="email" name="email" placeholder="E-mail Address" >
				
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
		<div class="col-md-2"></div>
	</div>




	keybord
<script src ="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
	<script>
    CKEDITOR.replace('editor1');
</script>