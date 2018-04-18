<?php
 include ("connect.php");
 include ("sessions_admin.php");

 $query="select * from user";

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manage users</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,body {
  font-family: 'Tangerine';
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

.button#tada {
  float: left;
  color: white;
  padding: 5px 20px;
  width: 100%;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  background-color:#ff8a00;
  border: 2px solid #ff8a00;
}

.button#tadada {
  float: left;
  color: white;
  padding: 5px 20px;
  width: 100%;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  background-color:#00afba;
  border: 2px solid #00afba;
}

div#container {
  height: 92%;
  width: 100%;
  margin-left: 0 auto;

}


.sidebar {
  width: 250px;
  background:#171717;
  float: left;
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
  text-align: ;
  height:100%;
  background: #95a5a6;
  margin-left: 0px;
  padding: 15px;
  background-image: url("black.jpg");
}

.content p {
  color: #424242;
  font-size: 0.8em;
}

table{
  margin-left: ;
  margin-right: ;
  width: 40%;
  height: 10%;
  border-collapse: collapse;
}
th{
  padding: 10px;
  font-size: 25;
  border-bottom:3px solid #ddd;
  background-color: black;
  color: white;
}

td{

    background-color:;
    padding: 4px;
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

@media only screen and (min-width: 500px) {
  .sidebar {
    height: 98%;
    left: 0;
    display: block;
    position:absolute;
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
    background-color: #ddd;
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

</head>

<body>

<div class="navbar">
   <a href="basic.php">Home</a>
   <a href="Acircular.php">Circular</a>

   

  <div class="dropdown">
    <button class="dropbtn">Events

      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="Upcmg_evnts.php">Men</a>
      <a href="Upcmg_evnts.php">Women</a>
      <a href="Upcmg_evnts.php">Group</a>
    </div>

</div>
<a href="upload.php">Upload</a>
<a href="musers.php">Manage Users</a>
<div class="topnav-right">
    <a href="logout.php">Log Out</a>
   
  </div>

</div>

  <!--  <a class="mobile">MENU</a>


    <div id="container">

        <div class="sidebar">
            <ul id="nav">
                <h2>Menu</h2>
                <li>

                    <a href="basic.php">Home</a>
                </li>
		</li>
                <li>

                    <a href="Acircular.php">Circular</a>
                </li>

                <li>


        <a href="Upcmg_evnts.php">Upcoming Events</a>
                </li>
                <li>

        <a href="upload.php">Upload</a>
                </li>
		<li>

	</span><a class="selected"href="musers.php">Manage Users</a>
                </li>
            </ul>

        </div> -->
  <div class="content">
          <br>  <h1>Manage Users!!</h1>

           <div class="table"><br><br><br>
             <table>
               <tr>
                 <th>firstname</th>
                 <th>lastname</th>
                 <th>username</th>
                 <th>Email</th>
                 <th>manage</th>
               </tr>
               <?php $result=mysqli_query($db,$query);
                      while($row=mysqli_fetch_array($result)) {?>
               <tr>
                 <td><?php echo $row['firstname']; ?></td>
                 <td><?php echo $row['lastname']; ?></td>
                 <td><?php echo $row['username']; ?></td>
                 <td><?php echo $row['useremail'] ?></td>
                 <td><a href="delete_user.php?id=<?php echo $row['id']; ?>&username=<?php echo $row['username'];?>&pass=<?php echo $row['password'];?> " class='button'>delete</a></td>
               </tr>
             <?php } ?>
             </table>

           </div>





    </div>
    <div id="footer">
     COPYRIGHT &copy; 2018
    </div>




</body>
</html>
