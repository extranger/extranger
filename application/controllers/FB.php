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

	}

	function login()
	{
		$facebook = new Facebook(array(
		  'appId'  => '551637974908042',
		  'secret' => '6f05a1f59eed5377c6cc560737255bb6'
		  //'cookie' => true
		));
		//var_dump($facebook);
		// Get User ID
		$user = $facebook->getUser();
		//var_dump($user);
		$access_token = $facebook->getAccessToken();
		//var_dump($access_token);
		$friends = $facebook->api('/me/friends');
		//var_dump($friends);

		$pic = $facebook->api("https://graph.facebook.com/wzhjay/picture");
		var_dump($pic);
		echo "<img src='https://graph.facebook.com/100001294432614/picture?type=large'>";
		if($user){
			try {
				$user_profile = $facebook->api('/me');
				//var_dump($user_profile);
			}
			catch(FacebookApiException $e){
				echo $e->getMessage();
			}
		}

		if($user){
			$logoutUrl = $facebook->getLogoutUrl();
			//var_dump($logoutUrl);
			echo "<a href='$logoutUrl'>LogoutUrl</a>";
		}
		else{
			$loginUrl = $facebook->getLoginUrl();
			echo "<a href='$loginUrl'>LoginUrl</a>";
		}
	}
}