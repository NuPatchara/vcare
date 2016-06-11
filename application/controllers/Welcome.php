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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('head');
		
		// $content = $this>Get_data->getContent();
		// $data = array('content' => $content);

		$query = "SELECT * FROM `content` ORDER BY id DESC LIMIT 2";
		$content = $this->db->query($query)->result();
		// $data = array('content' => $content);

		$query = "SELECT vote, count(vote) as score FROM vote GROUP BY vote";
		$score = $this->db->query($query)->result();
		$data = array('content' => $content,'score' => $score);

		$this->load->view('home',$data);
		
	}
}
