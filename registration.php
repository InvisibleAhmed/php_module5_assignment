<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and save user data to users.txt
    // Hash and salt the password
    // Implement file write operations to store user data
    $data = file_get_contents('users.txt');
    $data = json_decode($data, true);

    $newUser = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'role' => 'user',
        'contact' => $_POST['contact'],
    ];

    $data[] = $newUser;
    file_put_contents('users.txt', json_encode($data));
}
?>

<!-- Registration Form -->
<form action="registration.php" method="post">
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    Contact: <input type="text" name="contact" required><br>
    <input type="submit" value="Register">
</form>
