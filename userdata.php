<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome</title>
</head>
<body>
<div class="information">
<h1 id="header1" style="text-align:center;"><font size="6" face="Arial" color= "black" style="text-align:center; background: url('background.jpg') no-repeat; background-size: cover;">Welcome to PHP</font></h1>
<h2 id="header2" style="text-align:center;"><font size="5" face="Arial" color= "black">Please fill up the following form</font></h2>
<div id="myData" action="data.php" method="POST" style="text-align:center; background: url('Green-Light-plain-line-background.jpg') no-repeat; background-size: cover;">
<font size="3" face="Arial" color= "black">Full Name: </font><input type="text" name="fullname" id="fullname" placeholder="full name" required pattern="[a-zA-Z]{3,15}$"><br />
<font size="3" face="Arial" color= "black">Age: </font><input type="text" name="age" id="age" placeholder="age"><br />
<font size="3" face="Arial" color= "black">Email: </font><input type="text" name="email" id="email" placeholder="email address" required pattern="[a-z0-9._-]+@[a-z0-9._]+\.[a-z]{2,4}$"><br />
<font size="3" face="Arial" color= "black">Contact: </font><input type="text" name="contact" id="contact" placeholder="contact number" required pattern="[0-9]{10}$"><br />
<font size="3" face="Arial" color= "black">Education: </font>
<input type="radio" name="edulevel" value="diploma"><font size="2.5" face="Arial" color= "black">Diploma</font>
<input type="radio" name="edulevel" value="undergrad"><font size="2.5" face="Arial" color= "black">Undergrad</font>
<input type="radio" name="edulevel" value="masters"><font size="2.5" face="Arial" color= "black">Masters</font>
<input type="radio" name="edulevel" value="phd"><font size="2.5" face="Arial" color= "black">PHD</font>
<br />
<font size="3" face="Arial" color= "black">University: </font><input type="text" name="university" id="university" placeholder="university/institution name"><br />
<font size="3" face="Arial" color= "black">Address: </font><input type="text" name="address" id="address" placeholder="home address"><br />
<font size="3" face="Arial" color= "black">Postcode: </font><input type="text" name="postcode" id="postcode" placeholder="postal code"><br />
<font size="3" face="Arial" color= "black">City: </font><input type="text" name="city" id="city" placeholder="city/town/suburb name"><br />
<font size="3" face="Arial" color= "black">Country: </font><input type="text" name="country" id="country" placeholder="country name"><br />
<font size="3" face="Arial" color= "black">Gender: </font>
<input type="radio" name="gender" value="male"><font size="2.5" face="Arial" color= "black">Male</font>
<input type="radio" name="gender" value="female"><font size="2.5" face="Arial" color= "black">Female</font>
<br /><br />
<font size="4" face="Arial" color= "black"><button name="submit" id="submit">SAVE & CONTINUE</font></button>
</div>

<div id="showresult" style="text-align:center; background: url('background.jpg') no-repeat; background-size: cover;"></div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="myscript.js"></script>
</body>
</html>