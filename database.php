<?php

use Exads\Users;

require 'vendor/autoload.php';


$user = new Users();

echo $user->queryDatabase();

/**
 * To show the insert of a row I will leave this with dummy data in it
 * so when you load the page it will insert sanitised information
 */
echo $user->insertIntoDatabase('John Doe', 30, 'CTO');
