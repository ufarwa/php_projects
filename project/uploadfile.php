<?php
$erorFailedtocreate=$suces=$failed=$finaleror=$error="";
if(isset($_FILES['file'])){
    $file_name = $_FILES['file']['name'];
    $file_temp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $max_file_size = 1000000; // 1000KB in bytes
    $allowed_file_types = ['pdf'];
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $filename = 'Example.pdf';
    $target_directory = "D:/upload/";

   
    // if ($file_size <= $max_file_size && in_array(strtolower($file_extension), $allowed_file_types)) {
        if($file_size <= $max_file_size){
        if(in_array(strtolower($file_extension), $allowed_file_types)){

        
        $destination_path = $target_directory . $filename;
    
        if (!file_exists($target_directory)) {
            mkdir($target_directory,0777,true);
        }
        if (file_exists($destination_path)) {
            // Rename the existing file 
            $new_name = time() . $filename;
            rename($destination_path, $target_directory . $new_name);
        }
    
        if (move_uploaded_file($file_temp, $destination_path)) {
            rename($destination_path, $target_directory . $filename);

            $suces ="Successfully uploaded";
        } 
       
        else {
           $failed= "Failed to upload";
        }
    }
    else{
        $error="only PDF allowed";
    }
    } else {
        $finaleror= "size must be less than 10kB";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
    <link rel="stylesheet" href="uploadfile.css">
</head>
<body>
<h2 style="color:green;text-align:center">
    <?php
    echo $suces;  
    ?>
</h2>
    <h1>Upload Your File</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <span style="font-size:small;color:red;">
    <?php
    echo $failed;
    echo  $finaleror;
    echo  $erorFailedtocreate;   
    echo  $error;   
    ?>
</span>
<br>
    <input type="submit"/>
    </form>
</body>
</html>

