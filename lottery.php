<?php

use Exads\Lottery;

require 'vendor/autoload.php';

$lottery = new Lottery();

echo "<h1>Lotto Results</h1>";

echo "<h2>The next lotto draw from today is :</h2>";
echo "<h3>".$lottery->whenIsNextLottery()."</h3>";

echo "<h2>The next lotto draw from '2016-09-16 19:11:10' is :</h2>";
echo "<h3>".$lottery->whenIsNextLottery('2016-09-16 19:11:10')."</h3>";
