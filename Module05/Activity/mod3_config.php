<?php
// Connection
$conn = mysqli_connect($dbhost, $dbuser, $ddbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$dbhost = 'localhost';
$dbuser = 'root';
$ddbpass = 'GERvxBXcDJ7S';
$dbname = 'adventureworks';

$sql = "SELECT ContactID, FirstName, LastName, EmailAddress, FROM Contact LIMIT 10";
$result = mysqli_query($cann, $sqli);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "FirstName: " . $row["ContactID"]. "<br>";
        echo "FirstName: " . $row["FirstName"]. "<br>";
        echo "FirstName: " . $row["LastName"]. "<br>";
        echo "FirstName: " . $row["EmailAddress"]. "<br><hr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
