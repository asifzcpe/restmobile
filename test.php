<?php

require('database/DBAdapter.php');

$test=new Database\DBAdapter();
$test->insert('users',['first_name'=>'sadaf','last_name'=>'khan']);