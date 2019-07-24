<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//


switch ($_SERVER['REQUEST_METHOD']) {
	case 'POST':
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"http://localhost:8600");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
		            "auth=webservices&input=123");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);
		curl_close ($ch);
		print_r($server_output);
		break;
	
	default:
		break;


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>

<?php 
	break;
};
?>