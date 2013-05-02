<?php

class Controller_Portal extends \Fuel\Core\Controller_Template
{
	function action_index()
	{
		$this->template->title = 'A画面';
		$this->template->content = View::forge('portal/index');
	}
	
}