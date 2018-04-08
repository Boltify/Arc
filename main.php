<?php include_once ('app/dbconnect.php'); ?>
<?php include_once ('app/functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteName ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
</head>
<body>

<div class="sidebar">
	<?php include_once ('app/navigation.php'); ?>
</div>

<div class="main">
	<?php include_once ('app/alerts.php'); ?>
	<?php include_once ('app/main.php'); ?>  
</div>
     
</body>
</html> 

