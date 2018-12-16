<?php
/**
 * 
 */
class car 
{
	
	protected static $data_file;
	protected $inventory =[];

	public function __construct()
	{
		# code...
		self::$data_file =DATA.'cars.txt';
	}
	private function load()
	{
		# code...
		if(file_exists(DATA.'cars.txt')){
			$this->inventory =file(DATA.'cars.txt');
		}
	}

	public function getCars()
	{
		# code...
		$this->load();
		return $this->inventory;
	}
}