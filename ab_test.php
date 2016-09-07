<?php

use Exads\AbTest;

require 'vendor/autoload.php';

$ab_test = new AbTest();

echo $ab_test->getDesigns();