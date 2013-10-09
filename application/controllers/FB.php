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
		  'secret' => '6f05a1f59eed5377c6cc560737255bb6',
		  'cookie' => true
		));
		//var_dump($facebook);
		// Get User ID
		$user = $facebook->getUser();
		//var_dump($user);
		$access_token = $facebook->getAccessToken();
		var_dump($access_token);

		//$pic = $facebook->api("https://graph.facebook.com/wzhjay/picture");
		//var_dump($pic);
		echo "<img src='https://graph.facebook.com/100001294432614/picture?type=large'>";
		if($user){
			try {
				//Create Query
    			$params = array(
        			'method' => 'fql.query',
        			'query' => "SELECT uid, about_me, birthday, contact_email, sex, website, current_address, first_name, last_name, interests, languages, pic_square_with_logo, pic_big FROM user WHERE uid = '$user'",
    				'scope' => 'user_likes, read_stream, user_about_me, email, user_birthday, user_website, user_location, user_interests'
    			);
    			//Run Query
    			$user_profile = $facebook->api($params);
    			var_dump($user_profile);
    			$pic_url = $user_profile[0]['pic_square_with_logo'];
    			echo "<img src='$pic_url'>";
				//$user_profile = $facebook->api('/me');
				//var_dump($user_profile);
				$friends = $facebook->api('/me/friends');
				//var_dump($friends);
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