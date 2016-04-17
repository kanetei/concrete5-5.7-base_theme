<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
  <?php Loader::element('system_errors', array('format' => 'block', 'error' => $error, 'success' => $success, 'message' => $message)); ?>
  <?php print $innerContent; ?>
</main>

<?php  $this->inc('elements/footer.php'); ?>
