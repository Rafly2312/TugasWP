<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
<<<<<<< HEAD
	 * @see https://codeigniter.com/user_guide/general/urls.html
=======
	 * @see https://codeigniter.com/userguide3/general/urls.html
>>>>>>> 84d7c1e93e6abc73e2b24fe6d5fcdfeab7838330
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
