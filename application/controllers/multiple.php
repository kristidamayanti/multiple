<?php

class Multiple extends CI_Controller {

	private $limit=15;
    public function __construct() {
        parent::__construct();
		$this->load->model('m_image', 'img');
        $this->load->library('MY_Upload', '', 'upload');
		$this->load->library('pagination');
    }

    public function index() 
	{
		$data['pageTitle'] = 'Upload Files';
        $this->load->view('upload');
   
    }

    public function doUpload() {

        $config['upload_path'] = './assets/images';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';

        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload('userfile'))
		{
			$this->insertImg();
			
            $data['upload_data']= $this->upload->get_multi_upload_data();
            $this->load->view('upload',$data);

        } 
		else 
		{
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
    }
	
	private function insertImg()
	{
		
		$image=$_FILES['userfile']['name'];
		foreach($image as $img) :
			$data = array(
					'image'	=> $img,
						);

			$this->img->insert($data);
		endforeach; 
	}
	
	public function gallery($offset=null)
	{
		$uri_segment = 3;
		if($offset==null)
		{
			$offset=1;
		}
		else
		{
			//offset	
			$offset=$this->uri->segment($uri_segment);
		}
		
		$data['hasil'] = $this->img->lookGallery($this->limit, $offset);	
		$jml = $this->db->get('gambar');
		
		// generate pagination
	
		$config['base_url'] = site_url('Multiple/gallery');
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('gallery',$data);
	}

}
