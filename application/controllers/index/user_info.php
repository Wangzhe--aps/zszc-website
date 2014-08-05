<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_info extends CI_Controller {
/**
 	* 用户控制器默认方法
	 */
	public function index()
	{
		$this->load->view('index/404.html');
	}
}

/* End of file user_info.php */
/* Location: ./application/controllers/index/user_info.php */