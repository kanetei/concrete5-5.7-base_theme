<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">
  <?php Loader::element('header_required', array('pageTitle' => isset($pageTitle) ? $pageTitle : '', 'pageDescription' => isset($pageDescription) ? $pageDescription : ''));?>
</head>
<body>
  <div class="<?php echo $c->getPageWrapperClass()?>">
    <header>
      <h1><?php echo Config::get('concrete.site'); ?></h1>
    </header>
