<?php
namespace Core\Rest_server;
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');

class Rest_server{
	private $request_type=$_SERVER['REQUEST_METHOD'];

	public function get($data)
	{
		if(is_array($data))
		{
			echo json_encode($data);
		}
	}

}