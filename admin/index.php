<?php require('includes/config.php');
require('includes/essentials.php');
session_start();
if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
    header("Location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php require('includes/links.php') ?>
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
        }
    </style>
</head>
<?php
if (isset($_GET["msg"])) {
    $msg = ($_GET["msg"]);

    if ($msg == "WWs") {
        echo "<p class='text-danger text-center fs-3 fw-bold my-3'>Account has been suspended contact admin for more information</p>";
    }
    if ($msg == "WW") {
        echo "<p class='text-danger text-center fs-3 fw-bold my-3'>Incorrect email or password</p>";
    }
}
?>

<body class="bg-warning">
    <div class="login-form text-center rounded bg-white  shadow overflow-hidden">
        <form method="POST">
            <h4 class="text-center  bg-dark text-white py-3">ADMIN PANEL LOGIN</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="admin name">
                </div>
                <div class="mb-3">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="admin password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none align-items-center">LOGIN</button>
            </div>
        </form>
    </div>

    <?php
    require('includes/config.php');
    if (isset($_POST['login'])) {
        $name = $_POST['admin_name'];
        $password = $_POST['admin_pass'];
        $result = mysqli_query($con, "SELECT  *FROM `admin_login` WHERE admin_name='$name' AND admin_pass='$password'");
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result)) {
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            echo "
        <script>
        
        window.location.href='dashboard.php';
        </script>
        ";
        } else {
            header('Location:index.php?msg=WW');
        }
    }

    ?>

    <?php require('includes/scripts.php') ?>
</body>

</html>