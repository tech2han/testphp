<?php
    extract($_REQUEST);
    $file=fopen("form-save.js","a");

    fwrite($file,"var user = {");
    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file,"}");
    fclose($file);
    header("location: index.php");
 ?>
