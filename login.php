
<?php

session_start();

$user= stripslashes($_POST['userName']);
$pass= stripslashes($_POST['userPassword']);

if($user==""&&$pass==""){
	header("location:index.php");
}


$script_name=$_SERVER['SCRIPT_NAME'];
echo $script_name;

if ($user&&$pass)
{
$connect= mysql_connect("localhost","ithinkx1_jaiwant","jaiwantbhushaN1") or die("CANT CONNECT");
mysql_select_db("ithinkx1_users") or die("cant find db");

$query = mysql_query("SELECT * FROM users WHERE user='$user' and pass='$pass'");

$numrows = mysql_num_rows($query);
if ($numrows==1	){
	$_SESSION['sessionUser']=$user;
	header("location:login_success.php");
}
else{
	echo "Wrong Username or Password";
	header('location:fail.php');
}
}

?>




<html lang="en">
<head>
  <title>Eat or Feed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  

  
  
  
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
font-family: 'Pacifico', cursive;
font-size: 68px; 
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
font-size: 15px;
  color: white;
  margin-top: 200px;
  margin-left: 800px;
  text-align: center;
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


<div class="Left">

<div class="left_side"> <p> Get Started <br> With <br> <font color="black"> <em> Eat or Feed </em> </font> <br> Today.</p></div> 

</div>
<span id="typed"></span>










<footer>  <div class="bot_text"> &copy; EatOrFeed 2016 </div>  </footer>

</body>
</html>

