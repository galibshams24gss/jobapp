<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
</head>
<body>
<div class="login">
<form id="myForm" action="logininfo.php" method="POST" style="text-align:center; background: url('Green-Light-plain-line-background.jpg') no-repeat; background-size: cover;">
<font size="3" face="Arial" color= "black">Username: </font><input type="text" name="username" id="username" placeholder="username" required><br />
<font size="3" face="Arial" color= "black">Password: </font><input type="password" name="password" id="password" placeholder="password" required><br />
<button name="submit" id="submit"><font size="4" face="Arial" color= "black">Login</font></button>
</form>
<div id="result" style="text-align:center; background: url('background.jpg') no-repeat; background-size: cover;"></div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="my_script.js"></script>
</body>
</html>