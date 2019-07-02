<?php
//Allow headers
header('Access-Control-Allow-Origin: *');

$servername = "kendallwebapplications.centralus.cloudapp.azure.com:3306";

$username = "jason";
$password = "ABCDabcd11!!";
$dbname = "adventureworks";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
    echo "error: Unexpected connection error. Please retry the operation.";
else {
    $result = $conn->query("SELECT * FROM contact");

    if (($result != 0) && ($result->num_rows > 0))
}
    $row = $result->fetch_assoc();

    $A = $row['A'];
    $B = $row['B'];
    $C = $row['C'];
    $D = $row['D'];

    echo $A;
    echo $B;
    echo $C;
    echo $D;
}
$conn->close();
}
?>


SELECT contactid, title, firstname, lastname, emailaddress, phone
    FROM contact
WHERE contactid <= 10
