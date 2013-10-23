<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bernstein extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->template->title('Welcome to Extranger')
				->set('currentSection', 'Berstein')
				->set_layout('bernstein_layout');
	}

	function index()
	{
		$this->template->build("bernstein_input");
	}

	function output() 
	{
		$url = APPPATH."libraries/java/bernstein.jar";

		$results = "";
	    $prev_id = 0 ;
	    $pair = "";
	    foreach ($_POST as $key => $value) {
	      if (!empty($value))
	      {
	      	  $value = strtoupper($value);
	      	  $value = trim($value);
	          // Strip out comma ,  semicolons , dots in the value
	          $value = preg_replace('~[,;.]~', '', $value);
	          // Example : left_input_1
	          $key_token = explode("_",$key);
	          $id = $key_token[2];
	          //echo $id.",".$prev_id.",".$value.",".$pair."</br> ";
	          if ($prev_id == $id)
	          {
	              $pair = $pair."->".$value;
	              $results = $results.",".$pair;
	          }
	          else
	          {
	              $pair = $value;
	          }
	          $prev_id = $id;
	       }
	    }

	    $results = ltrim ($results,',');

	    $param = "=".$results;
        putenv("DYLD_LIBRARY_PATH=''");
		exec("java -jar '$url' '$param'", $output);

		$outputStr = implode("#", $output);
		$outputArr = explode("%#", $outputStr);
		//var_dump($outputStr);
		$data = array();
		$data['step8'] = null;
		for($i = 0; $i < count($outputArr); $i++) {
			$data['step'.$i] = $outputArr[$i];
		}
		//var_dump($data);
		$this->template->build("bernstein_output", $data);
	}
}