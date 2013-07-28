<?php

define('DS', DIRECTORY_SEPARATOR);
define('DIR_ROOT', dirname(__FILE__));

require join(DS, array(DIR_ROOT, "vendor", "autoload.php"));

\Devil\MVC\Site::setup("LGBTeens", join(DS, array(DIR_ROOT, "templates")), "/");