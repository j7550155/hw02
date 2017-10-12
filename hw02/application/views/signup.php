<?php $this->load->view('/templates/header'); ?>
<h1   style="text-align:center;"> Signup </h1>


		<?php  echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
 ?> 
			<form method="post" action="<?php echo base_url(); ?>home/signup_validation">  

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
					<p class="help-block">At least 4 characters, letters or numbers only</p>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
					<p class="help-block">A valid email address</p>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
					<p class="help-block">At least 6 characters</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<p class="help-block">Must match your password</p>
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="signup">
				</div>
			</form>

<?php $this->load->view('/templates/footer'); ?>