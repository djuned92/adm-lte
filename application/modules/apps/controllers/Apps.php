<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->functions->is_login();
	}

	/**
	* function index apps
	* @return view apps
	*/
	public function index()
	{
		$this->functions->check_access($this->session->role_id, $this->uri->segment(1)); // access read
		$data['menus'] 		= $this->functions->generate_menu(); // generate menu
		$data['priv']		= $this->functions->check_priv($this->session->role_id, $this->uri->segment(1)); // for button show and hide
		$data['apps'] 		= $this->global->getCond('apps', '*', ['id' => 1])->row_array();
		$this->template->set_layout('backend')
						->title('Apps - AdminLTE')
						->build('v_apps', $data);
	}

	/**
	* function update apps
	* @return json, error|type|message
	*/
	public function update()
	{
		// dd($_POST);
		$this->db->trans_begin();
		
		$data_apps = [
			'app_name'		=> $this->input->post('app_name'),
			'app_company'	=> $this->input->post('app_company'),
			'app_theme'		=> $this->input->post('app_theme'),
		];
			
		$id = $this->input->post('id');

		$this->global->update('apps', $data_apps, ['id' => $id]);
		
		if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
			$result['error']	= TRUE;
			$result['type']		= 'error';
			$result['message']	= 'Application fail to updated!';
        } else {
        	$this->db->trans_commit();
			$result['error']	= FALSE;
			$result['type']		= 'success';
			$result['message']	= 'Application success to upated!';
        }
		redirect('apps');
	}

}

/* End of file Apps.php */
/* Location: ./application/modules/apps/controllers/Apps.php */