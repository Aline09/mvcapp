<?php

class Controller{
	//Loading a Model 
	
	public function model($model){
	
	require_once '../app/models/' . $model . '.php';
	
	return new $model();
	}

	//Loading a View
	public function view($view, $data = []){
		require_once '../app/views/' . $view. '.php';
	}
}