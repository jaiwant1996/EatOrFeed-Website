<html>
<head>
<script>
function showHint(str) {



if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "test_again.php?q=" + str, true);
        xmlhttp.send();
    }




}
    

</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="#"> 

First name: <input type="text" name="bro">


<input type="button" value="GO!" onclick="showHint(bro.value)">

</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>