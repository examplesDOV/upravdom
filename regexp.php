<?php


$pattern = '/(<\/?)b(>)/';
$replacement = '$1strong$2';
$string = 'Name: <b>Bob</b> Last name: <b>Bobrov</b>.';

echo preg_replace($pattern, $replacement, $string);