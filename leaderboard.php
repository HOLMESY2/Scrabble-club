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


<h1>LEADERBOARD</h1>
</body>
</html>

<link rel="stylesheet" type="text/css" href="style.css">
<?php
$query3= "SELECT * From member_profiles WHERE Played>=10 ORDER BY Average_score DESC   LIMIT 10     ";

if($result = mysqli_query($connection, $query3)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
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
        }}}

       
        
        ?>
        <p>HIGHEST SCORE = Andrew holmes, 511 points, against Robert Wayne</p>
        <p>LOWEST SCORE =