<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		echo "Hello World";
	}
}
?>