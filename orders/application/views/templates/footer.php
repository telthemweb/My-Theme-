<p><br></p>
<p><br></p>
 <div id="main-footer" class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="py-4">
          <h1 class="h3">PHYSMACH TECHNOLOGIES</h1>
          <p class="text-center">Copyright &copy; 2017</p>
          <button class="btn btn-primary" data-toggle="modal" data-target ="#contactModal">Contact us</button>
        </div>    
      </div>
    </div>  
  </div>
</div>
<div class="modal fade text-dark" id="contactModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalTitle">Contact Us</h5>

      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="fname" class="form-control" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Enter E-mail Address">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" placeholder="Enter name"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Send Message</button>
      </div>
    </div>
  </div>
</div>
    

<script src ="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<script src ="<?php echo base_url(); ?>assets/js/jquery-3.2.1.slim.min.js"></script>
<script src ="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src ="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


</body>
</html>