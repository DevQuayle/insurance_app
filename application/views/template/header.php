<?php 

	define("DEFAULT_LANG","pl");
	define("CHARSET","utf-8");
	define("SITE_TITLE"," - Ubezpieczenia - ");
	define("DEFAULT_DESCRIPTION","Opis strony");

?>
<!DOCTYPE html>
<html lang="<?= DEFAULT_LANG ?>">
	<head>
		<meta charset="<?= CHARSET ?>" />
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?= DEFAULT_DESCRIPTION ?>" />
		<title><?= SITE_TITLE ?></title>
		<link rel="Stylesheet" type="text/css" href="<?=base_url()?>/assets/css/w3full.css" />
		<link rel="Stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style.css" />
		 <!-- Bootstrap -->
   		 <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">

   		 
 	 <script src="<?php echo base_url() ?>/assets/js/jquery-latest.js"></script>
 	 <script src="<?php echo base_url() ?>/assets/js/jquery.tablesorter.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>/assets/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url() ?>/assets/js/respond.min.js"></script>
    <![endif]-->


	</head>
	<body>
	<div id="wrapper">
	
	