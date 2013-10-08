<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH."/third_party/facebook/facebook.php";

class FB extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
				
	}

	function index()
	{
		$facebook = new Facebook(array(
		  'appId'  => '551637974908042',
		  'secret' => '6f05a1f59eed5377c6cc560737255bb6',
		));
		// Get User ID
		$user = $facebook->getUser();

		echo $user;
		if ($user) {
		  try {
		    // Proceed knowing you have a logged in user who's authenticated.
		    $user_profile = $facebook->api('/me');
		  } catch (FacebookApiException $e) {
		    error_log($e);
		    $user = null;
		  }
		}
	}
}