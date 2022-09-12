<?php
function request_url()
{
  $result = ''; // empty
  $default_port = 80; // port on default
 
  // type of connection
  if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
    // add protocol...
    $result .= 'https://';
    // ...and adjusting port on default
    $default_port = 443;
  } else {
    $result .= 'http://';
  }
  // Server name f.example site.com или www.site.com
  $result .= $_SERVER['SERVER_NAME'];
 
  // port ondefault
  if ($_SERVER['SERVER_PORT'] != $default_port) {
    // if not adding port to url
    $result .= ':'.$_SERVER['SERVER_PORT'];
  }
  // path and get parameters
  $result .= $_SERVER['REQUEST_URI'];
  return $result;
}
?>