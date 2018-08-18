<?php


class Home extends Controller{
	public function index($name = ''){
		$user = $this->model('Users');
		$user->name = 'Aline';
		echo $user->name;
		
		$this->view('home/index', ['name' => $user->name]);
	}
}