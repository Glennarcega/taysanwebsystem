<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tinindag Festivals</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   
    <script type="text/javascript">
        history.pushState(null, document.title, location.href);
        history.back();
        history.forward();
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
</head>
<body>

    <nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Taysan: Where Potential Blossoms, and Tourism Thrives</a>
            </div>
            <ul class="nav navbar-nav pull-right">
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <br />
        <br />
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4>User Login</h4>
                </div>
                <div class="panel-body">
                    <form method="post" action="login_user.php">
                        <?php include('user_query/query_login.php'); ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" size="50" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" size="50" required="required">
                        </div>
                        <br />
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary" name="login_user">Login</button>
                        </div>
                    </form>
                    <p>Not yet a member? <a href="register_user.php">Sign up</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</body>
</html>
