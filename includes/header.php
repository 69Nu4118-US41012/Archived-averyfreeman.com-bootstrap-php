<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>
	<?php $page_title; ?>
</title>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href"css/additional.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top hidden-print" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="nav navbar-brand <?php if ($section == "home") {echo "active"; } ?>" href="index.php"><i class="fa fa-home"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                 <li class="<?php if ($section == "home") {echo "active"; } ?>"><a href="index.php">About</a>
                <li class="<?php if ($section == "websites") {echo "active"; } ?>"><a href="websites.php">Websites</a></li>             
                <li class="<?php if ($section == "techsupport") {echo "active"; } ?>"><a href="techsupport.php">Tech Support</a></li>
                <li class="<?php if ($section == "dj") {echo "active"; } ?>"><a href="dj.php">DJ</a></li>
                <li class="<?php //if ($section == "blog") {echo "active"; } ?>"><a href="http://blog.averyfreeman.com" target="_blank">Blog</a></li>
                <li class="<?php if ($section == "contact") {echo "active"; } ?>"><a href="mailform.php">Contact</a></li>
                </li>
                </li>
            </ul>         
        </div>
    </nav>