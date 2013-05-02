<?php

class Controller_Testes extends Controller_Template
{

	public function action_aiueo()
	{
		$this->template->title = 'Testes &raquo; Aiueo';
		$this->template->content = View::forge('testes/aiueo');
	}

}
