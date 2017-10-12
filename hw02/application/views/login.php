<?php $this->load->view('/templates/header'); ?>
<?php  
  echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
 ?>  

<form method="post" action="<?php echo base_url(); ?>home/login_validation">  
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
        </div>
        <?php //echo form_error('username'); ?>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
        </div>
        <?php // echo form_error('password'); ?>
        <div class="form-group">
          <input type="submit" class="btn btn-default" value="login">
        </div>
      </form>
<?php $this->load->view('/templates/footer'); ?>