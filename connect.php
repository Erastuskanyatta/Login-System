<?php
$name = $_POST['name'];
$pass = $_POST['pass'];

$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = 'loginSystem';

$conn = new mysqli("localhost", "root", '',"loginSystem");