<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 
	/*if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) 
	{
	    $this->session->set_flashdata('error', 'You have to signin');
		$this->load->view('signinV');	
	} */
?>

<?php $this->load->view('/templates/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			
				<h1>Thank you for login!</h1>
			</div>
			<p>You have successfully login. </p>
		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php $this->load->view('/templates/footer'); ?>

