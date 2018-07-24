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
		<div class="container">
			<div class="row">
			
			<div class="col-md-12">	
		<div class="card">
			
               <div class="card-block">
				<h4 class="card-title"><?= $title ?></h4>
				<?php foreach ($category as $cat) {?>
				<ul class="list-group">
					<li class="list-group-item"><a href="<?php echo site_url('category/posts/'.$cat['c_id']); ?>"><?php echo $cat['name']; ?></a></li>
				</ul>
				<?php } ?>
			     </div>
            
			
		</div>
	</div>
		 
			</div>
		</div>
	</section>
</main>
