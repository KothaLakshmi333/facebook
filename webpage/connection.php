<?php
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
