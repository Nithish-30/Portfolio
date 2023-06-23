<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __constructor()
	{
		parent::__construct();
		
		
	}

	public function index()
	{
		$this->header();
		
		$data['badge']=array('web developer', 'fullstack developer');
		
		$data['about']=array('Hi,', "I'm Nithish Saran K M, a passionate web developer with expertise in front-end and back-end development. I have a background in Master,s of Computer Applications. I thrive on solving complex problems and collaborating with teams to deliver high-quality solutions. With a focus on clean code and user experience, I create innovative and intuitive digital experiences. I'm a quick learner, staying updated with the latest technologies and trends. Explore my portfolio to see my work.");

		
		$data['btn_link']=array('http://localhost/ci3Bs/resume','http://localhost/ci3Bs/projects');
		$data['btnname']=array('Resume','Projects');
		$data['profile']=base_url('assets/img/profile1.jpg');
		
		$this->load->view('home',$data);
		$this->footer();
	}


	public function resume()
	{

		$this->header();
		$this->load->view('resume');
		$this->footer();
	}

	public function projects()
	{
		$this->header();

		$data['title']='Projects';
		
		$this->load->model('Portfolio');			//loading the model
		
		$data['rows']=$this->Portfolio->getContent();		// assign the getContent() function to the array variable

		$this->load->view('projects',$data);
			
		$this->footer();

	}

	public function header()
	{
		$data['greet']=array('Hi, Welcome', 'http://localhost/ci3Bs/');
		$data['nav']=array('Home', 'Resume', 'Projects');
		$data['nav_link']=array('http://localhost/ci3Bs/', 'http://localhost/ci3Bs/resume', 'http://localhost/ci3Bs/projects');

		$this->load->view('includes/header',$data);

	}

	public function footer()
	{
		$data['copyright']='Nithish Saran, 2023. All rights reserved.';
		$data['phno']='+91 9566412523';
		$data['mail']='nithishsaranm@gmail.com';

		$this->load->view('includes/footer',$data);
	}

}
