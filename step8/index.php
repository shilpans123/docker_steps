<?php
header("content-type: text");

$host = "db"; // the host name "db" from our docker-compose.yml file
$username = "root"; //we use the root user;
$pw = "my!!root!!!pw"; // that the password we set as env variable

$conn = new mysqli($host, $username, $pw);

if($conn->connect_errno > 0) {
    echo $db->connect_error;
} else {
    echo "DB CONNECTION SUCCESSFUL \n\n";
}

