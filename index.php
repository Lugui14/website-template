<?php

  define('INCLUDE_PATH', 'http://www.localhost/template/');
  define('INCLUDE_PATH_STATIC', INCLUDE_PATH.'Web/Views/');

  require("vendor/autoload.php");
  $app = new Web\Application();

  $app->run();

?>