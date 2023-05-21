<?php
// start sesiune
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

// Include config file
require_once "../../common/config.php";

$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // username gol
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // field parola gol
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // daca nu exista erori pentru username/parola
    if (empty($username_err) && empty($password_err)) {

        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($db, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_store_result($stmt);

                // exista user in baza de date
                if (mysqli_stmt_num_rows($stmt) == 1) {

                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        //verifica daca parola introdusa si cea din db corespund
                        if (password_verify($password, $hashed_password)) {

                            session_start();

                            // salveaza datele userului in sesiune
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect dupa login
                            header("location: welcome.php");
                        } else {
                            // daca parola este gresita afiseaza eroare
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    // userul nu a fost gasit in baza de date
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="icon" href="../../common/images/favicon.png" />
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <div class="welcome-message">
        <h1>Welcome!</h1>
        <h2>Please enter your credentials!</h2>
    </div>

    <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php
        if (!empty($login_err)) {
            echo '<div style="font-weight: 600; color:red; font-size: 1.3rem;">' . $login_err . '</div>';
        }
        ?>
        <ul>
            <li>
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </li>
            <li>
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </li>
        </ul>
        <div class="form-group">
            <input type="submit" class="login-button" value="Login">
        </div>
        <p>Don't have an account? <a href="../register-page/register.php">Register here</a></p>
    </form>
    <div class="footer"></div>
</body>

</html>