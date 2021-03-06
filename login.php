<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="288993206745-4oemtud7678lal9ccujlc80g6j3bvgif.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Customer Data Viewer</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center login-container">
        <div class="border shadow">
            <form class="login-form text-center" action="include_files/userlogin.php" method="POST">
                <h6 class="text-uppercase">Welcome to Staff Login</h6>
                <h3 class="mb-5 font-weight-light text-uppercase">Staff Login</h3>
                <h6 class="mb-5 font-weight-light"><?php if (isset($_GET['msg'])) echo ($_GET['msg']) ?></h6>
                <div class="form-group">
                    <input type="text" class="form-control  form-control-lg" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required>
                </div>
                <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember Password</label>
                    </div>
                    <a href="forgetpassword.php">Forgot Password?</a>
                </div>
                <button type="submit" class="btn mt-5 btn-lg btn-custom btn-block text-uppercase" name="submit">Log in</button>
            </form>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>