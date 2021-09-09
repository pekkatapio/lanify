<?php

  $config = array(
    "urls" => array(
        "baseUrl" => "/~koodaaja/lanify"
    )
  );

  define("PROJECT_ROOT", dirname(__DIR__) . "/");
  define("HELPERS_DIR", PROJECT_ROOT . "src/helpers/");
  define("TEMPLATE_DIR", PROJECT_ROOT . "src/view/");
  define("MODEL_DIR", PROJECT_ROOT . "src/model/");
  define("CONTROLLER_DIR", PROJECT_ROOT . "src/controller/");

?>

