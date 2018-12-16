<?php
class carController extends Controller{
		
	public function index()
	{
		# code...
		$this->model('car');
		$this->view('car'.DIRECTORY_SEPARATOR.'index',['cars'=>$this->model->getCars()]);
		$this->view->render();

	}
	public function dev()
	{
		# code...
		print_r($this->query("SELECT * FROM `tbl_user`"));
	}
}