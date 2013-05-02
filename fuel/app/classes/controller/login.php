<?php

class Controller_Login extends Controller_Template
{

	public function action_auth()
	{
		
	}
	
	public function action_index()
	{
		$this->template->title = 'ログイン画面 &raquo; Auth';
		$this->template->content = View::forge('login/index');
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
