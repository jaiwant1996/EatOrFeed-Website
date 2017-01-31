<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eat or Feed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  


<?php

$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];

// Change the line below to your timezone!
date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/Y h:i:s a', time());


?>


<?php
$ipaddr= $_SERVER['REMOTE_ADDR'];

$connect= mysql_connect("localhost","ithinkx1_jaiwant","jaiwantbhushaN1") or die("CANT CONNECT");
mysql_select_db("ithinkx1_users") or die("cant find db");




mysql_query("INSERT into visitors(ipaddr,city,region,country,date)VALUES('$ipaddr','$city','$region','$country','$date')");


?>
  
  
  
<style>
body { 
background: url(images/back4.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
 /* background-size: cover; */





/*
background-color: hsl(34, 53%, 82%);
background-image: repeating-linear-gradient(45deg, transparent 5px, hsla(197, 62%, 11%, 0.5) 5px, hsla(197, 62%, 11%, 0.5) 10px,                  
  hsla(5, 53%, 63%, 0) 10px, hsla(5, 53%, 63%, 0) 35px, hsla(5, 53%, 63%, 0.5) 35px, hsla(5, 53%, 63%, 0.5) 40px,
  hsla(197, 62%, 11%, 0.5) 40px, hsla(197, 62%, 11%, 0.5) 50px, hsla(197, 62%, 11%, 0) 50px, hsla(197, 62%, 11%, 0) 60px,                
  hsla(5, 53%, 63%, 0.5) 60px, hsla(5, 53%, 63%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 80px,
  hsla(35, 91%, 65%, 0) 80px, hsla(35, 91%, 65%, 0) 90px, hsla(5, 53%, 63%, 0.5) 90px, hsla(5, 53%, 63%, 0.5) 110px,
  hsla(5, 53%, 63%, 0) 110px, hsla(5, 53%, 63%, 0) 120px, hsla(197, 62%, 11%, 0.5) 120px, hsla(197, 62%, 11%, 0.5) 140px       
  ),
repeating-linear-gradient(135deg, transparent 5px, hsla(197, 62%, 11%, 0.5) 5px, hsla(197, 62%, 11%, 0.5) 10px, 
  hsla(5, 53%, 63%, 0) 10px, hsla(5, 53%, 63%, 0) 35px, hsla(5, 53%, 63%, 0.5) 35px, hsla(5, 53%, 63%, 0.5) 40px,
  hsla(197, 62%, 11%, 0.5) 40px, hsla(197, 62%, 11%, 0.5) 50px, hsla(197, 62%, 11%, 0) 50px, hsla(197, 62%, 11%, 0) 60px,                
  hsla(5, 53%, 63%, 0.5) 60px, hsla(5, 53%, 63%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 70px, hsla(35, 91%, 65%, 0.5) 80px,
  hsla(35, 91%, 65%, 0) 80px, hsla(35, 91%, 65%, 0) 90px, hsla(5, 53%, 63%, 0.5) 90px, hsla(5, 53%, 63%, 0.5) 110px,
  hsla(5, 53%, 63%, 0) 110px, hsla(5, 53%, 63%, 0) 140px, hsla(197, 62%, 11%, 0.5) 140px, hsla(197, 62%, 11%, 0.5) 160px       
);

*/
background-blend-mode:darken;






}
header. {
font-family: 'Scope One', serif;
	font-size: 72px;
	height: 300px;
    width: 400px;
   

    
    top: 50%;
    left: 50%;
    margin-top: -200px;
    margin-left: -200px;
	z-index: 950;
	
}

.jumbotron1{



border-radius: 20px 150px 20px 150px;
-moz-border-radius: 20px 150px 20px 150px;
-webkit-border-radius: 20px 150px 20px 150px;

-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);



font-family: 'Dosis', sans-serif;
position: fixed;
    top: 50%;
    left: 50%;
	height: 665px;
    margin-top: -300px;
	width: 400px;
    margin-left: -420px;
	z-index: 900;
	/* background-color: #7189A2    ; */
	/* background: rgba(68,110,153,0.7); */
	background: rgba(255, 255, 255 ,0.3);
	106, 112, 119  
	opacity: 1;
	
	border: 1px solid black; 	


	
}

.jumbotron2{
border-radius: 100px 20px 100px 20px;

-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);

color: white;

font-family: 'Dosis', sans-serif;
position: fixed;
    top: 50%;
    left: 50%;
	height: 665px;
    margin-top: -300px;
	width: 400px;
    margin-left: 20px;
	z-index: 900;
	/*background-color: #7189A2; */
	/* background: rgba(68,110,153,0.7); */
	background: rgba(0,1,1,0.7);
	opacity: 1;
	border: 0px solid black;
	
	
}




.container {
    padding: 25px;
    position: fixed;
}

.form-login {
    
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;


    
}

h3 { 

font-size: 22px;
 border:0 solid white; 
 border-bottom-width:0px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}

.hor_line{ 
    display:block;
    border:none;
    color:white;
    height:1px;
    background:black;
    background: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 350, from(#000), to(#fff));
	margin-top: 20px;
}

.left_side{

color: white; 
font-family: 'The Girl Next Door', cursive;
font-size: 60px; 
padding-top: 10px; 
padding-bottom: 20px;
 padding-left: 20px;
 padding-right: 20px; 
 margin-top: 130px;
 margin-left: 20px;
 text-shadow: 0 0 3px grey;
}

.top_main{
font-family: 'Inconsolata', monospace;
font-size: 72px;
color: white;
 word-spacing: 40px;
 
}

hr.style18 { 
  height: 30px; 
  border-style: solid; 
  border-color: #000000;
  /* border-color: #8c8b8b; */ 
  border-width: 1px 0 0 0; 
  border-radius: 20px; 
} 
hr.style18:before { 
  display: block; 
  content: ""; 
  height: 30px; 
  margin-top: -31px; 
  border-style: solid; 
  border-color: #00000; 
  border-width: 0 0 1px 0; 
  border-radius: 20px; 
  opacity: 1;
}

.bot_text {
font-family: 'Megrim', cursive;
font-size: 18px;
  color: white;
  margin-top: 230px;
  margin-left: 800px;
  text-align: center;
}

.about{
   border-radius: 4px 4px 4px 4px;
-moz-border-radius: 4px 4px 4px 4px;
-webkit-border-radius: 4px 4px 4px 4px;
border: 0px solid #050e3d;
 padding: 10px 22px;
    text-align: center;

background: rgba(0,1,1,0.7);

}

.email {
    padding-top: 10px;
}

</style>
  
</head>

<body>
<header> 

<div class="top_main">
<center>
<H1> E &nbsp; A &nbsp; T &nbsp; O &nbsp; R &nbsp; F  &nbsp; E  &nbsp; E &nbsp;  D</H1>
</center>
</div>
</header>

<hr class="style18" width="90%"> 


<script src="jquery.js"></script>
<script src="/scripts/typing/js/typed.js"></script>
<script>
    $(function(){
        $("#typed").typed({
            stringsElement: $('#typed-strings')
        });
    });
</script>



<script>



function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        document.getElementById("userName").style.border="0px solid red";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                if(this.responseText.charAt(0)=='N'){
                	document.getElementById("userName").style.border="2px solid red";
                }
                
                else if(this.responseText.charAt(0)=='U'){
                	document.getElementById("userName").style.border="2px solid green";
                }
            }
        };
        xmlhttp.open("GET", "username_check.php?q=" + str, true);
        xmlhttp.send();
    }
}



function clearText(){
document.getElementById("txtHint2").innerHTML="";
document.getElementById("txtHint").innerHTML="";
}

function clearText2(){

document.getElementById("txtHint2").innerHTML="";

}

function clearText3(){

document.getElementById("txtHint").innerHTML="";
}


function showHint2(str) {
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if (str.length == 0) { 
        document.getElementById("txtHint2").innerHTML = "";
        document.getElementById("emailID").style.border="0px solid red";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint2").innerHTML = this.responseText;
                if(!str.valueOf().match(mailformat)){
                	document.getElementById("emailID").style.border="2px solid red";
                	document.getElementById("txtHint2").innerHTML = "Not a valid email ID";
                }
                else if(this.responseText.charAt(0)=='N'){
                	document.getElementById("emailID").style.border="2px solid red";
                	document.getElementById("txtHint2").innerHTML = "Email ID already exists!";
                }
                
                else if(this.responseText.charAt(0)=='E'){
                	document.getElementById("emailID").style.border="2px solid green";
                	document.getElementById("txtHint2").innerHTML = "";
                }
                
            }
        };
        xmlhttp.open("GET", "emailid_check.php?q=" + str, true);
        xmlhttp.send();
    }
}


function showHint3(str) {
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if (str.length == 0) { 
        document.getElementById("txtHint3").innerHTML = "";
        document.getElementById("emailus").style.border="0px solid red";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint3").innerHTML = this.responseText;
                if(!str.valueOf().match(mailformat)){
                	document.getElementById("emailus").style.border="2px solid red";
                	document.getElementById("txtHint3").innerHTML = "Not a valid email ID";
                }
                else if(this.responseText.charAt(0)=='N'){
                	document.getElementById("emailus").style.border="2px solid red";
                	document.getElementById("txtHint3").innerHTML = "Email ID already exists!";
                }
                
                else if(this.responseText.charAt(0)=='U'){
                	document.getElementById("emailus").style.border="2px solid green";
                	document.getElementById("txtHint3").innerHTML = "Email ID is valid!";
                }
                
            }
        };
        xmlhttp.open("GET", "emailus_check.php?q=" + str, true);
        xmlhttp.send();
    }
}


</script>

<div class="Left">

<div class="left_side"> <p> Get Started <br> With <br> <font color="black"> <em> Eat or Feed </em> </font> <br> Today.</p></div> 

</div>
<span id="typed"></span>







<div class="container">
<div class="jumbotron1"><div class="header"><H1 align="center"><font size="72px">Eat</font></H1></div>


<div class="form-login">
            <h3>Welcome back</h3>
			<form action="login.php" method="POST">
			
            <input type="text" style="font-size:18px" name="userName" class="form-control input-sm chat-input" placeholder="Username"/>
            </br>
            <input type="password"  style="font-size:18px" name="userPassword" class="form-control input-sm chat-input" placeholder="Password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
				<input type="submit" class="btn btn-primary btn-block " value="Login">
               <!-- <a href="/login.php" class="btn btn-primary btn-block ">Login <i class="fa fa-sign-in"></i></a> -->
            </span>
            </div>
			</form>
			<div>
			<span class="hor_line"></span>
			</div>
			<form action="register.php" method="POST" autocomplete="off">
			<h3>Register with Us</h3>
			<font size="4px"><span id="txtHint2"></span></font>
			<input type="text" style="font-size:18px" name="emailid" class="form-control input-sm chat-input" placeholder="EmailID" onfocusout="showHint2(this.value)" id="emailID" onfocus=""/>
			<br> 
			<font size="4px"><span id="txtHint"></span></font>
			<input type="text"  style="font-size:18px" name="username_reg" class="form-control input-sm chat-input" placeholder="Username" onfocus="" onfocusout="showHint(this.value);clearText();" id="userName" />
			<br>
			<input type="password"  style="font-size:18px" name="password" class="form-control input-sm chat-input" placeholder="Password" onfocus=""/>
			<br>
			<div class="wrapper">
            <span class="group-btn">     
				<input type="submit" class="btn btn-primary btn-block" value="Register" onclick="return ValidateEmail2(document.form1.emailid)">
                <!-- <a href="#" class="btn btn-primary btn-block ">Register <i class="fa fa-sign-in"></i></a> -->
            </span>
            </div>
			</form>
</div>


</div>


<div class="jumbotron2"><div class="header"><H1 align="center"><font size="72px">Feed</font></H1></div>


<div class="form-login">
            <h3>Feeders. Login Here</h3>
			<form action="#">
            <input type="text" style="font-size:18px" name="feedName" class="form-control input-sm chat-input" placeholder="Username" />
            </br>
            <input type="password" style="font-size:18px" name="feedPassword" class="form-control input-sm chat-input" placeholder="Password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
				<input type="submit" class="btn btn-primary btn-block" value="Login">
                <!-- <a href="#" class="btn btn-primary btn-block ">Login <i class="fa fa-sign-in"></i></a> -->
            </span>
            </div>
			</form>
			<div>
			<span class="hor_line"></span>
			</div>
			
			<script>
			
			function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.form1.emailus.focus();  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.emailus.focus();  
return false;  
}  
} 



function ValidateEmail2(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.form1.emailid.focus();  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.emailid.focus();  
return false;  
}  
} 

			</script>
		
			<h3>Want to Expand our community? <br> <br>Send us your email and we will get back to you<br><form autocomplete="off" action="emailus.php" method="POST" name="form1"><div class="email"><font size="4px"><span id="txtHint3"></span></font><input type="text" style="font-size:18px" name="emailus" class="form-control input-sm chat-input" placeholder="someone@example.com" id="emailus" onfocusout="showHint3(this.value)"/><br><input type="submit" class="btn btn-primary btn-block" value="Submit" onclick="return ValidateEmail(document.form1.emailus)"></div></form></h3>
			<h2 align="center"><a href="about.html" class="about">A b o u t &nbsp; U s</a></h2> 
			
			
			
			
			<!-- <input type="text" id="emailid" class="form-control input-sm chat-input" placeholder="EmailID" />
			<br>
			<input type="text" id="username_reg" class="form-control input-sm chat-input" placeholder="Username" />
			<br>
			<input type="password" id="password" class="form-control input-sm chat-input" placeholder="Password" />
			<br>
			<div class="wrapper">
            <span class="group-btn">     
                <a href="#" class="btn btn-primary btn-block ">Register <i class="fa fa-sign-in"></i></a>
            </span>
            </div> -->
		
</div>



 
</div>



<footer> <br> <div class="bot_text"> &copy; EatOrFeed 2016 <br> <a href="http://www.geoplugin.com/geolocation/" target="_new">IP Geolocation</a> <font color="white">by</font> <a href="http://www.geoplugin.com/" target="_new">geoPlugin</a></div></footer>

</body>
</html>

