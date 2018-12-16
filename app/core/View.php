<?php
/**
 * 
 */
class View 
{
	protected $view_file;
	protected $view_data;
	
	public function __construct($view_file,$view_data)
	{
		# code...
		$this->view_file=$view_file;
		$this->view_data=$view_data;
	}
	 public function render()
	 {
	 	# code...
	 	#echo VIEW.$this->view_file.'.phtml';
	 	if(file_exists(VIEW.$this->view_file.'.phtml')){
	 		include VIEW.$this->view_file.'.phtml';
	 	}
	 }

	 public function getAction()
	 {
	 	# code...
	 	return (explode('\\', $this->view_file)[1]);
	 }
}