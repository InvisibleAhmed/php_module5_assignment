<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user']['username'] . "!<br>";
    echo "Your role: " . $_SESSION['user']['role'] . "<br>";
    echo "Contact: " . $_SESSION['user']['contact'] . "<br>";
    echo '<a href="logout.php">Logout</a>';
} else {
    echo "Welcome, Guest!<br>";
    echo '<a href="login.php">Login</a> | <a href="registration.php">Register</a>';
}
?>
