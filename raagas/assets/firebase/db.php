<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
// This assumes that you have placed the Firebase credentials in the same directory   https://www.cloudways.com/blog/php-firebase-integration/
// https://firebase-php.readthedocs.io/en/latest/    
//as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/learning-7eb33-firebase-adminsdk-mxxz0-bff3fa2213.json');
$firebase = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://learning-7eb33.firebaseio.com')
   ->create();
$database = $firebase->getDatabase();

?>