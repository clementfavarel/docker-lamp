<?php
$user = 'root';
$pass = 'your_password';
$dbh = new PDO('mysql:host=mariadb;dbname=test', $user, $pass);

// Execute SQL query - Returns a PDOStatement object
$result = $dbh->query("SELECT * FROM test");


// Result set can be accessed with a foreach loop iterating over the PDOStatement object
foreach ($result as $row) {
    echo "$row[id] - $row[test] <br />";
}
?>
