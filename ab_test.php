<?php

use Exads\AbTest;

require 'vendor/autoload.php';

$ab_test = new AbTest();

echo "<h3>Please keep refreshing the page to see the design change.</h3>";

echo $ab_test->getDesigns();