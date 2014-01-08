#!/usr/bin/env php
<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$application = new TwigCli\Application();
$application->run();

unset($base, $application);