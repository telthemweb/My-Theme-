<html>
   <head>
        <title>PHYSMACH TECHNOLOGIES</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.v4.0.0.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="icon"  href="<?php echo base_url(); ?>assets/img/icons/icon.ico">

   </head>
        <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
          
          
        </ul>
        <ul class="navbar-nav float-sm-right">
          <?php if (!$this->session->userdata('logged_in')) {?>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>users/register"">Create Account</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>users/login"">Login</a>
          </li>
      <?php  } ?>
      <?php if ($this->session->userdata('logged_in')) {?>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/phystech_media/music/">Downloads</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts/create"">Create Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>category/create"">Create Category</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts"">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>category"">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>users/logout""><img src="<?php echo base_url(); ?>assets/img/icons/logout.png" width="28px" height="28px"></a>
          </li>
          <?php  } ?>
        </ul>
      </div>
    </nav>
<p><br></p>
<p><br></p>
<style type="text/css">
  .media{
    margin-bottom: 16px;
  }
</style>

        
<?php if ($this->session->flashdata('user_registered')){

 echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; 
}
?>
   
    <?php if ($this->session->flashdata('category_created')){

       echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; 
}
?>

    <?php 
    if ($this->session->flashdata('post_created')){

      echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; 
    }
 ?>


    <?php 
    if ($this->session->flashdata('post_updated')){

       echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';
    }
 ?>

    <?php 
    if ($this->session->flashdata('post_deleted')){

      echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>';

}
?>
 <?php 
    if ($this->session->flashdata('login_failed')){

      echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';

}
?>

<?php 
    if ($this->session->flashdata('user_login_in')){

      echo '<p class="alert alert-success">'.$this->session->flashdata('user_login_in').'</p>';

}
?>


<?php 
    if ($this->session->flashdata('logged_out')){

      echo '<p class="alert alert-success">'.$this->session->flashdata('logged_out').'</p>';

}
?>