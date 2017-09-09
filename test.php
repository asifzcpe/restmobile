<?php

header('X_API_KEY:141455252');
require('database/DBAdapter.php');

$test=new Database\DBAdapter();
// $test->insert('users',['first_name'=>'sadaf','last_name'=>'khan']);

// echo '<pre>';
// print_r(getallheaders()['auth-key']);
// $api_key=getallheaders()['auth-key'];
// if($api_key=='145885521jhs')
// {
// 	echo json_encode($test->selectAll('users','',10));
// }
// else
// {
// 	header("HTTP/1.0 401 Unauthorized");
// }

// print_r($_SERVER);
$test->delete('users',['id'=>30,'first_name'=>'sadaf']);