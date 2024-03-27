<?php

function dd(mixed $var): void
{
  echo '<pre>';
  var_dump($var);
  echo '<pre>';
  die();
}
