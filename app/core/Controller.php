<?php
/**
 * 
 */
class Controller extends Database 
{
	protected $view;
	protected $model;

	public function view($viewName,$data=[])
	{
		# code...
		$this->view = new View($viewName,$data);
		return $this->view;
	}
	public function model($modelName,$data=[])
	{
		# code...
		if (file_exists(MODEL.$modelName.'.php')) {
			# code...
			require MODEL.$modelName.'.php';
			$this->model=new $modelName;
		}
	}
	
}