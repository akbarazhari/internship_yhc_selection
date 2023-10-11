<?php

class Project extends CI_Controller{
    public function index()
    {
        $data['project'] = $this->m_project->tampil_data()->result();
        $this->load->view('templates/header'); 
		$this->load->view('templates/sidebar'); 
		$this->load->view('project', $data);
		$this->load->view('templates/footer'); 
    }

    public function tambah_aksi()
    {
        $project_name 		    = $this->input->post('project_name');
 		$client 	            = $this->input->post('client');
 		$project_leader 		= $this->input->post('project_leader');
 		$start_date 			= $this->input->post('start_date');
 		$end_date 			    = $this->input->post('end_date');
        $img 		            = $_FILES['img'];

 		if ($img = '')  
 		{}else{
 			$config['upload_path'] = './assets/img';
 			$config['allowed_types'] = 'jpg|jpeg|png|gif';
 			
 			$this->load->library('upload', $config);
 			if(!$this->upload->do_upload('img')){
 				echo "Gambar gagal di upload";die();
 			}else{
 				$img = $this->upload->data('file_name');
 			}
 		}



 		$data = array(
 			'project_name' 		    => $project_name,
 			'client' 	            => $client,
 			'project_leader' 		=> $project_leader,
 			'start_date' 		    => $start_date,
 			'end_date' 			    => $end_date,
            'img'                   => $img

 		);
        $this->m_project->input_data($data, 'data_project');
        redirect('project/index');
    }

    public function hapus($id)
    {
        $where = array ('id' => $id);
        $this->m_project->hapus_data($where, 'data_project');
        redirect('project/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['project'] = $this->m_project->edit_data($where,'data_project')->result();

        $this->load->view('templates/header'); 
		$this->load->view('templates/sidebar'); 
		$this->load->view('edit', $data);
		$this->load->view('templates/footer'); 
    }

    public function update()
 	{
 		$id 		                = $this->input->post('id');
 		$project_name 	            = $this->input->post('project_name');
 		$client                     = $this->input->post('client');
 		$project_leader 	        = $this->input->post('project_leader');
 		$start_date 		        = $this->input->post('start_date');
 		$end_date 		            = $this->input->post('end_date');

 		$data = array(
 			'project_name' 		=> $project_name,
 			'client' 	        => $client,
 			'project_leader' 	=> $project_leader,
 			'start_date' 		=> $start_date,
 			'end_date' 			=> $end_date
 		);

 		$where = array(

 			'id' => $id
 		);
 		$this->m_project->update_data($where, $data, 'data_project');
 		redirect('project/index');
 	}
}