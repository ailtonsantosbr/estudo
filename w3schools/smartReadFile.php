<?php  
function  smartReadFile($localtion, $filename, $minetype = 'application/octet-stream') {
	if (!file_exists($location)) {
		header("HTTP/1.0 404 Not Found");
		return;
	}

	$size = filesize($location);
	$time=date('r',filemtime($location));

	$fm=@fopen($location, 'rb');
	if (!$fm) {
		header("HTTP/1.0 505 Internal Server error");
		return;
	}

	$begin=0;
	$end=$size;

	if(isset($_SERVER['HTTP_RANGE'])){
		if (preg_match('/bytes=\h*(\d+)-(\d*)[\D.*]?/i',$_SERVER['HTTP_RANGE'], $matches) {
			$begin=intval($matches[0]);
			if (!empty($matches[1])) {
				$end = intval($matches[1]);
			}
		}

		if ($begin>0 || $end<$size) {
			header('HTTP/1.0 206 Partial Content');
		} else {
			header('HTTP/1.0 200 OK');
		}
	}
}



?>