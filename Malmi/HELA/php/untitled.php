<?php
 function userlog($action,$result,$username,$note=False){
		$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$file = date('Y-m-d').'_session_log.txt';
		if (!file_exists($file)) {
			file_put_contents($file, '');
		}
		$content = '
===========================
IP: ' . $_SERVER['REMOTE_ADDR'] . '
Time: ' . date('d/m/Y H:i:s a') . '
Username: ' . $username . '

Action: ' . $action . '
Result: ' . $result . '
URL: ' . $url . '
';
		if($note){
			$content .= 'Note: ' . $note . '
';
		}
		file_put_contents($file, $content, FILE_APPEND);
	}

?>