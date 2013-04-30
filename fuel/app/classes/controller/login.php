<?php

class Controller_Login extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Login &raquo; Auth';
		$this->template->content = View::forge('login/index');
//		$this->template->content = View::forge('login/auth');
	}
	
}
