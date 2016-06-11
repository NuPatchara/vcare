<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Customer_model extends CI_Model 
{
 
public function __construct()
{
    parent::__construct();
}
 
public function getContent()
{
	$query = "SELECT * FROM `content` ORDER BY id";
	$content = $this->db->query($query)->result();
	return $content;
}