<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus extends CI_Controller {

	public function index()
	{
		$this->load->view('utama');
	}

	public function halaman()
	{
		$this->load->view('halaman_awal');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}
}
