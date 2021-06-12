<?php
$message = $_REQUEST['error'];
if ($message == 'email') {
    $error = 'Sai dinh dang Email';
} elseif ($message == 'username') {
    $error = 'Sai dinh dang ten';
} elseif ($message == 'password') {
    $error = 'Nhap lai mat khau';
} elseif ($message == 'exist') {
    $error = 'Email da ton tai';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Register</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="../../public/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form {
            margin-left: 40%;
        }

        input {
            margin-top: 5px;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../../public/css/login.css" rel="stylesheet">
</head>
<body class="text-center">

<form class="form-register" method="post" action="../../index.php?page=register">
    <img class="mb-4" src="../../public/assets/brand/icon_coffee.jpg" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $error; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    <label for="input-user" class="sr-only">User name</label>
    <input type="text" name="user-name" class="form-control" placeholder="User name" required autofocus>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>

    <label for="input-user" class="sr-only">Phone</label>
    <input type="number" name="phone" class="form-control" placeholder="Phone number" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>

    <label for="inputPassword" class="sr-only">Repeat password</label>
    <input type="password" name="repeat-password" class="form-control" placeholder="Repeat password" required>

<!--    <a href="register.php?page=register" style="color: #ffffff;text-decoration: none; padding: 10px">-->
        <button class="btn btn-lg btn-outline-primary btn-block" type="submit"
                name="submit-register" style="margin-top: 10px">Register</button>
<!--    </a>-->
    <p class="mt-5 mb-3 text-muted">&copy; Since 2021</p>
</form>


</body>
</html>
