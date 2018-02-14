<?php
error_reporting(E_ERROR);

$mysqli=new mysqli('localhost','root','','simple_login');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $filename = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    	$result= $mysqli->query("INSERT INTO `notice`(`n_link`) VALUES ('{$target_file}')");
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	
		header("location: admin_index.php?remarks=success");

        echo $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

