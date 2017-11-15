<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upload</title>
</head>
<body>
<h1 id="header3" style="text-align:center;"><font size="6" face="Arial" color= "black">Resume Upload</font></h1>
<iframe id="upload_target" name="upload_target" height="35px" width="250px" frameborder="0"></iframe>
<form id="myUpload" target="upload_target" action="upload.php" method="POST" enctype="multipart/form-data" style="text-align:center; background: url('Green-Light-plain-line-background.jpg') no-repeat; background-size: cover;">
<input type="file" name="file" id="file" placeholder="resume upload"><br><br>
<button name="submit" id="submit"><font size="4" face="Arial" color= "black">SUBMIT</font></button>
</form>
<div id="showupload" style="text-align:center; background: url('background.jpg') no-repeat; background-size: cover;"></div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

