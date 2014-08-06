<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_info extends CI_Controller {
/**
 	* 用户控制器默认方法
	 */
	public function index()
	{
		$this->load->view('index/rise-welcome.html');
	}

	/**
	 * 登陆成功
	 */
	function login_success(){
		$this->load->view('index/signup-succeed.html');
	}
	function userregist(){
		$this->load->view('index/signup.html');
	}
}

/* End of file user_info.php */
/* Location: ./application/controllers/index/user_info.php */