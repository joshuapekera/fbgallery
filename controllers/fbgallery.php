<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fbgallery extends Public_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	/**
	 * Index method
	 *
	 * @access public
	 * @return void
	 */
	public function index($aid=0){
		if($aid!=0){
			$data['photos']= array();
			$data['albums']= false;
		}else{
			$data['albums']= $this->fbgallery_model->getAlbums();
		}
		$this->template->build('galleries',$data);
		
	}
	
	/**
	 * Index method
	 *
	 * @access public
	 * @return void
	 */
	public function photos($aid=0){
		if($aid!=0){
			$data['photos']= array();
			$data['albums']= false;
		}else{
			$data['albums']= $this->fbgallery_model->getAlbums();
		}
		$this->template->build('galleries',$data);
		
	}	

}