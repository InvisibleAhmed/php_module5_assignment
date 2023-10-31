<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Authenticate user, set session, and redirect
    $data = file_get_contents('users.txt');
    $data = json_decode($data, true);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Authenticate user, set session, and redirect
        $data = file_get_contents('users.txt');
        $data = json_decode($data, true);
    
        foreach ($data as $user) {
            if ($_POST['email'] === $user['email'] && password_verify($_POST['password'], $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: index.php");
                exit;
            }
        }
    
        echo "Invalid login credentials.";
    }
    echo "Invalid login credentials.";
}
?>

<!-- Login Form -->
<form action="login.php" method="post">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>


