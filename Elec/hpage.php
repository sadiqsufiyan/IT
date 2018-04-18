<?php
  include ("connect.php");
  include ("sessions_user.php");
  $msg = "";
?>
<html>
<head>
<title>Voting system</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,body {
  font-family:Tangerine;
  height: 100%;
}

a {
  text-decoration: none;
}

div#header {
  width: 100%;
  height: 15%;
  background-color: white;
  margin: 0 auto;
}

.logo{
  float: left;

}

img{
  width: 80%;
  height: 100%;
}

.logo a {
  font-size: 2.3em;
  color: #fff;
}

.button {
  float: right;
  color: black;
  padding: 5px 10px;
  border-radius: 12px;
  margin-top: 1ex;
  margin-right: 20px;
  font-size: 22px;
  cursor: pointer;
  background-color: cornflowerblue;
  border: 2px black;
box-shadow: 0 8px 16px 0
rgba(0,0,0,0.2), 0 6px 20px 0
rgba(0,0,0,0.19);
}

div#container {
  height: 92%;
  width: 100%;
  margin-left: 3px;

}


.sidebar {
  width: 250px;
  background:#171717;
  float: left;
}

.displaybox {
   margin: auto;
   width: 250px;
   background-color: #fff;
   border: 2px solid #000000;
  padding: 30px;
   font: 1.5em normal verdana, helvetica, arial, sans-serif;
     text-align:left;     
}

ul#nav h2 {
   color: white;
   text-align: center;
   padding: 10px;
   font-size: 1em;
   width: 100%;
   border-bottom: 1px solid #444;
}

ul#nav li {
	list-style: none;
  height:10px;

}
ul#nav li span{
  position:relative;
}
ul#nav li span img {
	float: left;
  display: block;
  margin-left: 1px;
  margin-top: 2px;
}
ul#nav li a {
	color: #ccc;
	display: block;
	padding: 10px;
	font-size: 0.8em;
	width: 100%;
	float: left;
	border-bottom: 1px solid #444;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease;
	-ms-transition: all 0.2s ease;
	-o-transition: all 0.2s ease;
	transition: all 0.2s ease;
}

ul#nav li a:hover {
  background: #030303;
  color: #fff;
}

ul#nav li a.selected{
  background: #030303;
  color:#fff;
}


.content {

  width:auto;
  text-align: center;
  height: 100%;
  background: #95a5a6;
  margin-left: 0px;
  padding: 5px;
  background-image: url("c2.jpg");
}

.content p {
  color: #424242;
  font-size: 0.8em;
}

table{
  border: 1px solid black;
  width:100%;
  height: auto;
  padding: 2px;

}
th{
  border: 1px solid black;
  padding: 15px;
  width: 25%
}

td{
    padding: 10px;
}

@media only screen and (max-width: 480px) {

  a.mobile {
    display: block;
    color: #fff;
    background: #000;
    text-align: center;
    padding: 7px;
    cursor: pointer;
  }

  a.mobile:active{
    background: #474747;
  }


  .sidebar {
    width: 100%;
    display: none;
    height: auto;
  }

  .content {
    margin-left: 0;
  }


}

@media only screen and (min-width: 480px) {
  .sidebar {
    height: 92%;
    left: 0;
    display: block;
    position: absolute;
  }
  a.mobile {
    display: none;
  }
}

#footer{
  clear: both;
  padding: 10px;
  background-color: #131313;
  text-align: right;
  color: white;
}


.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: orange;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}




.topnav-right {
  float: right;
background-color: orange;
  color: white;
}



</style>


<script type="text/javascript">
var ajaxRequest=new XMLHttpRequest();
function getcandidatelist()  
{
   if (!ajaxRequest)  {
         document.getElementById("showcandidate").innerHTML = "Request error!ajax object could not be created";
         return;      } 
   ajaxRequest.onreadystatechange = ajaxResponse;
   ajaxRequest.open("GET","vote.php");
   ajaxRequest.send();
}
function ajaxResponse()  //This gets called when the readyState changes.
{
 if (ajaxRequest.readyState != 4)  //  check to see if we're done
    {  return;  }
 else {
   if (ajaxRequest.status == 200) //  check to see if successful
        {
                 document.getElementById("showcandidate").innerHTML =
                               ajaxRequest.responseText; }
   else {
     alert("Request failed: " + ajaxRequest.statusText);
        }
   }
}
function verification()
	{
 document.getElementById("check").innerHTML=document.getElementById("myform").elements['Nominee_1'].value
}
function getVotinglist()
{
if(!ajaxobject)
  {
       document.getElementById("vote").innerHTML="Ajax object not created";
   return;
	  }
	  	  ajaxobject.open("GET","vote.php");
	  	  ajaxobject.send();
	  	  ajaxobject.onreadystatechange=getResponse; 	
}
	function getResponse(){
		if(ajaxobject.readyState == 4 && ajaxobject.status == 200)
		{
			document.getElementById('vote').innerHTML=ajaxobject.responseText;
		}
	}
function changecolor()
	{
		count++;
		var col="red";
		if(count%2==0)
			col="blue";
		else
			col="red";
		document.getElementById('showcandidate').style.backgroundColor=col;
	}
		
</script>
</head>
<body>

<div id="header">
        <div class="logo">
          <img src="pre.png">
        </div>

     

    </div>
<br>
<div class="navbar">
   <a href="hpage.php">Home</a>

<div class="topnav-right">
    <a href="logout.php">Log Out</a>
   
  </div>

</div>


        <div class="content">

    
	<h1>Elections</h1>

	<h2>Elect the most capable person.</h2>
<br>
<br>


	<form >
   	   <input type="button" value="Get candidate list"  onclick="getcandidatelist();"/>
		<br>
	</form>
<br>

	<div id="showcandidate" class="displaybox">
	</div>
	<br>
	<input type="submit" value="Submit" onclick="verification();"/>
	<br>
	<br>
	<div id="check" class="displaybox">
</div>
    </form>
</body>
</html>







