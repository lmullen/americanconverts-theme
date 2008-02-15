<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo settings('site_title'); echo $title ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="<?php echo css('screen'); ?>" />
<link rel="stylesheet" media="print" href="<?php echo css('print'); ?>" />

<!-- JavaScripts -->
<?php echo js('default'); ?>

<!-- Plugin Stuff -->
<?php echo plugin_header(); ?>

</head>
<body>
	<div id="wrap">

		<div id="header">
			<h1><a href="<?php echo uri(''); ?>"><?php echo settings('site_title'); ?></a></h1>
		</div>
		<div id="content">
			<div id="primary-nav">
				<h2>Search</h2>
				<?php echo simple_search(array('id'=>'simple-search'),uri('items/browse')); ?>
    			<ul class="navigation">
    			<?php echo nav(array('About' => uri('about'), 'Browse Items' => uri('items'), 'Browse Exhibits' => uri('exhibits'), 'Browse Collections'=>uri('collections'))); ?>
    			</ul>
			</div>