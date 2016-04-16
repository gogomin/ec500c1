<?php
    $file_result =" ";
     if ($_FILES["file"] ["error"]>0)
     {
      $file_result .= "No File Upload or Invalid File ";
      $filr_result .="Error Code: " . $_Files["file"] ["error"] ."<br>";
     }
    else{
    $file_result .=
    "Upload: " . $FILES["file"] ["name"] ."<br>" .
    "Type: " . $FILES["file"] ["type"] ."<br>" .
    "Size: " . $FILES["file"] ["size"] /1024 ." Kb<br>" .
    "Temp file: " . $FILES["file"] ["tmp_name"] ."<br>" ;
        
    move_uploaded_file($_FILES["file"] ["tmp_name"],"uploads／" . $_FILES["file"]["name"]);
        
    $file_result .= "File Upload Successful!";
    }
?>