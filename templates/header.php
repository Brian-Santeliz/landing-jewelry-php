<?php
$url = $_SERVER["SCRIPT_NAME"];
$break = explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = 'cache-'.substr_replace($file ,"",-4).'.html';
$cachetime = 18000;

// Servimos de la cache si es menor que $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    readfile($cachefile);
    exit;
}
ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <title><?php echo $title ?> | Nova Joyeria</title>
    <link href="css/css.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <header class="encabezado-sitio container">
      <div class="row justify-content-md-between align-items-center">
        <div class="col-lg-4">
          <a href="index.php"> <img src="img/logo.png" alt=""> </a>
        </div>
        <div class="col-lg-4">
          <nav class="sociales text-center text-lg-right">
            <ul>
              <li>
                <a href="http://facebook.com">
                  <span class="sr-only"> Facebook</span>
                </a>
              </li>
              <li>
                <a href="http://twitter.com">
                  <span class="sr-only"> Twitter</span>
                </a>
              </li>
              <li>
                <a href="http://instagram.com">
                  <span class="sr-only"> Instagram</span>
                </a>
              </li>
              <li>
                <a href="http://pinterest.com">
                  <span class="sr-only"> Pinterest</span>
                </a>
              </li>
              <li>
                <a href="http://youtube.com">
                  <span class="sr-only"> YouTube</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>