<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pro_info extends CI_Controller {
/**
 * 项目控制器默认方法
 */
	public function index()
	{
		echo '显示成功';
	}
	/**
	 * 捐赠页面记录方法
	 */
	function donaterecord(){
		$this->load->view('index/donate-record.html');
	}
	/**
	 * 捐赠页面细节方法
	 */
	function donatedetails(){
		$this->load->view('index/donate-details.html');
	}
	/**
	 * 捐赠页面讨论方法
	 */
	function donatetalk(){
		$this->load->view('index/donate-talk.html');
	}
}

/* End of file pro_info.php */
/* Location: ./application/controllers/index/pro_info.php */