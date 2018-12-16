<?php
class homeController extends Controller{

	public function index($id='',$name='')
	{
		# code...
		#echo "Class name - ".__CLASS__.'method  - '.__METHOD__;
		#echo $id."-".$name;
		$this->view('home\index',[
			'name' => $name,
			'id' => $id
		]);
		$this->view->render();
	}
	public function aboutus()
	{
		# code...
		echo "Class name - ".__CLASS__.'method  - '.__METHOD__;
	}
}