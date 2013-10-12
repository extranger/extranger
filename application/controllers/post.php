<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->template->title('Welcome to Extranger')
				->set('currentSection', 'Post')
				->set_layout('default');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->template->build('welcome', $data);
		}
	}

	function newPost() 
	{

	}

	function editPost()
	{

	}

	function deletePost()
	{

	}

	function sharePost()
	{
		
	}

}