<?php

class Controller_Login extends Controller_Template
{

	public function action_auth()
	{
		
	}
	
	public function action_index()
	{
		$error = null;

//		$view = View::forge('login/index');
		$this->template->content = View::forge('login/index');

		$form = Fieldset::forge();
		$form->add('username', 'ID', array('maxlength' => 8))
				->add_rule('required')
				->add_rule('max_length', 8);

		$form->add('password', 'PASS', array('type' => 'password'))
				->add_rule('required')
				->add_rule('max_length', 8);
		$form->add('submit', '', array('type' => 'submit', 'value' => 'ログイン'));
		$form->repopulate();

		$auth = Auth::instance();
		Auth::logout();
		if (Input::post()) {
				if ($form->validation()->run()) {
						if ($auth->login(Input::post('username'), Input::post('password'))) {
								// ログイン成功時
								Response::redirect('portal');
						}
						$error = 'ログイン失敗に失敗しました';
				} else {
						$error = 'ログイン失敗に失敗しました';
				}
		}

//		$view->set_safe('form', $form->build(Uri::create('login/index')));
//		$view->set('error', $error);
		$this->template->content->set_safe('form', $form->build(Uri::create('login/index')));
		$this->template->content->set('error', $error);
		$this->template->title = 'ponz &raquo; ログイン画面 ';

		
		
		
//		return $view;
		

//		$this->template->title = 'ログイン画面 &raquo; Auth';
//		$this->template->content = View::forge('login/index');


//		$this->template->content = View::forge('login/auth');
	}

	
/*

session_start();

if (isset($_SESSION["USERID"])) {
  $errorMessage = "ログアウトしました。";
}
else {
  $errorMessage = "セッションがタイムアウトしました。";
}
// セッション変数のクリア
$_SESSION = array();
// クッキーの破棄
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// セッションクリア
@session_destroy();
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
  <div><?php echo $errorMessage; ?></div>
  <ul>
  <li><a href="logini.php">ログイン画面に戻る</a></li>
  </ul>
  </body>
</html>


	 */
	
}
