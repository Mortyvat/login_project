<?php 
function createZipFile($zip,$filename){
	echo '<br>'.$filename.'.txt<br>';
		$res = $zip->open('test.zip',ZipArchive::CREATE);
		if ($res === TRUE) {
			$zip->addFromString($filename.'.txt', 'file content goes here');
			$zip->setEncryptionName($filename.'.txt', ZipArchive::EM_AES_256, 'password');
			$zip->addFile('$filename.txt', 'entryname.txt');
			$zip->close();
			echo "ok";
		} else {
			echo 'failed';
		}
}