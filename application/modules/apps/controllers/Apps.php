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
		
		$data['apps'] = $this->global->get('apps')->result_array();
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
		$this->functions->check_access2($this->session->role_id, $this->uri->segment(1), $this->uri->segment(2));
		$this->form_validation->set_rules('app_name', 'App Name', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$id 				= decode($this->uri->segment(3));
			$data['apps'] 		= $this->global->getCond('apps', '*', ['id' => $id])->row_array();
			(isset($data['apps'])) ? $data['apps'] : show_404();

			$data['menus'] 		= $this->functions->generate_menu();
			$this->template->set_layout('backend')
							->title('Update Apps - AdminLTE')
							->build('f_apps', $data);
		} else {
			$this->db->trans_begin();
			
			$data_apps = [
				'app_name'		=> $this->input->post('app_name'),
				'app_company'	=> $this->input->post('app_company'),
				'app_logo_lg'	=> $this->input->post('app_logo_lg'),
				'app_logo_mini'	=> $this->input->post('app_logo_mini'),
				'app_theme'		=> $this->input->post('app_theme'),
			];
			$id = decode($this->input->post('id'));

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
			echo json_encode($result);	
		}
	}

}

/* End of file Apps.php */
/* Location: ./application/modules/apps/controllers/Apps.php */