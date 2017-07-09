<?php

$request = $_GET;
if(isset($request['libro'])) {
	$filename = $request['libro'];
	$response = file_get_contents(realpath('libro=' . $filename . '.txt'));
	echo $response;
}

?>