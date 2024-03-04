<?php
define('DB_SERVER', 'sql6.freemysqlhosting.net');
define('DB_USERNAME', 'sql6687216');
define('DB_PASSWORD', 'yTWWhenKNe');
define('DB_DATABASE', 'sql6687216');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
