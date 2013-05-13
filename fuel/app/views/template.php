<!DOCTYPE html>
<html>
<!--▽ヘッダー START▽-->
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>

  <?php if (Auth::check()):?>
		<?php echo Asset::css('Grid.css'); ?>
		<?php echo Asset::js('Grid.js'); ?>
		<style>
			body { margin: 10px; }
		</style>
  <?php endif;?>

</head>
<!--△ヘッダー END△-->

<body>
	<!--TODO:ログイン判定とログアウトボタンの実装-->
  <?php if (Auth::check()):?>
	<!--navbar start-->
		<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/ponz/public">Bootstrap</a>
          <div class="nav-collapse collapse">
						<!--▽メニュー▽-->
            <ul class="nav">
              <li class="">
                <a href="/ponz/public/portal">Home</a>
              </li>
              <li class="">
                <a href="./getting-started.html">生徒管理</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">スケジュール</a>
              </li>
              <li class="active">
                <a href="./base-css.html">設定</a>
              </li>
            </ul>
						<!--△メニュー△-->

						<!--▽ログイン情報▽-->
						<ul class="nav pull-right">
							<li class="active">	<a href="./index">ものすごくながいなまえのひとだったばあい</a></li>
							<li><button class="btn btn-link btn-small">ログアウト</button></li>
						</ul><!-- /nav pull-right -->
						<!--△ログイン情報△-->
          </div>
        </div>
      </div>
    </div>
	<!--navbar end-->
	<?php endif; ?>

	<div style="margin-top: 40px"><!--ヘッダー開始位置調整空間--></div>
	<div class="container">
		<div class="row">
			<div class="span12">
				<!--▽ページタイトル START▽-->
				<h1><?php echo $title; ?></h1>
				<!--△ページタイトル END△-->
				<hr>

<?php if (Session::get_flash('success')): ?>
				<div class="alert-message success">
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert-message error">
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			
			<!--main-->
			<div class="span12">
				<?php echo $content; ?>
			</div>
			<!--/main-->

		</div>
		<hr>
		<footer>
			<!--TODO：フッターに表示させるもの検討-->
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
</body>
</html>
