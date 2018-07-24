<p><br></p>
<p><br></p>
<style type="text/css">
  .media{
    margin-bottom: 16px;
  }
</style>
<div class="blog-header">
        <div class="container">
          <h1 class="blog-title"><?= $title ?></h1>
          <p class="lead blog-description">This is a place where our latest updates live.</p>
        </div>
      </div>
      <main role="main">
        
        <section id="explore-section" class="bg-light text-muted py-5">
          <?php foreach ($posts as $post) { ?>
          <div class="container">
            <div class="row">
              <div class="col-md-8">
              <div class="media">
                <img style="border-radius: 100px;" class="d-flex mr-3" src="<?php echo site_url(); ?>assets/img/posts/<?php echo $post['post_image'];?>" alt="<?php echo $post['title'];?>"  width= "65px" height="65px">
                <div class="media-body">
                  <h5 class="mt-0"><?php echo $post['title'];?></h5>
                  <p><?php echo word_limiter($post['body'], 50); ?></p>

                  <a class="btn btn-outline-secondary" href="<?php echo site_url('posts/'. $post['slug']); ?>">Read More</a>
                </div>
              </div>

             </div>

             
           <?php } ?>
        </section>
        
      </main>

