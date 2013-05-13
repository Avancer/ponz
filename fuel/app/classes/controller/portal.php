<?php

class Controller_Portal extends \Fuel\Core\Controller_Template
{
	

	//ログインチェック
	public function before()
	{
		parent::before();

/*今はツーツー
    if (Auth::check()) {
    } else {
        // 未ログイン時はログインページへリダイレクト
        Response::redirect('login/index');
    }
 */

		}
	
	function action_index()
	{
		$this->template->title = 'A画面';
		$this->template->content = View::forge('portal/index');
	}
	
}