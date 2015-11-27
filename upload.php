<?php
// Where the file is going to be placed 
$target_path = "uploaded/";
$file_path = "http://emotewebserver.azurewebsites.net/uploaded/"
/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	//echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    //" has been uploaded";
    chmod ("uploads/".basename( $_FILES['uploadedfile']['name']), 0644);
	$file_path = $file_path . basename( $_FILES['uploadedfile']['name']);
	echo $file_path;
	
} else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploadedfile']['name']);
    echo "target_path: " .$target_path;
}
?>
