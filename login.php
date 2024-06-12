<?php
session_start();
include("Common/db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Validate credentials (for simplicity, storing hashed password directly)
    $sql = "SELECT * FROM `admins` WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: upload_images.php');
            exit();
        } else {
            $error = "Invalid Password.";
        }
    } else {
        $error = "No user found with that username.";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Malcolm Photography</title>
    <link rel="stylesheet" href="Styles/login.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="login">
        <form action="login.php" method="post">
            <div>
                <h1>Login</h1>
            </div>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" autofocus required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
            <div>
                <?php
                if (isset($error)) {
                    echo '<p style="color:red;">' . $error . '</p>';
                }
                ?>
            </div>
        </form>
        <!-- <?php
                // $malcolm_password = "malcolmlismore456";
                // $hashed_password = password_hash($malcolm_password, PASSWORD_DEFAULT);
                // echo "Password is: " . $hashed_password . "";
                ?>  -->


    </section>


</body>

</html>