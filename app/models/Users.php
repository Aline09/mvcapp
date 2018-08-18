<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Users extends Eloquent{
	public $name;
	
	protected $fillable = ['username', 'email'];
}