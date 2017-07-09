<?php

$request = $_GET;
if(isset($request['nombre'])) {
	$filename = $request['nombre'];
	$response = file_get_contents('nombre=' . $filename . '.txt');
	echo $response;
}

?>