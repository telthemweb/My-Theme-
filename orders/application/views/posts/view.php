<p><br></p>
<p><br></p>
 <style type="text/css">
   span{
    margin-top: -67px;
   }
   .card-block{
    padding: 9px;
   }
   p{
    text-align: justify;
   }
   @media (max-width: 760px) {
    .btn-lg{
      margin-top: -16px;
    }
  }
  blockquote{
    padding: 7px;
    background-color: #C0B6BA;
    width: 212px;
  }
  .kudacard{
    padding: 16px;
    background-color: #ebeced;
  }
  .meee{
    background-color: red;
    padding: 17px;
  }
  .para{
    padding: 18px;
    background-color: #fff;
    border-bottom: 1px solid red;
    
  }
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
          <h1 class="blog-title"><span class="pull-right">
            <a href="<?php echo base_url(); ?>music/upload"><img src="<?php echo site_url(); ?>assets/img/icons/xmas.png" width="128px" height="128px"></a>
          </span>
</h1><hr>
          <p class="lead blog-description"><blockquote><small class="post-date"> <?php echo $post['created_at'];?></small></blockquote></p>
                  </div>
      </div>
      <main role="main" class="container">
        <div class="row">
         <div class="col-md-12 col-sm-12">
           <div class="card">
            <div class="card-header text-sm-center">
            <h2><?php echo $post['title'];?></h2>
             </div>
             <div class="card-block">
                <p><?php echo $post['body']; ?></p><hr>
              
                <?php 
                  if ($this->session->userdata('user_id')== $post['user_id']) {?>
                 
                  
              <a class="btn btn-success pull-left"  href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
            <?php echo form_open('/posts/delete/'.$post['b_id']);  ?>
            <input type="submit" class="btn btn-danger"  value="Trush" >
            <hr>
            <button type="button" class="btn btn-primary btn-lg btn-block">Physmach Technologies</button>
            </form>
              <?php  }?>
             </div>
           </div><!--end card-->
         </div>
         
       </div>

    <div class="card kudacard">
      <h3>Comment</h3><hr>
      <div class="card-block">
        <?php if ($comments){?>
        
        <?php  foreach ($comments as $comment) { ?>
        <h4 class="card-title meee"><?php echo $comment['name']; ?></h4>
        <p class="card-text para"><?php echo $comment['comment']; ?></p>

      <?php } ?>
<?php } ?> 
    </div>


      </div>
   





<hr>
<h3>Add comment</h3>
<?php echo validation_errors(); ?>
<div class="card-block">
<?php echo form_open_multipart('comment/create/'.$post['b_id']);?>
<fieldset class="form-group">
  <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="name">
</fieldset> 

<fieldset class="form-group">
  <label for="description">Comment</label>
    <textarea id="editor1" class="form-control" name="comment" placeholder="What is on your mind?....................." ></textarea>
</fieldset>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button  type="submit" name="submit" class="btn btn-primary btn-lg float-sm-right">Post Comment</button>
</div>
  </main>


	   	
	