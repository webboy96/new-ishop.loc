<?php

use wfm\View;

/** @var $this View */

?>
<?php $this->getPart('parts/header'); ?>
<?=
// выводим все что между открывающим и закрывающим тегом
$this->content;
?>
<?php $this->getPart('parts/footer'); ?>

<?php
$array1 = ["a" => "green", "pink", "blue", "red", "brown", "r" => "red", "red"];
$array2 = ["b" => "green", "brown", "black", "yellow", "pink",];
$result = array_keys(array_diff($array1, $array2));
debug($result);
$string = '123foo';
$der = (int) $string;
echo int('123foo');
?>
