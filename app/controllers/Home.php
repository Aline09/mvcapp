<?php


class Home extends Controller{
	
	
	
	public function index($name = ''){
			
		$this->view('home/index', ['name' => $user->name]);
	}
	
	public function create($name = '', $email = ''){
		Users::create([
		'name' => $name,
		'email' => $email
		]);
	}
}