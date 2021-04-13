<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:title" content="<?php echo $title ?>">
	<meta property="og:description" content="<?php echo $metadescriptiontag; ?>">
	<meta property="og:url" content="<?php echo RAIZ ?>">
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?php echo $title ?>">
	<meta name="description" content="<?php echo $metadescriptiontag; ?>">
	<meta name="author" content="Tresk">
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />

	<title><?php echo $title ?></title>

	<link rel="shortcut icon" href="<?php echo RAIZ ?>favicon.png" />

	<base href="<?php echo RAIZ ?>" />

	<?php include('css/style.php'); ?>

	<style type="text/css">
		<?php echo file_get_contents('css/font-awesome/css/font-awesome.min.css'); ?>
	</style>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<textarea class="main"></textarea>

	<div class="control-panel"></div>

	<div class="version transition">Versão: 1.0</div>
	<script type="text/javascript">
		<?php echo file_get_contents('js/jquery.js'); ?>
		<?php echo file_get_contents('js/scripts.js'); ?>
	</script>
</body>

</html>
