<?php
include'connection.php';

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style-homepage/style.css">
	<title>Scrabble Club</title>
	
</head>
<body>

<div class="topnav">
	<a href="index.html">MEMBER PROFILES</a>
	<a href="leaderboard.php">LEADERBOARD</a>
	<a href="scrabble.php">MEMBER ACCOUNTS</a>
</div>


<div id="title"><img src="images/scrabble club title.png"> </div>


<h1>MEMBER ACCOUNTS</h1>



<link rel="stylesheet" type="text/css" href="style.css">
<form method="post" action="">
<fieldset>
<legend>
ENTER DETAILS IF YOU WISH TO MAKE AN ACCOUNT
</legend>
<label for="Name">Name:</label>
<input type="text"name="txtname"/><br/>
<label for="email">Email:</label>
<input type="text"name="txtemail"/><br/>
<label for="number">Contact Number:</label>
<input type="text"name="txtnum"/><br/>
<label for="number">Average Score:</label>
<input type="text"name="txtscore"/><br/>
<label for="number">Played:</label>
<input type="text"name="txtplay"/><br/>
<input type="submit" value="Submit" name="Submit" />
<input type="reset" value="Clear" />
</fieldset>
</form>
</body>
</html>
<?php
if(isset($_POST['Submit'])){

    $DB_name=$_POST['txtname'];
    $DB_email=$_POST['txtemail'];
    $DB_num=$_POST['txtnum'];
    $DB_score=$_POST['txtscore'];
    $DB_play=$_POST['txtplay'];


    $query="INSERT INTO member_profiles 
    (FirstName,Email,Contact_Number,Average_score,Played)
     VALUES
    ('$DB_name','$DB_email','$DB_num','$DB_score','$DB_play')";




    if(mysqli_query($connection, $query));
}
        
$query1= "SELECT * FROM member_profiles";
if($result=mysqli_query($connection, $query1)){
    if(mysqli_num_rows($result) > 0){
    echo"<table>";
    echo"<tr>";
     echo "<th>Member ID</th>";
     echo "<th>Name</th>";
     echo "<th>Email</th>";
     echo "<th>Contact Number</th>";
     echo "<th>Average Score</th>";
     echo "<th>Played</th>";
    echo "</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
     echo "<td>" . $row['Member ID'] . "</td>";
     echo "<td>" . $row['FirstName'] . "</td>";
     echo "<td>" . $row['Email'] . "</td>";
     echo "<td>" . $row['Contact_Number'] . "</td>";
     echo "<td>" . $row['Average_score'] . "</td>";
     echo "<td>" . $row['Played'] . "</td>";
    echo "</tr>";
        }
        echo "</table>";
  }
}
   ?>
