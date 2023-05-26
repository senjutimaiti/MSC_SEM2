<?php
    #image_upload.php : Write a program to upload image in a folder under htdocs.
    error_reporting(0);
?>
<!Write html code to upload images in a folder using PHP program >
<html>
<body bgcolor="pink">
<h1 style="background-color:red;color:white;font-weight:bold;text-align:center;">
UPLOADING IMAGES
</h1>
<font face="arial" size="5" color=#000000>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile" value="">
<input type="submit" name="submit" value="Upload Image">
</form>
</body>
</html>
<?php
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="picture_folder/".$filename;
move_uploaded_file($tempname,$folder);
echo "<a href='$filename'><img src='$filename' height=300 width=300 border=3></a>".'<br>';
echo $folder;
?>