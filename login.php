
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <form action="login_action.php" method="post">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <h2 class="text-center">Login Form</h2>
                    <form>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="email" id="username" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-6">
                    <p class="text-center">Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </form>
</body>

</html>