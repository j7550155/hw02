<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function products()
	{
		$this->load->view('products');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function login()
	{
		$this->load->view('login');
	}

	function login_validation()
	{	
			// set variables from the form
			$username = $this->input->post('username'); //echo $username; echo '<br>';
			$password = $this->input->post('password'); //echo $password; echo '<br>';
			$user_id = $this->user_model->get_user_id($username, $password); 
			if($user_id > 0)
			 {
				// set session user datas
				$_SESSION['user_id']      = (int)$user_id;
				$_SESSION['username']     = (string)$username;
				$_SESSION['logged_in']    = (bool)true;
				
				// user login ok
				$this->load->view('loginOK');	
			} else {
				
				// login failed
				 $this->session->set_flashdata('error', 'Invalid Username or Password');
				
				// send error to the view
				$this->load->view('login');				
			}
			
	}

		function signup_validation()
	{
		// create the data object
		$data = new stdClass();

		$this->load->helper('form');
		$this->load->library('form_validation');


			
			// set variables from the form
			$username = $this->input->post('username'); //echo $username; echo '<br>';
			$email    = $this->input->post('email');  //echo $email; echo '<br>';
			$password = $this->input->post('password');  //echo $password; echo '<br>';
			
			if ($this->user_model->create_user($username, $email, $password)) {
				$this->load->view('signupOK', $data);
			} else {

				 $this->session->set_flashdata('error', 'Invalid Username or Password');
				
				// send error to the view
				$this->load->view('signup');	
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				$this->load->view('signup', $data);
			}

		$this->load->view('signup');	
	}



}
