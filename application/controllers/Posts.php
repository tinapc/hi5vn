<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Posts extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
    {
		$this->load->model('Posts_model');
		// $data['content'] = $this->posts_model->get_all();
		// $this->load->view('posts_view', $data);
		// $posts = $this->Posts_model->get();
        $user = $this->Posts_model->fields('user_name, email')->as_array()->get(1);
        var_dump($user);
	}
		
	public function get($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('posts_model');
			$data['content'] = $this->Posts_model->get($id);
			$this->load->view('posts_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
	}
	
	public function add()
	{
		$this->form_validation->set_rules('element','Element label','trim|required');
		if($this->form_validation->run()===FALSE)
		{
			$data['input_element'] = array('name'=>'element', 'id'=>'element', 'value'=>set_value('element'));
			$this->load->view('posts_view', $data);
		}
		else
		{
			$field = $this->input->post('element');
			$this->load->model('posts_model');
			if($this->Posts_model->add(array('field_name'=>$field)))
			{
				$this->load->view('posts_success_page_view');
			}
			else
			{
				$this->load->view('posts_error_page_view');
			}
		}
	}
	
	public function edit()
	{
		$this->form_validation->set_rules('element','Element label','trim|required');
		$this->form_validation->set_rules('id','ID','trim|is_natural_no_zero|required');
		if($this->form_validation->run()===FALSE)
		{
			if(!$this->input->post())
			{
				$id = intval($this->uri->segment($this->uri->total_segments()));
			}
			else
			{
				$id = set_value('id');
			}
			$data['input_element'] = array('name'=>'element', 'id'=>'element', 'value'=>set_value('element'));
			$data['hidden'] = array('id'=>set_value('id',$id));
			$this->load->view('posts_view', $data);
		}
		else
		{
			$element = $this->input->post('element');
			$id = $this->input->post('id');
			$this->load->model('posts_model');
			if($this->posts_model->update(array('element'=>$element),array('id'=>$id)))
			{
				$this->load->view('posts_success_page_view', $data);
			}
			else
			{
				$this->load->view('posts_error_page_view');
			}
		}
	}
	public function delete($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('posts_model');
			$data['content'] = $this->Posts_model->delete();
			$this->load->view('posts_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
	}
}
/* End of file '/Posts_model.php' */
/* Location: ./application/controllers//Posts_model.php.php */