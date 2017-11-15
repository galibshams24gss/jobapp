<?php 
 if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = '../reg/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>

<form action="yuh.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file"><br><br>
<button name="submit" id="submit">APPLY</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="myscript2.js"></script>