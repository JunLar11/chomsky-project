<?php
date_default_timezone_set("America/Mexico_City");
require_once __DIR__ . "/../vendor/autoload.php";
Chomsky\App::bootstrap(dirname(__DIR__))->run();
