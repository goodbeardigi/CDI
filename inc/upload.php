<?php
// If you want to ignore the uploaded files, 
// set $demo_mode to true;

$demo_mode = false;
$upload_dir = '../videos/';
$allowed_ext = array('jpg','jpeg','png','gif', 'mp4');

if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
	exit_status('Error! Wrong HTTP method!');
}


if(array_key_exists('pic',$_FILES) && $_FILES['pic']['error'] == 0 ){
	
	$pic = $_FILES['pic'];

	if(!in_array(get_extension($pic['name']),$allowed_ext)){
		exit_status('Only '.implode(',',$allowed_ext).' files are allowed!');
	}	

	if($demo_mode){
		
		// File uploads are ignored. We only log them.
		
		$line = implode('		', array( date('r'), $_SERVER['REMOTE_ADDR'], $pic['size'], $pic['name']));
		file_put_contents('log.txt', $line.PHP_EOL, FILE_APPEND);
		
		exit_status('Uploads are ignored in demo mode.');
	}
	
	
	// Move the uploaded file from the temporary 
	// directory to the uploads folder:
	
	if(move_uploaded_file($pic['tmp_name'], $upload_dir.$pic['name'])){
		exit_status('File was uploaded successfuly!');
		$ffmpeg = 'ffmpeg/ffmpeg'; //put the relative path to the ffmpeg.exe file
		$second = 15; //specify the time to get the screen shot at (can easily be randomly generated)
		$image = '../videos/thumbnails/sample.jpg'; //define the output file
		$video = $pic['tmp_name'];
		//finally assemble the command and execute it
		$command = "$ffmpeg  -itsoffset -$second  -i $pic -vcodec mjpeg -vframes 1 -an -f rawvideo -s 150×84 $image";
		exec($command);
	}
	
}

exit_status('Something went wrong with your upload!');


// Helper functions

function exit_status($str){
	echo json_encode(array('status'=>$str));
	exit;
}

function get_extension($file_name){
	$ext = explode('.', $file_name);
	$ext = array_pop($ext);
	return strtolower($ext);
}
?>