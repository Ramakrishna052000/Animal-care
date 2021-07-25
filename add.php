<?php
include("conn.php");
extract($_POST);
$target_dir = "C:\wamp64\www\Project\uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "<script> alert('File is not an image.');;</script>";
    $uploadOk = 0;
  }
}
if (file_exists($target_file)) {
  echo "<script> alert('Sorry, file already exists.');;</script>";
  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
  echo "<script> alert('Sorry, only JPG, JPEG, PNG files are allowed.');;</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script> alert('Sorry, your file was not uploaded.');';</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.</script>";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
$dir='uploads/'. basename($_FILES["fileToUpload"]["name"]);
$sql="insert into addanimal(name,age,type,img) values('$name','$age','$type','$dir')";
echo $sql;
mysqli_query($con,$sql);
if(!mysqli_error($con))
{  
    $sql= "select max(id) as max from addanimal";
    
    $res = mysqli_query($con,$sql);
    
    $val = mysqli_fetch_assoc($res);
    
    $id =$val['max'];
    echo "<script> alert('added successfully.animal id is $id');window.location='add.html';</script>";
}
else
{echo "<script> alert('Error occured');; </script>";}
}