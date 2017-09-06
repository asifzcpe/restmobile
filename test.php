<?php

header('X_API_KEY:141455252');
require('database/DBAdapter.php');

$test=new Database\DBAdapter();
// $test->insert('users',['first_name'=>'sadaf','last_name'=>'khan']);
echo '<pre>';
print_r(getallheaders());