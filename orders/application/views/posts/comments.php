<h3>Comment</h3>

<?php if ($comments){?>
 <?php	foreach ($comments as $comment) { ?>
		<div class="well">
			<h5><?php echo $comment['body']; ?>[by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>

<?php } ?>
<?php } ?> 
<?php else{ ?>
	<p>No comment to display</p>
<?php } ?>

<hr>
<h3>Add comment</h3>
<?php echo validation_errors(); ?>
<div class="card-block">
<?php echo form_open_multipart('posts/create');?>
<fieldset class="form-group">
	<label for="name">Name</label>
		<input type="text" class="form-control" name="name" placeholder="name">
</fieldset>	
<fieldset class="form-group">
	<label for="name">Email</label>
		<input type="email" class="form-control" name="kapa" placeholder="Email Address">
</fieldset>	
<fieldset class="form-group">
	<label for="description">Comment</label>
		<textarea id="editor1" class="form-control" name="comment" placeholder="Cooment" ></textarea>
</fieldset>
<button  type="submit" name="submit" class="btn btn-primary btn-lg float-sm-right">Post Comment</button>
</div>
