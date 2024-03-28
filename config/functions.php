<?php
function checkUrl($url)
{
  return $_SERVER['REQUEST_URI'] === $url;
}
