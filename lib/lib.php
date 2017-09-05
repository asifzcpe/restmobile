<?php

function array_to_string(array $data)
{
	$string='';
	if(is_array($data))
	{
		foreach($data as $key=>$value)
		{
			$string.=$key."="."'".$value."'";
		}
		return $string;
	}
}


echo array_to_string(['name'=>'sadaf','last_name'=>'khan']);