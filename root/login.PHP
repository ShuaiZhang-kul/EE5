<html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shuai's main page</title>
  </head>
  <style type="text/css">
 
  </style>
  <body>
 
<?php
$servername = "localhost";
$username = $_POST["account"];
$password = $_POST["password"];

 
if(!empty($username)||!empty($password))
{
// create connection to the database
//echo "$servername"," $username"," $password";
$conn = new mysqli($servername, $username, $password,"db_web");

// detect connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connection Successfully";

//write sql query and run it
$sql = "SELECT * FROM stuff_table";
$result = $conn->query($sql);
 
echo "<br>";
echo "there are ";
echo  $result->num_rows  ;
echo " accounts";
echo "<br>";


if (!empty($result) && $result->num_rows > 0) {
    // printout the data 
    "<br>";
    while($row = $result->fetch_assoc()) {
        echo  "name: " . $row["username"]. " - password: " . $row["password"].  "<br>";
    }
} 
else {
    echo "0 result";
}
$conn->close();

}
else
{
    echo "Please fill in the form";
    die();
}
?>

</div>
</body>
</html>
