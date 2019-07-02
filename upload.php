<?php 

if(isset($_POST['submit'])){
  // echo "<pre>";

  // print_r($_FILES['file_upload']);

  // echo "<pre>";
  
  $upload_errors = array(

  	UPLOAD_ERR_OK => "There is no error"


  );

  $temp_name = $_FILES['file_upload']['tmp_name'];
  $the_file = $_FILES['file_upload']['name'];

  //Make a directory to move files 
  $directory = "uploads";

  if(move_uploaded_file($temp_name, $directory . "/" . $the_file)){
  	$the_message = "File uploaded successfully";
  } else {

  }
  
  
  $the_error = $_FILES['file_upload']['error'];

  $the_message = $upload_errors[$the_error];
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

<form action="upload.php" enctype="multipart/form-data" method="POST">

	<h2>
		<?php 
		  if(!empty($upload_errors)){
		  	echo $the_message;
		  }

		 ?>

	</h2>

	<input type="file" name="file_upload"><br>
	<input type="submit" name="submit">

</form>



</body>
</html>