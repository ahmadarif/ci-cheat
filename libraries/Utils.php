<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utils
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function setHeaderNoCache()
	{
		$this->ci->output->set_header("HTTP/1.0 200 OK");
		$this->ci->output->set_header("HTTP/1.1 200 OK");
		$this->ci->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');
		$this->ci->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		$this->ci->output->set_header("Cache-Control: post-check=0, pre-check=0");
		$this->ci->output->set_header("Pragma: no-cache");
	}

	public function generateString($length = 20) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

}

/* End of file Utils.php */
/* Location: .//C/Users/Ahmad Arif/AppData/Local/Temp/fz3temp-1/Utils.php */
