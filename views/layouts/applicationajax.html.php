<!doctype html>
<html>
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/assets/css/ajax.css">
	</head>
	<body>
		<main>
			<?php $old = json_encode($variables[$govs]);?>
			<?php var_dump($old);?>
			<?php $new = json_decode($new_govs);?>
			<?php var_dump($new_govs);?>
		</main>
		<script src="/assets/js/jquery-3.3.1.min.js"></script>
		<script src="/assets/js/init.js"></script>
	</body>
</html>