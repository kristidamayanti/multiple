<?php
class m_image extends CI_Model
 {
	function __construct()
	{				
		parent::__construct();					 
	}
	
	public function insert($data){
        
        $this->db->insert('gambar',$data);
    }
	
	public function lookGallery($limit, $offset=0)
	{
		$lihat = "select * from gambar group by id desc limit $limit offset $offset";
		$look = $this->db->query($lihat);
		return $look->result(); 
		
		
	}
	

}