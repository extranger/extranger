<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bernstein extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->template->title('Welcome to Extranger')
				->set('currentSection', 'Berstein')
				->set_layout('default');
	}

	function index()
	{
		
	}

	function normalization() 
	{
		$url = APPPATH."libraries/java/bernstein.jar";
		$param = "=A->B,A->C,B->C,B->D,D->B,ABE->F";
        putenv("DYLD_LIBRARY_PATH=''");
		$result = shell_exec("java -jar '$url' '$param'");
		print($result);
	}
}