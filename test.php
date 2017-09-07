<?php

header('X_API_KEY:141455252');
require('database/DBAdapter.php');

$test=new Database\DBAdapter();
// $test->insert('users',['first_name'=>'sadaf','last_name'=>'khan']);
print_r($test->selectAll('user',['first_name','last_name'],10));
// echo '<pre>';
// print_r(getallheaders());

// print_r($_SERVER);