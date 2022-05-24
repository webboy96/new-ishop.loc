<?php

use wfm\View;

/** @var $this View */

?>
<?php $this->getPart('parts/headers'); ?>
<?=
// выводим все что между открывающим и закрывающим тегом
$this->content;
?>
<?php $this->getPart('parts/footer'); ?>