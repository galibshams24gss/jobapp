<?php 
 if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = '../reg/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'Resume Uploaded Successfully';
            }
        }       
    }  else {
        echo 'Please Upload Resume';
    }
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>