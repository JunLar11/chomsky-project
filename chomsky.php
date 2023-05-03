<?php
date_default_timezone_set("America/Mexico_City");
require_once "./vendor/autoload.php";

Chomsky\Cli\Cli::bootstrap(__DIR__)->run();