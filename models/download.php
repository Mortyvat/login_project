<?php
class DownloadModel extends Model{
	public function Index(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		print_r($post);
		if(isset($post['submit'])){
			$zip = new ZipArchive();
			$filename = $post['title'];
			echo $filename;
			createZipFile($zip,$filename);
		}
		return;
	}
}