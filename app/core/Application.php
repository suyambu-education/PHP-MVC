<?php
Class Application{
	protected $controller='homeController';
	protected $action ='index';
	protected $prams = [];

	public function __construct()
	{
		
		$this->prepareURL();
		if (file_exists(CONTROLLER.$this->controller.'.php')) {
			# code...
			$this->controller = new $this->controller;
			if (method_exists($this->controller, $this->action)) {
				# code...
				call_user_func_array([$this->controller, $this->action],$this->prams);
			}
		}

	}

	protected function prepareURL()
	{
		# code...
		$request = trim($_SERVER['REQUEST_URI'],'/');

		if (!empty($request)) {
			# code...
			$url = explode('/', $request);
			$this->controller = isset($url[0]) ? $url[0].'Controller' : 'homeController';
			$this->action = isset($url[1]) ? $url[1] : 'index';
			unset($url[0],$url[1]);
			$this->prams = !empty($url) ? array_values($url) : [];
		}
	}

}