<?php

    require_once 'class.upload.php';

    $handle = new Upload($_FILES['file']);
    //$handle->allowed = 'image/*';

    if($handle->uploaded) {
        $handle->Process('uploads/');
        if($handle->processed) {
            $response =  $handle->file_dst_path . $handle->file_dst_name; //$handle->file_dst_pathname;  
            $response =  str_replace("/\\","/",$response);

            echo $response;
        } else {
            echo 'HATA!';
        }
    }

    ?>