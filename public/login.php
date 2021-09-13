<?php session_start();
require_once '../Backend/Backend.php';
$obj = new Backend;
$conn = $obj->connection();
if (isset($_POST['submit'])) {
    # code...
    $result = $obj->auth($conn, $_POST['uname'], $_POST['pass']);
    if ($result === null) {
        $error = "Incorrect Password or UserName";
    } else {
        unset($error);
        // $_SESSION['id'] = $result['idUsers'];
        $_SESSION['user'] = $result['UserName'];
        $_SESSION['Name'] = $result['Fname'] . " " . $result['Lname'];
        $_SESSION['role'] = $result['Role'];
        require '../Backend/Routing.php';
    }
    // $_SESSION['role'] = $row['Role'];

    //  $row = $obj->fetch($conn, 'Users', $_SESSION['user'], 'Username');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--===== CSS =====-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Login form style google</title>
</head>

<body>
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo"><img src="assets/img/bv.png" style="width:5rem; height: 3rem;" alt=""></a> <a href="#">
                <h2 style="color: white; margin-right: 320px; font-family: cursive;">GT COLLAGE</h2>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php#home" class="nav__link ">Home</a></li>
                    <li class="nav__item"><a href="index.php#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="index.php#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="index.php#contact" class="nav__link">Contact us</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link active-link">Login</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <div class="l-form">
        <form action="" method="post" class="form">
            <div align="center">
                <a href="#" class="nav__logo"><img src="assets/img/bv.png" style="width:5rem; height: 3rem;" alt=""> </a>
            </div>
            <h1 class="form__title" align="center">Sign In</h1>
            <?php if (isset($error)) : ?>
                <h5 class="form__title" style="color: red;"><?php echo $error; ?></h5>
            <?php endif; ?>
           
            <div class="form__div">
                <input type="text" name="uname" class="form__input" placeholder=" " style="margin-top: 7px; ">
                <label for="" class="form__label">UserName</label>
            </div>

            <div class="form__div">
                <input type="password" name="pass" class="form__input" placeholder=" " style="margin-top: 7px; ">
                <label for="" class="form__label">Password</label>
            </div>
            <button type="submit" name="submit" style="width:8rem;" class="form__button">Sign In</button> <br>
            <div align="center">
                <p style="font-size: 13px;"> Are you new for GT collage? <a href="req-register.php">Register here </a> </p>
            </div>
        </form>
    </div>
</body>

</html>