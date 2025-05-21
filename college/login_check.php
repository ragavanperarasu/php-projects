<?php
session_start();
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Hardcoded for example (replace with database check if needed)
if ($username === "admin" && $password === "12345") {
  $_SESSION['admin'] = true;
  header("Location: student_list.php");
  exit();
} else {
  echo "<script>alert('Invalid login credentials'); window.location.href='login.php';</script>";
}
?>
